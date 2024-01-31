<?php

namespace App\Form;

use App\Entity\Characters;
use App\Enum\ElementEnum;
use App\Enum\RarityEnum;
use App\Enum\WeaponTypeEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CharactersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('element',ChoiceType::class,[
                'choices' => ElementEnum::cases(),
                'choice_label' => "value"
            ])
            ->add('weaponType', ChoiceType::class, [
                'choices' => WeaponTypeEnum::cases(),
                'choice_label' => "value",
            ])
            ->add('rarity', ChoiceType::class, [
                'choices' => RarityEnum::cases(),
                'choice_label' => "value",
            ])
            ->add('description')
            ->add('photoUrl', TextType::class, [
                'mapped' => false,  // Important : ne mappe pas directement à l'entité
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Characters::class,
        ]);
    }
}
