<?php
//src/AppBundle/Form/RegistrationType.php

namespace CoursBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('prenom')->add('anneeNaissance')->add('sexe');
    }
    
    
    public function getName()
    {
        return 'app_user_registration';
    }
    
    
    public function getParent()
    {
        return 'fos_user_registration';
    }


}
