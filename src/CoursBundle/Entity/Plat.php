<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoursBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
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
    
    
    private $vins;
    
    
    function __construct() {

        $this->vins = new ArrayCollection() ;
    }
    
    function getVins() {
        return $this->vins;
    }

    function setVins($vins) {
        $this->vins = $vins;
    }

    function addVin(Vin $vin)    
    {
        $this->vins[] = $vin;
    }
    
    public function removeVin(Vin $vin) // removeCategorie sans « s » !
  {
    // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
    $this->categories->removeElement($vin);
  }
    
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

    function setId($id) {
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
