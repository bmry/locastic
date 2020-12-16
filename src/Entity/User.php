<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiResource;
use Rollerworks\Component\PasswordStrength\Validator\Constraints as RollerworksPassword;
use Symfony\Component\Serializer\Annotation\Groups;
use  Symfony\Component\Serializer\Annotation\SerializedName;
/**
 *
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}},
 *     itemOperations={
        "get" ={"method"="GET"}
 *     },
 *     collectionOperations={
 *      "register_user"={
 *         "method"="POST",
 *         "path"="/register",
 *         "controller"="App\Controller\Locastic\User\RegisterUserControllerAction"
 *     }
 *  }
 * )
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
{
    public const ROLE_BLOGGER = "ROLE_BLOGGER";
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups({"read", "write"})
     *@Assert\NotNull()
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "The email {{ value }} is not a valid email."
     * )
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @Groups({"read", "write"})
     * @Assert\NotNull()
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=180)
     */
    private $firstName;

    /**
     * @Groups({"write"})
     * @Assert\NotNull()
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=180)
     */
    private $lastName;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @Groups({"write"})
     * @Assert\NotNull(message="Please provide password")
     * @Assert\NotBlank(message="Please provide password")
     * @SerializedName("password")
     * @RollerworksPassword\PasswordStrength(
     *     minLength=7,
     *     minStrength=4,
     *     message="Password must contain at least one lower, one uppercase alpha character, one digit,one special character and must be at least 7 character long"
     *     )
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    /**
     * @ORM\OneToMany(targetEntity=VerificationRequest::class, mappedBy="user", orphanRemoval=true)
     */
    private $verificationRequests;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $profilePicture;

    public function __construct()
    {
        $this->verificationRequests = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function addRole(string $role): void
    {
        $this->roles[] = $role;

    }

    /**
     * @return null|string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return User
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return User
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return Collection|VerificationRequest[]
     */
    public function getVerificationRequests(): Collection
    {
        return $this->verificationRequests;
    }

    public function addVerificationRequest(VerificationRequest $verificationRequest): self
    {
        if (!$this->verificationRequests->contains($verificationRequest)) {
            $this->verificationRequests[] = $verificationRequest;
            $verificationRequest->setUser($this);
        }

        return $this;
    }

    public function removeVerificationRequest(VerificationRequest $verificationRequest): self
    {
        if ($this->verificationRequests->contains($verificationRequest)) {
            $this->verificationRequests->removeElement($verificationRequest);
            // set the owning side to null (unless already changed)
            if ($verificationRequest->getUser() === $this) {
                $verificationRequest->setUser(null);
            }
        }

        return $this;
    }


    public function getProfilePicture():?string
    {
        return $this->profilePicture;
    }

    /**
     * @param mixed $profilePicture
     */
    public function setProfilePicture($profilePicture): self
    {
        $this->profilePicture = $profilePicture;

        return $this;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    public function __toString()
    {
        return $this->getFirstName();
    }

}
