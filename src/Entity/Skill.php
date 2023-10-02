<?php

namespace App\Entity;

use App\Repository\SkillRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillRepository::class)]
class Skill
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?int $currentLevel = null;

    #[ORM\ManyToOne]
    private ?Media $featured_image_id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $featured_text = null;

    #[ORM\Column]
    private ?int $type = null;

    #[ORM\Column]
    private ?bool $enabled = null;

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

    public function getCurrentLevel(): ?int
    {
        return $this->currentLevel;
    }

    public function setCurrentLevel(?int $currentLevel): static
    {
        $this->currentLevel = $currentLevel;

        return $this;
    }

    public function getFeaturedImageId(): ?Media
    {
        return $this->featured_image_id;
    }

    public function setFeaturedImageId(?Media $featured_image_id): static
    {
        $this->featured_image_id = $featured_image_id;

        return $this;
    }

    public function getFeaturedText(): ?string
    {
        return $this->featured_text;
    }

    public function setFeaturedText(?string $featured_text): static
    {
        $this->featured_text = $featured_text;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function isEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): static
    {
        $this->enabled = $enabled;

        return $this;
    }
}
