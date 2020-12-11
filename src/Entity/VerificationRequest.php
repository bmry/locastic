<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\VerificationRequestRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     itemOperations={
        "update_verification_request" ={
 *          "controller" = "App\Controller\Locastic\VerificationRequest\UpdateVerificationRequestAction",
 *          "deserialize"=false,
 *          "path"="/verification-requests/{id}",
 *          "method"="POST",
 *          "openapi_context"={
 *                  "parameters"={
 *                      {"in"="path", "name"="id", "type"="integer", "required"="true"},
 *                  },
 *              }
 *      }
 *     },
 *     collectionOperations={
 *         "initiate-verification"={
 *             "controller"="App\Controller\Locastic\VerificationRequest\InitiateVerificationRequestAction",
 *             "path"="/verification-requests/initiate",
 *             "deserialize"=false,
 *             "method"= "POST",
 *             "security"="is_granted('ROLE_USER')",
 *             "normalization_context"={"groups"={"initiate:read"}},
 *             "denormalization_context"={"groups"={"initiate:write"}},
 *             "openapi_context"={
 *                 "requestBody"={
 *                     "content"={
 *                         "multipart/form-data"={
 *                             "schema"={
 *                                 "type"="object",
 *                                 "properties"={
 *                                     "file"={
 *                                         "type"="string",
 *                                         "format"="binary"
 *                                     }
 *                                 }
 *                             }
 *                         }
 *                     }
 *                 }
 *             }
 *         }
 *    }
 * )
 * @ORM\Entity(repositoryClass=VerificationRequestRepository::class)
 */
class VerificationRequest
{
    use TimestampableEntity;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups({"initiate:read"})
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="verificationRequests")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="enum_verification_request_type", length=20)
     */
    private $status;

    /**
     * @Groups({"initiate:read", "initiate:write" })
     * @var string|null
     * @ORM\Column(type="string")
     * @Assert\NotNull(message="Please upload an image of your ID")
     */
    private $imagePath;

    /**
     * @var File|null
     * @Groups({"initiate:read"})
     */
    public $image;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rejectionReason;

    /**
     * @Groups({"initiate:read", "initiate:write" })
     * @Assert\NotNull()
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $initiationMessage;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function setImageFile(File $image = null)
    {
        $this->image = $image;

        if ($image) {

            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImage()
    {
        return $this->image;
    }


    public function getRejectionReason(): ?string
    {
        return $this->rejectionReason;
    }

    public function setRejectionReason(?string $rejectionReason): self
    {
        $this->rejectionReason = $rejectionReason;

        return $this;
    }

    public function getInitiationMessage(): ?string
    {
        return $this->initiationMessage;
    }

    public function setInitiationMessage(?string $initiationMessage): self
    {
        $this->initiationMessage = $initiationMessage;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    /**
     * @param null|string $imageIDPath
     * @return VerificationRequest
     */
    public function setImagePath(?string $imagePath): self
    {
        $this->imagePath = $imagePath;

        return $this;
    }
}
