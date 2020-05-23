<?php
require_once("Model.php");
class ModelCommand extends Model
{
    private $idCommand; //Command.idCommand
    private $idUser; //Command.idUser
    private $CommandDate; //Command.Date_of_command
    private $LivredDate; //Command.Date_of_shipment
    private $status; //Command.status
    private $state; //Command.state
    private $payMethode; //Command.Methode_de_payment


    protected static $table = 'command';
    protected static $primary = 'idCommand';
    public function __construct($idCommand = NULL, $idUser = NULL, $CommandDate = NULL, $LivredDate = NULL, $status = NULL, $state = NULL, $payMethode = NULL)
    {
        $this->idCommand = $idCommand;
        $this->idUser = $idUser;
        $this->CommandDate = $CommandDate;
        $this->LivredDate = $LivredDate;
        $this->status = $status;
        $this->state = $state;
        $this->payMethode = $payMethode;
    }

    /**
     * Get the value of idCommand
     */
    public function getIdCommand()
    {
        return $this->idCommand;
    }

    /**
     * Get the value of idUser
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Get the value of CommandDate
     */
    public function getCommandDate()
    {
        return $this->CommandDate;
    }

    /**
     * Get the value of LivredDate
     */
    public function getLivredDate()
    {
        return $this->LivredDate;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get the value of state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Get the value of payMethode
     */
    public function getPayMethode()
    {
        return $this->payMethode;
    }
}
