<?php
require_once("Model.php");
class ModelCommand extends Model
{
    private $idCommand; //Command.idCommand
    private $idUser; //Command.idUser
    private $commandDate; //Command.Date_of_
    private $LivredDate; //Command.Date_of_
    private $status; //Command.status
    private $state; //Command.state
    private $payMethode; //Command.Methode_de_payment


    protected static $table = 'command';
    protected static $primary = 'idCommand';
    public function __construct($idCommand = NULL, $idUser = NULL, $commandDate = NULL, $LivredDate = NULL, $status = NULL, $state = NULL, $payMethode = NULL)
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
     * Get the value of idUser
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Get the value of commandDate
     */
    public function getCommandDate()
    {
        return $this->commandDate;
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
