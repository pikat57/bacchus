<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoursBundle\Entity;

/**
 * Description of Plat
 *
 * @author dumollard
 */
class Plat {

    
    /**
     *
     * @var integer identifiant unique du plat
     */
    private $id;
    
    /**
     *
     * @var string nom du plat
     */
    private $nom;
    
    /**
     *
     * @var string type de plat entree hors d oeuvre  dessert ....
     */
    private $type;
    
    
    /**
     *
     * @var string descrioption du plat
     */
    private $description;
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getType() {
        return $this->type;
    }

    function getDescription() {
        return $this->description;
    }

    function setId($platId) {
        $this->platId = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setDescription($description) {
        $this->description = $description;
    }


}
