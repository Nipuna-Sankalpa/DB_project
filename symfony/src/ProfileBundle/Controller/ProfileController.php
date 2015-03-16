<?php

namespace ProfileBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ProfileBundle\Entity\Profile;
use ProfileBundle\Form\ProfileType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Profile controller.
 *
 */
class ProfileController extends Controller {

    /**
     * Lists all Profile entities.
     *
     */
    public function indexAction($email) {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ProfileBundle:Profile')->findAll();

        return $this->render('ProfileBundle:Profile:index.html.twig', array(
                    'entities' => $entities,
                    'email' => $email,
        ));
    }

    /**
     * Finds and displays a Profile entity.
     *
     */
    public function showAction($email) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProfileBundle:Profile')->find($email);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Profile entity.');
        }

        $deleteForm = $this->createDeleteForm($email);

        return $this->render('ProfileBundle:Profile:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Profile entity.
     *
     */
    public function editAction($email) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ProfileBundle:Profile')->find($email);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Profile entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($email);

        return $this->render('ProfileBundle:Profile:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'email' => $email,
        ));
    }

    /**
     * Creates a form to edit a Profile entity.
     *
     * @param Profile $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Profile $entity) {
        $form = $this->createForm(new ProfileType(), $entity, array(
            'action' => $this->generateUrl('profile_update', array('email' => $entity->getEmail())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update', 'attr' => array('class' => 'btn btn-success')));
        return $form;
    }

    /**
     * Edits an existing Profile entity.
     *
     */
    public function updateAction(Request $request, $email) {
        if ($request->getMethod() == "POST") {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProfileBundle:Profile')->find($email);

            $entity->setFirstName($request->get('firstName'));
            $entity->setLastName($request->get('lastName'));
            $entity->setStreetNumber($request->get('streetNumber'));
            $entity->setStreet($request->get('street'));
            $entity->setCity($request->get('city'));
            $entity->setCountry($request->get('country'));
            $entity->setDob($request->get('dob'));
            $entity->setRelationshipStatus($request->get('relationship'));
            $entity->setHometown($request->get('hometown'));
            $entity->setGender($request->get('gender'));
            $entity->setReligion($request->get('religion'));
            $entity->setdescription($request->get('description'));
            $entity->setMobileNumber($request->get('mobileNumber'));
            $entity->setHomePhone($request->get('homePhone'));
            $entity->setSchool($request->get('school'));
            $entity->setHigherEducation($request->get('higherEducation'));
            $entity->setBlog($request->get('blog'));
            $entity->setLinkedin($request->get('linkedIn'));
            $entity->setFavoriteSport($request->get('favoriteSport'));
            $entity->setFavoriteFilm($request->get('favoriteFilm'));
            $entity->setFavoriteSong($request->get('favoriteSong'));
            $entity->setFavoriteDrink($request->get('favoriteDrink'));
            $entity->setFavoriteFood($request->get('favoriteFood'));
            $entity->setFavoriteBook($request->get('favoriteBook'));

            /*             * ****************************upload image**************************** */
            
            if ($_FILES['images']['tmp_name']!=NULL) {
                $entity->setImage($this->uploadImage($_FILES['images']['tmp_name']));
            }

            /*             * ****************************upload image**************************** */


            if ($this->checkPassword($request->get('oldpassword'), $request->get('newpassword1'), $request->get('newpassword2'), $entity)) {
                $entity->setPassword($request->get('newpassword1'));
            } else {
                
            }
            $em->flush();
            return $this->redirect($this->generateUrl('profile_show', array('email' => $email)));
        }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($entity);
        return $this->render('ProfileBundle:Profile:edit.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    'edit_form' => $editForm->createView(),
                    'email' => $email,
        ));
    }

    private function uploadImage($file) {

        $img_size = getimagesize($file);
        if (isset($file) && $img_size != FALSE) {
            $fileContent = file_get_contents($file);
            if ($img_size < 3000000) {
                return $fileContent;
            } else {
                return new Response('size too much');
            }
        } else {
            return new Response('Error');
        }
    }

    private function checkPassword($oldpass, $newpass1, $newpass2, $entity) {
        if ($oldpass == $entity->getPassword()) {
            if ($newpass1 == $newpass2 && $oldpass != $newpass1) {
                return true;
            }
        }
        return false;
    }

    /**
     * Deletes a Profile entity.
     *
     */
    public function deleteAction(Request $request, $email) {
        $form = $this->createDeleteForm($email);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ProfileBundle:Profile')->find($email);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Profile entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('profile', array('email' => $email)));
    }

    /**
     * Creates a form to delete a Profile entity by email.
     *
     * @param mixed $email The entity email
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($email) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('profile_delete', array('email' => $email)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete', 'attr' => array('class' => 'btn btn-success')))
                        ->getForm()
        ;
    }

}
