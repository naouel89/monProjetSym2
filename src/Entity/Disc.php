<?php

namespace App\Entity;

use App\Repository\DiscRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DiscRepository::class)]
class Disc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $disc_title = null;

    #[ORM\Column(length: 255)]
    private ?string $disc_year = null;

    #[ORM\Column(length: 255)]
    private ?string $disc_picture = null;

    #[ORM\Column(length: 255)]
    private ?string $disc_label = null;

    #[ORM\Column(length: 255)]
    private ?string $disc_genre;

    #[ORM\Column(length: 255)]
    private ?string $disc_price = null;

    #[ORM\Column]
    private ?int $artist_id = null;

    #[ORM\ManyToOne(inversedBy: 'discs')]
    private ?Artist $artist = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiscTitle(): ?string
    {
        return $this->disc_title;
    }

    public function setDiscTitle(string $disc_title): static
    {
        $this->disc_title = $disc_title;

        return $this;
    }

    public function getDiscYear(): ?string
    {
        return $this->disc_year;
    }

    public function setDiscYear(string $disc_year): static
    {
        $this->disc_year = $disc_year;

        return $this;
    }

    public function getDiscPicture(): ?string
    {
        return $this->disc_picture;
    }

    public function setDiscPicture(string $disc_picture): static
    {
        $this->disc_picture = $disc_picture;

        return $this;
    }

    public function getDiscLabel(): ?string
    {
        return $this->disc_label;
    }

    public function setDiscLabel(string $disc_label): static
    {
        $this->disc_label = $disc_label;

        return $this;
    }

    public function getDiscGenre(): ?string
    {
        return $this->disc_genre;
    }

    public function setDiscGenre(string $disc_genre): static
    {
        $this->disc_genre = $disc_genre;

        return $this;
    }

    public function getDiscPrice(): ?string
    {
        return $this->disc_price;
    }

    public function setDiscPrice(string $disc_price): static
    {
        $this->disc_price = $disc_price;

        return $this;
    }

    public function getArtistId(): ?int
    {
        return $this->artist_id;
    }

    public function setArtistId(int $artist_id): static
    {
        $this->artist_id = $artist_id;

        return $this;
    }

    public function getArtist(): ?Artist
    {
        return $this->artist;
    }

    public function setArtist(?Artist $artist): static
    {
        $this->artist = $artist;

        return $this;
    }
}