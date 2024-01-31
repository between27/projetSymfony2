<?php

namespace App\Entity;

use App\Enum\RarityEnum;
use App\Enum\WeaponTypeEnum;
use App\Repository\WeaponsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WeaponsRepository::class)]
class Weapons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?WeaponTypeEnum $type = null;

    #[ORM\Column(length: 255)]
    private ?RarityEnum $rarity = null;

    #[ORM\ManyToMany(targetEntity: Characters::class, inversedBy: 'weapons')]
    private Collection $characterId;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?WeaponPhoto $photoUrl = null;

    public function __construct()
    {
        $this->characterId = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?WeaponTypeEnum
    {
        return $this->type;
    }

    public function setType(WeaponTypeEnum $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getRarity(): ?RarityEnum
    {
        return $this->rarity;
    }

    public function setRarity(RarityEnum $rarity): static
    {
        $this->rarity = $rarity;

        return $this;
    }

    /**
     * @return Collection<int, Characters>
     */
    public function getCharacterId(): Collection
    {
        return $this->characterId;
    }

    public function addCharacterId(Characters $characterId): static
    {
        if (!$this->characterId->contains($characterId)) {
            $this->characterId->add($characterId);
        }

        return $this;
    }

    public function removeCharacterId(Characters $characterId): static
    {
        $this->characterId->removeElement($characterId);

        return $this;
    }

    public function getPhotoUrl(): ?WeaponPhoto
    {
        return $this->photoUrl;
    }

    public function setPhotoUrl(?WeaponPhoto $photoUrl): static
    {
        $this->photoUrl = $photoUrl;

        return $this;
    }
}
