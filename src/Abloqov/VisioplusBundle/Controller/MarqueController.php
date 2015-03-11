<?php

namespace Abloqov\VisioplusBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Abloqov\VisioplusBundle\Entity\Marque;
use Abloqov\VisioplusBundle\Form\MarqueType;

//use Abloqov\VisioplusBundle\Repository\MarqueRepository;

/**
 * Marque controller.
 *
 */
class MarqueController extends Controller
{

    /**
     * Lists all Marque entities.
     *
     */
    public function indexAction($id = null)
    {
        $em = $this->getDoctrine()->getManager();

        $marques = $em->getRepository('AbloqovVisioplusBundle:Marque')->findAll();
        
        $nombreMonture = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreMontureMarque($id);
        
        $nbmarques = $em->getRepository('AbloqovVisioplusBundle:Marque')->nombreTotalMarque();

        return $this->render('AbloqovVisioplusBundle:Marque:index.html.twig', array(
            'marques' => $marques,
            'nbmarques'=> $nbmarques,
            'nombreMonture' => $nombreMonture,
        ));
    }
    /**
     * Creates a new Marque entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Marque();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        
        $message = "Echec enregistrement";
        
        $em = $this->getDoctrine()->getManager();
        
        $nbmarques = $em->getRepository('AbloqovVisioplusBundle:Marque')->nombreTotalMarque();

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            
            $message = "Marque de monture enregistrée avec succès! ";

            return $this->redirect($this->generateUrl('marque_new'));
        }

        return $this->render('AbloqovVisioplusBundle:Marque:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'message'=> $message,
            'nbmarques'=> $nbmarques,
        ));
    }

    /**
     * Creates a form to create a Marque entity.
     *
     * @param Marque $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Marque $entity)
    {
        $form = $this->createForm(new MarqueType(), $entity, array(
            'action' => $this->generateUrl('marque_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer'));

        return $form;
    }

    /**
     * Displays a form to create a new Marque entity.
     *
     */
    public function newAction()
    {
        $entity = new Marque();
        $form   = $this->createCreateForm($entity);
        
        $message = '';
        
        $em = $this->getDoctrine()->getManager();
        
        $nbmarques = $em->getRepository('AbloqovVisioplusBundle:Marque')->nombreTotalMarque();

        return $this->render('AbloqovVisioplusBundle:Marque:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'message'=> $message,
            'nbmarques'=> $nbmarques,
        ));
    }

    /**
     * Finds and displays a Marque entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $marque = $em->getRepository('AbloqovVisioplusBundle:Marque')->find($id);
        
        $nbmarques = $em->getRepository('AbloqovVisioplusBundle:Marque')->nombreTotalMarque();

        if (!$marque) {
            throw $this->createNotFoundException('Aucune marque trouvée');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AbloqovVisioplusBundle:Marque:show.html.twig', array(
            'marque'      => $marque,
            'delete_form' => $deleteForm->createView(),
            'nbmarques'   => $nbmarques,
        ));
    }

    /**
     * Displays a form to edit an existing Marque entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AbloqovVisioplusBundle:Marque')->find($id);
        
        $message = '';
        
        $nbmarques = $em->getRepository('AbloqovVisioplusBundle:Marque')->nombreTotalMarque();

        if (!$entity) {
            throw $this->createNotFoundException('Aucune marque trouvée');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AbloqovVisioplusBundle:Marque:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'nbmarques'    => $nbmarques,
            'message'     => $message,
        ));
    }

    /**
    * Creates a form to edit a Marque entity.
    *
    * @param Marque $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Marque $entity)
    {
        $form = $this->createForm(new MarqueType(), $entity, array(
            'action' => $this->generateUrl('marque_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing Marque entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AbloqovVisioplusBundle:Marque')->find($id);
        
        //$em = $this->getDoctrine()->getManager();
        
        $nbmarques = $em->getRepository('AbloqovVisioplusBundle:Marque')->nombreTotalMarque();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Marque entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('marque'));
        }

        return $this->render('AbloqovVisioplusBundle:Marque:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'nbmarques'   => $nbmarques,
        ));
    }
    /**
     * Deletes a Marque entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AbloqovVisioplusBundle:Marque')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Marque entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('marque'));
    }

    /**
     * Creates a form to delete a Marque entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('marque_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
    
    /**
     * Listes des marques avec la quantité de montures
     *
     */
    public function nbmontureAction($id = null)
    {
        $em = $this->getDoctrine()->getManager();
        
        $nombreMonture = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreMontureMarque($id);
        
        if($nombreMonture){
            $nombreMonture = $nombreMonture;
        } else {
            $nombreMonture = '-';
        }

        return $this->render('AbloqovVisioplusBundle:Marque:nbmonture.html.twig', array(
            'nombreMonture' => $nombreMonture,
        ));
    }
    
    /**
     * Le nombre total de montures d'enfant de la marque dans le système
     *
     */
    public function nbmontureenfantAction($id = null)
    {
        $em = $this->getDoctrine()->getManager();

        $genre = 'ENFANT';
        
        $montureEnfant = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreMontureGenre($id, $genre);
        
        if ($montureEnfant){
            $montureEnfant = $montureEnfant;
        } else{
           $montureEnfant = '-';
        }

        return $this->render('AbloqovVisioplusBundle:Marque:nbmontureenfant.html.twig', array(
            'montureEnfant' => $montureEnfant,
        ));
    }
    
    /**
     * Le nombre de total de montures femmes de la marque dans le système
     *
     */
    public function nbmonturefemmeAction($id = null)
    {
        $em = $this->getDoctrine()->getManager();

        $genre = 'FEMME';
        
        $montureFemme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreMontureGenre($id, $genre);
        
        if ($montureFemme){
            $montureFemme = $montureFemme;
        } else{
           $montureFemme = '-';
        }

        return $this->render('AbloqovVisioplusBundle:Marque:nbmonturefemme.html.twig', array(
            'montureFemme' => $montureFemme,
        ));
    }
    
    /**
     * Le nombre de total de montures hommes de la marque dans le système
     *
     */
    public function nbmonturehommeAction($id = null)
    {
        $em = $this->getDoctrine()->getManager();

        $genre = 'HOMME';
        
        $montureHomme = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreMontureGenre($id, $genre);
        
        if ($montureHomme){
            $montureHomme = $montureHomme;
        } else{
           $montureHomme = '-';
        }

        return $this->render('AbloqovVisioplusBundle:Marque:nbmonturehomme.html.twig', array(
            'montureHomme' => $montureHomme,
        ));
    }
    
    /**
     * Le nombre de total de montures mixtes de la marque dans le système
     *
     */
    public function nbmonturemixteAction($id = null)
    {
        $em = $this->getDoctrine()->getManager();

        $genre = 'MIXTE';
        
        $montureMixte = $em->getRepository('AbloqovVisioplusBundle:Monture')->nombreMontureGenre($id, $genre);
        
        if ($montureMixte){
            $montureMixte = $montureMixte;
        } else{
           $montureMixte = '-';
        }

        return $this->render('AbloqovVisioplusBundle:Marque:nbmonturemixte.html.twig', array(
            'montureMixte' => $montureMixte,
        ));
    }
}
