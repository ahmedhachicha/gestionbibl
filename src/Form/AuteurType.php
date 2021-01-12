<?php

namespace App\Form;

use App\Entity\Auteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom',TextType::class,['attr'=>['class'=>'form-control'],'label'=>'Lastname'])
            ->add('nom',TextType::class,['attr'=>['class'=>'form-control'],'label'=>'Name'])
            ->add('bigraphie',TextType::class,['attr'=>['class'=>'form-control'],'label'=>'Bibliography'])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Auteur::class,
        ]);
    }
}
