<?php

namespace Abloqov\VisioplusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MontureType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference', 'text', array('label' => 'Reference'))
            ->add('genre', 'choice', array('choices' => array(''=>'-- Selectionnez le genre --', 'ENFANT'=>'Enfant', 'FEMME'=>'Femme', 'HOMME'=>'Homme', 'MIXTE'=>'Mixte', 'SOLAIRE'=>'Solaire')))
            ->add('prix_vente', 'integer', array('label' => 'Prix de vente'))
            ->add('stock', 'integer', array('label' => 'Quantité en stock'))
            //->add('datecreation_at')
            //->add('datemodification_at')
            ->add('marque')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Abloqov\VisioplusBundle\Entity\Monture'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'abloqov_visioplusbundle_monture';
    }
}
