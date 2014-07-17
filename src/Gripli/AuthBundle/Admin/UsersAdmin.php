<?php namespace Gripli\AuthBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
 
class UsersAdmin extends Admin
{
// Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', 'text', array('label' => 'Username'))
            ->add('usernameCanonical', 'text', array('label' => 'UsernameCanonical'))
            ->add('email', 'text', array('label' => 'Email'))
            ->add('emailCanonical', 'text', array('label' => 'EmailCanonical'))
            ->add('lastname', 'text', array('label' => 'Last name'))
            ->add('firstname', 'text', array('label' => 'First name'))
           

        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('email')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('username', 'text', array('label' => 'Username'))
            ->add('usernameCanonical', 'text', array('label' => 'UsernameCanonical'))
            ->add('email', 'text', array('label' => 'email'))
            ->add('emailCanonical', 'text', array('label' => 'EmailCanonical'))
            ->add('lastname', 'text', array('label' => 'Last name'))
            ->add('firstname', 'text', array('label' => 'First name'))
          
        ;
    }
}
