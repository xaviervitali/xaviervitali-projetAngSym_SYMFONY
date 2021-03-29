<?php

namespace App\Form;

use App\Entity\FileUpload;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FileUploadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'title',
                TextType::class,
                ["label" => "Titre du fichier",  "attr" => ["placeholder" => "Titre du fichier"]]
            )
            ->add('uploadedFile', FileType::class, ["required" => false,  "attr" => ["class=" => "custom-file-input", 'id' => "customFileLang", 'lang' => "fr"]]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FileUpload::class,
        ]);
    }
}
