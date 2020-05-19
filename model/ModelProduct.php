<?php
require_once("Model.php");
class ModelProduct extends Model
{
    private $idProduct; // Product.idProduct
    private $imgSRC; // Product.image_source_de_produit
    private $Title; // Product.titre
    private $Price; // Product.prix
    private $Description; // Product.Description
    private $Provider; // Product.Fournisseur
    private $ManufDate; // Product.date_of_manufacture
    private $ExpDate; // Product.date_of_shipping
    private $Stock; // Product.Stock
    private $idTheme; // Product.idTheme

    protected static $table = 'product';
    protected static $primary = 'idProduct';
    public function __construct($idProduct = NULL, $imgSRC = NULL, $Title = NULL, $Price = NULL, $Description = NULL, $Provider = NULL, $ManufDate = NULL, $ExpDate = NULL, $Stock = NULL, $idTheme  = NULL)
    {
        $this->idProduct = $idProduct;
        $this->imgSRC = $imgSRC;
        $this->Title = $Title;
        $this->Price = $Price;
        $this->Description = $Description;
        $this->Provider = $Provider;
        $this->ManufDate = $ManufDate;
        $this->ExpDate = $ExpDate;
        $this->Stock = $Stock;
        $this->idTheme = $idTheme;
    }

    /**
     * Get the value of idProduct
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Get the value of imgSRC	
     */
    public function getImgSRC()
    {
        return $this->imgSRC;
    }

    /**
     * Get the value of Title
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Get the value of Price
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Get the value of Description
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Get the value of Provider
     */
    public function getProvider()
    {
        return $this->Provider;
    }

    /**
     * Get the value of ManufDate
     */
    public function getManufDate()
    {
        return $this->ManufDate;
    }

    /**
     * Get the value of ExpDate
     */
    public function getExpDate()
    {
        return $this->ExpDate;
    }

    /**
     * Get the value of Stock
     */
    public function getStock()
    {
        return $this->Stock;
    }

    /**
     * Get the value of idTheme 
     */
    public function getIdTheme()
    {
        return $this->idTheme;
    }
}
