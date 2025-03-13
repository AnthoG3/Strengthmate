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
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'constraints' => [new Assert\NotBlank(), new Assert\Length(['max' => 255])]
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Contenu',
                'constraints' => [new Assert\NotBlank(), new Assert\Length(['max' => 1000])]
            ])
            ->add('rating', ChoiceType::class, [
                'choices' => [
                    5 => 5,
                    4 => 4,
                    3 => 3,
                    2 => 2,
                    1 => 1,
                ],
                'expanded' => true,
                'multiple' => false,
                'label' => false, // Supprime le label "Note"
                'attr' => ['class' => 'rating']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Temoignages::class,
        ]);
    }
}
