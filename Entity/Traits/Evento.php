<?php

namespace Ephp\CalendarBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait Evento {


    /**
     * @var \Ephp\CalendarBundle\Entity\Calendario
     * 
     * @ORM\ManyToOne(targetEntity="Ephp\CalendarBundle\Entity\Calendario")
     * @ORM\JoinColumn(name="calendario_id", referencedColumnName="id")
     */
    private $calendario;

    /**
     * @var \Ephp\CalendarBundle\Entity\Tipo
     * 
     * @ORM\ManyToOne(targetEntity="Ephp\CalendarBundle\Entity\Tipo")
     * @ORM\JoinColumn(name="tipo_id", referencedColumnName="id", nullable=true)
     */
    private $tipo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ora", type="datetime")
     */
    private $data_ora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="giorno_intero", type="boolean", nullable=true)
     */
    private $giorno_intero;

    /**
     * @var string
     *
     * @ORM\Column(name="titolo", type="string", length=255)
     */
    private $titolo;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text")
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="importante", type="boolean", nullable=true)
     */
    private $importante;

    /**
     * Set calendario
     *
     * @param \Ephp\CalendarBundle\Entity\Calendario $calendario
     * @return Evento
     */
    public function setCalendario($calendario) {
        $this->calendario = $calendario;

        return $this;
    }

    /**
     * Get calendario
     *
     * @return \Ephp\CalendarBundle\Entity\Calendario 
     */
    public function getCalendario() {
        return $this->calendario;
    }

    /**
     * Set tipo
     *
     * @param \Ephp\CalendarBundle\Entity\Tipo $tipo
     * @return Evento
     */
    public function setTipo($tipo) {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \Ephp\CalendarBundle\Entity\Tipo 
     */
    public function getTipo() {
        return $this->tipo;
    }

    /**
     * Set data_ora
     *
     * @param \DateTime $dataOra
     * @return Evento
     */
    public function setDataOra($dataOra) {
        $this->data_ora = $dataOra;

        return $this;
    }

    /**
     * Get data_ora
     *
     * @return \DateTime 
     */
    public function getDataOra() {
        return $this->data_ora;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     * @return Evento
     */
    public function setTitolo($titolo) {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string 
     */
    public function getTitolo() {
        return $this->titolo;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Evento
     */
    public function setNote($note) {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Set giorno_intero
     *
     * @param boolean $giornoIntero
     * @return Evento
     */
    public function setGiornoIntero($giornoIntero) {
        $this->giorno_intero = $giornoIntero;

        return $this;
    }

    /**
     * Get giorno_intero
     *
     * @return boolean 
     */
    public function getGiornoIntero() {
        return $this->giorno_intero;
    }

    /**
     * Set importante
     *
     * @param boolean $importante
     * @return Evento
     */
    public function setImportante($importante) {
        $this->importante = $importante;

        return $this;
    }

    /**
     * Get importante
     *
     * @return boolean 
     */
    public function getImportante() {
        return $this->importante;
    }

}