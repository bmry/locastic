<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\VerificationRequestRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;

/**
 * @ApiFilter(OrderFilter::class, properties={"createdAt"}, arguments={"orderParameterName"="order"})
 * @ApiFilter(SearchFilter::class, properties={"status": "exact","user": "exact"})
 * @ApiResource(
 *
 *     itemOperations={
 *       "get"={
 *              "path"="/verification_requests/{id}",
 *              "method"="GET",
 *             "normalization_context"={"groups"={"user:read"}},
 *             "denormalization_context"={"groups"={"user:write"}},
 *      },
 *      "update_verification_request" ={
 *         "normalization_context"={"groups"={"user:read"}},
 *         "denormalization_context"={"groups"={"user:write"}},
 *          "controller" = "App\Controller\Locastic\VerificationRequest\UpdateVerificationRequestAction",
 *          "path"="/verification_requests/{id}",
 *          "method"="PUT",
 *          "openapi_context"={
 *                  "summary"="Update verification request",
 *                  "parameters"={
 *                      {"in"="path", "name"="id", "type"="integer", "required"="true"},
 *                  },
 *              }
 *      },
 *      "approve_verification_request" ={
 *          "normalization_context"={"groups"={"admin:read"}},
 *          "denormalization_context"={"groups"={"admin:write"}},
 *          "controller" = "App\Controller\Locastic\VerificationRequest\ApproveVerificationRequestAction",
 *          "deserialize"=false,
 *          "path"="/verification_requests/{id}/approve",
 *          "method"="GET",
 *          "security"="is_granted('ROLE_ADMIN')",
 *          "openapi_context"={
 *                  "parameters"={
 *                      {"in"="path", "name"="id", "type"="integer", "required"="true"},
 *                  }
 *              }
 *      },
 *      "decline_verification_request" ={
 *          "normalization_context"={"groups"={"admin:read"}},
 *          "denormalization_context"={"groups"={"admin:write"}},
 *          "controller" = "App\Controller\Locastic\VerificationRequest\DeclineVerificationRequestAction",
 *          "deserialize"=false,
 *          "path"="/verification_requests/{id}/decline",
 *          "method"="POST",
 *          "security"="is_granted('ROLE_ADMIN')",
 *          "openapi_context"={
 *                  "parameters"={
 *                      {"in"="path", "name"="id", "type"="integer", "required"="true"}
 *                  },
 *              }
 *      }
 *     },
 *     collectionOperations={
 *         "get"={
 *              "method"="GET",
 *             "normalization_context"={"groups"={"admin:read"}},
 *             "denormalization_context"={"groups"={"admin:write"}},
 *             "security"="is_granted('ROLE_ADMIN')"
 *      },
 *         "initiate_verification"={
 *             "controller"="App\Controller\Locastic\VerificationRequest\InitiateVerificationRequestAction",
 *             "path"="/verification_requests/initiate",
 *             "method"= "POST",
 *             "normalization_context"={"groups"={"user:read"}},
 *             "denormalization_context"={"groups"={"user:write"}}
 *             }
 *
 *          }
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
     * @Groups({"admin:read"})
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="verificationRequests")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @Groups(
     *     {"user:read", "admin:read"})
     * @ORM\Column(type="enum_verification_request_type", length=20)
     */
    private $status;

    /**
     * @Groups({"user:read", "admin:read","admin:write","user:get:read"})
     * @var string|null
     * @ORM\Column(type="string")
     * @Assert\NotNull(message="Please upload an image of your ID")
     */
    private $imagePath;

    /**
     * @Groups({"user:write" })
     */
    public $imageString;

    /**
     * @var File|null
     */
    public $imageFile;

    /**
     * @Groups({"user:read","admin:read", "admin:write"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rejectionReason;

    /**
     * @Groups({"user:read","user:write", "admin:read" })
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

    public function getImageString()
    {
        return $this->imageString;
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
