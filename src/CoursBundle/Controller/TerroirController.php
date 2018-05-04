<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \CoursBundle\Entity\Terroir;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

/**
 * Description of TerroirManager
 *
 * @author jean-yves
 */
class TerroirController extends Controller {

    public function addAction(Request $request) {
        $terroir = new Terroir();
        $formBuilder = $this->get('form.factory')->createBuilder('form', $terroir);

        $formBuilder
                ->add('nom', 'text')
                ->add('region', 'text')
                ->add('sol', 'text')
                ->add('climat', 'text')
                ->add('pays', 'text')
                ->add('ville', 'text')  
                ->add('save', 'submit');
        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {



            $terroirCourant = $this->getDoctrine()->getManager();

            $terroirCourant->persist($terroir);

            $terroirCourant->flush();

            return $this->redirectToRoute("terroir");
        }
        return $this->render("CoursBundle:Terroir:addTerroir.html.twig", array('form' => $form->createView()));
    }

    public function affichageAction() {

        $manager = $this->getDoctrine()->getManager();

        $terroirs = $manager->getRepository("CoursBundle:Terroir")->findAll();

        return $this->render("CoursBundle:Terroir:terroir.html.twig", array('terroirs' => $terroirs));
    }

    public function detailAction($id) {



        $manager = $this->getDoctrine()->getManager();

        $terroir = $manager->getRepository('CoursBundle:Terroir')->find($id);



        return $this->render("CoursBundle:Terroir:detail.html.twig", array('terroir' => $terroir));
    }
    
        
    public function suppressionAction($id){
        
        $manager = $this->getDoctrine()->getManager();

        $terroir= $manager->getRepository('CoursBundle:Terroir')->find($id);
        
        
        $manager->remove($terroir);

        $manager->flush();

        return $this->redirectToRoute('terroir');
        
    }
    
       public function modificationAction($id) {
        $manager = $this->getDoctrine()->getManager();

        $terroir= $manager->getRepository('CoursBundle:Terroir')->find($id);
        
        
        $formBuilder = $this->get('form.factory')->createBuilder('form', $terroir);

        $formBuilder
                ->add('nom', 'text')
                ->add('couleur', 'text')
                ->add('origine', 'text')
                ->add('saveur', 'text')
                ->add('save', 'submit');
        $form = $formBuilder->getForm();


        if ($form->isValid()) {



            $terroirCourant = $this->getDoctrine()->getManager();

            $terroirCourant->persist($terroir);

            $terroirCourant->flush();

            return $this->redirectToRoute("terroir");
        }
        return $this->render("CoursBundle:Terroir:addTerroir.html.twig", array('form' => $form->createView()));
    }
    
    

}
