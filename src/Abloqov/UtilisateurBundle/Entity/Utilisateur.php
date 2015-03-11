<?php

namespace Abloqov\UtilisateurBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Utilisateur
 *
 * @author Delrodie AMOIKON
 */

/**
 * @ORM\Entity
 */
class Utilisateur extends BaseUser {
    
    /**
     * @ORM\Id
     * @ORM\column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;
    
    public function __construct() {
        parent::__construct();
    }
}
