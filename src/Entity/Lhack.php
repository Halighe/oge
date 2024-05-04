<?php

namespace App\Entity;

use App\Repository\LhackRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LhackRepository::class)]
class Lhack
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $title = null;

    #[ORM\Column(length: 200)]
    private ?string $url1 = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $url2 = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $preview = null;

    #[ORM\Column(length: 700, nullable: true)]
    private ?string $text1 = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $url3 = null;

    #[ORM\Column(length: 1300, nullable: true)]
    private ?string $text2 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getUrl1(): ?string
    {
        return $this->url1;
    }

    public function setUrl1(string $url1): static
    {
        $this->url1 = $url1;

        return $this;
    }

    public function getUrl2(): ?string
    {
        return $this->url2;
    }

    public function setUrl2(?string $url2): static
    {
        $this->url2 = $url2;

        return $this;
    }

    public function getPreview(): ?string
    {
        return $this->preview;
    }

    public function setPreview(?string $preview): static
    {
        $this->preview = $preview;

        return $this;
    }

    public function getText1(): ?string
    {
        return $this->text1;
    }

    public function setText1(?string $text1): static
    {
        $this->text1 = $text1;

        return $this;
    }

    public function getUrl3(): ?string
    {
        return $this->url3;
    }

    public function setUrl3(?string $url3): static
    {
        $this->url3 = $url3;

        return $this;
    }

    public function getText2(): ?string
    {
        return $this->text2;
    }

    public function setText2(?string $text2): static
    {
        $this->text2 = $text2;

        return $this;
    }
}
