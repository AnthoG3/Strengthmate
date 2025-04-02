<?php

namespace App\Entity;

use App\Repository\PresentationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PresentationRepository::class)]
class Presentation
{
    // Primary key identifier
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Title of the presentation section
    #[ORM\Column(length: 255)]
    private ?string $title = null;

    // Rich text content of the presentation
    #[ORM\Column(type: 'text')]
    private ?string $content = null;

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
    public function setTitle(string $title): self
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
    public function setContent(string $content): self
    {
        $this->content = $content;
        return $this;
    }
}
