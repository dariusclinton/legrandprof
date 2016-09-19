<?php

namespace LGP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use LGP\UserBundle\Entity\Message;
use LGP\UserBundle\Form\MessageType;

class MessageController extends Controller {

  /**
   * 
   * @return type
   * @throws type
   */
  public function sendAction() {
    $user = $this->getUser();
    
    if ($user === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $rep = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('LGPUserBundle:Message');
    
    $messages = $rep->findBy(array('expediteur' => $user));
    
    return $this->render('LGPUserBundle:Message:send.html.twig', array(
      'messages' => $messages
    ));
  }

  /**
   * 
   * @return type
   * @throws type
   */
  public function receiveAction() {
    $user = $this->getUser();
    
    if ($user === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $rep = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('LGPUserBundle:Message');
    
    $messages = $rep->findBy(array('recepteur' => $user));
    
    return $this->render('LGPUserBundle:Message:receive.html.twig', array(
      'messages' => $messages
    ));
  }

  /**
   * 
   * @param Request $request
   * @return type
   * @throws type
   */
  public function newAction(Request $request) {
    $user = $this->getUser();
    
    if ($user === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $message = new Message();
    
    $form = $this->createForm(MessageType::class, $message);
    
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $message->setExpediteur($user);
      
      $em = $this->getDoctrine()->getManager();
      $em->persist($message);
      $em->flush();
      
      return $this->redirectToRoute('lgp_user_message_send');
    }
    
    return $this->render('LGPUserBundle:Message:new.html.twig', array(
      'form' => $form->createView()
    ));
  }
  
  /**
   * 
   * @param Message $message
   * @return type
   * @throws type
   */
  public function deleteAction(Message $message) {
    $user = $this->getUser();
    
    if ($user === null) {
      throw $this->createNotFoundException('Utilisateur inconnu !');
    }
    
    $em = $this->getDoctrine()->getManager();
    
    $em->remove($message);
    $em->flush();
    
    return $this->redirectToRoute('lgp_user_message_send');
  }
}
