<?php

namespace App\Entity;

use App\Repository\FavoriteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FavoriteRepository::class)]
class Favorite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Video $video_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVideoId(): ?Video
    {
        return $this->video_id;
    }

    public function setVideoId(?Video $video_id): static
    {
        $this->video_id = $video_id;

        return $this;
    }
}
