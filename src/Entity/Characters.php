<?php

namespace App\Entity;

use App\Repository\CharactersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharactersRepository::class)]
class Characters
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $element = null;

    #[ORM\Column(length: 255)]
    private ?string $weaponType = null;

    #[ORM\Column(length: 255)]
    private ?string $rarity = null;

    #[ORM\ManyToMany(targetEntity: Weapons::class, mappedBy: 'characterId')]
    private Collection $weapons;

    #[ORM\ManyToOne(inversedBy: 'characters')]
    private ?User $userId = null;

    #[ORM\ManyToMany(targetEntity: Teams::class, mappedBy: 'characterId')]
    private Collection $teams;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?CharacterPhoto $photoUrl = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    public function __construct()
    {
        $this->weapons = new ArrayCollection();
        $this->teams = new ArrayCollection();
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

    public function getElement(): ?string
    {
        return $this->element;
    }

    public function setElement(string $element): static
    {
        $this->element = $element;

        return $this;
    }

    public function getWeaponType(): ?string
    {
        return $this->weaponType;
    }

    public function setWeaponType(string $weaponType): static
    {
        $this->weaponType = $weaponType;

        return $this;
    }

    public function getRarity(): ?string
    {
        return $this->rarity;
    }

    public function setRarity(string $rarity): static
    {
        $this->rarity = $rarity;

        return $this;
    }

    /**
     * @return Collection<int, Weapons>
     */
    public function getWeapons(): Collection
    {
        return $this->weapons;
    }

    public function addWeapon(Weapons $weapon): static
    {
        if (!$this->weapons->contains($weapon)) {
            $this->weapons->add($weapon);
            $weapon->addCharacterId($this);
        }

        return $this;
    }

    public function removeWeapon(Weapons $weapon): static
    {
        if ($this->weapons->removeElement($weapon)) {
            $weapon->removeCharacterId($this);
        }

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): static
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return Collection<int, Teams>
     */
    public function getTeams(): Collection
    {
        return $this->teams;
    }

    public function addTeam(Teams $team): static
    {
        if (!$this->teams->contains($team)) {
            $this->teams->add($team);
            $team->addCharacterId($this);
        }

        return $this;
    }

    public function removeTeam(Teams $team): static
    {
        if ($this->teams->removeElement($team)) {
            $team->removeCharacterId($this);
        }

        return $this;
    }

    public function getPhotoUrl(): ?CharacterPhoto
    {
        return $this->photoUrl;
    }

    public function setPhotoUrl(?CharacterPhoto $photoUrl): static
    {
        $this->photoUrl = $photoUrl;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
