<?php

namespace App\Entity;

use App\Repository\Quest3Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Quest3Repository::class)]
class Quest3
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $picture = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $more_photos = [];

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Age $age = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Complexity $complexity = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?PeopleCount $people_count = null;

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

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getMorePhotos(): array
    {
        return $this->more_photos;
    }

    public function setMorePhotos(array $more_photos): self
    {
        $this->more_photos = $more_photos;

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
}
