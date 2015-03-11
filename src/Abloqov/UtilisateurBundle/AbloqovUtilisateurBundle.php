<?php

namespace Abloqov\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AbloqovUtilisateurBundle extends Bundle
{
    public function getParent() {
       return 'FOSUserBundle';
    }
}
