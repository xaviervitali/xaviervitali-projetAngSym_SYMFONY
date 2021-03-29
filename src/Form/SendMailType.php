<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SendMailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subject', TextType::class, ["label" => "Sujet"])
            ->add(
                'user',
                ChoiceType::class,
                [
                    'choices' =>
                    [
                        "Administrateurs" => "ROLE_ADMIN",
                        "Modérateurs" => "ROLE_MODERATOR",
                        "Utilisateurs" => "ROLE_USER"
                    ],
                    'label' => "Groupe de destinataire"
                ]
            )
            ->add('body', TextareaType::class, [
                'attr' => ['class' => 'tinymce'],
                "label" => "Message"

            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
