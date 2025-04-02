<?php

namespace App\Form;

use App\Entity\Presentation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PresentationType extends AbstractType
{
    // Build the form for the Presentation entity
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Title field (simple text input)
            ->add('title', TextType::class, [
                'label' => 'Titre',
            ])

            // Content field (multi-line text input)
            ->add('content', TextareaType::class, [
                'label' => 'Contenu',
            ]);
    }

    // Link this form to the Presentation entity
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Presentation::class,
        ]);
    }
}
