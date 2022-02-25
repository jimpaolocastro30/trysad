<?php

namespace App\Form;

use App\Entity\Trips;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TripsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('trip', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder'=>'Enter Trip Here...'],
                'label' => false,
            ])
            ->add('trip_month', ChoiceType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => false,
                'choices' =>[
                    'January' => 1,
                    'February' => 2,
                    'March' => 3,
                    'April' => 4,
                    'May' => 5,
                    'June' => 6,
                    'July' => 7,
                    'August' => 8,
                    'September' => 9,
                    'October' => 10,
                    'November' => 11,
                    'December' => 12
                ]
            ])
            ->add('trip_year', ChoiceType::class, [
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
            ->add('button', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary',
                    'value' => 'Add Trip'
                ],
                'label' => 'Add Trip'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Trips::class,
        ]);
    }
}
