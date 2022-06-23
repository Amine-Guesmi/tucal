<?php

namespace App\Entity;

use App\Repository\TwtRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TwtRepository::class)]
class Twt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Rang;

    #[ORM\Column(type: 'string', length: 255)]
    private $bonEntree;

    #[ORM\Column(type: 'string', length: 255)]
    private $codeCollecteur = "TEST";

    #[ORM\Column(type: 'string', length: 255)]
    private $rsCollecteur= "TEST";

    #[ORM\Column(type: 'string', length: 255)]
    private $region;

    #[ORM\Column(type: 'string', length: 255)]
    private $zone;

    #[ORM\Column(type: 'string', length: 255)]
    private $agriculteur= "TEST";

    #[ORM\Column(type: 'string', length: 255)]
    private $matricule;

    #[ORM\Column(type: 'string', length: 255)]
    private $type;

    #[ORM\Column(type: 'string', length: 255)]
    private $codeTransporteur= "TEST";

    #[ORM\Column(type: 'string', length: 255)]
    private $rsTransporteur= "TEST";

    #[ORM\Column(type: 'string', length: 255)]
    private $chauffeur;

    #[ORM\Column(type: 'string', length: 255)]
    private $numTel;

    #[ORM\Column(type: 'string', length: 255)]
    private $n1= "TEST";

    #[ORM\Column(type: 'datetime')]
    private $dateEntree;

    #[ORM\Column(type: 'string', length: 255)]
    private $tarifTrans= "TEST";

    #[ORM\Column(type: 'string', length: 255)]
    private $operateur= "TEST";

    #[ORM\Column(type: 'string', length: 255)]
    private $article;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRang(): ?string
    {
        return $this->Rang;
    }

    public function setRang(string $Rang): self
    {
        $this->Rang = $Rang;

        return $this;
    }

    public function getBonEntree(): ?string
    {
        return $this->bonEntree;
    }

    public function setBonEntree(string $bonEntree): self
    {
        $this->bonEntree = $bonEntree;

        return $this;
    }

    public function getCodeCollecteur(): ?string
    {
        return $this->codeCollecteur;
    }

    public function setCodeCollecteur(string $codeCollecteur): self
    {
        $this->codeCollecteur = $codeCollecteur;

        return $this;
    }

    public function getRsCollecteur(): ?string
    {
        return $this->rsCollecteur;
    }

    public function setRsCollecteur(string $rsCollecteur): self
    {
        $this->rsCollecteur = $rsCollecteur;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(string $zone): self
    {
        $this->zone = $zone;

        return $this;
    }

    public function getAgriculteur(): ?string
    {
        return $this->agriculteur;
    }

    public function setAgriculteur(string $agriculteur): self
    {
        $this->agriculteur = $agriculteur;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCodeTransporteur(): ?string
    {
        return $this->codeTransporteur;
    }

    public function setCodeTransporteur(string $codeTransporteur): self
    {
        $this->codeTransporteur = $codeTransporteur;

        return $this;
    }

    public function getRsTransporteur(): ?string
    {
        return $this->rsTransporteur;
    }

    public function setRsTransporteur(string $rsTransporteur): self
    {
        $this->rsTransporteur = $rsTransporteur;

        return $this;
    }

    public function getChauffeur(): ?string
    {
        return $this->chauffeur;
    }

    public function setChauffeur(string $chauffeur): self
    {
        $this->chauffeur = $chauffeur;

        return $this;
    }

    public function getNumTel(): ?string
    {
        return $this->numTel;
    }

    public function setNumTel(string $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }

    public function getN1(): ?string
    {
        return $this->n1;
    }

    public function setN1(string $n1): self
    {
        $this->n1 = $n1;

        return $this;
    }

    public function getDateEntree(): ?\DateTimeInterface
    {
        return $this->dateEntree;
    }

    public function setDateEntree(\DateTimeInterface $dateEntree): self
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    public function getTarifTrans(): ?string
    {
        return $this->tarifTrans;
    }

    public function setTarifTrans(string $tarifTrans): self
    {
        $this->tarifTrans = $tarifTrans;

        return $this;
    }

    public function getOperateur(): ?string
    {
        return $this->operateur;
    }

    public function setOperateur(string $operateur): self
    {
        $this->operateur = $operateur;

        return $this;
    }

    public function getArticle(): ?string
    {
        return $this->article;
    }

    public function setArticle(string $article): self
    {
        $this->article = $article;

        return $this;
    }
}
