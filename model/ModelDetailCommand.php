<?php
require_once("Model.php");
class ModelDetailCommand extends Model
{


    protected static $table = 'detailcommand';
    protected static $primary1 = 'idCommand';
    protected static $primary2 = 'idProduct';

    public function __construct()
    {
    }
}
