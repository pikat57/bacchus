<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoursBundle\Entity;

/**
 * Description of Terroir
 *
 * @author dumollard
 */
class Terroir {
    //put your code here
    
    private $id;
    private $nom;
    private $region;
    private $sol;
    private $climat;
    private $pays;
    private $ville;
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getRegion() {
        return $this->region;
    }

    function getSol() {
        return $this->sol;
    }

    function getClimat() {
        return $this->climat;
    }

    function getPays() {
        return $this->pays;
    }

    function getVille() {
        return $this->ville;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    function setSol($sol) {
        $this->sol = $sol;
    }

    function setClimat($climat) {
        $this->climat = $climat;
    }

    function setPays($pays) {
        $this->pays = $pays;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

        
}
