<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class ContactType extends AbstractType
{
    // Build the contact form with fields and validation constraints
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Name field (required)
            ->add('name', TextType::class, [
                'label' => false,
                'constraints' => [
                    new NotBlank(['message' => 'Le nom et prénom ne peuvent pas être vides.']),
                ],
            ])

            // Email field (required)
            ->add('email', EmailType::class, [
                'label' => false,
                'constraints' => [
                    new NotBlank(['message' => 'L\'email ne peut pas être vide.']),
                ],
            ])

            // Phone field (required + regex for format)
            ->add('phone', TextType::class, [
                'label' => false,
                'constraints' => [
                    new NotBlank(['message' => 'Le numéro de téléphone ne peut pas être vide.']),
                    new Regex([
                        'pattern' => '/^\+?[0-9\s-]{8,15}$/',
                        'message' => 'Veuillez entrer un numéro de téléphone valide.',
                    ]),
                ],
            ])

            // Suivi type (choice field)
            ->add('suivi', ChoiceType::class, [
                'label' => 'Type de suivi',
                'attr' => ['class' => 'form-control'],
                'label_attr' => ['class' => 'form-label'],
                'choices' => [
                    'Choisissez une option' => '',
                    'Suivi mensuel' => 'mensuel',
                    'Suivi hebdomadaire' => 'hebdomadaire',
                    'Suivi à définir' => 'indefini',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'La formule ne peut pas être vide.']),
                ],
                'required' => true,
            ])

            // Message content (textarea, required)
            ->add('content', TextareaType::class, [
                'label' => false,
                'constraints' => [
                    new NotBlank(['message' => 'Le message ne peut pas être vide.']),
                ],
            ]);
    }

    // Link this form to the Contact entity
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
