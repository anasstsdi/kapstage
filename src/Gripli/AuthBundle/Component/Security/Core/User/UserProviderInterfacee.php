<?php



namespace Gripli\AuthBundle\Component\Security\Core\User;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

interface UserProviderInterfacee extends UserProviderInterface
{
     public function loadUserByEmail($email);
}
