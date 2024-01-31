<?php

namespace App\Entity;

use App\Repository\TeamsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamsRepository::class)]
class Teams
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Characters::class, inversedBy: 'teams')]
    private Collection $characterId;

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
}
