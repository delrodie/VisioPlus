<?php

namespace Abloqov\VisioplusBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Abloqov\VisioplusBundle\Entity\Traitement;
use Abloqov\VisioplusBundle\Form\TraitementType;

/**
 * Traitement controller.
 *
 */
class TraitementController extends Controller
{

    /**
     * Lists all Traitement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $traitement = $em->getRepository('AbloqovVisioplusBundle:Traitement')->findAll();

        return $this->render('AbloqovVisioplusBundle:Traitement:index.html.twig', array(
            'traitement' => $traitement,
        ));
    }
    /**
     * Creates a new Traitement entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Traitement();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('traitement_new'));
        }

        return $this->render('AbloqovVisioplusBundle:Traitement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Traitement entity.
     *
     * @param Traitement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Traitement $entity)
    {
        $form = $this->createForm(new TraitementType(), $entity, array(
            'action' => $this->generateUrl('traitement_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer'));

        return $form;
    }

    /**
     * Displays a form to create a new Traitement entity.
     *
     */
    public function newAction()
    {
        $entity = new Traitement();
        $form   = $this->createCreateForm($entity);

        return $this->render('AbloqovVisioplusBundle:Traitement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Traitement entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AbloqovVisioplusBundle:Traitement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Traitement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AbloqovVisioplusBundle:Traitement:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Traitement entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AbloqovVisioplusBundle:Traitement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Traitement entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AbloqovVisioplusBundle:Traitement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Traitement entity.
    *
    * @param Traitement $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Traitement $entity)
    {
        $form = $this->createForm(new TraitementType(), $entity, array(
            'action' => $this->generateUrl('traitement_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Traitement entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AbloqovVisioplusBundle:Traitement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Traitement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('traitement_edit', array('id' => $id)));
        }

        return $this->render('AbloqovVisioplusBundle:Traitement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Traitement entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AbloqovVisioplusBundle:Traitement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Traitement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('traitement'));
    }

    /**
     * Creates a form to delete a Traitement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('traitement_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
