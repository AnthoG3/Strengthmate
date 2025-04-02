<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: AdminRepository::class)]
#[ORM\Table(name: "admin")]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
class Admin implements UserInterface, PasswordAuthenticatedUserInterface
{
    // Primary key identifier
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Unique email address of the admin
    #[ORM\Column(length: 180)]
    private ?string $email = null;

    // Token used for password reset
    #[ORM\Column(nullable: true)]
    private ?string $resetToken = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    // Hashed password
    #[ORM\Column]
    private ?string $password = null;

    // Get the ID of the admin
    public function getId(): ?int
    {
        return $this->id;
    }

    // Get the email of the admin
    public function getEmail(): ?string
    {
        return $this->email;
    }

    // Set the admin's email
    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    // Returns the unique user identifier (used by Symfony security)
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    // Get the roles assigned to the user
    public function getRoles(): array
    {
        $roles = $this->roles;
        // Guarantee every user has at least ROLE_USER
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    // Set the roles for the user
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;
        return $this;
    }

    // Get the hashed password
    public function getPassword(): ?string
    {
        return $this->password;
    }

    // Set the hashed password
    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    // Erase temporary credentials if needed (not used here)
    public function eraseCredentials(): void {}

    // Get the password reset token
    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }

    // Set the password reset token
    public function setResetToken(?string $resetToken): static
    {
        $this->resetToken = $resetToken;
        return $this;
    }
}
