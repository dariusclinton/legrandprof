<?php

namespace LGP\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LGPUserBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}
