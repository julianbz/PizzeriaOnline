<?php

namespace AppBundle\Entity;

/**
 * Estadopedido
 */
class Estadopedido
{
    /**
     * @var integer
     */
    private $idestadopedido;

    /**
     * @var string
     */
    private $nombre;


    /**
     * Get idestadopedido
     *
     * @return integer
     */
    public function getIdestadopedido()
    {
        return $this->idestadopedido;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Estadopedido
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
}

