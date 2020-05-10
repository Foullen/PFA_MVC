<?php
require_once("Model.php");
class ModelCity extends Model
{
    private $idCity;
    private $name;

    protected static $table = 'city';
    protected static $primary = 'idCity';
    public function __construct($idCity = NULL, $name = NULL)
    {
    }

    /**
     * Get the value of idCity
     */
    public function getIdCity()
    {
        return $this->idCity;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }
}
