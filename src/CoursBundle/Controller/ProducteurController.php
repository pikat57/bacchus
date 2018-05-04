<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \CoursBundle\Entity\Producteur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

/**
 * Description of ProducteurManager
 *
 * @author jean-yves
 */
class ProducteurController extends Controller {

    public function addAction(Request $request) {
        $producteur = new Producteur();
        $formBuilder = $this->get('form.factory')->createBuilder('form', $producteur);

        $formBuilder
                ->add('nom', 'text')
                ->add('adresse', 'text')
                ->add('ville', 'text')
                ->add('pays', 'text')
                ->add('responsable', 'text')
                ->add('telephone', 'text')  
                ->add('mail', EmailType::class)
                ->add('siteweb', 'text')
                ->add('save', 'submit');
        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {



            $producteurCourant = $this->getDoctrine()->getManager();

            $producteurCourant->persist($producteur);

            $producteurCourant->flush();

            return $this->redirectToRoute("producteur");
        }
        return $this->render("CoursBundle:Producteur:addProducteur.html.twig", array('form' => $form->createView()));
    }

    public function affichageAction() {

        $manager = $this->getDoctrine()->getManager();

        $producteurs = $manager->getRepository("CoursBundle:Producteur")->findAll();

        return $this->render("CoursBundle:Producteur:producteur.html.twig", array('producteurs' => $producteurs));
    }

    public function detailAction($id) {



        $manager = $this->getDoctrine()->getManager();

        $producteur = $manager->getRepository('CoursBundle:Producteur')->find($id);



        return $this->render("CoursBundle:Producteur:detail.html.twig", array('producteur' => $producteur));
    }
    
        
    public function suppressionAction($id){
        
        $manager = $this->getDoctrine()->getManager();

        $producteur= $manager->getRepository('CoursBundle:Producteur')->find($id);
        
        
        $manager->remove($producteur);

        $manager->flush();

        return $this->redirectToRoute('producteur');
        
    }
    
       public function modificationAction($id) {
        $manager = $this->getDoctrine()->getManager();

        $producteur= $manager->getRepository('CoursBundle:Producteur')->find($id);
        
        
        $formBuilder = $this->get('form.factory')->createBuilder('form', $producteur);

        $formBuilder
                ->add('nom', 'text')
                ->add('couleur', 'text')
                ->add('origine', 'text')
                ->add('saveur', 'text')
                ->add('save', 'submit');
        $form = $formBuilder->getForm();


        if ($form->isValid()) {



            $producteurCourant = $this->getDoctrine()->getManager();

            $producteurCourant->persist($producteur);

            $producteurCourant->flush();

            return $this->redirectToRoute("producteur");
        }
        return $this->render("CoursBundle:Producteur:addProducteur.html.twig", array('form' => $form->createView()));
    }
    
    

}
