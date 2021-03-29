<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\PrePersist;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity("email", message="cette adresse email est déjà utilisée")
 * @ApiResource()
 */
class User implements UserInterface
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"article:read","file:read", "user:read", "comment:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\NotNull(message="L'adresse email ne peut etre vide")
     * @Assert\NotBlank(message="l'adresse email est obligatoire")
     * @Assert\Email(message="L'adresse email semble erronnée")
     * @Groups({ "user:write", "user:read"})
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     *
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Assert\NotNull(message="Le mot de passe ne peut etre vide")
     * @Assert\NotBlank(message="Le mot de passe est obligatoire")
     * @Assert\Length(min=8, minMessage="Le mot de passe doit contenir au moins 8 caracteres")
     * @Groups({ "user:write", "user:read"})
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message="Le genre ne peut etre vide")
     * @Groups({ "user:write", "user:read"})
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message="Le nom de famille ne peut etre vide")
     * @Assert\NotBlank(message="Le nom de famille est obligatoire")
     * @Assert\Length(min=2, minMessage="Le nom de famille doit contenir au moins 2 caracteres")
     * @Groups({"article:read", "user:write", "file:read", "user:read", "comment:read"})
     * 
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull(message="Le prénom ne peut etre vide")
     * @Assert\NotBlank(message="Le prénom est obligatoire")
     * @Assert\Length(min=2, minMessage="Le prénom doit contenir au moins 2 caracteres")
     * @Groups({"article:read", "user:write", "file:read","user:read" , "comment:read"})
     */
    private $firstName;

    /**
     * @ORM\Column(type="json")
     * @Groups({ "user:write", "user:read", })
     
     */
    private $children = [];

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({ "user:write", "user:read"})
     * 
     */
    private $emailNotification;

    /**
     * @ORM\Column(type="datetime")    
     */
    private $registeredAt;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="author", cascade={"remove"})
     */
    private $articles;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({ "user:write", "user:read"})
     */
    private $granted;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="author", cascade={"remove"})
     */
    private $article;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="blocked", cascade={"remove"})
     */
    private $comments;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({ "user:write", "user:read"})
     */
    private $about;

    /**
     * @ORM\OneToMany(targetEntity=Like::class, mappedBy="user", cascade={"remove"})
     */
    private $likes;

    /**
     * @ORM\OneToMany(targetEntity=FileUpload::class, mappedBy="addedBy", cascade={"remove"})
     */
    private $fileUploads;

    /**
     * @ORM\OneToMany(targetEntity=Contact::class, mappedBy="sender", cascade={"remove"})
     */
    private $contacts;



    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->article = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->likes = new ArrayCollection();
        $this->files = new ArrayCollection();
        $this->fileUploads = new ArrayCollection();
        $this->contacts = new ArrayCollection();
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

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getChildren(): ?array
    {
        return $this->children;
    }

    public function setChildren(array $children): self
    {
        $this->children = $children;

        return $this;
    }

    public function getEmailNotification(): ?bool
    {
        return $this->emailNotification;
    }

    public function setEmailNotification(?bool $emailNotification): self
    {
        $this->emailNotification = $emailNotification;

        return $this;
    }

    public function getRegisteredAt(): ?\DateTimeInterface
    {
        return $this->registeredAt;
    }

    public function setRegisteredAt(\DateTimeInterface $registeredAt): self
    {
        $this->registeredAt = $registeredAt;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setAuthor($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getAuthor() === $this) {
                $article->setAuthor(null);
            }
        }

        return $this;
    }

    public function getGranted(): ?bool
    {
        return $this->granted;
    }

    public function setGranted(?bool $granted): self
    {
        $this->granted = $granted;

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getArticle(): Collection
    {
        return $this->article;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setBlocked($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->getBlocked() === $this) {
                $comment->setBlocked(null);
            }
        }

        return $this;
    }

    public function getAbout(): ?string
    {
        return $this->about;
    }

    public function setAbout(?string $about): self
    {
        $this->about = $about;

        return $this;
    }

    /**
     * @return Collection|Like[]
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(Like $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes[] = $like;
            $like->setUser($this);
        }

        return $this;
    }

    public function removeLike(Like $like): self
    {
        if ($this->likes->contains($like)) {
            $this->likes->removeElement($like);
            // set the owning side to null (unless already changed)
            if ($like->getUser() === $this) {
                $like->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|FileUpload[]
     */
    public function getFileUploads(): Collection
    {
        return $this->fileUploads;
    }

    public function addFileUpload(FileUpload $fileUpload): self
    {
        if (!$this->fileUploads->contains($fileUpload)) {
            $this->fileUploads[] = $fileUpload;
            $fileUpload->setAddedBy($this);
        }

        return $this;
    }

    public function removeFileUpload(FileUpload $fileUpload): self
    {
        if ($this->fileUploads->contains($fileUpload)) {
            $this->fileUploads->removeElement($fileUpload);
            // set the owning side to null (unless already changed)
            if ($fileUpload->getAddedBy() === $this) {
                $fileUpload->setAddedBy(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Contact[]
     */
    public function getContacts(): Collection
    {
        return $this->contacts;
    }

    public function addContact(Contact $contact): self
    {
        if (!$this->contacts->contains($contact)) {
            $this->contacts[] = $contact;
            $contact->setSender($this);
        }

        return $this;
    }

    public function removeContact(Contact $contact): self
    {
        if ($this->contacts->contains($contact)) {
            $this->contacts->removeElement($contact);
            // set the owning side to null (unless already changed)
            if ($contact->getSender() === $this) {
                $contact->setSender(null);
            }
        }

        return $this;
    }
}
