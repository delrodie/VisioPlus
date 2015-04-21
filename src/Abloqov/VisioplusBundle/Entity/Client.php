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
class Client {
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=25, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Length(
     *          min = "3",
     *          max = "25",
     *          minMessage = "Le nom doit faire au moins {{ limit }} caractères",
     *          maxMessage = "Le nom ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $nom;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     * @Assert\length(
     *          min = "3",
     *          max = "100",
     *          minMessage = "Le prenom doit faire au moins {{ limit }} caractères",
     *          maxMessage = "Le prenom ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $prenom;
    
    /**
     * @ORM\Column(type="string", length=1, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Choice(choices={"M", "F"}, message="Choisissez un sexe valide.")
     */
    private $sexe;
    
    /**
     * @ORM\Column(type="string", length=11, nullable=false)
     * @Assert\NotBlank()
     * @Assert\length(
     *          min = "8",
     *          max = "11",
     *          minMessage = "Le cellulaire doit faire au moins {{ limit }} caractères",
     *          maxMessage = "Le cellulaire ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $cel;
    
    /**
     * @ORM\Column(type="string", length=11, nullable=true)
     * @Assert\length(
     *          min = "8",
     *          max = "11",
     *          minMessage = "Le téléphone doit faire au moins {{ limit }} caractères",
     *          maxMessage = "Le téléphone ne peut pas être plus long que {{ limit }} caractères"
     * )
     */
    private $tel;
    
    /**
     * @ORM\ManyToone(targetEntity="Assurance")
     * @Assert\NotBlank()
     */
    private $assurance;

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
     * Set nom
     *
     * @param string $nom
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = strtoupper($nom);

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = strtoupper($prenom);

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Client
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set cel
     *
     * @param string $cel
     * @return Client
     */
    public function setCel($cel)
    {
        $this->cel = strtoupper($cel);

        return $this;
    }

    /**
     * Get cel
     *
     * @return string 
     */
    public function getCel()
    {
        return $this->cel;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Client
     */
    public function setTel($tel)
    {
        $this->tel = strtoupper($tel);

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set assurance
     *
     * @param \Abloqov\VisioplusBundle\Entity\Assurance $assurance
     * @return Client
     */
    public function setAssurance(\Abloqov\VisioplusBundle\Entity\Assurance $assurance = null)
    {
        $this->assurance = $assurance;

        return $this;
    }

    /**
     * Get assurance
     *
     * @return \Abloqov\VisioplusBundle\Entity\Assurance 
     */
    public function getAssurance()
    {
        return $this->assurance;
    }
}
