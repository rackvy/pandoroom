<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'orders')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Quest3 $quest = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_time = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $phone = null;

    #[ORM\Column(nullable: true)]
    private ?int $count_people = null;

    #[ORM\Column(nullable: true)]
    private ?bool $animator = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuest(): ?Quest3
    {
        return $this->quest;
    }

    public function setQuest(?Quest3 $quest): self
    {
        $this->quest = $quest;

        return $this;
    }

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->date_time;
    }

    public function setDateTime(\DateTimeInterface $date_time): self
    {
        $this->date_time = $date_time;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCountPeople(): ?int
    {
        return $this->count_people;
    }

    public function setCountPeople(?int $count_people): self
    {
        $this->count_people = $count_people;

        return $this;
    }

    public function isAnimator(): ?bool
    {
        return $this->animator;
    }

    public function setAnimator(?bool $animator): self
    {
        $this->animator = $animator;

        return $this;
    }
}
