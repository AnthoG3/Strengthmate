<?php

namespace App\Form;

use App\Entity\Contact;
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
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => false,
                'constraints' => [new NotBlank(['message' => 'Le nom et prénom ne peuvent pas être vides.'])],
            ])
            ->add('email', EmailType::class, [
                'label' => false,
                'constraints' => [new NotBlank(['message' => 'L\'email ne peut pas être vide.'])],
            ])
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
            ->add('content', TextareaType::class, [
                'label' => false,
                'constraints' => [new NotBlank(['message' => 'Le message ne peut pas être vide.'])],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
