<?php

namespace App\Entity;

use App\Repository\SuivisRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SuivisRepository::class)]
class Suivis
{
    // Primary key identifier
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Title of the "suivi" (required)
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $title = null;

    // Detailed content of the suivi (required)
    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank]
    private ?string $content = null;

    // Optional image path (max length 255)
    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max: 255)]
    private ?string $image = null;

    // Get the ID
    public function getId(): ?int
    {
        return $this->id;
    }

    // Get the title
    public function getTitle(): ?string
    {
        return $this->title;
    }

    // Set the title
    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    // Get the content
    public function getContent(): ?string
    {
        return $this->content;
    }

    // Set the content
    public function setContent(string $content): static
    {
        $this->content = $content;
        return $this;
    }

    // Get the image filename (if any)
    public function getImage(): ?string
    {
        return $this->image;
    }

    // Set the image filename
    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }
}
