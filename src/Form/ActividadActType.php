<?php

namespace App\Form;

use App\Entity\ActividadAct;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActividadActType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('actividadtipoAct')
            ->add('nombreAct')
            ->add('fotoAct')
            ->add('nivelAct')
            ->add('fechaAct')
            ->add('horasAct')
            ->add('salidaAct')
            ->add('llegadaAct')
            ->add('desnivelAct')
            ->add('distanciaAct')
            ->add('salidacoordenadasAct')
            ->add('llegadacoordenadasEve')
            ->add('wikilocAct')
            ->add('idEve')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ActividadAct::class,
        ]);
    }
}
