<?php

namespace AppBundle\Entity;

/**
 * Pizza
 */
class Pizza
{
    /**
     * @var integer
     */
    private $idpizza;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $precio;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \AppBundle\Entity\Tamanopizza
     */
    private $idtamanopizza;


    /**
     * Get idpizza
     *
     * @return integer
     */
    public function getIdpizza()
    {
        return $this->idpizza;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Pizza
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
     * Set precio
     *
     * @param string $precio
     *
     * @return Pizza
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Pizza
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set idtamanopizza
     *
     * @param \AppBundle\Entity\Tamanopizza $idtamanopizza
     *
     * @return Pizza
     */
    public function setIdtamanopizza(\AppBundle\Entity\Tamanopizza $idtamanopizza = null)
    {
        $this->idtamanopizza = $idtamanopizza;

        return $this;
    }

    /**
     * Get idtamanopizza
     *
     * @return \AppBundle\Entity\Tamanopizza
     */
    public function getIdtamanopizza()
    {
        return $this->idtamanopizza;
    }
}

