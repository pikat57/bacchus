<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CoursBundle\Entity\Assemblage;
use CoursBundle\Form\CepageType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of AssemblageController
 *
 * @author jean-yves
 */
class AssemblageController extends Controller {
    public function addAction(Request $request) {
        $assemblage = new Assemblage();
        
        $formBuilder = $this->get('form.factory')->createBuilder('form', $assemblage);
        $formBuilder
                ->add('vin',
                      'entity',
                       array ('class'=> 'CoursBundle\Entity\Vin',
                      'property' => 'nom',
                       'label' => 'vin',
                       'multiple' => false,
                       'required' => true))
                ->add('cepage',
                      'entity',
                       array ('class'=> 'CoursBundle\Entity\Cepage',
                      'property' => 'nom',
                       'label' => 'cepage',
                       'multiple' => false,
                       'required' => true))
                ->add('pourcentage', 'integer')
                ->add('save', 'submit');
        
        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {


            $assemblageCourant = $this->getDoctrine()->getManager();

            $assemblageCourant->persist($assemblage);

            $assemblageCourant->flush();

            return $this->redirectToRoute("assemblage");
        }
        return $this->render("CoursBundle:Assemblage:addAssemblage.html.twig", array('form' => $form->createView()));
    }

    public function affichageAction() {

        $manager = $this->getDoctrine()->getManager();

        $assemblages = $manager->getRepository("CoursBundle:Assemblage")->findall();
        return $this->render("CoursBundle:Assemblage:assemblage.html.twig", array('assemblages' => $assemblages));
    }

    public function detailAction($id) {



        $manager = $this->getDoctrine()->getManager();

        $assemblage = $manager->getRepository('CoursBundle:Assemblage')->find($id);



        return $this->render("CoursBundle:Assemblage:detail.html.twig", array('assemblage' => $assemblage));
    }
}
