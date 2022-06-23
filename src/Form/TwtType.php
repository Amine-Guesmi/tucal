<?php

namespace App\Form;

use App\Entity\Twt;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TwtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Rang')
            ->add('bonEntree')
            ->add('codeCollecteur')
            ->add('rsCollecteur')
            ->add('region')
            ->add('zone')
            ->add('agriculteur')
            ->add('matricule')
            ->add('type')
            ->add('codeTransporteur')
            ->add('rsTransporteur')
            ->add('chauffeur')
            ->add('numTel')
            ->add('n1')
            ->add('dateEntree')
            ->add('tarifTrans')
            ->add('operateur')
            ->add('article')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Twt::class,
        ]);
    }
}
