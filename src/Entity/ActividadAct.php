<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActividadAct
 *
 * @ORM\Table(name="actividad_act", indexes={@ORM\Index(name="id_eve", columns={"id_eve"})})
 * @ORM\Entity(repositoryClass="App\Repository\ActividadActRepository")
 */
class ActividadAct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_act", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="actividadtipo_act", type="string", length=50, nullable=true)
     */
    private $actividadtipoAct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_act", type="string", length=50, nullable=true)
     */
    private $nombreAct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="foto_act", type="string", length=300, nullable=true)
     */
    private $fotoAct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nivel_act", type="string", length=50, nullable=true)
     */
    private $nivelAct;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_act", type="datetime", nullable=false)
     */
    private $fechaAct;

    /**
     * @var int|null
     *
     * @ORM\Column(name="horas_act", type="integer", nullable=true)
     */
    private $horasAct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salida_act", type="string", length=50, nullable=true)
     */
    private $salidaAct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="llegada_act", type="string", length=50, nullable=true)
     */
    private $llegadaAct;

    /**
     * @var int|null
     *
     * @ORM\Column(name="desnivel_act", type="integer", nullable=true)
     */
    private $desnivelAct;

    /**
     * @var int|null
     *
     * @ORM\Column(name="distancia_act", type="integer", nullable=true)
     */
    private $distanciaAct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salidacoordenadas_act", type="string", length=50, nullable=true)
     */
    private $salidacoordenadasAct;

    /**
     * @var string|null
     *
     * @ORM\Column(name="llegadacoordenadas_eve", type="string", length=50, nullable=true)
     */
    private $llegadacoordenadasEve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="wikiloc_act", type="string", length=300, nullable=true)
     */
    private $wikilocAct;

    /**
     * @var \EventoEve|null
     *
     * @ORM\ManyToOne(targetEntity="EventoEve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_eve", referencedColumnName="id_eve")
     * })
     */
    private $idEve;

    public function getIdAct(): ?int
    {
        return $this->idAct;
    }

    public function getActividadtipoAct(): ?string
    {
        return $this->actividadtipoAct;
    }

    public function setActividadtipoAct(?string $actividadtipoAct): self
    {
        $this->actividadtipoAct = $actividadtipoAct;

        return $this;
    }

    public function getNombreAct(): ?string
    {
        return $this->nombreAct;
    }

    public function setNombreAct(?string $nombreAct): self
    {
        $this->nombreAct = $nombreAct;

        return $this;
    }

    public function getFotoAct(): ?string
    {
        return $this->fotoAct;
    }

    public function setFotoAct(?string $fotoAct): self
    {
        $this->fotoAct = $fotoAct;

        return $this;
    }

    public function getNivelAct(): ?string
    {
        return $this->nivelAct;
    }

    public function setNivelAct(?string $nivelAct): self
    {
        $this->nivelAct = $nivelAct;

        return $this;
    }

    public function getFechaAct(): ?\DateTimeInterface
    {
        return $this->fechaAct;
    }

    public function setFechaAct(\DateTimeInterface $fechaAct): self
    {
        $this->fechaAct = $fechaAct;

        return $this;
    }

    public function getHorasAct(): ?int
    {
        return $this->horasAct;
    }

    public function setHorasAct(?int $horasAct): self
    {
        $this->horasAct = $horasAct;

        return $this;
    }

    public function getSalidaAct(): ?string
    {
        return $this->salidaAct;
    }

    public function setSalidaAct(?string $salidaAct): self
    {
        $this->salidaAct = $salidaAct;

        return $this;
    }

    public function getLlegadaAct(): ?string
    {
        return $this->llegadaAct;
    }

    public function setLlegadaAct(?string $llegadaAct): self
    {
        $this->llegadaAct = $llegadaAct;

        return $this;
    }

    public function getDesnivelAct(): ?int
    {
        return $this->desnivelAct;
    }

    public function setDesnivelAct(?int $desnivelAct): self
    {
        $this->desnivelAct = $desnivelAct;

        return $this;
    }

    public function getDistanciaAct(): ?int
    {
        return $this->distanciaAct;
    }

    public function setDistanciaAct(?int $distanciaAct): self
    {
        $this->distanciaAct = $distanciaAct;

        return $this;
    }

    public function getSalidacoordenadasAct(): ?string
    {
        return $this->salidacoordenadasAct;
    }

    public function setSalidacoordenadasAct(?string $salidacoordenadasAct): self
    {
        $this->salidacoordenadasAct = $salidacoordenadasAct;

        return $this;
    }

    public function getLlegadacoordenadasEve(): ?string
    {
        return $this->llegadacoordenadasEve;
    }

    public function setLlegadacoordenadasEve(?string $llegadacoordenadasEve): self
    {
        $this->llegadacoordenadasEve = $llegadacoordenadasEve;

        return $this;
    }

    public function getWikilocAct(): ?string
    {
        return $this->wikilocAct;
    }

    public function setWikilocAct(?string $wikilocAct): self
    {
        $this->wikilocAct = $wikilocAct;

        return $this;
    }

    public function getIdEve(): ?EventoEve
    {
        return $this->idEve;
    }

    public function setIdEve(?EventoEve $idEve): self
    {
        $this->idEve = $idEve;

        return $this;
    }


}
