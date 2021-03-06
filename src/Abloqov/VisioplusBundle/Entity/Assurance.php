<?php


namespace Abloqov\VisioplusBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of Assurance
 *
 * @author Delrodie AMOIKON
 */

/**
 * @ORM\Entity
 */
class Assurance {
    /**
     * @ORM\GeneratedValue
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
     *          minMessage = "L'assurance doit faire au moins {{ limit }} caractères",
     *          maxMessage = "L'assurance ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $libelle;
    
    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     * @Assert\length(
     *          min = "8",
     *          max = "25",
     *          minMessage = "L'assurance doit faire au moins {{ limit }} caractères",
     *          maxMessage = "L'assurance ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $contact;
    
    /**
     * @ORM\ManyToone(targetEntity="Typeassurance")
     * @Assert\NotBlank()
     */
    private $typeassurance;

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
     * @return Assurance
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

    /**
     * Set contact
     *
     * @param string $contact
     * @return Assurance
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set typeassurance
     *
     * @param \Abloqov\VisioplusBundle\Entity\Typeassurance $typeassurance
     * @return Assurance
     */
    public function setTypeassurance(\Abloqov\VisioplusBundle\Entity\Typeassurance $typeassurance = null)
    {
        $this->typeassurance = $typeassurance;

        return $this;
    }

    /**
     * Get typeassurance
     *
     * @return \Abloqov\VisioplusBundle\Entity\Typeassurance 
     */
    public function getTypeassurance()
    {
        return $this->typeassurance;
    }
    
    
    public function __toString() {
        return $this->libelle;
    }
}
