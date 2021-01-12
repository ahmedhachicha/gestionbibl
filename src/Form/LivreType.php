<?php

namespace App\Form;

use App\Entity\Auteur;
use App\Entity\Categorie;
use App\Entity\Editeur;
use App\Entity\Livre;
use PhpParser\Parser\Multiple;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class LivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre',TextType::class,['attr'=>['class'=>'form-control'],'label'=>'Title'])
            ->add('nbpage',TextType::class,['attr'=>['class'=>'form-control'],'label'=>'Number of pages'])
            ->add('date',DateType::class,['widget'=>'single_text','attr'=>['class'=>'form-control'],'label'=>'Date'])
            ->add('nbexemplaire',NumberType::class,['attr'=>['class'=>'form-control'],'label'=>'number of copies'])
            ->add('prix',NumberType::class,['attr'=>['class'=>'form-control'],'label'=>'Price'])
            ->add('isbn',NumberType::class,['attr'=>['class'=>'form-control'],'label'=>'ISBN'])
           
            ->add('editeur',EntityType::class,['attr'=>['class'=>'form-control'],'label'=>'Editeur','class'=>Editeur::class,
                'multiple'=>false,
                'expanded'=>false])
            ->add('categorie',EntityType::class,['attr'=>['class'=>'form-control'],'label'=>'categorie','class'=>Categorie::class,
                'multiple'=>false,
                'expanded'=>false])
            ->add('auteurs',EntityType::class,['attr'=>['class'=>'form-control'],'label'=>'auteurs','class'=>Auteur::class,
                'multiple'=>true,
                'expanded'=>false, 'choice_label'=> function ($auteur){
                    return $auteur->getPrenom()."".$auteur->getNom();
                }])
                
                // ->add('imageFile',FileType::class,['attr'=>['class'=>'form-control'],'required'=>false,'label'=>'imagePath'])
                // ;
                ->add('images',FileType::class,['attr'=>['class'=>'form-control'],'label'=>'imagePath','multiple' => false,
                'mapped' => false,
                'required' => true])
                ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Livre::class,
        ]);
    }
}
