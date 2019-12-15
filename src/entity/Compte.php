<?php
class Compte
{
    private $id;
    private $numero;
    private $solde;
    private $dateCreation;
    private $etat;
    private $idClasse;

    public function __construct()
    {
        
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
    public function getIdClasse()
    {
        return $this->idClasse;
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
    public function setIdClasse($idClasse)
    {
        $this->idClasse = $idClasse;
    }
}