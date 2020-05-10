<?php
require_once("Model.php");
class ModelProduct extends Model
{
    private $idProduct; // Product.idProduct
    private $imgSRC; // Product.image_source_de_produit
    private $title; // Product.titre
    private $price; // Product.prix
    private $description; // Product.description
    private $provider; // Product.Fournisseur
    private $ManuDate; // Product.date_of_manufacture
    private $ExpDate; // Product.date_of_shipping
    private $stock; // Product.stock
    private $themeId; // Product.idTheme

    protected static $table = 'product';
    protected static $primary = 'idProduct';
    public function __construct($idProduct = NULL, $imgSRC = NULL, $title = NULL, $price = NULL, $description = NULL, $provider = NULL, $ManuDate = NULL, $ExpDate = NULL, $stock = NULL, $themeId = NULL)
    {
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
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of provider
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Get the value of ManuDate
     */
    public function getManuDate()
    {
        return $this->ManuDate;
    }

    /**
     * Get the value of ExpDate
     */
    public function getExpDate()
    {
        return $this->ExpDate;
    }

    /**
     * Get the value of stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Get the value of themeId
     */
    public function getThemeId()
    {
        return $this->themeId;
    }
}
