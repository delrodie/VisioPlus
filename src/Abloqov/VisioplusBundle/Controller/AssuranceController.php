<?php

namespace Abloqov\VisioplusBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Abloqov\VisioplusBundle\Entity\Assurance;
use Abloqov\VisioplusBundle\Form\AssuranceType;

/**
 * Assurance controller.
 *
 */
class AssuranceController extends Controller
{

    /**
     * Lists all Assurance entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $assurances = $em->getRepository('AbloqovVisioplusBundle:Assurance')->findAll();

        return $this->render('AbloqovVisioplusBundle:Assurance:index.html.twig', array(
            'assurances' => $assurances,
        ));
    }
    /**
     * Creates a new Assurance entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Assurance();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        
        $message = "Impossible d'enregistrer cette assurance";

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
        
        $message = "Assurance enregistrée avec succès!";

            return $this->redirect($this->generateUrl('assurance_show', array('id' => $entity->getId())));
        }

        return $this->render('AbloqovVisioplusBundle:Assurance:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'message'=> $message,
        ));
    }

    /**
     * Creates a form to create a Assurance entity.
     *
     * @param Assurance $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Assurance $entity)
    {
        $form = $this->createForm(new AssuranceType(), $entity, array(
            'action' => $this->generateUrl('assurance_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer'));

        return $form;
    }

    /**
     * Displays a form to create a new Assurance entity.
     *
     */
    public function newAction()
    {
        $entity = new Assurance();
        $form   = $this->createCreateForm($entity);
        
        $message = '';

        return $this->render('AbloqovVisioplusBundle:Assurance:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'message'=> $message,
        ));
    }

    /**
     * Finds and displays a Assurance entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AbloqovVisioplusBundle:Assurance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Assurance entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AbloqovVisioplusBundle:Assurance:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Assurance entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AbloqovVisioplusBundle:Assurance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Assurance entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AbloqovVisioplusBundle:Assurance:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Assurance entity.
    *
    * @param Assurance $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Assurance $entity)
    {
        $form = $this->createForm(new AssuranceType(), $entity, array(
            'action' => $this->generateUrl('assurance_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Assurance entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AbloqovVisioplusBundle:Assurance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Assurance entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('assurance_edit', array('id' => $id)));
        }

        return $this->render('AbloqovVisioplusBundle:Assurance:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Assurance entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AbloqovVisioplusBundle:Assurance')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Assurance entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('assurance'));
    }

    /**
     * Creates a form to delete a Assurance entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('assurance_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
