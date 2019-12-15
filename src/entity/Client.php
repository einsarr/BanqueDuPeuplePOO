<?php
class Client
{
    private $id;
    private $nom;
    private $prenom;
    private $telephone;
    private $email;
    private $adresse;

    public function __construct()
    {
        
    }
    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
}