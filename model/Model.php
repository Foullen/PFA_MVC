<?php
require_once("{$ROOT}{$DS}config{$DS}Conf.php");
class Model
{
    private static $pdo;
    /*créer une seule instance de la classe PDO*/
    public static function Init()
    {
        $host = Conf::getHostname();
        $dbname = Conf::getDatabase();
        $login = Conf::getLogin();
        $pass = Conf::getPassword();
        try {
            self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $login, $pass);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    //Création d’un objet de la classe PDO
    public function getAll()
    {
        $SQL = "SELECT * FROM " . static::$table;
        $rep = self::$pdo->query($SQL);
        $rep->setFetchMode(
            PDO::FETCH_CLASS,
            'Model' . ucfirst(static::$table)
        );
        return $rep->fetchAll();
    }
    public function select($cle_primaire)
    {
        $sql = "SELECT * from " . static::$table . " WHERE " . static::$primary . "=:cle_primaire";
        $req_prep = self::$pdo->prepare($sql);
        $req_prep->bindParam(":cle_primaire", $cle_primaire);
        $req_prep->execute();
        $req_prep->setFetchMode(
            PDO::FETCH_CLASS,
            'Model' . ucfirst(static::$table)
        );
        if ($req_prep->rowCount() == 0) {
            return null;
        } else {
            $rslt = $req_prep->fetch();
            return $rslt;
        }
    }
    public function delete($cle_primaire)
    {
        $sql = "DELETE FROM " . static::$table . " WHERE " . static::$primary . "=:cle_primaire";
        $req_prep = self::$pdo->prepare($sql);
        $req_prep->bindParam(":cle_primaire", $cle_primaire);
        $req_prep->execute();
    }
    public function update($tab, $cle_primaire)
    {
    }
    public function insert($tab)
    {
        // $place_holders = implode(',', array_fill(0, count($tab), '?'));
        // $array1 = array_keys($tab);
        // $array2 = array_values($tab);
        // print_r($array1);
        // print_r($array2);
        // $str = implode(',', array_fill(0, count($array2), ' '));
        // $sql = "INSERT INTO " . static::$table . "VALUES ($place_holders) ";
        // echo $sql;
        // echo $str;

        $values = "(";
        $columns = " (";

        foreach ($tab as $key => $value) {
            $columns .= $key . ",";
            $values .= ":" . $key . ",";
        }
        $columns .= ")";
        $columns =  str_replace(",)", ")", $columns);
        $values .= ")";
        $values = str_replace(",)", ")", $values);

        $sql = "INSERT INTO " . static::$table . $columns . "VALUES $values;";
        echo $sql;

        $req_prep = self::$pdo->prepare($sql);
        $req_prep->execute($tab);
    }
}
Model::Init();
