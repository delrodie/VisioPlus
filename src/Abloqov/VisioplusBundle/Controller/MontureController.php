<?php

namespace Abloqov\VisioplusBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Abloqov\VisioplusBundle\Entity\Monture;
use Abloqov\VisioplusBundle\Form\MontureType;

/**
 * Monture controller.
 *
 */
class MontureController extends Controller
{

    /**
     * Lists all Monture entities.
     *
     */
    public function indexAction()
    {
        $message = '';
        
        $em = $this->getDoctrine()->getManager();

        $montures = $em->getRepository('AbloqovVisioplusBundle:Monture')->findAll();
        
        $nombreTotalMonture = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMonture();
        
        $nombreTotalMontureenfant = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreToatlMontureEnfant();
        
        $nombreTotalMontureFemme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureFemme();
        
        $nombreTotalMontureHomme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureHomme();
        
        $nombreTotalMontureMixte = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureMixte();
        
        $nombreTotalMontureSolaire = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureSolaire();

        return $this->render('AbloqovVisioplusBundle:Monture:index.html.twig', array(
            'montures' => $montures,
            'message'  => $message,
            'MontureEnfant' => $nombreTotalMontureenfant,
            'MontureFemme' => $nombreTotalMontureFemme,
            'MontureHomme' => $nombreTotalMontureHomme,
            'MontureMixte' => $nombreTotalMontureMixte,
            'MontureSolaire' => $nombreTotalMontureSolaire,
            'NombreTotalMonture' => $nombreTotalMonture,
        ));
    }
    /**
     * Creates a new Monture entity.
     *
     */
    public function createAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $nombreTotalMonture = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMonture();
        
        $nombreTotalMontureenfant = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreToatlMontureEnfant();
        
        $nombreTotalMontureFemme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureFemme();
        
        $nombreTotalMontureHomme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureHomme();
        
        $nombreTotalMontureMixte = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureMixte();
        
        $nombreTotalMontureSolaire = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureSolaire();
        
        
        $entity = new Monture();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        
        $message = "Impossible d'enregistrer cette monture";

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            
            $message = "Monture enregistrée avec succès";

