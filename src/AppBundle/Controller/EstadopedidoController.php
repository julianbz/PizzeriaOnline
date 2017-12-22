<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Estadopedido;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Estadopedido controller.
 *
 */
class EstadopedidoController extends Controller
{
    /**
     * Lists all estadopedido entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estadopedidos = $em->getRepository('AppBundle:Estadopedido')->findAll();

        return $this->render('estadopedido/index.html.twig', array(
            'estadopedidos' => $estadopedidos,
        ));
    }

    /**
     * Creates a new estadopedido entity.
     *
     */
    public function newAction(Request $request)
    {
        $estadopedido = new Estadopedido();
        $form = $this->createForm('AppBundle\Form\EstadopedidoType', $estadopedido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estadopedido);
            $em->flush();

            return $this->redirectToRoute('estadopedido_show', array('idestadopedido' => $estadopedido->getIdestadopedido()));
        }

        return $this->render('estadopedido/new.html.twig', array(
            'estadopedido' => $estadopedido,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a estadopedido entity.
     *
     */
    public function showAction(Estadopedido $estadopedido)
    {
        $deleteForm = $this->createDeleteForm($estadopedido);

        return $this->render('estadopedido/show.html.twig', array(
            'estadopedido' => $estadopedido,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing estadopedido entity.
     *
     */
    public function editAction(Request $request, Estadopedido $estadopedido)
    {
        $deleteForm = $this->createDeleteForm($estadopedido);
        $editForm = $this->createForm('AppBundle\Form\EstadopedidoType', $estadopedido);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('estadopedido_edit', array('idestadopedido' => $estadopedido->getIdestadopedido()));
        }

        return $this->render('estadopedido/edit.html.twig', array(
            'estadopedido' => $estadopedido,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a estadopedido entity.
     *
     */
    public function deleteAction(Request $request, Estadopedido $estadopedido)
    {
        $form = $this->createDeleteForm($estadopedido);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estadopedido);
            $em->flush();
        }

        return $this->redirectToRoute('estadopedido_index');
    }

    /**
     * Creates a form to delete a estadopedido entity.
     *
     * @param Estadopedido $estadopedido The estadopedido entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Estadopedido $estadopedido)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estadopedido_delete', array('idestadopedido' => $estadopedido->getIdestadopedido())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
