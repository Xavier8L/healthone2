<?php

namespace App\Entity;

use App\Repository\ReceptRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReceptRepository::class)
 */
class Recepten
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $datum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $periode;

    /**
     * @ORM\ManyToOne(targetEntity=Medicijnen::class, inversedBy="recepts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $medicijn;

    /**
     * @ORM\ManyToOne(targetEntity=Patienten::class, inversedBy="receptens")
     */
    private $patient;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getPeriode(): ?string
    {
        return $this->periode;
    }

    public function setPeriode(string $periode): self
    {
        $this->periode = $periode;

        return $this;
    }

    public function getMedicijn(): ?Medicijnen
    {
        return $this->medicijn;
    }

    public function setMedicijn(?Medicijnen $medicijn): self
    {
        $this->medicijn = $medicijn;

        return $this;
    }

    public function getPatient(): ?Patienten
    {
        return $this->patient;
    }

    public function setPatient(?Patienten $patient): self
    {
        $this->patient = $patient;

        return $this;
    }
}
