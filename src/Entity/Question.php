<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuestionRepository::class)]
class Question
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 400, nullable: true)]
    private ?string $text1 = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $url = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $text2 = null;

    #[ORM\Column(length: 50)]
    private ?string $answer = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Tasks $task_id = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;

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

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): static
    {
        $this->answer = $answer;

        return $this;
    }

    public function getTaskId(): ?Tasks
    {
        return $this->task_id;
    }

    public function setTaskId(?Tasks $task_id): static
    {
        $this->task_id = $task_id;

        return $this;
    }
    public function __toString(): string
    {
        return $this->id.' '.$this->text1;
    }
}
