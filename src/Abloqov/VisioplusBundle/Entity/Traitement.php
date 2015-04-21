<?php


namespace Abloqov\VisioplusBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Traitement
 *
 * @author Delrodie AMOIKON
 */

/**
 * @ORM\Entity
 */
class Traitement {
    
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=30, unique=true, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Length(
     *          min = "3",
     *          max = "30",
     *          minMessage = "Le traitement doit faire au moins {{ limit }} caractères",
     *          maxMessage = "Le traitement ne peut pas être plus long que {{ limit }} caractères"
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
     * @return Traitement
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
}
