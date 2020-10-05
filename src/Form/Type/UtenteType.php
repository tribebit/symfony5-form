<?php


namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class UtenteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $build, array $option){

        $build
            ->add('nome', TextType::class)
            ->add('cognome',TextType::class)
            ->add('save',SubmitType::class);


    }
}