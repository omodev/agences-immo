<?php

namespace AGPlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class VannonceEditVenduType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->remove('datei', DateType::class)
        ->remove('prix', TextType::class )
        ->remove('ville', TextType::class)
        ->remove('rue', TextareaType::class)
        ->remove('surface', TextType::class )
        ->remove('owner', TextType::class)
        ->remove('save', SubmitType::class)

        ->add('datef', DateType::class)
        ->add('prixf', TextType::class )
        ->add('save', SubmitType::class)
          ;

    }
    public function getParent()
        {
            return VannonceType::class;
        }
    }
