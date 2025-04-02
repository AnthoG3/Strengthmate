<?php

namespace App\Form;

use App\Entity\Suivis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class SuivisType extends AbstractType
{
    // Build the form for the Suivis entity
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Title field (default configuration)
            ->add('title')

            // Content field with a textarea
            ->add('content', TextareaType::class, [
                'label' => 'Contenu',
            ])

            // Optional image upload field (not mapped to the entity)
            ->add('image', FileType::class, [
                'mapped' => false,  // The file is handled manually (not linked to entity property)
                'required' => false,
                'label' => 'Image (optionnelle)',
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif'],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (JPG, PNG, GIF)',
                    ])
                ],
            ]);
    }

    // Link this form to the Suivis entity
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Suivis::class,
        ]);
    }
}
