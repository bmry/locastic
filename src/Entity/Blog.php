<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BlogRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}},
 *     collectionOperations={
 *         "get",
 *         "post"={"security"="is_granted('ROLE_BLOGGER')"}
 *     },
 *     itemOperations={
 *         "get",
 *         "post"={"security"="is_granted('ROLE_BLOGGER')"}
 *     },
 *
 * )
 * @ORM\Entity(repositoryClass=BlogRepository::class)
 */
class Blog
{
    use TimestampableEntity;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"read"})
     */
    private $postDate;

    /**
     * @Assert\NotNull(message="Blog title is missing")
     * @Assert\NotBlank(message="Blog title is missing")
     * @ORM\Column(type="string", length=255)
     * @Groups({"read", "write"})
     */
    private $title;

    /**
     * @Assert\NotNull(message="Blog content is missing")
     * @Assert\NotBlank(message="Blog content is missing")
     * @ORM\Column(type="text")
     * @Groups({"read", "write"})
     */
    private $content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPostDate(): ?\DateTimeInterface
    {
        return $this->postDate;
    }

    public function setPostDate(\DateTimeInterface $postDate): self
    {
        $this->postDate = $postDate;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
