<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Quest2::class)]
    private Collection $quest2s;

    public function __construct()
    {
        $this->quest2s = new ArrayCollection();
    }

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
    public function __toString(): string
    {
        return $this->name;
    }

    /**
     * @return Collection<int, Quest2>
     */
    public function getQuest2s(): Collection
    {
        return $this->quest2s;
    }

    public function addQuest2(Quest2 $quest2): self
    {
        if (!$this->quest2s->contains($quest2)) {
            $this->quest2s->add($quest2);
            $quest2->setCategory($this);
        }

        return $this;
    }

    public function removeQuest2(Quest2 $quest2): self
    {
        if ($this->quest2s->removeElement($quest2)) {
            // set the owning side to null (unless already changed)
            if ($quest2->getCategory() === $this) {
                $quest2->setCategory(null);
            }
        }

        return $this;
    }
}
