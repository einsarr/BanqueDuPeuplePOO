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
        $nombre_args = func_num_args();
        $lArg = func_get_args();
        switch($nombre_args)
        {
            case 0:
                $this->constructeurSansArguments();
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
    public function constructeurAvec6Arguments($id,$nom,$prenom,$telephone,$email,$adresse)
    {
        $this->id        = $id;
        $this->nom       = $nom;
        $this->prenom    = $prenom;
        $this->telephone = $telephone;
        $this->email     = $email;
        $this->adresse   = $adresse;
    }
    public function constructeurAvec5Arguments($nom,$prenom,$telephone,$email,$adresse)
    {
        $this->nom       = $nom;
        $this->prenom    = $prenom;
        $this->telephone = $telephone;
        $this->email     = $email;
        $this->adresse   = $adresse;
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