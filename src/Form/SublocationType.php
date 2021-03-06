<?php

namespace App\Form;

use App\Entity\Sublocation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SublocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('location')
            ->add('sublocation', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder'=>'Enter Sub Location Here...', 'required'=>true],
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
            'data_class' => Sublocation::class,
        ]);
    }
}
