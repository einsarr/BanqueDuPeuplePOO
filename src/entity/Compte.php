<?php
class Compte
{
    private $id;
    private $numero;
    private $solde;
    private $dateCreation;
    private $etat;
    private $client;

    public function __construct()
    {
        $nombre_args = func_num_args();
        $lArg = func_get_args();
        switch($nombre_args)
        {
            case 0:
                $this->constructeurSansArguments();
                break;
            case 4:
                $this->constructeurAvec4Arguments($lArg[0],$lArg[1],$lArg[2],$lArg[3]);
                break;
            case 5:
                $this->constructeurAvec5Arguments($lArg[0],$lArg[1],$lArg[2],$lArg[3],$lArg[4]);
                break;
            case 6:
                $this->constructeurAvec6Arguments($lArg[0],$lArg[1],$lArg[2],$lArg[3],$lArg[4],$lArg[5]);
                break;
        }
    }
    public function constructeurSansArguments()
    {
       
    }
    public function constructeurAvec6Arguments($id,$numero,$solde,$dateCreation,$etat,$client)
    {
        $this->id           = $id;
        $this->numero       = $numero;
        $this->solde        = $solde;
        $this->dateCreation = $dateCreation;
        $this->etat         = $etat;
        $this->client       = $client;
    }
    public function constructeurAvec5Arguments($numero,$solde,$dateCreation,$etat,$client)
    {
        $this->numero       = $numero;
        $this->solde        = $solde;
        $this->dateCreation = $dateCreation;
        $this->etat         = $etat;
        $this->client       = $client;
    }
    public function constructeurAvec4Arguments($numero,$solde,$etat,$client)
    {
        $this->numero       = $numero;
        $this->solde        = $solde;
        $this->etat         = $etat;
        $this->client       = $client;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function getSolde()
    {
        return $this->solde;
    }
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
    public function getEtat()
    {
        return $this->etat;
    }
    public function getClient()
    {
        return $this->client;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }
    public function setClient($client)
    {
        $this->client = $client;
    }
}