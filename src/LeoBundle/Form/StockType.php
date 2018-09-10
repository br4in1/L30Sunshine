<?php

namespace LeoBundle\Form;

use Doctrine\Bundle\DoctrineBundle\Mapping\EntityListenerServiceResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StockType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('quantite')->add('dateDebut',DateType::class,array('label' => 'Date', 'attr' => array('id' => 'm_datepicker_1')))->add('idProduit',EntityType::class,array(
            'class'=>'LeoBundle\Entity\Produit',
            'label'=>'Produit',
            'choice_label'=>'libelle'
        ))->add('idUser',null,array('label'=>'Utilisateur'));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LeoBundle\Entity\Stock'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'leobundle_stock';
    }


}
