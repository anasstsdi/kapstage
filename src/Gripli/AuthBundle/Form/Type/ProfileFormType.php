<?php

namespace Gripli\AuthBundle\Form\Type;


use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;

class ProfileFormType extends BaseType
{
    public function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildUserForm($builder, $options);
        // On ajoute nos champs :
        $builder->add('lastname');
        $builder->add('firstname');
    }

    public function getName()
    {
        return 'fos_user_profile';
    }
}