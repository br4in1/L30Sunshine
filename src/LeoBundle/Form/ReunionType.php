<?php

namespace LeoBundle\Form;

use DateTime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ReunionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('date','Symfony\Component\Form\Extension\Core\Type\DateTimeType',array('label' => 'Date', 'attr' => array('id' => 'm_datepicker_1')))->add('type',ChoiceType::class,['choices' => ['Statutaire'=> "statutaire",'Sociale'=> "sociale"]])->add('lieu')->add('ordreDuJour')->add('pv')->add('idUser');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LeoBundle\Entity\Reunion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'leobundle_reunion';
    }


}
