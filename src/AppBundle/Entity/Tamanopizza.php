<?php

namespace AppBundle\Entity;

/**
 * Tamanopizza
 */
class Tamanopizza
{
    /**
     * @var integer
     */
    private $idtamanopizza;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $cantporciones;


    /**
     * Get idtamanopizza
     *
     * @return integer
     */
    public function getIdtamanopizza()
    {
        return $this->idtamanopizza;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Tamanopizza
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set cantporciones
     *
     * @param integer $cantporciones
     *
     * @return Tamanopizza
     */
    public function setCantporciones($cantporciones)
    {
        $this->cantporciones = $cantporciones;

        return $this;
    }

    /**
     * Get cantporciones
     *
     * @return integer
     */
    public function getCantporciones()
    {
        return $this->cantporciones;
    }
}

