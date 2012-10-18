<?php

namespace Edry\Bundle\AssetManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TechAssetsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('assettype_id')
            ->add('techgroup_id')
            ->add('account_owner')
            ->add('serial_number')
            ->add('edry_tag')
            ->add('manufacture_data')
            ->add('condition_description')
            ->add('asset_value')
            ->add('comments')
            ->add('attachement')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Edry\Bundle\AssetManagerBundle\Entity\TechAssets'
        ));
    }

    public function getName()
    {
        return 'edry_bundle_assetmanagerbundle_techassetstype';
    }
}