            return $this->redirect($this->generateUrl('monture_new'));
        }

        return $this->render('AbloqovVisioplusBundle:Monture:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'message'=> $message,
            'MontureEnfant' => $nombreTotalMontureenfant,
            'MontureFemme' => $nombreTotalMontureFemme,
            'MontureHomme' => $nombreTotalMontureHomme,
            'MontureMixte' => $nombreTotalMontureMixte,
            'MontureSolaire' => $nombreTotalMontureSolaire,
            'NombreTotalMonture' => $nombreTotalMonture,
        ));
    }

    /**
     * Creates a form to create a Monture entity.
     *
     * @param Monture $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Monture $entity)
    {
        $form = $this->createForm(new MontureType(), $entity, array(
            'action' => $this->generateUrl('monture_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer'));

        return $form;
    }

    /**
     * Displays a form to create a new Monture entity.
     *
     */
    public function newAction()
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $nombreTotalMonture = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMonture();
        
        $nombreTotalMontureenfant = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreToatlMontureEnfant();
        
        $nombreTotalMontureFemme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureFemme();
        
        $nombreTotalMontureHomme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureHomme();
        
        $nombreTotalMontureMixte = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureMixte();
        
        $nombreTotalMontureSolaire = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureSolaire();
        
        $entity = new Monture();
        $form   = $this->createCreateForm($entity);
        
        $message = '';

        return $this->render('AbloqovVisioplusBundle:Monture:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'message'=> $message,
            'MontureEnfant' => $nombreTotalMontureenfant,
            'MontureFemme' => $nombreTotalMontureFemme,
            'MontureHomme' => $nombreTotalMontureHomme,
            'MontureMixte' => $nombreTotalMontureMixte,
            'MontureSolaire' => $nombreTotalMontureSolaire,
            'NombreTotalMonture' => $nombreTotalMonture,
        ));
    }

    /**
     * Finds and displays a Monture entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $nombreTotalMonture = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMonture();
        
        $nombreTotalMontureenfant = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreToatlMontureEnfant();
        
        $nombreTotalMontureFemme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureFemme();
        
        $nombreTotalMontureHomme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureHomme();
        
        $nombreTotalMontureMixte = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureMixte();
        
        $nombreTotalMontureSolaire = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureSolaire();

        $monture = $em->getRepository('AbloqovVisioplusBundle:Monture')->find($id);

        if (!$monture) {
            throw $this->createNotFoundException('Unable to find Monture entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AbloqovVisioplusBundle:Monture:show.html.twig', array(
            'monture'      => $monture,
            'delete_form' => $deleteForm->createView(),
            'MontureEnfant' => $nombreTotalMontureenfant,
            'MontureFemme' => $nombreTotalMontureFemme,
            'MontureHomme' => $nombreTotalMontureHomme,
            'MontureMixte' => $nombreTotalMontureMixte,
            'MontureSolaire' => $nombreTotalMontureSolaire,
            'NombreTotalMonture' => $nombreTotalMonture,
        ));
    }

    /**
     * Displays a form to edit an existing Monture entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $nombreTotalMonture = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMonture();
        
        $nombreTotalMontureenfant = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreToatlMontureEnfant();
        
        $nombreTotalMontureFemme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureFemme();
        
        $nombreTotalMontureHomme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureHomme();
        
        $nombreTotalMontureMixte = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureMixte();
        
        $nombreTotalMontureSolaire = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureSolaire();
        
        $message = "Impossible de faire cette modification";

        $entity = $em->getRepository('AbloqovVisioplusBundle:Monture')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Monture entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AbloqovVisioplusBundle:Monture:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'MontureEnfant' => $nombreTotalMontureenfant,
            'MontureFemme' => $nombreTotalMontureFemme,
            'MontureHomme' => $nombreTotalMontureHomme,
            'MontureMixte' => $nombreTotalMontureMixte,
            'MontureSolaire' => $nombreTotalMontureSolaire,
            'NombreTotalMonture' => $nombreTotalMonture,
            'message' => $message,
        ));
    }

    /**
    * Creates a form to edit a Monture entity.
    *
    * @param Monture $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Monture $entity)
    {
        $form = $this->createForm(new MontureType(), $entity, array(
            'action' => $this->generateUrl('monture_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing Monture entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $nombreTotalMonture = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMonture();
        
        $nombreTotalMontureenfant = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreToatlMontureEnfant();
        
        $nombreTotalMontureFemme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureFemme();
        
        $nombreTotalMontureHomme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureHomme();
        
        $nombreTotalMontureMixte = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureMixte();
        
        $nombreTotalMontureSolaire = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureSolaire();

        
        $entity = $em->getRepository('AbloqovVisioplusBundle:Monture')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Aucune monture trouvée.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('monture_show', array('id' => $id)));
        }

        return $this->render('AbloqovVisioplusBundle:Monture:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'MontureEnfant' => $nombreTotalMontureenfant,
            'MontureFemme' => $nombreTotalMontureFemme,
            'MontureHomme' => $nombreTotalMontureHomme,
            'MontureMixte' => $nombreTotalMontureMixte,
            'MontureSolaire' => $nombreTotalMontureSolaire,
            'NombreTotalMonture' => $nombreTotalMonture,
        ));
    }
    /**
     * Deletes a Monture entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AbloqovVisioplusBundle:Monture')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Monture entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('monture'));
    }

    /**
     * Creates a form to delete a Monture entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('monture_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }    
    
    /**
     * Lists all Monture entities.
     *
     */
    public function listeAction($id = null)
    {
        $message = '';
        
        $em = $this->getDoctrine()->getManager();
        
        $choix = 'MARQUE';

        $montures = $em->getRepository('AbloqovVisioplusBundle:Monture')->listeMontures($id);
        
        $nombreTotalMonture = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMonture();
        
        $nombreTotalMontureenfant = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreToatlMontureEnfant();
        
        $nombreTotalMontureFemme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureFemme();
        
        $nombreTotalMontureHomme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureHomme();
        
        $nombreTotalMontureMixte = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureMixte();
        
        $nombreTotalMontureSolaire = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreTotalMontureSolaire();

        return $this->render('AbloqovVisioplusBundle:Monture:liste.html.twig', array(
            'montures' => $montures,
            'message'  => $message,
            'MontureEnfant' => $nombreTotalMontureenfant,
            'MontureFemme' => $nombreTotalMontureFemme,
            'MontureHomme' => $nombreTotalMontureHomme,
            'MontureMixte' => $nombreTotalMontureMixte,
            'MontureSolaire' => $nombreTotalMontureSolaire,
            'NombreTotalMonture' => $nombreTotalMonture,
        ));
    }
}
