<?php

namespace LeoBundle\Controller;

use LeoBundle\Entity\Produit;
use LeoBundle\Entity\Stock;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Stock controller.
 *
 */
class StockController extends Controller
{
    /**
     * Lists all stock entities.
     *
     */
    public function indexAction(Request $request,Request $request2)
    {
        $em = $this->getDoctrine()->getManager();
        $stocks = $em->getRepository('LeoBundle:Stock')->findAll();
        dump($stocks);
        return $this->render('LeoBundle:stock:index.html.twig', array(
            'stocks' => $stocks
        ));
    }

    /**
     * Creates a new stock entity.
     *
     */
    public function newAction(Request $request)
    {
        $stock = new Stock();
        $form = $this->createForm('LeoBundle\Form\StockType', $stock,array('action' => $this->generateUrl('stock_new')));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stock);
            $em->flush();

            return $this->redirectToRoute('stock_index');
        }

        return $this->render('LeoBundle:stock:new.html.twig', array(
            'stock' => $stock,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a stock entity.
     *
     */
    public function showAction(Stock $stock)
    {
        $deleteForm = $this->createDeleteForm($stock);

        return $this->render('LeoBundle:stock:show.html.twig', array(
            'stock' => $stock,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing stock entity.
     *
     */
    public function editAction(Request $request, Stock $stock)
    {
        $deleteForm = $this->createDeleteForm($stock);
        $editForm = $this->createForm('LeoBundle\Form\StockType', $stock);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('stock_edit', array('id' => $stock->getId()));
        }

        return $this->render('LeoBundle:stock:edit.html.twig', array(
            'stock' => $stock,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a stock entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        /*$form = $this->createDeleteForm($stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($stock);
            $em->flush();
        }*/
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('LeoBundle:Stock')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stock entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirectToRoute('stock_index');
    }

    /**
     * Creates a form to delete a stock entity.
     *
     * @param Stock $stock The stock entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Stock $stock)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('stock_delete', array('id' => $stock->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
