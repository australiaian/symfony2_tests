<?php

namespace Edry\Bundle\AssetManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TechGroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('van_rego')
            ->add('location')
            ->add('driver')
            ->add('timestamp')
            ->add('make')
            ->add('car_year')
            ->add('odo')
            ->add('vin')
            ->add('condition_description')
            ->add('fuel_card')
            ->add('tag_time')
            ->add('radio_code')
            ->add('imarda_tag')
            ->add('van_tracker')
            ->add('tow_bar')
            ->add('spare_key')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Edry\Bundle\AssetManagerBundle\Entity\TechGroup'
        ));
    }

    public function getName()
    {
        return 'edry_bundle_assetmanagerbundle_techgrouptype';
    }
}
