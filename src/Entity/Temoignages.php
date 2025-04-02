<?php

namespace App\Entity;

use App\Repository\TemoignagesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TemoignagesRepository::class)]
class Temoignages
{
    // Primary key identifier
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Title of the testimonial
    #[ORM\Column(length: 255)]
    private ?string $title = null;

    // Content of the testimonial (free text)
    #[ORM\Column(type: 'text')]
    private ?string $content = null;

    // Rating score (e.g., from 1 to 5)
    #[ORM\Column(type: 'integer')]
    private ?int $rating = null;

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

    // Get the rating
    public function getRating(): ?int
    {
        return $this->rating;
    }

    // Set the rating
    public function setRating(?int $rating): self
    {
        $this->rating = $rating;
        return $this;
    }
}
