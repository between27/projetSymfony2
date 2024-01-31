<?php

namespace App\Form;

use App\Entity\WeaponPhoto;
use App\Entity\Weapons;
use App\Enum\RarityEnum;
use App\Enum\WeaponTypeEnum;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WeaponsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('type',ChoiceType::class,[
                'choices' => WeaponTypeEnum::cases(),
                'choice_label' => fn(WeaponTypeEnum $enum) => $enum->value,
                'choice_value' => fn(?WeaponTypeEnum $enum) => $enum?->value,
            ])
            ->add('rarity',ChoiceType::class,[
                'choices' => RarityEnum::cases(),
                'choice_label' => fn(RarityEnum $enum) => $enum->value,
                'choice_value' => fn(?RarityEnum $enum) => $enum?->value,
            ])
            ->add('photoUrl', TextType::class, [
                'mapped' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Weapons::class,
        ]);
    }
}
