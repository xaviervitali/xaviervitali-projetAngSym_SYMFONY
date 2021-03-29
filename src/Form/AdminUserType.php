<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\DBAL\Types\BooleanType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'email',
                EmailType::class,
                ["label" => "Adresse email"]
            )
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Administrateur' => 'ROLE_ADMIN',
                    'Moderateur' => 'ROLE_MODERATOR',
                    'Auteur' => 'ROLE_WRITTER',
                    'Ecole' => 'ROLE_SCHOOL'
                ],
                "multiple" => true,
                "expanded" => true,
            ])
            ->add('gender', ChoiceType::class,  ["label" => "Genre", 'choices' => [
                'Madame' => 'Mme',
                'Monsieur' => 'M',
            ],     "expanded" => true])
            ->add(
                'lastName',
                TextType::class,
                ["label" => "Nom de famille"]
            )
            ->add(
                'firstName',
                TextType::class,
                ["label" => "Prénom"]
            )
            ->add(
                'children',
                ChoiceType::class,
                [
                    'choices' =>
                    ["PS" => "PS", "MS" => "MS", "GS" => "GS", "CP" => "CP", "CP/CE1" => "CP/CE1", "CE1" => "CE1", "CE2" => "CE2", "CM1" => "CM1", "CM2" => "CM2"],
                    "multiple" => true,
                    "expanded" => true,
                    "label" => "Classes"

                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
