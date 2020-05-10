<?php
require_once("Model.php");
class ModelTheme extends Model
{
    private $idTheme;
    private $name;

    protected static $table = 'Themes';
    protected static $primary = 'idTheme';
    public function __construct($idTheme = NULL, $name = NULL)
    {
    }

    /**
     * Get the value of idTheme
     */
    public function getIdTheme()
    {
        return $this->idTheme;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }
}
