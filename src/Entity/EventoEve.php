<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventoEve
 *
 * @ORM\Table(name="evento_eve")
 * @ORM\Entity(repositoryClass="App\Repository\EventoEveRepository")
 */
class EventoEve
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_eve", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titulo_eve", type="string", length=100, nullable=true)
     */
    private $tituloEve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="foto_eve", type="string", length=300, nullable=true)
     */
    private $fotoEve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estado_eve", type="string", length=30, nullable=true)
     */
    private $estadoEve;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nparticipantes_eve", type="integer", nullable=true)
     */
    private $nparticipantesEve;

    /**
     * @var int|null
     *
     * @ORM\Column(name="precio_eve", type="integer", nullable=true)
     */
    private $precioEve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nivel_eve", type="string", length=30, nullable=true)
     */
    private $nivelEve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transportetipo_eve", type="string", length=30, nullable=true)
     */
    private $transportetipoEve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salidaida_eve", type="string", length=50, nullable=true)
     */
    private $salidaidaEve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salidavuelta_eve", type="string", length=50, nullable=true)
     */
    private $salidavueltaEve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="llegadavuelta_eve", type="string", length=50, nullable=true)
     */
    private $llegadavueltaEve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="llegadaida_eve", type="string", length=50, nullable=true)
     */
    private $llegadaidaEve;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaida_eve", type="datetime", nullable=true)
     */
    private $fechaidaEve;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechavuelta_eve", type="datetime", nullable=true)
     */
    private $fechavueltaEve;

    /**
     * @var int|null
     *
     * @ORM\Column(name="distanciaida_eve", type="integer", nullable=true)
     */
    private $distanciaidaEve;

    /**
     * @var int|null
     *
     * @ORM\Column(name="distanciavuelta_eve", type="integer", nullable=true)
     */
    private $distanciavueltaEve;

    public function getIdEve(): ?int
    {
        return $this->idEve;
    }

    public function getTituloEve(): ?string
    {
        return $this->tituloEve;
    }

    public function setTituloEve(?string $tituloEve): self
    {
        $this->tituloEve = $tituloEve;

        return $this;
    }

    public function getFotoEve(): ?string
    {
        return $this->fotoEve;
    }

    public function setFotoEve(?string $fotoEve): self
    {
        $this->fotoEve = $fotoEve;

        return $this;
    }

    public function getEstadoEve(): ?string
    {
        return $this->estadoEve;
    }

    public function setEstadoEve(?string $estadoEve): self
    {
        $this->estadoEve = $estadoEve;

        return $this;
    }

    public function getNparticipantesEve(): ?int
    {
        return $this->nparticipantesEve;
    }

    public function setNparticipantesEve(?int $nparticipantesEve): self
    {
        $this->nparticipantesEve = $nparticipantesEve;

        return $this;
    }

    public function getPrecioEve(): ?int
    {
        return $this->precioEve;
    }

    public function setPrecioEve(?int $precioEve): self
    {
        $this->precioEve = $precioEve;

        return $this;
    }

    public function getNivelEve(): ?string
    {
        return $this->nivelEve;
    }

    public function setNivelEve(?string $nivelEve): self
    {
        $this->nivelEve = $nivelEve;

        return $this;
    }

    public function getTransportetipoEve(): ?string
    {
        return $this->transportetipoEve;
    }

    public function setTransportetipoEve(?string $transportetipoEve): self
    {
        $this->transportetipoEve = $transportetipoEve;

        return $this;
    }

    public function getSalidaidaEve(): ?string
    {
        return $this->salidaidaEve;
    }

    public function setSalidaidaEve(?string $salidaidaEve): self
    {
        $this->salidaidaEve = $salidaidaEve;

        return $this;
    }

    public function getSalidavueltaEve(): ?string
    {
        return $this->salidavueltaEve;
    }

    public function setSalidavueltaEve(?string $salidavueltaEve): self
    {
        $this->salidavueltaEve = $salidavueltaEve;

        return $this;
    }

    public function getLlegadavueltaEve(): ?string
    {
        return $this->llegadavueltaEve;
    }

    public function setLlegadavueltaEve(?string $llegadavueltaEve): self
    {
        $this->llegadavueltaEve = $llegadavueltaEve;

        return $this;
    }

    public function getLlegadaidaEve(): ?string
    {
        return $this->llegadaidaEve;
    }

    public function setLlegadaidaEve(?string $llegadaidaEve): self
    {
        $this->llegadaidaEve = $llegadaidaEve;

        return $this;
    }

    public function getFechaidaEve(): ?\DateTimeInterface
    {
        return $this->fechaidaEve;
    }

    public function setFechaidaEve(?\DateTimeInterface $fechaidaEve): self
    {
        $this->fechaidaEve = $fechaidaEve;

        return $this;
    }

    public function getFechavueltaEve(): ?\DateTimeInterface
    {
        return $this->fechavueltaEve;
    }

    public function setFechavueltaEve(?\DateTimeInterface $fechavueltaEve): self
    {
        $this->fechavueltaEve = $fechavueltaEve;

        return $this;
    }

    public function getDistanciaidaEve(): ?int
    {
        return $this->distanciaidaEve;
    }

    public function setDistanciaidaEve(?int $distanciaidaEve): self
    {
        $this->distanciaidaEve = $distanciaidaEve;

        return $this;
    }

    public function getDistanciavueltaEve(): ?int
    {
        return $this->distanciavueltaEve;
    }

    public function setDistanciavueltaEve(?int $distanciavueltaEve): self
    {
        $this->distanciavueltaEve = $distanciavueltaEve;

        return $this;
    }


}
