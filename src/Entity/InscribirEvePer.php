<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InscribirEvePer
 *
 * @ORM\Table(name="inscribir_eve_per", indexes={@ORM\Index(name="id_per", columns={"id_per"}), @ORM\Index(name="id_eve", columns={"id_eve"})})
 * @ORM\Entity(repositoryClass="App\Repository\InscribirEvePerRepository")
 */
class InscribirEvePer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_eve_per", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvePer;

    /**
     * @var \PersonaPer|null
     *
     * @ORM\ManyToOne(targetEntity="PersonaPer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_per", referencedColumnName="id_per")
     * })
     */
    private $idPer;

    /**
     * @var \EventoEve|null
     *
     * @ORM\ManyToOne(targetEntity="EventoEve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_eve", referencedColumnName="id_eve")
     * })
     */
    private $idEve;

    public function getIdEvePer(): ?int
    {
        return $this->idEvePer;
    }

    public function getIdPer(): ?PersonaPer
    {
        return $this->idPer;
    }

    public function setIdPer(?PersonaPer $idPer): self
    {
        $this->idPer = $idPer;

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
