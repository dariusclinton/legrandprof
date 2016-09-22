<?php

namespace LGP\UserBundle\Repository;

/**
 * QuartierRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QuartierRepository extends \Doctrine\ORM\EntityRepository
{
  public function getByVille($ville) {
    $qb = $this->_em->createQuery('SELECT q.intitule FROM LGPUserBundle:Quartier q WHERE q.ville = :ville')
        ->setParameter('ville', $ville);
    
    return $qb;
  }
}