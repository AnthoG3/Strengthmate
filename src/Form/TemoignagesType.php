<?php

namespace App\Form;

use App\Entity\Temoignages;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class TemoignagesType extends AbstractType
{
    // Build the form for the Temoignages entity
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Title field (required, max 255 characters)
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['max' => 255])
                ]
            ])

            // Content field (required, max 1000 characters)
            ->add('content', TextareaType::class, [
                'label' => 'Contenu',
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['max' => 1000])
                ]
            ])

            // Rating field (1 to 5), displayed as radio buttons
            ->add('rating', ChoiceType::class, [
                'choices' => [
                    5 => 5,
                    4 => 4,
                    3 => 3,
                    2 => 2,
                    1 => 1,
                ],
                'expanded' => true,    // Display as radio buttons
                'multiple' => false,   // Only one rating can be selected
                'label' => false,      // No label displayed above the field
                'attr' => ['class' => 'rating'], // Class used for custom styling (e.g., stars)
            ]);
    }

    // Link this form to the Temoignages entity
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Temoignages::class,
        ]);
    }
}
