<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Article;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommentRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 * @ApiResource()
 * @ApiFilter(SearchFilter::class, properties={"article":"exact"})
 * 
 */
class Comment

{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"comment:read","article:read"})
     * 
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     * @Groups({"comment:read"})
     * 
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="article")
     * @Groups({"comment:read"})
     * 
     */
    private $author;

    /**
     * @ORM\ManyToOne(targetEntity=Article::class, inversedBy="comments")
     */
    private $article;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"comment:read"})
     * 
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="comments")
     * @Groups({"comment:read"})
     * 
     */
    private $blocked;



    public function getId(): ?int
    {
        return $this->id;
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

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getBlocked(): ?User
    {
        return $this->blocked;
    }

    public function setBlocked(?User $blocked): self
    {
        $this->blocked = $blocked;

        return $this;
    }
}
