<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \CoursBundle\Entity\Plat;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of PlatManager
 *
 * @author jean-yves
 */
class PlatController extends Controller {

    public function addAction(Request $request) {
        $plat = new Plat();
        $formBuilder = $this->get('form.factory')->createBuilder('form', $plat);

        $formBuilder
                ->add('nom', 'text')
                ->add('type', 'text')
                ->add('description', 'textarea')
                ->add('vins',
                      'entity',
                       array ('class'=> 'CoursBundle\Entity\Vin',
                      'property' => 'nom',
                       'label' =>  'Accompagnement',
                       'multiple' => true,
                       'required' => false))
                ->add('save', 'submit');
                
        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {



            $platCourant = $this->getDoctrine()->getManager();

            $platCourant->persist($plat);
        
            $platCourant->flush();

            return $this->redirectToRoute("plat");
        }
        return $this->render("CoursBundle:Plat:addPlat.html.twig", array('form' => $form->createView()));
    }

    public function affichageAction() {

        $manager = $this->getDoctrine()->getManager();

        $plats = $manager->getRepository("CoursBundle:Plat")->findAll();

        return $this->render("CoursBundle:Plat:plat.html.twig", array('plats' => $plats));
    }

    public function detailAction($id) {



        $manager = $this->getDoctrine()->getManager();

        $plat = $manager->getRepository('CoursBundle:Plat')->find($id);



        return $this->render("CoursBundle:Plat:detail.html.twig", array('plat' => $plat));
    }
    
        public function suppressionAction($id){
        
        $manager = $this->getDoctrine()->getManager();

        $plat= $manager->getRepository('CoursBundle:Plat')->find($id);
        
        
        $manager->remove($plat);

        $manager->flush();

        return $this->redirectToRoute('plat');
        
    }

}

