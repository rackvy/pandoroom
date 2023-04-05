<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\Quest3Repository;
use App\Repository\AgeRepository;
use App\Repository\CategoryRepository;
use App\Repository\ComplexityRepository;
use App\Repository\PeopleCountRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Twig\Environment;

#[ORM\Entity(repositoryClass: Quest3Repository::class)]
#[ApiResource(
    collectionOperations: ['get' => ['normalization_context' => ['groups' => 'quest3:list']]],
    itemOperations: ['get' => ['normalization_context' => ['groups' => 'quest3:item']]],
    order: ['id' => 'DESC'],
    paginationEnabled: false,
)]
#[ApiFilter(SearchFilter::class, properties: ['age' => 'exact'])]
class Quest3
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $picture = null;

    #[ORM\Column(type: Types::ARRAY)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private array $more_photos = [];

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?Age $age = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?Category $category = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?Complexity $complexity = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['quest3:list', 'quest3:item'])]
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
