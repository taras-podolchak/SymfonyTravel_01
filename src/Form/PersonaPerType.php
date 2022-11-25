<?php

namespace App\Form;

use App\Entity\PersonaPer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonaPerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('usuariotipoPer')
            ->add('fotopropiaPer')
            ->add('nombrePer')
            ->add('apellido1Per')
            ->add('apellido2Per')
            ->add('movilPer')
            ->add('dniPer')
            ->add('emailPer')
            ->add('contrasennaPer')
            ->add('cochePer')
            ->add('fechaaltaPer')
            ->add('fechabajaPer')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PersonaPer::class,
        ]);
    }
}
