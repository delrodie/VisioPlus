<?php

namespace Abloqov\VisioplusBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Gestion des marques de montures.
 *
 * @author Delrodie AMOIKON
 */

/**
 * @ORM\Entity(repositoryClass="Abloqov\VisioplusBundle\Repository\MarqueRepository")
 */
class Marque {
    
    /**
     * @ORM\Generatedvalue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=25, unique=true, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Length(
     *          min = "3",
     *          max = "25",
     *          minMessage = "La marque doit faire au moins {{ limit }} caractères",
     *          maxMessage = "La marque ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $libelle;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Marque
     */
    public function setLibelle($libelle)
    {
        $this->libelle = strtoupper($libelle);

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    
    public function __toString() {
        return $this->libelle;
    }
}
