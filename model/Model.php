<?php
require_once("{$ROOT}{$DS}config{$DS}Conf.php");
class Model
{
    protected static $pdo;
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
        $sql = "INSERT INTO " . static::$table . " VALUES(";
        foreach ($tab as $cle => $valeur) {
            $sql .= " :" . $cle . ",";
        }
        $sql = rtrim($sql, ",");
        $sql .= ");";
        $req_prep = Model::$pdo->prepare($sql);
        $values = array();
        foreach ($tab as $cle => $valeur)
            $values[":" . $cle] = $valeur;
        $req_prep->execute($values);
    }
}
Model::Init();
