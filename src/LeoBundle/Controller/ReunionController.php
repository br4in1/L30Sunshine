<?php

namespace LeoBundle\Controller;

use LeoBundle\Entity\Reunion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reunion controller.
 *
 */
class ReunionController extends Controller
{
    /**
     * Lists all reunion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reunions = $em->getRepository('LeoBundle:Reunion')->findAll();

        return $this->render('@Leo/reunion/index.html.twig', array(
            'reunions' => $reunions,
        ));
    }

    /**
     * Creates a new reunion entity.
     *
     */
    public function newAction(Request $request)
    {
        $reunion = new Reunion();
        $form = $this->createForm('LeoBundle\Form\ReunionType', $reunion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reunion);
            $em->flush();

            return $this->redirectToRoute('reunion_show', array('id' => $reunion->getId()));
        }

        return $this->render('reunion/new.html.twig', array(
            'reunion' => $reunion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reunion entity.
     *
     */
    public function showAction(Reunion $reunion)
    {
        $deleteForm = $this->createDeleteForm($reunion);

        return $this->render('reunion/show.html.twig', array(
            'reunion' => $reunion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reunion entity.
     *
     */
    public function editAction(Request $request, Reunion $reunion)
    {
        $deleteForm = $this->createDeleteForm($reunion);
        $editForm = $this->createForm('LeoBundle\Form\ReunionType', $reunion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reunion_edit', array('id' => $reunion->getId()));
        }

        return $this->render('reunion/edit.html.twig', array(
            'reunion' => $reunion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reunion entity.
     *
     */
    public function deleteAction(Request $request, Reunion $reunion)
    {
        $form = $this->createDeleteForm($reunion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reunion);
            $em->flush();
        }

        return $this->redirectToRoute('reunion_index');
    }

    /**
     * Creates a form to delete a reunion entity.
     *
     * @param Reunion $reunion The reunion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reunion $reunion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reunion_delete', array('id' => $reunion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
