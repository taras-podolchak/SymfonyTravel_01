<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonaPer
 *
 * @ORM\Table(name="persona_per", uniqueConstraints={@ORM\UniqueConstraint(name="dni_per", columns={"dni_per"})})
 * @ORM\Entity(repositoryClass="App\Repository\PersonaPerRepository")
 */
class PersonaPer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_per", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usuariotipo_per", type="string", length=30, nullable=true)
     */
    private $usuariotipoPer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fotopropia_per", type="string", length=300, nullable=true)
     */
    private $fotopropiaPer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_per", type="string", length=50, nullable=true)
     */
    private $nombrePer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apellido1_per", type="string", length=50, nullable=true)
     */
    private $apellido1Per;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apellido2_per", type="string", length=50, nullable=true)
     */
    private $apellido2Per;

    /**
     * @var string|null
     *
     * @ORM\Column(name="movil_per", type="string", length=15, nullable=true)
     */
    private $movilPer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dni_per", type="string", length=15, nullable=true)
     */
    private $dniPer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_per", type="string", length=100, nullable=true)
     */
    private $emailPer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contrasenna_per", type="string", length=30, nullable=true)
     */
    private $contrasennaPer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="coche_per", type="string", length=10, nullable=true)
     */
    private $cochePer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaalta_per", type="datetime", nullable=false)
     */
    private $fechaaltaPer;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechabaja_per", type="datetime", nullable=true)
     */
    private $fechabajaPer;

    public function getIdPer(): ?int
    {
        return $this->idPer;
    }

    public function getUsuariotipoPer(): ?string
    {
        return $this->usuariotipoPer;
    }

    public function setUsuariotipoPer(?string $usuariotipoPer): self
    {
        $this->usuariotipoPer = $usuariotipoPer;

        return $this;
    }

    public function getFotopropiaPer(): ?string
    {
        return $this->fotopropiaPer;
    }

    public function setFotopropiaPer(?string $fotopropiaPer): self
    {
        $this->fotopropiaPer = $fotopropiaPer;

        return $this;
    }

    public function getNombrePer(): ?string
    {
        return $this->nombrePer;
    }

    public function setNombrePer(?string $nombrePer): self
    {
        $this->nombrePer = $nombrePer;

        return $this;
    }

    public function getApellido1Per(): ?string
    {
        return $this->apellido1Per;
    }

    public function setApellido1Per(?string $apellido1Per): self
    {
        $this->apellido1Per = $apellido1Per;

        return $this;
    }

    public function getApellido2Per(): ?string
    {
        return $this->apellido2Per;
    }

    public function setApellido2Per(?string $apellido2Per): self
    {
        $this->apellido2Per = $apellido2Per;

        return $this;
    }

    public function getMovilPer(): ?string
    {
        return $this->movilPer;
    }

    public function setMovilPer(?string $movilPer): self
    {
        $this->movilPer = $movilPer;

        return $this;
    }

    public function getDniPer(): ?string
    {
        return $this->dniPer;
    }

    public function setDniPer(?string $dniPer): self
    {
        $this->dniPer = $dniPer;

        return $this;
    }

    public function getEmailPer(): ?string
    {
        return $this->emailPer;
    }

    public function setEmailPer(?string $emailPer): self
    {
        $this->emailPer = $emailPer;

        return $this;
    }

    public function getContrasennaPer(): ?string
    {
        return $this->contrasennaPer;
    }

    public function setContrasennaPer(?string $contrasennaPer): self
    {
        $this->contrasennaPer = $contrasennaPer;

        return $this;
    }

    public function getCochePer(): ?string
    {
        return $this->cochePer;
    }

    public function setCochePer(?string $cochePer): self
    {
        $this->cochePer = $cochePer;

        return $this;
    }

    public function getFechaaltaPer(): ?\DateTimeInterface
    {
        return $this->fechaaltaPer;
    }

    public function setFechaaltaPer(\DateTimeInterface $fechaaltaPer): self
    {
        $this->fechaaltaPer = $fechaaltaPer;

        return $this;
    }

    public function getFechabajaPer(): ?\DateTimeInterface
    {
        return $this->fechabajaPer;
    }

    public function setFechabajaPer(?\DateTimeInterface $fechabajaPer): self
    {
        $this->fechabajaPer = $fechabajaPer;

        return $this;
    }


}
