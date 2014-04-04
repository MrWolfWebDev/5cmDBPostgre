<?php

namespace Wolf\ScmCityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class comuniAttivatiType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm( FormBuilderInterface $builder, array $options )
    {
        $builder
                ->add( 'nome', null, array( 'label' => 'Città', 'required' => true ) )
                ->add( 'frontImage', 'file', array( 'label' => 'Immagine della città', 'required' => true ) )
                ->add( 'frontImageBlurred', 'file', array( 'label' => 'Immagine sfocata della città', 'required' => true ) )
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions( OptionsResolverInterface $resolver )
    {
        $resolver->setDefaults( array(
            'data_class' => 'Wolf\ScmCityBundle\Entity\comuniAttivati'
        ) );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'wolf_scmcitybundle_comuniattivati';
    }

}
