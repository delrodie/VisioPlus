<?php


namespace Abloqov\VisioplusBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Gestion des montures
 *
 * @author Delrodie AMOIKON
 */

/**
 * @ORM\Entity(repositoryClass="Abloqov\VisioplusBundle\Repository\MontureRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Monture {
    
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
     *          min = "5",
     *          max = "75", 
     *          minMessage = "La reference doit avoir au moins {{limit}} caractères",
     *          maxMessage = "La reference ne peut pas être plus long que {{limit}} caractères"
     * )
     */
    private $reference;
    
    /**
     * @ORM\Column(type="string", length=8, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Choice(choices={"ENFANT", "FEMME", "HOMME", "MIXTE", "SOLAIRE"}, message="Choisissez un genre valide.")
     */
    private $genre;
    
    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $prix_vente;
    
    /**
     * @ORM\Column(type="integer")
     * @Assert\Notblank()
     */
    private $stock;
    
    /**
     * @ORM\ManyToone(targetEntity="Marque")
     * @Assert\NotBlank()
     */
    private $marque;

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
     * Set reference
     *
     * @param string $reference
     * @return Monture
     */
    public function setReference($reference)
    {
        $this->reference = strtoupper($reference) ;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Monture
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set prix_vente
     *
     * @param integer $prixVente
     * @return Monture
     */
    public function setPrixVente($prixVente)
    {
        $this->prix_vente = $prixVente;

        return $this;
    }

    /**
     * Get prix_vente
     *
     * @return integer 
     */
    public function getPrixVente()
    {
        return $this->prix_vente;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Monture
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set marque
     *
     * @param \Abloqov\VisioplusBundle\Entity\Marque $marque
     * @return Monture
     */
    public function setMarque(\Abloqov\VisioplusBundle\Entity\Marque $marque = null)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \Abloqov\VisioplusBundle\Entity\Marque 
     */
    public function getMarque()
    {
        return $this->marque;
    }
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $datecreation_at;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $datemodification_at;

    /**
     * Set datecreation_at
     *
     * @param \DateTime $datecreationAt
     * @return Monture
     */
    public function setDatecreationAt($datecreationAt)
    {
        $this->datecreation_at = $datecreationAt;

        return $this;
    }

    /**
     * Get datecreation_at
     *
     * @return \DateTime 
     */
    public function getDatecreationAt()
    {
        return $this->datecreation_at;
    }

    /**
     * Set datemodification_at
     *
     * @param \DateTime $datemodificationAt
     * @return Monture
     */
    public function setDatemodificationAt($datemodificationAt)
    {
        $this->datemodification_at = $datemodificationAt;

        return $this;
    }

    /**
     * Get datemodification_at
     *
     * @return \DateTime 
     */
    public function getDatemodificationAt()
    {
        return $this->datemodification_at;
    }
    
    /**
     * @ORM\PrePersist
     */
    public function setDatecreationAtValue()
    {
        $this->datecreation_at = new \DateTime();
    }
    
    /**
     * @ORM\PrePersist
     */
    public function setDatemodificationAtValue()
    {
        $this->datemodification_at = new \DateTime();
    }
}
