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
            ->add('assettype_id') //, 'entity', array('class' => 'EdryAssetManagerBundle:AssetType', 'property' => 'category', 'multiple' => 'false', 'expanded' => 'true'))
            ->add('techgroup_id') //, 'entity', array('class' => 'EdryAssetManagerBundle:TechGroup', 'property' => 'location'))
            ->add('account_owner')
            ->add('serial_number')
            ->add('edry_tag')
            ->add('manufacture_date')
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
