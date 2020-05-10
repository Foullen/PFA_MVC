<?php
require_once("Model.php");
class ModelUser extends Model
{
    private $idUser; // User.ID
    private $nom; //User.firstName
    private $prenom; //User.lastName
    private $phone; //User.phone
    private $birthDate; //User.birthDate
    private $addresse; // User.addresse
    private $zip; //User.Zip Code
    private $email; //User.Email
    private $password; //User.password
    private $gender; //User.gender
    private $role; //User.role
    private $uStatus; //User.status 
    private $cityId; //User.idCity
    private $inscritDate; //User.date_of_registration

    protected static $table = 'user';
    protected static $primary = 'idUser';
    public function __construct($idUser = NULL, $nom = NULL, $prenom = NULL, $phone = NULL, $birthDate = NULL, $addresse = NULL, $zip = NULL, $email = NULL, $password = NULL, $gender = NULL, $role = NULL, $uStatus = NULL, $cityId = NULL, $inscritDate = NULL)
    {
    }

    /**
     * Get the value of idUser
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Get the value of birthDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Get the value of addresse
     */
    public function getAddresse()
    {
        return $this->addresse;
    }

    /**
     * Get the value of zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Get the value of uStatus
     */
    public function getUStatus()
    {
        return $this->uStatus;
    }

    /**
     * Get the value of cityId
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Get the value of inscritDate
     */
    public function getInscritDate()
    {
        return $this->inscritDate;
    }
}
