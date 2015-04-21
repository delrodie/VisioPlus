<?php


namespace Abloqov\VisioplusBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Typeassurance
 *
 * @author Delrodie AMOIKON
 */

/**
 * @ORM\Entity
 */
class Typeassurance {
    
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=75, unique=true, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Length(
     *          min = "3",
     *          max = "25",
     *          minMessage = "Le type d'assurance doit faire au moins {{ limit }} caractères",
     *          maxMessage = "Le type d'assurance ne peut pas être plus long que {{ limit }} caractères"
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
     * @return Typeassurance
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
