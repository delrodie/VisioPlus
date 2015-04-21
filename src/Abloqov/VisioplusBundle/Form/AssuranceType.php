<?php

namespace Abloqov\VisioplusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AssuranceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', 'text', array('label' => 'Assurance'))
            ->add('contact', 'text', array('label' => 'Contact'))
            ->add('typeassurance')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Abloqov\VisioplusBundle\Entity\Assurance'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'abloqov_visioplusbundle_assurance';
    }
}
