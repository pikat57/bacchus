<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \CoursBundle\Entity\Cepage;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of CepageManager
 *
 * @author jean-yves
 */
class CepageController extends Controller {

    public function addAction(Request $request) {
        $cepage = new Cepage();
        
        $formBuilder = $this->get('form.factory')->createBuilder('form', $cepage);
        $formBuilder
                ->add('nom', 'text')
                ->add('couleur', 'text')
                ->add('origine', 'text')
                ->add('saveur', 'text')
                ->add('save', 'submit');
        
        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {



            $cepageCourant = $this->getDoctrine()->getManager();

            $cepageCourant->persist($cepage);

            $cepageCourant->flush();

            return $this->redirectToRoute("cepage");
        }
        return $this->render("CoursBundle:Cepage:addCepage.html.twig", array('form' => $form->createView()));
    }

    public function affichageAction() {

        $manager = $this->getDoctrine()->getManager();

        $cepages = $manager->getRepository("CoursBundle:Cepage")->findAll();

        return $this->render("CoursBundle:Cepage:cepage.html.twig", array('cepages' => $cepages));
    }

    public function detailAction($id) {



        $manager = $this->getDoctrine()->getManager();

        $cepage = $manager->getRepository('CoursBundle:Cepage')->find($id);



        return $this->render("CoursBundle:Cepage:detail.html.twig", array('cepage' => $cepage));
    }
    
        
    public function suppressionAction($id){
        
        $manager = $this->getDoctrine()->getManager();

        $cepage= $manager->getRepository('CoursBundle:Cepage')->find($id);
        
        
        $manager->remove($cepage);

        $manager->flush();

        return $this->redirectToRoute('cepage');
        
    }
    
       public function modificationAction($id) {
        $manager = $this->getDoctrine()->getManager();

        $cepage= $manager->getRepository('CoursBundle:Cepage')->find($id);
        
        
        $formBuilder = $this->get('form.factory')->createBuilder('form', $cepage);

        $formBuilder
                ->add('nom', 'text')
                ->add('couleur', 'text')
                ->add('origine', 'text')
                ->add('saveur', 'text')
                ->add('save', 'submit');
        $form = $formBuilder->getForm();


        if ($form->isValid()) {



            $cepageCourant = $this->getDoctrine()->getManager();

            $cepageCourant->persist($cepage);

            $cepageCourant->flush();

            return $this->redirectToRoute("cepage");
        }
        return $this->render("CoursBundle:Cepage:addCepage.html.twig", array('form' => $form->createView()));
    }
    
    

}
