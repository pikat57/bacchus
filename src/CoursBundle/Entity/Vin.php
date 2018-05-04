<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoursBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;


/**
 * Description of Vin
 *
 * @author dumollard
 */
class Vin {
    
    
    /**
     *
     * @var integer identifiant unique du vin
     */
    private $id;
    
    /**
     *
     * @var string nom du vin
     */
    private $nom;
    

    
    /**
     *
     * @var integer année de production
     */
    private $millesime;
    
    /**
     *
     * @var integer identifiant du terroir
     */
    private $terroirId;
    
    /**
     *
     * @var integer identifiant du producteur
     */
    private $producteurId;
    
    /**
     *
     * @var integer identifiant de l'accompagnement
     */
    private $accompagnementId;
    
    /**
     *
     * @var integer nombre d'année de conservation
     */
    private $nbAnneeConservation;
    
    /**
     *
     * @var string type de vendange normale tardive ....
     */
    private $typeVendange;
    
    /**
     *
     * @var string type de vin ou methode de vinification... 
     */
    private $type;
    
    /**
     *
     * @var integer prix moyen constatée
     *
     *
     */
    private $prixMoyen;
    
    private $assemblages ;
    
    function __construct() {
        echo 'coucou';
        $this->assemblages = new ArrayCollection() ;
    }
            
   
    
    function getAssemblages() {
        
        return $this->assemblages;
    }
    
    

    function setAssemblages($assemblages) {
        $this->assemblages = $assemblages;
    }
    
    

        
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getMillesime() {
        return $this->millesime;
    }

    function getTerroirId() {
        return $this->terroirId;
    }

    function getProducteurId() {
        return $this->producteurId;
    }

    function getAccompagnementId() {
        return $this->accompagnementId;
    }

    function getNbAnneeConservation() {
        return $this->nbAnneeConservation;
    }

    function getTypeVendange() {
        return $this->typeVendange;
    }

    function getType() {
        return $this->type;
    }

    function getPrixMoyen() {
        return $this->prixMoyen;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setMillesime($millesime) {
        $this->millesime = $millesime;
    }

    function setTerroirId($terroirId) {
        $this->terroirId = $terroirId;
    }

    function setProducteurId($producteurId) {
        $this->producteurId = $producteurId;
    }

    function setAccompagnementId($accompagnementId) {
        $this->accompagnementId = $accompagnementId;
    }

    function setNbAnneeConservation($nbAnneeConservation) {
        $this->nbAnneeConservation = $nbAnneeConservation;
    }

    function setTypeVendange($typeVendange) {
        $this->typeVendange = $typeVendange;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setPrixMoyen($prixMoyen) {
        $this->prixMoyen = $prixMoyen;
    }


}
