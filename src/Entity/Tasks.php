<?php

namespace App\Entity;

use App\Repository\TasksRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TasksRepository::class)]
class Tasks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 200)]
    private ?string $text = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $url = null;

    #[ORM\Column(nullable: true)]
    private ?int $video1 = null;

    #[ORM\Column(nullable: true)]
    private ?int $video2 = null;

    #[ORM\Column(nullable: true)]
    private ?int $video3 = null;

    #[ORM\Column(nullable: true)]
    private ?int $video4 = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function getVideo1(): ?int
    {
        return $this->video1;
    }

    public function setVideo1(?int $video1): static
    {
        $this->video1 = $video1;

        return $this;
    }

    public function getVideo2(): ?int
    {
        return $this->video2;
    }

    public function setVideo2(?int $video2): static
    {
        $this->video2 = $video2;

        return $this;
    }

    public function getVideo3(): ?int
    {
        return $this->video3;
    }

    public function setVideo3(?int $video3): static
    {
        $this->video3 = $video3;

        return $this;
    }

    public function getVideo4(): ?int
    {
        return $this->video4;
    }

    public function setVideo4(?int $video4): static
    {
        $this->video4 = $video4;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }
}
