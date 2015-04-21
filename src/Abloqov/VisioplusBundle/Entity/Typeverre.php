<?php


namespace Abloqov\VisioplusBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Typeverre
 *
 * @author Delrodie AMOIKON
 */

/**
 * @ORM\Entity
 */
class Typeverre {
    
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
     *          max = "75",
     *          minMessage = "Le type de verre doit faire au moins {{ limit }} caractères",
     *          maxMessage = "Le type de verre ne peut pas être plus long que {{ limit }} caractères"
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
     * @return Typeverre
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
