<?php

namespace Edry\Bundle\AssetManagerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Edry\Bundle\AssetManagerBundle\Entity\AssetType;
use Edry\Bundle\AssetManagerBundle\Form\AssetTypeType;

/**
 * AssetType controller.
 *
 * @Route("/assettype")
 */
class AssetTypeController extends Controller
{
    /**
     * Lists all AssetType entities.
     *
     * @Route("/", name="assettype")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EdryAssetManagerBundle:AssetType')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a AssetType entity.
     *
     * @Route("/{id}/show", name="assettype_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EdryAssetManagerBundle:AssetType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AssetType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new AssetType entity.
     *
     * @Route("/new", name="assettype_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new AssetType();
        $form   = $this->createForm(new AssetTypeType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new AssetType entity.
     *
     * @Route("/create", name="assettype_create")
     * @Method("POST")
     * @Template("EdryAssetManagerBundle:AssetType:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new AssetType();
        $form = $this->createForm(new AssetTypeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('assettype_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing AssetType entity.
     *
     * @Route("/{id}/edit", name="assettype_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EdryAssetManagerBundle:AssetType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AssetType entity.');
        }

        $editForm = $this->createForm(new AssetTypeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing AssetType entity.
     *
     * @Route("/{id}/update", name="assettype_update")
     * @Method("POST")
     * @Template("EdryAssetManagerBundle:AssetType:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EdryAssetManagerBundle:AssetType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AssetType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AssetTypeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('assettype_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a AssetType entity.
     *
     * @Route("/{id}/delete", name="assettype_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EdryAssetManagerBundle:AssetType')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AssetType entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('assettype'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
