<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?promotion $promotion = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?matiere $matiere = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?salle $salle = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?creneau $creneau = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?enseignant $enseignant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPromotion(): ?promotion
    {
        return $this->promotion;
    }

    public function setPromotion(?promotion $promotion): static
    {
        $this->promotion = $promotion;

        return $this;
    }

    public function getMatiere(): ?matiere
    {
        return $this->matiere;
    }

    public function setMatiere(?matiere $matiere): static
    {
        $this->matiere = $matiere;

        return $this;
    }

    public function getSalle(): ?salle
    {
        return $this->salle;
    }

    public function setSalle(?salle $salle): static
    {
        $this->salle = $salle;

        return $this;
    }

    public function getCreneau(): ?creneau
    {
        return $this->creneau;
    }

    public function setCreneau(?creneau $creneau): static
    {
        $this->creneau = $creneau;

        return $this;
    }

    public function getEnseignant(): ?enseignant
    {
        return $this->enseignant;
    }

    public function setEnseignant(?enseignant $enseignant): static
    {
        $this->enseignant = $enseignant;

        return $this;
    }
}
