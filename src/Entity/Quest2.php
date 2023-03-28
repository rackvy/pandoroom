<?php

namespace App\Entity;

use App\Repository\Quest2Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Quest2Repository::class)]
class Quest2
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private array $more_photo = [];

    #[ORM\ManyToOne(inversedBy: 'quest2s')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Complexity $complexity = null;

    #[ORM\ManyToOne(inversedBy: 'quest2s')]
    private ?PeopleCount $people_count = null;

    #[ORM\ManyToOne(inversedBy: 'quest2s')]
    private ?Age $age = null;

    #[ORM\ManyToOne(inversedBy: 'quest2s')]
    private ?Category $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getMorePhoto(): array
    {
        return $this->more_photo;
    }

    public function setMorePhoto(?array $more_photo): self
    {
        $this->more_photo = $more_photo;

        return $this;
    }

    public function getComplexity(): ?Complexity
    {
        return $this->complexity;
    }

    public function setComplexity(?Complexity $complexity): self
    {
        $this->complexity = $complexity;

        return $this;
    }

    public function getPeopleCount(): ?PeopleCount
    {
        return $this->people_count;
    }

    public function setPeopleCount(?PeopleCount $people_count): self
    {
        $this->people_count = $people_count;

        return $this;
    }

    public function getAge(): ?Age
    {
        return $this->age;
    }

    public function setAge(?Age $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}
