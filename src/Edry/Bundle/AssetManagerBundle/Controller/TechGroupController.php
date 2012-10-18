<?php

namespace Edry\Bundle\AssetManagerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Edry\Bundle\AssetManagerBundle\Entity\TechGroup;
use Edry\Bundle\AssetManagerBundle\Form\TechGroupType;

/**
 * TechGroup controller.
 *
 * @Route("/techgroup")
 */
class TechGroupController extends Controller
{
    /**
     * Lists all TechGroup entities.
     *
     * @Route("/", name="techgroup")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EdryAssetManagerBundle:TechGroup')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a TechGroup entity.
     *
     * @Route("/{id}/show", name="techgroup_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EdryAssetManagerBundle:TechGroup')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TechGroup entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new TechGroup entity.
     *
     * @Route("/new", name="techgroup_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new TechGroup();
        $form   = $this->createForm(new TechGroupType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new TechGroup entity.
     *
     * @Route("/create", name="techgroup_create")
     * @Method("POST")
     * @Template("EdryAssetManagerBundle:TechGroup:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new TechGroup();
        $form = $this->createForm(new TechGroupType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('techgroup_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing TechGroup entity.
     *
     * @Route("/{id}/edit", name="techgroup_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EdryAssetManagerBundle:TechGroup')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TechGroup entity.');
        }

        $editForm = $this->createForm(new TechGroupType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing TechGroup entity.
     *
     * @Route("/{id}/update", name="techgroup_update")
     * @Method("POST")
     * @Template("EdryAssetManagerBundle:TechGroup:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EdryAssetManagerBundle:TechGroup')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TechGroup entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TechGroupType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('techgroup_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a TechGroup entity.
     *
     * @Route("/{id}/delete", name="techgroup_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EdryAssetManagerBundle:TechGroup')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TechGroup entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('techgroup'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
