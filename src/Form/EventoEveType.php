<?php

namespace App\Form;

use App\Entity\EventoEve;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventoEveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('tituloEve')
            ->add('fotoEve')
            ->add('estadoEve')
            ->add('nparticipantesEve')
            ->add('precioEve')
            ->add('nivelEve')
            ->add('transportetipoEve')
            ->add('salidaidaEve')
            ->add('salidavueltaEve')
            ->add('llegadavueltaEve')
            ->add('llegadaidaEve')
            ->add('fechaidaEve')
            ->add('fechavueltaEve')
            ->add('distanciaidaEve')
            ->add('distanciavueltaEve')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EventoEve::class,
        ]);
    }
}
