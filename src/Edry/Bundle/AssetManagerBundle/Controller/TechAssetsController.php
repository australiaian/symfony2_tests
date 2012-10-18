<?php

namespace Edry\Bundle\AssetManagerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Edry\Bundle\AssetManagerBundle\Entity\TechAssets;
use Edry\Bundle\AssetManagerBundle\Form\TechAssetsType;

/**
 * TechAssets controller.
 *
 * @Route("")
 */
class TechAssetsController extends Controller
{
    /**
     * Lists all TechAssets entities.
     *
     * @Route("", name="techassets")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EdryAssetManagerBundle:TechAssets')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a TechAssets entity.
     *
     * @Route("/{id}/show", name="techassets_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EdryAssetManagerBundle:TechAssets')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TechAssets entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new TechAssets entity.
     *
     * @Route("/new", name="techassets_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new TechAssets();
        $form   = $this->createForm(new TechAssetsType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new TechAssets entity.
     *
     * @Route("/create", name="techassets_create")
     * @Method("POST")
     * @Template("EdryAssetManagerBundle:TechAssets:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new TechAssets();
        $form = $this->createForm(new TechAssetsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('techassets_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing TechAssets entity.
     *
     * @Route("/{id}/edit", name="techassets_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EdryAssetManagerBundle:TechAssets')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TechAssets entity.');
        }

        $editForm = $this->createForm(new TechAssetsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing TechAssets entity.
     *
     * @Route("/{id}/update", name="techassets_update")
     * @Method("POST")
     * @Template("EdryAssetManagerBundle:TechAssets:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EdryAssetManagerBundle:TechAssets')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TechAssets entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TechAssetsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('techassets_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a TechAssets entity.
     *
     * @Route("/{id}/delete", name="techassets_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EdryAssetManagerBundle:TechAssets')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TechAssets entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('techassets'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
