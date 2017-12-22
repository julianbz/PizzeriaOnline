<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pizzapedido;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Pedido;

/**
 * Pizzapedido controller.
 *
 */
class PizzapedidoController extends Controller
{


    private $session ;
    public function __construct() {
        $this->session = new Session();
    }

    /**
     * Lists all pizzapedido entities.
     *
     */

    public function indexAction(){
        $em = $this->getDoctrine()->getManager();

        $pizzapedidos = $em->getRepository('AppBundle:Pizzapedido')->findAll();

        return $this->render('pizzapedido/index.html.twig', array(
            'pizzapedidos' => $pizzapedidos,
        ));
    }

    /**
     * Creates a new pizzapedido entity.
     *
     */
    public function newAction(Request $request)
    {
        $pizzapedido = new Pizzapedido();
        $form = $this->createForm('AppBundle\Form\PizzapedidoType', $pizzapedido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pizzapedido);
            $em->flush();

            return $this->redirectToRoute('pizzapedido_show', array('idpizzapedido' => $pizzapedido->getIdpizzapedido()));
        }

        return $this->render('pizzapedido/new.html.twig', array(
            'pizzapedido' => $pizzapedido,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pizzapedido entity.
     *
     */
    public function showAction(Pizzapedido $pizzapedido)
    {
        $deleteForm = $this->createDeleteForm($pizzapedido);

        return $this->render('pizzapedido/show.html.twig', array(
            'pizzapedido' => $pizzapedido,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pizzapedido entity.
     *
     */
    public function editAction(Request $request, Pizzapedido $pizzapedido)
    {
        $deleteForm = $this->createDeleteForm($pizzapedido);
        $editForm = $this->createForm('AppBundle\Form\PizzapedidoType', $pizzapedido);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pizzapedido_edit', array('idpizzapedido' => $pizzapedido->getIdpizzapedido()));
        }

        return $this->render('pizzapedido/edit.html.twig', array(
            'pizzapedido' => $pizzapedido,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pizzapedido entity.
     *
     */
    public function deleteAction(Request $request, Pizzapedido $pizzapedido)
    {
        $form = $this->createDeleteForm($pizzapedido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pizzapedido);
            $em->flush();
        }

        return $this->redirectToRoute('pizzapedido_index');
    }

    /**
     * Creates a form to delete a pizzapedido entity.
     *
     * @param Pizzapedido $pizzapedido The pizzapedido entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pizzapedido $pizzapedido)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pizzapedido_delete', array('idpizzapedido' => $pizzapedido->getIdpizzapedido())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    public function agregarPizzaArrayAction ($idpizza){
        $em = $this->getDoctrine()->getEntityManager();
        $pizza_repo = $em->getRepository("AppBundle:Pizza");
        $pizzaNueva = $pizza_repo->find($idpizza);
        if ($this->session->has("cart")) {
            $cart=$this->session->get('cart');
            foreach ($cart as $pizza) {
                $array[]=$pizza;
            }
        }
        $array[]=$pizzaNueva;
        $this->session->set('cart', $array);
        return $this->redirectToRoute('pizza_index');
    }

    public function confirmaPedidoAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $estado_repo = $em->getRepository("AppBundle:Estadopedido");
        $estadonuevo = $estado_repo->find(1);

        $user_repo= $em->getRepository("AppBundle:Cliente");
        $cliente=$user_repo->find(2);

        $cart=$this->session->get('cart');
        $pizzapedido = new Pizzapedido();
        $pedido= new Pedido();
        $pedido->setFecha(date_create(date("Y-m-d")));
        $pedido->setIdcliente($cliente);
        $pedido->setIdestadopedido($estadonuevo);
        $em->persist($pedido);
        $em->flush();
        $idPedido=$pedido->getIdpedido();
        $pedido_repo= $em->getRepository("AppBundle:Pedido");
        $pedido=$pedido_repo->find($idPedido);


        foreach ($cart as $pizza) {
            $pizzapedido->setIdpedido($pedido);
            $pizzapedido->setIdpizza($pizza);
            $em = $this->getDoctrine()->getManager();
            $em->merge($pizzapedido);
            $em->flush();
        }
        $this->session->remove('cart');
        return $this->redirectToRoute('pizza_index');

    }

    public function verCarritoAction(){
        $cart=$this->session->get('cart');

        return $this->render('pizzapedido/cart.html.twig', array(
            'cart' => $cart,
        ));

    }
}
