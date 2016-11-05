<?php

namespace LGP\CoreBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class ContactMessage
{
  private $id;

  /**
   * @var
   * @Assert\NotBlank(message="Cette valeur ne doit pas être vide")
   */
  private $nom;

  /**
   * @var
   * @Assert\NotBlank(message="Cette valeur ne doit pas être vide")
   */
  private $telephone;

  /**
   * @var
   * @Assert\Email(
   *   message="L'adresse email {{ value }} est invalide",
   *   checkMX=true
   * )
   */
  private $email;

  /**
   * @var
   * @Assert\NotBlank(message="Cette valeur ne doit pas être vide")
   */
  private $message;


  public function getId()
  {
    return $this->id;
  }

  /**
   * Set nom
   *
   * @param string $nom
   *
   * @return ContactMessage
   */
  public function setNom($nom)
  {
    $this->nom = $nom;

    return $this;
  }

  /**
   * Get nom
   *
   * @return string
   */
  public function getNom()
  {
    return $this->nom;
  }

  /**
   * Set telephone
   *
   * @param string $telephone
   *
   * @return ContactMessage
   */
  public function setTelephone($telephone)
  {
    $this->telephone = $telephone;

    return $this;
  }

  /**
   * Get telephone
   *
   * @return string
   */
  public function getTelephone()
  {
    return $this->telephone;
  }

  /**
   * Set email
   *
   * @param string $email
   *
   * @return ContactMessage
   */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get email
   *
   * @return string
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set message
   *
   * @param string $message
   *
   * @return ContactMessage
   */
  public function setMessage($message)
  {
    $this->message = $message;

    return $this;
  }

  /**
   * Get message
   *
   * @return string
   */
  public function getMessage()
  {
    return $this->message;
  }
}
