<?php

namespace App\Entity;

use App\Repository\UtenteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtenteRepository::class)
 */
class Utente
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $cognome;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCognome(): ?string
    {
        return $this->cognome;
    }

    public function setCognome(string $cognome): self
    {
        $this->cognome = $cognome;

        return $this;
    }
}
