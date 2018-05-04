<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoursBundle\Entity;


use Doctrine\ORM\Mapping as ORM;


/**
 * Description of Utilisateur
 *
 * @author dumollard
 */
class Utilisateur extends \FOS\UserBundle\Model\User {
    //put your code here
    

    protected $nom;
    protected $prenom;
    protected $anneeNaissance;
     protected $sexe;

    //protected $password;
    
    
    public function __construct() {
        parent::__construct();
    }
    
    
    function getNom() {
        return $this->nom;
    }
    
    function getPrenom() {
        return $this->prenom;
    }

    function getAnneeNaissance() {
        return $this->anneeNaissance;
    }

    function getSexe() {
        return $this->sexe;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setAnneeNaissance($anneeNaissance) {
        $this->anneeNaissance = $anneeNaissance;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    
    function setNom($nom) {
        $this->nom = $nom;
    }



}
