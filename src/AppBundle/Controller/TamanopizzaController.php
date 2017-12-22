<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tamanopizza;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tamanopizza controller.
 *
 */
class TamanopizzaController extends Controller
{
    /**
     * Lists all tamanopizza entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tamanopizzas = $em->getRepository('AppBundle:Tamanopizza')->findAll();

        return $this->render('tamanopizza/index.html.twig', array(
            'tamanopizzas' => $tamanopizzas,
        ));
    }

    /**
     * Creates a new tamanopizza entity.
     *
     */
    public function newAction(Request $request)
    {
        $tamanopizza = new Tamanopizza();
        $form = $this->createForm('AppBundle\Form\TamanopizzaType', $tamanopizza);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tamanopizza);
            $em->flush();

            return $this->redirectToRoute('tamanopizza_show', array('idtamanopizza' => $tamanopizza->getIdtamanopizza()));
        }

        return $this->render('tamanopizza/new.html.twig', array(
            'tamanopizza' => $tamanopizza,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tamanopizza entity.
     *
     */
    public function showAction(Tamanopizza $tamanopizza)
    {
        $deleteForm = $this->createDeleteForm($tamanopizza);

        return $this->render('tamanopizza/show.html.twig', array(
            'tamanopizza' => $tamanopizza,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tamanopizza entity.
     *
     */
    public function editAction(Request $request, Tamanopizza $tamanopizza)
    {
        $deleteForm = $this->createDeleteForm($tamanopizza);
        $editForm = $this->createForm('AppBundle\Form\TamanopizzaType', $tamanopizza);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tamanopizza_edit', array('idtamanopizza' => $tamanopizza->getIdtamanopizza()));
        }

        return $this->render('tamanopizza/edit.html.twig', array(
            'tamanopizza' => $tamanopizza,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tamanopizza entity.
     *
     */
    public function deleteAction(Request $request, Tamanopizza $tamanopizza)
    {
        $form = $this->createDeleteForm($tamanopizza);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tamanopizza);
            $em->flush();
        }

        return $this->redirectToRoute('tamanopizza_index');
    }

    /**
     * Creates a form to delete a tamanopizza entity.
     *
     * @param Tamanopizza $tamanopizza The tamanopizza entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tamanopizza $tamanopizza)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tamanopizza_delete', array('idtamanopizza' => $tamanopizza->getIdtamanopizza())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
