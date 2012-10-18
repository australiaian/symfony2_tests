<?php

namespace Edry\Bundle\AssetManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AssetTypeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('category')
            ->add('model')
            ->add('manufacturer')
            ->add('cost')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Edry\Bundle\AssetManagerBundle\Entity\AssetType'
        ));
    }

    public function getName()
    {
        return 'edry_bundle_assetmanagerbundle_assettypetype';
    }
}
