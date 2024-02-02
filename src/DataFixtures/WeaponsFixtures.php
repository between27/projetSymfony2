<?php

namespace App\DataFixtures;

use App\Entity\WeaponPhoto;
use App\Entity\Weapons;
use App\Enum\RarityEnum;
use App\Enum\WeaponTypeEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class WeaponsFixtures extends Fixture
{
    private const WEAPONS_REFERENCE = 'weapons';

    public function load(ObjectManager $manager): void
    {
        $nameWeapons = [
            [
                'name' => "Skyward Harp",
                'type' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FIVE_STARS,
                'photoUrl' => 'https://paimon.moe/images/weapons/skyward_harp.png'
            ],
[
                'name' => "Amos' Bow",
                'type' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FIVE_STARS,
                'photoUrl' => 'https://paimon.moe/images/weapons/amos_bow.png'
            ],
            [
                'name' => "Elegy for the End",
                'type' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FIVE_STARS,
                'photoUrl' => 'https://paimon.moe/images/weapons/elegy_for_the_end.png'
            ],
            [
                'name' => "Thundering Pulse",
                'type' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FIVE_STARS,
                'photoUrl' => 'https://paimon.moe/images/weapons/thundering_pulse.png'
            ],
            [
                'name' => "Polar Star",
                'type' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FIVE_STARS,
                'photoUrl' => 'https://paimon.moe/images/weapons/polar_star.png'
            ],
            [
                'name' => "The Stringless",
                'type' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FOUR_STARS,
                'photoUrl' => 'https://paimon.moe/images/weapons/the_stringless.png'
            ],
            [
                'name' => "Sacrificial Bow",
                'type' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FOUR_STARS,
                'photoUrl' => 'https://paimon.moe/images/weapons/sacrificial_bow.png'
            ],
            [
                'name' => "Rust",
                'type' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FOUR_STARS,
                'photoUrl' => 'https://paimon.moe/images/weapons/rust.png'
            ],
            [
                'name' => "Prototype Crescent",
                'type' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FOUR_STARS,
                'photoUrl' => 'https://paimon.moe/images/weapons/prototype_crescent.png'
            ],
            [
                'name' => "Compound Bow",
                'type' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FOUR_STARS,
                'photoUrl' => 'https://paimon.moe/images/weapons/compound_bow.png'
            ],
            [
                'name' => "Blackcliff Warbow",
                'type' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FOUR_STARS,
                'photoUrl' => 'https://paimon.moe/images/weapons/blackcliff_warbow.png'
            ],
            [
                "name" => "Aquila Favonia",
                "type" => WeaponTypeEnum::SWORD,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/aquila_favonia.png"
            ],
            [
                "name" => "Skyward Blade",
                "type" => WeaponTypeEnum::SWORD,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/skyward_blade.png"
            ],
            [
                "name" => "Summit Shaper",
                "type" => WeaponTypeEnum::SWORD,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/summit_shaper.png"
            ],
            [
                "name" => "Primordial Jade Cutter",
                "type" => WeaponTypeEnum::SWORD,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/primordial_jade_cutter.png"
            ],
            [
                "name" => "The Alley Flash",
                "type" => WeaponTypeEnum::SWORD,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/the_alley_flash.png"
            ],
            [
                "name" => "The Black Sword",
                "type" => WeaponTypeEnum::SWORD,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/the_black_sword.png"
            ],
            [
                "name" => "Festering Desire",
                "type" => WeaponTypeEnum::SWORD,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/festering_desire.png"
            ],
            [
                "name" => "Sacrificial Sword",
                "type" => WeaponTypeEnum::SWORD,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/sacrificial_sword.png"
            ],
            [
                "name" => "Royal Longsword",
                "type" => WeaponTypeEnum::SWORD,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/royal_longsword.png"
            ],
            [
                "name" => "The Flute",
                "type" => WeaponTypeEnum::SWORD,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/the_flute.png"
            ],
            [
                "name" => "Lion's Roar",
                "type" => WeaponTypeEnum::SWORD,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/lions_roar.png"
            ],
            [
                "name" => "Staff of Homa",
                "type" => WeaponTypeEnum::POLEARM,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/staff_of_homa.png"
            ],
            [
                "name" => "Vortex Vanquisher",
                "type" => WeaponTypeEnum::POLEARM,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/vortex_vanquisher.png"
            ],
            [
                "name" => "Primordial Jade Winged-Spear",
                "type" => WeaponTypeEnum::POLEARM,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/primordial_jade_winged-spear.png"
            ],
            [
                "name" => "Skyward Spine",
                "type" => WeaponTypeEnum::POLEARM,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/skyward_spine.png"
            ],
            [
                "name" => "Dragonspine Spear",
                "type" => WeaponTypeEnum::POLEARM,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/dragonspine_spear.png"
            ],
            [
                "name" => "Favonius Lance",
                "type" => WeaponTypeEnum::POLEARM,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/favonius_lance.png"
            ],
            [
                "name" => "Royal Spear",
                "type" => WeaponTypeEnum::POLEARM,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/royal_spear.png"
            ],
            [
                "name" => "Lithic Spear",
                "type" => WeaponTypeEnum::POLEARM,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/lithic_spear.png"
            ],
            [
                "name" => "Deathmatch",
                "type" => WeaponTypeEnum::POLEARM,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/deathmatch.png"
            ],
            [
                "name" => "Blackcliff Pole",
                "type" => WeaponTypeEnum::POLEARM,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/blackcliff_pole.png"
            ],
            [
                "name" => "Crescent Pike",
                "type" => WeaponTypeEnum::POLEARM,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/crescent_pike.png"
            ],
            [
                "name" => "Skyward Pride",
                "type" => WeaponTypeEnum::CLAYMORE,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/skyward_pride.png"
            ],
            [
                "name" => "Wolf's Gravestone",
                "type" => WeaponTypeEnum::CLAYMORE,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/wolfs_gravestone.png"
            ],
            [
                "name" => "Song of Broken Pines",
                "type" => WeaponTypeEnum::CLAYMORE,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/song_of_broken_pines.png"
            ],
            [
                "name" => "The Unforged",
                "type" => WeaponTypeEnum::CLAYMORE,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/the_unforged.png"
            ],
            [
                "name" => "Serpent Spine",
                "type" => WeaponTypeEnum::CLAYMORE,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/serpent_spine.png"
            ],
            [
                "name" => "Snow-Tombed Starsilver",
                "type" => WeaponTypeEnum::CLAYMORE,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/snow-tombed_starsilver.png"
            ],
            [
                "name" => "Sacrificial Greatsword",
                "type" => WeaponTypeEnum::CLAYMORE,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/sacrificial_greatsword.png"
            ],
            [
                "name" => "Royal Greatsword",
                "type" => WeaponTypeEnum::CLAYMORE,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/royal_greatsword.png"
            ],
            [
                "name" => "Rainslasher",
                "type" => WeaponTypeEnum::CLAYMORE,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/rainslasher.png"
            ],
            [
                "name" => "Prototype Archaic",
                "type" => WeaponTypeEnum::CLAYMORE,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/prototype_archaic.png"
            ],
            [
                "name" => "Skyward Atlas",
                "type" => WeaponTypeEnum::CATALYST,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/skyward_atlas.png"
            ],
            [
                "name" => "Lost Prayer to the Sacred Winds",
                "type" => WeaponTypeEnum::CATALYST,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/lost_prayer_to_the_sacred_winds.png"
            ],
            [
                "name" => "Memory of Dust",
                "type" => WeaponTypeEnum::CATALYST,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/memory_of_dust.png"
            ],
            [
                "name" => "Jadefall's Splendor",
                "type" => WeaponTypeEnum::CATALYST,
                "rarity" => RarityEnum::FIVE_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/jadefalls_splendor.png"
            ],
            [
                "name" => "The Widsith",
                "type" => WeaponTypeEnum::CATALYST,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/the_widsith.png"
            ],
            [
                "name" => "Solar Pearl",
                "type" => WeaponTypeEnum::CATALYST,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/solar_pearl.png"
            ],
            [
                "name" => "Sacrificial Fragments",
                "type" => WeaponTypeEnum::CATALYST,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/sacrificial_fragments.png"
            ],
            [
                "name" => "Royal Grimoire",
                "type" => WeaponTypeEnum::CATALYST,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/royal_grimoire.png"
            ],
            [
                "name" => "Mappa Mare",
                "type" => WeaponTypeEnum::CATALYST,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/mappa_mare.png"
            ],
            [
                "name" => "Frostbearer",
                "type" => WeaponTypeEnum::CATALYST,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/frostbearer.png"
            ],
            [
                "name" => "Eye of Perception",
                "type" => WeaponTypeEnum::CATALYST,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/eye_of_perception.png"
            ],
            [
                "name" => "Blackcliff Agate",
                "type" => WeaponTypeEnum::CATALYST,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/blackcliff_agate.png"
            ],
            [
                "name" => "Prototype Amber",
                "type" => WeaponTypeEnum::CATALYST,
                "rarity" => RarityEnum::FOUR_STARS,
                "photoUrl" => "https://paimon.moe/images/weapons/prototype_amber.png"
            ],

        ];

        foreach ($nameWeapons as $key => $nameWeapon) {
            $weapon = new Weapons();
            $weapon->setName($nameWeapon['name']);
            $weapon->setType($nameWeapon['type']);
            $weapon->setRarity($nameWeapon['rarity']);

            $photo = new WeaponPhoto();
            $photo->setUrl($nameWeapon['photoUrl']);
            $weapon->setPhotoUrl($photo);

            $manager->persist($weapon);
            $manager->persist($photo);

            $this->addReference(self::WEAPONS_REFERENCE . '_' . $key, $weapon);
        }


        $manager->flush();
    }
}
