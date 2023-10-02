<?php

namespace App\Entity;

use App\Repository\LabelRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LabelRepository::class)]
class Label
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\ManyToOne(inversedBy: 'labels')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Catalogue $catalogue = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $translationFr = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $translationEn = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getCatalogue(): ?Catalogue
    {
        return $this->catalogue;
    }

    public function setCatalogue(?Catalogue $catalogue): static
    {
        $this->catalogue = $catalogue;

        return $this;
    }

    public function getTranslationFr(): ?string
    {
        return $this->translationFr;
    }

    public function setTranslationFr(?string $translationFr): static
    {
        $this->translationFr = $translationFr;

        return $this;
    }

    public function getTranslationEn(): ?string
    {
        return $this->translationEn;
    }

    public function setTranslationEn(?string $translationEn): static
    {
        $this->translationEn = $translationEn;

        return $this;
    }
}
