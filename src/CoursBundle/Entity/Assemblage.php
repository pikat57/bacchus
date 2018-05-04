<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoursBundle\Entity;

/**
 * Description of Assemblage
 *
 * @author jean-yves
 */
class Assemblage {

    private $id;
    private $vin;
    private $cepage;
    private $pourcentage;

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

        
    
    
    function getVin() {
        return $this->vin;
    }

    function getCepage() {
        return $this->cepage;
    }

    function getPourcentage() {
        return $this->pourcentage;
    }

   function setVin($vin) {
        $this->vin = $vin;
    }

    function setCepage($cepage) {
        $this->cepage = $cepage;
    }

    function setPourcentage($pourcentage) {
        $this->pourcentage = $pourcentage;
    }

}
