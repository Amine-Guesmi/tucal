<?php

namespace App\Entity;

use App\Repository\StatistiqueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatistiqueRepository::class)]
class Statistique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $nombreSemi;

    #[ORM\Column(type: 'integer')]
    private $nombreP;

    #[ORM\Column(type: 'integer')]
    private $nombreCam;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreSemi(): ?int
    {
        return $this->nombreSemi;
    }

    public function setNombreSemi(int $nombreSemi): self
    {
        $this->nombreSemi = $nombreSemi;

        return $this;
    }

    public function getNombreP(): ?int
    {
        return $this->nombreP;
    }

    public function setNombreP(int $nombreP): self
    {
        $this->nombreP = $nombreP;

        return $this;
    }

    public function getNombreCam(): ?int
    {
        return $this->nombreCam;
    }

    public function setNombreCam(int $nombreCam): self
    {
        $this->nombreCam = $nombreCam;

        return $this;
    }
}
