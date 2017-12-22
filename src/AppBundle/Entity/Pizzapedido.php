<?php

namespace AppBundle\Entity;

/**
 * Pizzapedido
 */
class Pizzapedido
{
    /**
     * @var integer
     */
    private $idpizzapedido;

    /**
     * @var \AppBundle\Entity\Pedido
     */
    private $idpedido;

    /**
     * @var \AppBundle\Entity\Pizza
     */
    private $idpizza;


    /**
     * Get idpizzapedido
     *
     * @return integer
     */
    public function getIdpizzapedido()
    {
        return $this->idpizzapedido;
    }

    /**
     * Set idpedido
     *
     * @param \AppBundle\Entity\Pedido $idpedido
     *
     * @return Pizzapedido
     */
    public function setIdpedido(\AppBundle\Entity\Pedido $idpedido = null)
    {
        $this->idpedido = $idpedido;

        return $this;
    }

    /**
     * Get idpedido
     *
     * @return \AppBundle\Entity\Pedido
     */
    public function getIdpedido()
    {
        return $this->idpedido;
    }

    /**
     * Set idpizza
     *
     * @param \AppBundle\Entity\Pizza $idpizza
     *
     * @return Pizzapedido
     */
    public function setIdpizza(\AppBundle\Entity\Pizza $idpizza = null)
    {
        $this->idpizza = $idpizza;

        return $this;
    }

    /**
     * Get idpizza
     *
     * @return \AppBundle\Entity\Pizza
     */
    public function getIdpizza()
    {
        return $this->idpizza;
    }
}

