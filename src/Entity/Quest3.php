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

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $mo = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $tu = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $we = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $th = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $fr = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $sa = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $su = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $mo_price = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $tu_price = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $we_price = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $th_price = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $fr_price = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $sa_price = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['quest3:list', 'quest3:item'])]
    private ?string $su_price = null;

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

    public function getMo(): ?string
    {
        return $this->mo;
    }

    public function setMo(?string $mo): self
    {
        $this->mo = $mo;

        return $this;
    }

    public function getTu(): ?string
    {
        return $this->tu;
    }

    public function setTu(?string $tu): self
    {
        $this->tu = $tu;

        return $this;
    }

    public function getWe(): ?string
    {
        return $this->we;
    }

    public function setWe(?string $we): self
    {
        $this->we = $we;

        return $this;
    }

    public function getTh(): ?string
    {
        return $this->th;
    }

    public function setTh(?string $th): self
    {
        $this->th = $th;

        return $this;
    }

    public function getFr(): ?string
    {
        return $this->fr;
    }

    public function setFr(?string $fr): self
    {
        $this->fr = $fr;

        return $this;
    }

    public function getSa(): ?string
    {
        return $this->sa;
    }

    public function setSa(?string $sa): self
    {
        $this->sa = $sa;

        return $this;
    }

    public function getSu(): ?string
    {
        return $this->su;
    }

    public function setSu(?string $su): self
    {
        $this->su = $su;

        return $this;
    }

    public function getMoPrice(): ?string
    {
        return $this->mo_price;
    }

    public function setMoPrice(?string $mo_price): self
    {
        $this->mo_price = $mo_price;

        return $this;
    }

    public function getTuPrice(): ?string
    {
        return $this->tu_price;
    }

    public function setTuPrice(?string $tu_price): self
    {
        $this->tu_price = $tu_price;

        return $this;
    }

    public function getWePrice(): ?string
    {
        return $this->we_price;
    }

    public function setWePrice(?string $we_price): self
    {
        $this->we_price = $we_price;

        return $this;
    }

    public function getThPrice(): ?string
    {
        return $this->th_price;
    }

    public function setThPrice(?string $th_price): self
    {
        $this->th_price = $th_price;

        return $this;
    }

    public function getFrPrice(): ?string
    {
        return $this->fr_price;
    }

    public function setFrPrice(?string $fr_price): self
    {
        $this->fr_price = $fr_price;

        return $this;
    }

    public function getSaPrice(): ?string
    {
        return $this->sa_price;
    }

    public function setSaPrice(?string $sa_price): self
    {
        $this->sa_price = $sa_price;

        return $this;
    }

    public function getSuPrice(): ?string
    {
        return $this->su_price;
    }

    public function setSuPrice(?string $su_price): self
    {
        $this->su_price = $su_price;

        return $this;
    }
}
