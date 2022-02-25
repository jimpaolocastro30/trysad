<?php

namespace App\Form;

use App\Entity\SubAnimal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubAnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subanimal', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder'=>'Enter Sub Category Here...', 'required'=>true],
                'label' => false,
            ])

            ->add('button', ButtonType::class, [
                'attr' => [
                    'class' => 'btn btn-primary'
                ],
                'label' => 'Add'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SubAnimal::class,
        ]);
    }
}
