<?php

namespace App\Form;

use App\Entity\Uploads;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UploadFilesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('images', FileType::class, [
                'attr' => [
                    'style' => 'display:none',
                    'accept' => 'image/*,video/*'
                ],
                'label' => false,
                'mapped' =>false,
                'multiple' => true
            ])
            ->add('button', ButtonType::class, [
                'attr' => [
                    'class' => 'btn btn-primary mt-5'
                ],
                'label' => 'SELECT PHOTOS/VIDEOS'
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
