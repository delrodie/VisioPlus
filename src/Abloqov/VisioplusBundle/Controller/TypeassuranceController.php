<?php

namespace Abloqov\VisioplusBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Abloqov\VisioplusBundle\Entity\Typeassurance;
use Abloqov\VisioplusBundle\Form\TypeassuranceType;

/**
 * Typeassurance controller.
 *
 */
class TypeassuranceController extends Controller
{

    /**
     * Lists all Typeassurance entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AbloqovVisioplusBundle:Typeassurance')->findAll();

        return $this->render('AbloqovVisioplusBundle:Typeassurance:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Typeassurance entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Typeassurance();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('typeassurance_show', array('id' => $entity->getId())));
        }

        return $this->render('AbloqovVisioplusBundle:Typeassurance:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Typeassurance entity.
     *
     * @param Typeassurance $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Typeassurance $entity)
    {
        $form = $this->createForm(new TypeassuranceType(), $entity, array(
            'action' => $this->generateUrl('typeassurance_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Typeassurance entity.
     *
     */
    public function newAction()
    {
        $entity = new Typeassurance();
        $form   = $this->createCreateForm($entity);

        return $this->render('AbloqovVisioplusBundle:Typeassurance:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Typeassurance entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AbloqovVisioplusBundle:Typeassurance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Typeassurance entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AbloqovVisioplusBundle:Typeassurance:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Typeassurance entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AbloqovVisioplusBundle:Typeassurance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Typeassurance entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AbloqovVisioplusBundle:Typeassurance:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Typeassurance entity.
    *
    * @param Typeassurance $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Typeassurance $entity)
    {
        $form = $this->createForm(new TypeassuranceType(), $entity, array(
            'action' => $this->generateUrl('typeassurance_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Typeassurance entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AbloqovVisioplusBundle:Typeassurance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Typeassurance entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('typeassurance_edit', array('id' => $id)));
        }

        return $this->render('AbloqovVisioplusBundle:Typeassurance:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Typeassurance entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AbloqovVisioplusBundle:Typeassurance')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Typeassurance entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('typeassurance'));
    }

    /**
     * Creates a form to delete a Typeassurance entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typeassurance_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
