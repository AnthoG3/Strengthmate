<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    // Primary key identifier
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Full name of the contact
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    // Email address of the contact
    #[ORM\Column(length: 255)]
    private ?string $email = null;

    // Phone number of the contact
    #[ORM\Column(length: 255)]
    private ?string $phone = null;

    // Selected "suivi" (follow-up type) from the contact form
    #[ORM\Column(length: 255)]
    private $suivi = null;

    // Message content
    #[ORM\Column(type: 'text')]
    private ?string $content = null;

    // Get the ID
    public function getId(): ?int
    {
        return $this->id;
    }

    // Get the name
    public function getName(): ?string
    {
        return $this->name;
    }

    // Set the name
    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    // Get the email
    public function getEmail(): ?string
    {
        return $this->email;
    }

    // Set the email
    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    // Get the phone number
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    // Set the phone number
    public function setPhone(string $phone): static
    {
        $this->phone = $phone;
        return $this;
    }

    // Get the selected "suivi"
    public function getSuivi(): ?string
    {
        return $this->suivi;
    }

    // Set the "suivi"
    public function setSuivi(string $suivi): static
    {
        $this->suivi = $suivi;
        return $this;
    }

    // Get the message content
    public function getContent(): ?string
    {
        return $this->content;
    }

    // Set the message content
    public function setContent(string $content): static
    {
        $this->content = $content;
        return $this;
    }
}
