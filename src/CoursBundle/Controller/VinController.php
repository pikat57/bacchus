<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \CoursBundle\Entity\Vin;
use Symfony\Component\HttpFoundation\Request;




/**
 * Description of VinManager
 *
 * @author jean-yves
 */
class VinController extends Controller {

    public function addAction(Request $request) {
        $vin = new Vin();
        $formBuilder = $this->get('form.factory')->createBuilder('form', $vin);

        $formBuilder
                ->add('nom', 'text')
                ->add('millesime', 'text')
                ->add('terroirId',
                      'entity',
                       array ('class'=> 'CoursBundle\Entity\Terroir',
                      'property' => 'nom',
                       'label' => 'Terroir',
                       'multiple' => false,
                       'required' => false))
                ->add('producteurId',
                      'entity',
                       array ('class'=> 'CoursBundle\Entity\Producteur',
                      'property' => 'nom',
                       'label' => 'producteur',
                       'multiple' => false,
                       'required' => false))
                ->add('plats',
                      'entity',
                       array ('class'=> 'CoursBundle\Entity\Plat',
                      'property' => 'nom',
                       'label' => 'plat',
                       'multiple' => true,
                       'required' => false))
                ->add('nbAnneeConservation', 'integer')
                ->add('TypeVendange', 'choice',array(
        'choices'  => array(
        'Normal' => 'normal',
        'Tardive' => 'tardive',
        'precoce' => 'précoce')))
                ->add('type', 'text')
                ->add('prixMoyen', 'money')            
                ->add('save', 'submit');
        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {



            $vinCourant = $this->getDoctrine()->getManager();

            $vinCourant->persist($vin);

            $vinCourant->flush();

            return $this->redirectToRoute("vin");
        }
        return $this->render("CoursBundle:Vin:addVin.html.twig", array('form' => $form->createView()));
    }

    public function affichageAction() {

        $manager = $this->getDoctrine()->getManager();

        $vins = $manager->getRepository("CoursBundle:Vin")->findAll();

        return $this->render("CoursBundle:Vin:vin.html.twig", array('vins' => $vins));
    }

    public function detailAction($id) {



        $manager = $this->getDoctrine()->getManager();

        

        
        
       $vin = $manager->getRepository('CoursBundle:Vin')->find($id);
       
     
       
       
       
        $plats = $vin->getPlats();
        $assemblages = $vin->getAssemblages();


        return $this->render("CoursBundle:Vin:detail.html.twig", array('vin'=>$vin,'assemblages'=>$assemblages,'plats'=>$plats));
    }
    
        
    public function suppressionAction($id){
        
        $manager = $this->getDoctrine()->getManager();

        $vin= $manager->getRepository('CoursBundle:Vin')->find($id);
        
        
        $manager->remove($vin);

        $manager->flush();

        return $this->redirectToRoute('vin');
        
    }
    
       public function modificationAction($id) {
        $manager = $this->getDoctrine()->getManager();

        $vin= $manager->getRepository('CoursBundle:Vin')->find($id);
        
        
        $formBuilder = $this->get('form.factory')->createBuilder('form', $vin);

        $formBuilder
                ->add('nom', 'text')
                ->add('couleur', 'text')
                ->add('origine', 'text')
                ->add('saveur', 'text')
                ->add('save', 'submit');
        $form = $formBuilder->getForm();


        if ($form->isValid()) {



            $vinCourant = $this->getDoctrine()->getManager();

            $vinCourant->persist($vin);

            $vinCourant->flush();

            return $this->redirectToRoute("vin");
        }
        return $this->render("CoursBundle:Vin:addVin.html.twig", array('form' => $form->createView()));
    }
    
    

}
