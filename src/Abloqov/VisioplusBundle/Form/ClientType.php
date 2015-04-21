<?php

namespace Abloqov\VisioplusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('label' => 'Nom'))
            ->add('prenom', 'text', array('label' => 'Prenoms'))
            ->add('sexe', 'choice', array('choices' => array(''=>'-- Selectionnez le sexe --', 'M'=>'Masculin', 'F'=>'Féminin')))
            ->add('cel', 'text', array('label' => 'Cellulaire'))
            ->add('tel', 'text', array('label' => 'Téléphone'))
            ->add('assurance')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Abloqov\VisioplusBundle\Entity\Client'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'abloqov_visioplusbundle_client';
    }
}
