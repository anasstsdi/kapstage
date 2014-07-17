<?php

namespace Gripli\AuthBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GripliAuthBundle extends Bundle
{
         public function getParent()
    {
        return 'FOSUserBundle';
    }
}
