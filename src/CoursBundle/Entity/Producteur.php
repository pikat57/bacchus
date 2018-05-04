<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoursBundle\Entity;

/**
 * Description of Producteur
 *
 * @author dumollard
 */
class Producteur {
    
    
    /**
     *
     * @var integer identifiant unique du producteur
     */
    private $id;
    
    /**
     *
     * @var string nom du producteur
     */
    private $nom;
    
    /**
     *
     * @var integer adresse du producteur
     *     
     */
    
    private $adresse;
    
    /**
     *
     * @var string ville de production
     */
    private $ville;
    
    
    /**
     *
     * @var string pays de production
     */
    private $pays;
    
    /**
     *
     * @var string nom du responsable
     */
    private $responsable;
    
    
    /**
     *
     * @var integer téléphone du producteur
     */
    private $telephone;
    
    /**
     *
     * @var string adresse mail du producteur 
     */
    private $mail;
    
    
    /**
     *
     * @var string site web  du producteur
     */
    private $siteWeb;
    
    


    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getVille() {
        return $this->ville;
    }

    function getPays() {
        return $this->pays;
    }

    function getResponsable() {
        return $this->responsable;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getMail() {
        return $this->mail;
    }

    function getSiteWeb() {
        return $this->siteWeb;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setPays($pays) {
        $this->pays = $pays;
    }

    function setResponsable($responsable) {
        $this->responsable = $responsable;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setSiteWeb($siteWeb) {
        $this->siteWeb = $siteWeb;
    }


}
