<?php

namespace App\DataFixtures;

use App\Entity\CharacterPhoto;
use App\Entity\Characters;
use App\Entity\User;
use App\Enum\ElementEnum;
use App\Enum\RarityEnum;
use App\Enum\WeaponTypeEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class CharactersFixtures extends Fixture
{

    private const CHARACTERS_REFERENCE = 'characters';
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;

    }

    public function load(ObjectManager $manager): void
    {
        $nameCharacters = [
            [
                'name' => 'Albedo',
                'elementType' => ElementEnum::GEO,
                'weaponType' => WeaponTypeEnum::SWORD,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Un alchimiste talentueux de Mondstadt.',
                'url' => 'https://paimon.moe/images/characters/albedo.png'
            ],
            [
                'name' => 'Barbara',
                'elementType' => ElementEnum::HYDRO,
                'weaponType' => WeaponTypeEnum::CATALYST,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Une prêtresse dévouée et idol populaire.',
                'url' => 'https://paimon.moe/images/characters/barbara.png'
            ],
            [
                'name' => 'Chongyun',
                'elementType' => ElementEnum::CRYO,
                'weaponType' => WeaponTypeEnum::CLAYMORE,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Un exorciste calme et posé de Liyue.',
                'url' => 'https://paimon.moe/images/characters/chongyun.png'

            ],
            [
                'name' => 'Diluc',
                'elementType' => ElementEnum::PYRO,
                'weaponType' => WeaponTypeEnum::CLAYMORE,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Un noble chevalier qui protège Mondstadt.',
                'url' => 'https://paimon.moe/images/characters/diluc.png'
            ],
            [
                'name' => 'Eula',
                'elementType' => ElementEnum::CRYO,
                'weaponType' => WeaponTypeEnum::CLAYMORE,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => "Descendante d'une famille déchue de Mondstadt.",
                'url' => 'https://paimon.moe/images/characters/eula.png'
            ],
            [
                'name' => 'Fischl',
                'elementType' => ElementEnum::ELECTRO,
                'weaponType' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Une aventurière de Mondstadt.',
                'url' => 'https://paimon.moe/images/characters/fischl.png'
            ],
            [
                'name' => 'Ganyu',
                'elementType' => ElementEnum::CRYO,
                'weaponType' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Secrétaire de Yuehai Pavillon.',
                'url' => 'https://paimon.moe/images/characters/ganyu.png'
            ],
            [
                'name' => 'Hu Tao',
                'elementType' => ElementEnum::PYRO,
                'weaponType' => WeaponTypeEnum::POLEARM,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Directrice des pompes funèbres Wangsheng.',
                'url' => 'https://paimon.moe/images/characters/hu_tao.png'

            ],
            [
                'name' => 'Jean',
                'elementType' => ElementEnum::ANEMO,
                'weaponType' => WeaponTypeEnum::SWORD,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'La grand-maître de l\'ordre des chevaliers de Favonius.',
                'url' => 'https://paimon.moe/images/characters/jean.png'
            ],
            [
                'name' => 'Kaeya',
                'elementType' => ElementEnum::CRYO,
                'weaponType' => WeaponTypeEnum::SWORD,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Un chevalier de Favonius qui a l\'air de cacher bien des secrets.',
                'url' => 'https://paimon.moe/images/characters/kaeya.png'
            ],
            [
                'name' => 'Keqing',
                'elementType' => ElementEnum::ELECTRO,
                'weaponType' => WeaponTypeEnum::SWORD,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Une érudite de Liyue.',
                'url' => 'https://paimon.moe/images/characters/keqing.png'

            ],
            [
                'name' => 'Klee',
                'elementType' => ElementEnum::PYRO,
                'weaponType' => WeaponTypeEnum::CATALYST,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Une alchimiste de Mondstadt.',
                'url' => 'https://paimon.moe/images/characters/klee.png'

            ],
            [
                'name' => 'Lisa',
                'elementType' => ElementEnum::ELECTRO,
                'weaponType' => WeaponTypeEnum::CATALYST,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Une bibliothécaire de l\'académie de Sumeru.',
                'url' => 'https://paimon.moe/images/characters/lisa.png'

            ],
            [
                'name' => 'Mona',
                'elementType' => ElementEnum::HYDRO,
                'weaponType' => WeaponTypeEnum::CATALYST,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Une astrologue de Mondstadt.',
                'url' => 'https://paimon.moe/images/characters/mona.png'
            ],
            [
                'name' => 'Ningguang',
                'elementType' => ElementEnum::GEO,
                'weaponType' => WeaponTypeEnum::CATALYST,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'La richissime dame du Jade de Liyue.',
                'url' => 'https://paimon.moe/images/characters/ningguang.png'
            ],
            [
                'name' => 'Qiqi',
                'elementType' => ElementEnum::CRYO,
                'weaponType' => WeaponTypeEnum::SWORD,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Une zombie excentrique qui travaille à la Pharmacie Bubu.',
                'url' => 'https://paimon.moe/images/characters/qiqi.png'
            ],
            [
                'name' => 'Razor',
                'elementType' => ElementEnum::ELECTRO,
                'weaponType' => WeaponTypeEnum::CLAYMORE,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Un garçon sauvage élevé par des loups dans les forêts de Wolvendom.',
                'url' => 'https://paimon.moe/images/characters/razor.png'
            ],
            [
                'name' => 'Rosaria',
                'elementType' => ElementEnum::CRYO,
                'weaponType' => WeaponTypeEnum::POLEARM,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Une nonne de l\'église de Favonius.',
                'url' => 'https://paimon.moe/images/characters/rosaria.png'
            ],
            [
                'name' => 'Sucrose',
                'elementType' => ElementEnum::ANEMO,
                'weaponType' => WeaponTypeEnum::CATALYST,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Une alchimiste de Mondstadt.',
                'url' => 'https://paimon.moe/images/characters/sucrose.png'
            ],
            [
                'name' => 'Tartaglia',
                'elementType' => ElementEnum::HYDRO,
                'weaponType' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Un homme mystérieux qui travaille pour le Tsaritsa.',
                'url' => 'https://paimon.moe/images/characters/tartaglia.png'
            ],
            [
                'name' => 'Venti',
                'elementType' => ElementEnum::ANEMO,
                'weaponType' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Un barde qui chante des chansons d\'antan.',
                'url' => 'https://paimon.moe/images/characters/venti.png'
            ],
            [
                'name' => 'Xiangling',
                'elementType' => ElementEnum::PYRO,
                'weaponType' => WeaponTypeEnum::POLEARM,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Une chef de cuisine de Liyue.',
                'url' => 'https://paimon.moe/images/characters/xiangling.png'
            ],
/*            [
                'name' => 'Xiao',
                'elementType' => ElementEnum::ANEMO,
                'weaponType' => WeaponTypeEnum::POLEARM,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Un Adeptus protecteur de Liyue.',
                'url' => 'https://paimon.moe/images/characters/xiao.png'
            ],
            [
                'name' => 'Xingqiu',
                'elementType' => ElementEnum::HYDRO,
                'weaponType' => WeaponTypeEnum::SWORD,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Un jeune homme qui est à la fois un poète et un guerrier.',
                'url' => 'https://paimon.moe/images/characters/xingqiu.png'
            ],
            [
                'name' => 'Xinyan',
                'elementType' => ElementEnum::PYRO,
                'weaponType' => WeaponTypeEnum::CLAYMORE,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Une rock star de Liyue.',
                'url' => 'https://paimon.moe/images/characters/xinyan.png'
            ],
            [
                'name' => 'Yanfei',
                'elementType' => ElementEnum::PYRO,
                'weaponType' => WeaponTypeEnum::CATALYST,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Une avocate de Liyue.',
                'url' => 'https://paimon.moe/images/characters/yanfei.png'
            ],
            [
                'name' => 'Zhongli',
                'elementType' => ElementEnum::GEO,
                'weaponType' => WeaponTypeEnum::POLEARM,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Un consultant de l\'académie de Sumeru.',
                'url' => 'https://paimon.moe/images/characters/zhongli.png'
            ],
            [
                'name' => 'Diona',
                'elementType' => ElementEnum::CRYO,
                'weaponType' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Une serveuse du Cat\'s Tail.',
                'url' => 'https://paimon.moe/images/characters/diona.png'
            ],
            [
                'name' => 'Beidou',
                'elementType' => ElementEnum::ELECTRO,
                'weaponType' => WeaponTypeEnum::CLAYMORE,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'La capitaine du Crux.',
                'url' => 'https://paimon.moe/images/characters/beidou.png'
            ],
            [
                'name' => 'Xinyan',
                'elementType' => ElementEnum::PYRO,
                'weaponType' => WeaponTypeEnum::CLAYMORE,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Une rock star de Liyue.',
                'url' => 'https://paimon.moe/images/characters/xinyan.png'
            ],
            [
                'name' => 'Noelle',
                'elementType' => ElementEnum::GEO,
                'weaponType' => WeaponTypeEnum::CLAYMORE,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Une domestique dévouée et une aspirante chevalière de Mondstadt.',
                'url' => 'https://paimon.moe/images/characters/noelle.png'
            ],
            [
                'name' => 'Kazuha',
                'elementType' => ElementEnum::ANEMO,
                'weaponType' => WeaponTypeEnum::SWORD,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Un rônin errant de Inazuma avec un style de combat gracieux.',
                'url' => 'https://paimon.moe/images/characters/kaedehara_kazuha.png'

            ],
            [
                'name' => 'Yoimiya',
                'elementType' => ElementEnum::PYRO,
                'weaponType' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Une pyrotechnicienne de renom de Inazuma.',
                'url' => 'https://paimon.moe/images/characters/yoimiya.png'
            ],
            [
                'name' => 'Sayu',
                'elementType' => ElementEnum::ANEMO,
                'weaponType' => WeaponTypeEnum::CLAYMORE,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Une ninja de Shiyuumatsu-Ban.',
                'url' => 'https://paimon.moe/images/characters/sayu.png'
            ],
            [
                'name' => 'Raiden Shogun',
                'elementType' => ElementEnum::ELECTRO,
                'weaponType' => WeaponTypeEnum::POLEARM,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'La divinité Éternelle de Inazuma.',
                'url' => 'https://paimon.moe/images/characters/raiden_shogun.png'
            ],
            [
                'name' => 'Kujou Sara',
                'elementType' => ElementEnum::ELECTRO,
                'weaponType' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'La générale de l\'armée de Inazuma.',
                'url' => 'https://paimon.moe/images/characters/kujou_sara.png'
            ],
            [
                'name' => 'Kamisato Ayaka',
                'elementType' => ElementEnum::CRYO,
                'weaponType' => WeaponTypeEnum::SWORD,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'La princesse de la famille Kamisato de Inazuma.',
                'url' => 'https://paimon.moe/images/characters/kamisato_ayaka.png'

            ],
            [
                'name' => 'Sangonomiya Kokomi',
                'elementType' => ElementEnum::HYDRO,
                'weaponType' => WeaponTypeEnum::CATALYST,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'La prêtresse de Watatsumi Island.',
                'url' => 'https://paimon.moe/images/characters/sangonomiya_kokomi.png'
            ],
            [
                'name' => 'Aloy',
                'elementType' => ElementEnum::CRYO,
                'weaponType' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Une chasseuse de Nora.',
                'url' => 'https://paimon.moe/images/characters/aloy.png'
            ],
            [
                'name' => 'Sara',
                'elementType' => ElementEnum::ELECTRO,
                'weaponType' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'La générale de l\'armée de Inazuma.',
                'url' => 'https://paimon.moe/images/characters/sara.png'

            ],
            [
                'name' => 'Arataki Itto',
                'elementType' => ElementEnum::GEO,
                'weaponType' => WeaponTypeEnum::CLAYMORE,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Le chef charismatique et imposant de la bande Arataki.',
                'url' => 'https://paimon.moe/images/characters/arataki_itto.png'
            ],
            [
                'name' => 'Gorou',
                'elementType' => ElementEnum::GEO,
                'weaponType' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Le général courageux de la résistance de Watatsumi, fidèle et déterminé.',
                'url' => 'https://paimon.moe/images/characters/gorou.png'
            ],
            [
                'name' => 'Shenhe',
                'elementType' => ElementEnum::CRYO,
                'weaponType' => WeaponTypeEnum::POLEARM,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Une disciple énigmatique sous la tutelle de l\'Adeptus Cloud Retainer.',
                'url' => 'https://paimon.moe/images/characters/shenhe.png'
            ],
            [
                'name' => 'Yun Jin',
                'elementType' => ElementEnum::GEO,
                'weaponType' => WeaponTypeEnum::POLEARM,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'La directrice de la troupe de théâtre Yun-Han, connue pour son talent exceptionnel en art dramatique.',
                'url' => 'https://paimon.moe/images/characters/yun_jin.png'
            ],
            [
                'name' => 'Yae Miko',
                'elementType' => ElementEnum::ELECTRO,
                'weaponType' => WeaponTypeEnum::CATALYST,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'La rusée prêtresse du Grand Sanctuaire Narukami, dotée d\'un esprit aussi vif que l\'éclair.',
                'url' => 'https://paimon.moe/images/characters/yae_miko.png'
            ],
            [
                'name' => 'Thoma',
                'elementType' => ElementEnum::PYRO,
                'weaponType' => WeaponTypeEnum::POLEARM,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Un garde du corps de la famille Kamisato de Inazuma.',
                'url' => 'https://paimon.moe/images/characters/thoma.png'
            ],
            [
                'name' => 'Kamisato Ayato',
                'elementType' => ElementEnum::HYDRO,
                'weaponType' => WeaponTypeEnum::SWORD,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Le chef de la prestigieuse famille Kamisato et le responsable des affaires du clan Yashiro à Inazuma.',
                'url' => 'https://paimon.moe/images/characters/kamisato_ayato.png'
            ],
            [
                'name' => 'Yelan',
                'elementType' => ElementEnum::HYDRO,
                'weaponType' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Une mystérieuse et agile agente qui semble être impliquée dans des affaires secrètes à Liyue.',
                'url' => 'https://paimon.moe/images/characters/yelan.png'
            ],
            [
                'name' => 'Kuki Shinobu',
                'elementType' => ElementEnum::ELECTRO,
                'weaponType' => WeaponTypeEnum::SWORD,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'La vice-chef de la bande Arataki, connue pour son sérieux et son efficacité.',
                'url' => 'https://paimon.moe/images/characters/kuki_shinobu.png'
            ],
            [
                'name' => 'Shikanoin Heizou',
                'elementType' => ElementEnum::ANEMO,
                'weaponType' => WeaponTypeEnum::CATALYST,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Un détective enthousiaste de la commission Tenryou d\'Inazuma, connu pour ses méthodes uniques.',
                'url' => 'https://paimon.moe/images/characters/shikanoin_heizou.png'
            ],
            [
                'name' => 'Tighnari',
                'elementType' => ElementEnum::DENDRO,
                'weaponType' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Un gardien de la forêt de Sumeru, érudit et responsable, avec une passion pour la botanique.',
                'url' => 'https://paimon.moe/images/characters/tighnari.png'
            ],
            [
                'name' => 'Collei',
                'elementType' => ElementEnum::DENDRO,
                'weaponType' => WeaponTypeEnum::BOW,
                'rarity' => RarityEnum::FOUR_STARS,
                'description' => 'Une apprentie dans la forêt de Sumeru, curieuse et avide de connaissances.',
                'url' => 'https://paimon.moe/images/characters/collei.png'
            ],
            [
                'name' => 'Cyno',
                'elementType' => ElementEnum::ELECTRO,
                'weaponType' => WeaponTypeEnum::POLEARM,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Un érudit de Sumeru avec un caractère sérieux et une forte présence sur le champ de bataille.',
                'url' => 'https://paimon.moe/images/characters/cyno.png'
            ],
            [
                'name' => 'Nilou',
                'elementType' => ElementEnum::HYDRO,
                'weaponType' => WeaponTypeEnum::SWORD,
                'rarity' => RarityEnum::FIVE_STARS,
                'description' => 'Une danseuse célèbre de Sumeru, connue pour sa grâce et son élégance.',
                'url' => 'https://paimon.moe/images/characters/nilou.png'
            ],*/
        ];
        $user = new User();
        $user->setEmail('c@gmail.com');
        $user->setPassword($this->passwordHasher->hashPassword(
            $user,
            '123RarityEnum::FOUR_STARSRarityEnum::FIVE_STARS6'
        ));

        $manager->persist($user);
        $user2 = new User();
        $user2->setEmail('b@gmail.com');
        $user2->setPassword($this->passwordHasher->hashPassword(
            $user2,
            '123456'
        ));
        $user2->setRoles(['ROLE_ADMIN']);
        $manager->persist($user2);


        foreach ($nameCharacters as $key => $nameCharacter) {
            $character = new Characters();
            $character->setName($nameCharacter['name']);
            $character->setElement($nameCharacter['elementType']);
            $character->setWeaponType($nameCharacter['weaponType']);
            $character->setRarity($nameCharacter['rarity']);
            $character->setDescription($nameCharacter['description']);
            $character->setUserId(rand(0, 1) ? $user : $user2);
            $photo = new CharacterPhoto();
            $photo->setUrl($nameCharacter['url']);


            $character->setPhotoUrl($photo);




            $manager->persist($character);
            $this->addReference(self::CHARACTERS_REFERENCE . "_" . $key, $character);
        }


        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            UserFixtures::class, // Assurez-vous que UserFixtures est chargé en premier
        ];
    }

}
