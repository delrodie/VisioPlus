<?php

namespace Abloqov\VisioplusBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Abloqov\VisioplusBundle\Entity\Typeverre;
use Abloqov\VisioplusBundle\Form\TypeverreType;

/**
 * Typeverre controller.
 *
 */
class TypeverreController extends Controller
{

    /**
     * Lists all Typeverre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeverre = $em->getRepository('AbloqovVisioplusBundle:Typeverre')->findAll();

        return $this->render('AbloqovVisioplusBundle:Typeverre:index.html.twig', array(
            'typeverre' => $typeverre,
        ));
    }
    /**
     * Creates a new Typeverre entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Typeverre();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        
        $message = "Echec d'enregistrement";

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            
            $message = "Type de verre enregistré avec succès!";

            return $this->redirect($this->generateUrl('typeverre_new'));
        }

        return $this->render('AbloqovVisioplusBundle:Typeverre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Typeverre entity.
     *
     * @param Typeverre $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Typeverre $entity)
    {
        $form = $this->createForm(new TypeverreType(), $entity, array(
            'action' => $this->generateUrl('typeverre_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrement'));

        return $form;
    }

    /**
     * Displays a form to create a new Typeverre entity.
     *
     */
    public function newAction()
    {
        $entity = new Typeverre();
        $form   = $this->createCreateForm($entity);
        
        $message = '';

        return $this->render('AbloqovVisioplusBundle:Typeverre:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'message'=> $message,
        ));
    }

    /**
     * Finds and displays a Typeverre entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AbloqovVisioplusBundle:Typeverre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Typeverre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AbloqovVisioplusBundle:Typeverre:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Typeverre entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AbloqovVisioplusBundle:Typeverre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Typeverre entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AbloqovVisioplusBundle:Typeverre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Typeverre entity.
    *
    * @param Typeverre $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Typeverre $entity)
    {
        $form = $this->createForm(new TypeverreType(), $entity, array(
            'action' => $this->generateUrl('typeverre_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Typeverre entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AbloqovVisioplusBundle:Typeverre')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Typeverre entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('typeverre_edit', array('id' => $id)));
        }

        return $this->render('AbloqovVisioplusBundle:Typeverre:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Typeverre entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AbloqovVisioplusBundle:Typeverre')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Typeverre entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('typeverre'));
    }

    /**
     * Creates a form to delete a Typeverre entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typeverre_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
