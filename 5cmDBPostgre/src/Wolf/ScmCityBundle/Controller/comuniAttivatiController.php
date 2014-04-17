<?php

namespace Wolf\ScmCityBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Wolf\ScmCityBundle\Entity\comuniAttivati;
use Wolf\ScmCityBundle\Form\comuniAttivatiType;

/**
 * comuniAttivati controller.
 *
 */
class comuniAttivatiController extends Controller
{

    /**
     * Lists all comuniAttivati entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository( 'WolfScmCityBundle:comuniAttivati' )->findAll();

        return $this->render( 'WolfScmCityBundle:comuniAttivati:index.html.twig', array(
                    'entities' => $entities,
                ) );
    }

    /**
     * Creates a new comuniAttivati entity.
     *
     */
    public function createAction( Request $request )
    {
        $entity = new comuniAttivati();
        $form = $this->createCreateForm( $entity );
        $form->handleRequest( $request );

        if ( $form->isValid() )
        {
            $em = $this->getDoctrine()->getManager();

            $entity->frontImage->move( __DIR__ . '/../../../../web/uploads/front', $entity->frontImage->getClientOriginalName() );
            $entity->setPathFrontImage( $entity->frontImage->getClientOriginalName() );

            $entity->frontImageBlurred->move( __DIR__ . '/../../../../web/uploads/front', $entity->frontImageBlurred->getClientOriginalName() );
            $entity->setPathFrontImageBlurred( $entity->frontImageBlurred->getClientOriginalName() );

            $em->persist( $entity );
            $em->flush();

            return $this->redirect( $this->generateUrl( 'comuni_show', array( 'id' => $entity->getId() ) ) );
        }

        return $this->render( 'WolfScmCityBundle:comuniAttivati:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                ) );
    }

    /**
     * Creates a form to create a comuniAttivati entity.
     *
     * @param comuniAttivati $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm( comuniAttivati $entity )
    {
        $form = $this->createForm( new comuniAttivatiType(), $entity, array(
            'action' => $this->generateUrl( 'comuni_create' ),
            'method' => 'POST',
                ) );

        $form->add( 'submit', 'submit', array( 'label' => 'Create' ) );

        return $form;
    }

    /**
     * Displays a form to create a new comuniAttivati entity.
     *
     */
    public function newAction()
    {
        $entity = new comuniAttivati();
        $form = $this->createCreateForm( $entity );

        return $this->render( 'WolfScmCityBundle:comuniAttivati:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                ) );
    }

    /**
     * Finds and displays a comuniAttivati entity.
     *
     */
    public function showAction( $id )
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository( 'WolfScmCityBundle:comuniAttivati' )->find( $id );

        if ( !$entity )
        {
            throw $this->createNotFoundException( 'Unable to find comuniAttivati entity.' );
        }

        $deleteForm = $this->createDeleteForm( $id );

        return $this->render( 'WolfScmCityBundle:comuniAttivati:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(), ) );
    }

    /**
     * Displays a form to edit an existing comuniAttivati entity.
     *
     */
    public function editAction( $id )
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository( 'WolfScmCityBundle:comuniAttivati' )->find( $id );

        if ( !$entity )
        {
            throw $this->createNotFoundException( 'Unable to find comuniAttivati entity.' );
        }

        $editForm = $this->createEditForm( $entity );
        $deleteForm = $this->createDeleteForm( $id );

        return $this->render( 'WolfScmCityBundle:comuniAttivati:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ) );
    }

    /**
     * Creates a form to edit a comuniAttivati entity.
     *
     * @param comuniAttivati $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm( comuniAttivati $entity )
    {
        $form = $this->createForm( new comuniAttivatiType(), $entity, array(
            'action' => $this->generateUrl( 'comuni_update', array( 'id' => $entity->getId() ) ),
            'method' => 'PUT',
                ) );

        $form->add( 'submit', 'submit', array( 'label' => 'Update' ) );

        return $form;
    }

    /**
     * Edits an existing comuniAttivati entity.
     *
     */
    public function updateAction( Request $request, $id )
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository( 'WolfScmCityBundle:comuniAttivati' )->find( $id );

        if ( !$entity )
        {
            throw $this->createNotFoundException( 'Unable to find comuniAttivati entity.' );
        }

        $deleteForm = $this->createDeleteForm( $id );
        $editForm = $this->createEditForm( $entity );
        $editForm->handleRequest( $request );

        if ( $editForm->isValid() )
        {
            $em->flush();

            return $this->redirect( $this->generateUrl( 'comuni_edit', array( 'id' => $id ) ) );
        }

        return $this->render( 'WolfScmCityBundle:comuniAttivati:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ) );
    }

    /**
     * Deletes a comuniAttivati entity.
     *
     */
    public function deleteAction( Request $request, $id )
    {
        $form = $this->createDeleteForm( $id );
        $form->handleRequest( $request );

        if ( $form->isValid() )
        {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository( 'WolfScmCityBundle:comuniAttivati' )->find( $id );

            if ( !$entity )
            {
                throw $this->createNotFoundException( 'Unable to find comuniAttivati entity.' );
            }

            $em->remove( $entity );
            $em->flush();
        }

        return $this->redirect( $this->generateUrl( 'comuni' ) );
    }

    /**
     * Creates a form to delete a comuniAttivati entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm( $id )
    {
        return $this->createFormBuilder()
                        ->setAction( $this->generateUrl( 'comuni_delete', array( 'id' => $id ) ) )
                        ->setMethod( 'DELETE' )
                        ->add( 'submit', 'submit', array( 'label' => 'Delete' ) )
                        ->getForm()
        ;
    }

    public function selectAction( $id )
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository( 'WolfScmCityBundle:comuniAttivati' )->find( $id );

        if ( !$entity )
        {
            throw $this->createNotFoundException( 'Non esiste un comune chiamato così.' );
        }

        return $this->render( 'WolfScmCityBundle:comuniAttivati:select.html.twig', array(
                    'entity' => $entity,
                ) );
    }

}
