<?php
require_once("Model.php");
class ModelDetailCommand extends Model
{
    private $idCommand;
    private $idProduct;
    private $Quantity;
    private $Remise;

    protected static $table = 'detailcommand';
    protected static $primary1 = 'idCommand';
    protected static $primary2 = 'idProduct';

    public function __construct($idCommand = NULL, $idProduct = NULL, $Quantity = NULL, $Remise = NULL)
    {
    }

    /**
     * Get the value of idCommand
     */
    public function getIdCommand()
    {
        return $this->idCommand;
    }

    /**
     * Get the value of idProduct
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Get the value of Quantity
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * Get the value of Remise
     */
    public function getRemise()
    {
        return $this->Remise;
    }
}
