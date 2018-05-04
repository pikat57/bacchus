<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoursBundle\Entity;

/**
 * Description of Cepage
 *
 * @author dumollard
 */
class Cepage {
   
    /**
     *
     * @var integer identifiant unique du capage
     */
    private $id;
    
    
    /**
     *
     * @var  string nom du cepage
     */
    private $nom;
    
    /**
     *
     * @var string couleur du raisin
     */
    private $couleur;
    
    
    
    /**
     * 
     * @return string origine region d'origine
     * 
     */
    
    private $origine;
     
     
     /**
      * 
      * @return string saveur principael saveur
      */
     
     
     private $saveur;
    
    
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getCouleur() {
        return $this->couleur;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setCouleur($couleur) {
        $this->couleur = $couleur;
    }
    function getOrigine() {
        return $this->origine;
    }

    function getSaveur() {
        return $this->saveur;
    }

    function setOrigine($origine) {
        $this->origine = $origine;
    }

    function setSaveur($saveur) {
        $this->saveur = $saveur;
    }



    
            
}
