<?php

namespace AppBundle\Entity;

/**
 * Pedido
 */
class Pedido
{
    /**
     * @var integer
     */
    private $idpedido;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \AppBundle\Entity\Cliente
     */
    private $idcliente;

    /**
     * @var \AppBundle\Entity\Estadopedido
     */
    private $idestadopedido;


    /**
     * Get idpedido
     *
     * @return integer
     */
    public function getIdpedido()
    {
        return $this->idpedido;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Pedido
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set idcliente
     *
     * @param \AppBundle\Entity\Cliente $idcliente
     *
     * @return Pedido
     */
    public function setIdcliente(\AppBundle\Entity\Cliente $idcliente = null)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return \AppBundle\Entity\Cliente
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set idestadopedido
     *
     * @param \AppBundle\Entity\Estadopedido $idestadopedido
     *
     * @return Pedido
     */
    public function setIdestadopedido(\AppBundle\Entity\Estadopedido $idestadopedido = null)
    {
        $this->idestadopedido = $idestadopedido;

        return $this;
    }

    /**
     * Get idestadopedido
     *
     * @return \AppBundle\Entity\Estadopedido
     */
    public function getIdestadopedido()
    {
        return $this->idestadopedido;
    }
}

