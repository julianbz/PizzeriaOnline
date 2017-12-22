<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pizza;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Pizza controller.
 *
 */
class PizzaController extends Controller
{
    /**
     * Lists all pizza entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pizzas = $em->getRepository('AppBundle:Pizza')->findAll();

        return $this->render('pizza/index.html.twig', array(
            'pizzas' => $pizzas,
        ));
    }

    /**
     * Creates a new pizza entity.
     *
     */
    public function newAction(Request $request)
    {
        $pizza = new Pizza();
        $form = $this->createForm('AppBundle\Form\PizzaType', $pizza);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pizza);
            $em->flush();

            return $this->redirectToRoute('pizza_show', array('idpizza' => $pizza->getIdpizza()));
        }

        return $this->render('pizza/new.html.twig', array(
            'pizza' => $pizza,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pizza entity.
     *
     */
    public function showAction(Pizza $pizza)
    {
        $deleteForm = $this->createDeleteForm($pizza);

        return $this->render('pizza/show.html.twig', array(
            'pizza' => $pizza,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pizza entity.
     *
     */
    public function editAction(Request $request, Pizza $pizza)
    {
        $deleteForm = $this->createDeleteForm($pizza);
        $editForm = $this->createForm('AppBundle\Form\PizzaType', $pizza);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pizza_edit', array('idpizza' => $pizza->getIdpizza()));
        }

        return $this->render('pizza/edit.html.twig', array(
            'pizza' => $pizza,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pizza entity.
     *
     */
    public function deleteAction(Request $request, Pizza $pizza)
    {
        $form = $this->createDeleteForm($pizza);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pizza);
            $em->flush();
        }

        return $this->redirectToRoute('pizza_index');
    }

    /**
     * Creates a form to delete a pizza entity.
     *
     * @param Pizza $pizza The pizza entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pizza $pizza)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pizza_delete', array('idpizza' => $pizza->getIdpizza())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
