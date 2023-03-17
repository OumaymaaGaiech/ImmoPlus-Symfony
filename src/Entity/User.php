<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use PhpParser\Node\Expr\Array_;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D649E7927C74", columns={"email"})})
 * @ORM\Entity
 * @method string getUserIdentifier()
 */
class User implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=180, nullable=false)
     */
    private $email;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="json", nullable=false)
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;


    /**
     * @ORM\Column(name="fullName",type="string", length=255)
     */
    private $fullname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genreuser;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $region;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $municipalite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseagence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $jourtravail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $heuretravail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;


    /**
     * @var array
     *
     * @ORM\Column(type="json", nullable=false)
     */
    private $Activated = ['Active'];
    /**
     * @var string
     */

    /**
     * @param array $roles
     */
    public function __construct($roles)
    {
        $this->roles =[$roles];
    }

    public function getId(): ?int
    {
        return $this->iduser;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->fullname;
    }

    public function getSalt()
    {
        return null;    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }


    public function __call($name, $arguments)
    {
        // TODO: Implement @method string getUserIdentifier()
    }

    public function getFullName(): ?string
    {
        return $this->fullname;
    }

    public function setFullName(string $fullname): self
    {
        $this->fullname = $fullname;

        return $this;
    }

    public function getGenreuser(): ?string
    {
        return $this->genreuser;
    }

    public function setGenreuser(string $genreuser): self
    {
        $this->genreuser = $genreuser;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getMunicipalite(): ?string
    {
        return $this->municipalite;
    }

    public function setMunicipalite(string $municipalite): self
    {
        $this->municipalite = $municipalite;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAdresseagence(): ?string
    {
        return $this->adresseagence;
    }

    public function setAdresseagence(string $adresseagence): self
    {
        $this->adresseagence = $adresseagence;

        return $this;
    }

    public function getJourtravail(): ?string
    {
        return $this->jourtravail;
    }

    public function setJourtravail(string $jourtravail): self
    {
        $this->jourtravail = $jourtravail;

        return $this;
    }

    public function getHeuretravail(): ?string
    {
        return $this->heuretravail;
    }

    public function setHeuretravail(string $heuretravail): self
    {
        $this->heuretravail = $heuretravail;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getActivated(): ?Array
    {
        return $this->Activated;
    }

    public function setActivated(Array $Activated): self
    {
        $this->Activated = $Activated;

        return $this;
    }


}
