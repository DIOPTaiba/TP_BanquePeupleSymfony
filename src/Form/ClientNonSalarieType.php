<?php

namespace App\Form;

use App\Entity\ClientNonSalarie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientNonSalarieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('label'=>'Nom', 'attr'=>array(/* 'class'=>'form-control' */'class'=>'form-group')))
            ->add('prenom', TextType::class, array('label'=>'Prénom', 'attr'=>array(/* 'class'=>'form-control' */'class'=>'form-group')))
            ->add('carteIdentite', TextType::class, array('label'=>'Carte d\'identité', 'attr'=>array(/* 'class'=>'form-control' */'class'=>'form-group')))
            /* ->add('client') */
            ->add('Valider', SubmitType::class, array('attr'=>array('class'=>'btn btn-success')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ClientNonSalarie::class,
        ]);
    }
}
