<?php

namespace App\Form;

use App\Entity\Uploads;
use App\Entity\Animals;
use App\Entity\SubAnimal;
use App\Entity\Location;
use App\Entity\Sublocation;
use App\Entity\Trips;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
 
class ManageFilesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ftype', ChoiceType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => false,
                'choices' => [
                    'All' => 0,
                    'PHOTOS' => 1,
                    'VIDEOS' => 2
                ]
            ])
            ->add('year', ChoiceType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => false,
                'choices' =>[
                    '2017' => 2017,
                    '2018' => 2018,
                    '2019' => 2019,
                    '2020' => 2020,
                    '2021' => 2021,
                    '2022' => 2022
                ]
            ])
            ->add('animal', EntityType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => false,
                'class' => Animals::class,
                'choice_label' => 'animal',
                'placeholder' => 'Choose an Animal',
                'mapped' => true
            ])

            ->add('sAnimal', EntityType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => false,
                'class' => SubAnimal::class,
                'choice_label' => 'subanimal',
                'placeholder' => 'Choose Sub Animal',
                'mapped' => true
            ])

            ->add('location', EntityType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => false,
                'class' => Location::class,
                'choice_label' => 'location',
                'placeholder' => 'Choose Location',
                'mapped' => true
            ])

            ->add('sLocation', EntityType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => false,
                'class' => Sublocation::class,
                'choice_label' => 'sublocation',
                'placeholder' => 'Choose Sub Location',
                'mapped' => true
            ])

            ->add('trip', EntityType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => false,
                'class' => Trips::class,
                'choice_label' => 'trip',
                'placeholder' => 'Choose Trip',
                'mapped' => true
            ])

            ->add('button', ButtonType::class, [
                'attr' => [
                    'class' => 'btn btn-primary'
                ],
                'label' => 'FILTER'
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Uploads::class,
        ]);
    }
}
