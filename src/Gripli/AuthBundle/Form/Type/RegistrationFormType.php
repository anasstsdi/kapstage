<?php

namespace Gripli\AuthBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrationFormType
 *
 * @author ahaifi
 */
class RegistrationFormType extends BaseType {
      public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('lastname');
        $builder->add('firstname');
    }

    public function getName()
    {
        return 'gripli_user_registration';
    }
}
