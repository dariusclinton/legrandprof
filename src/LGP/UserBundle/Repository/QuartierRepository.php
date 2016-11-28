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
    
    return $qb->getResult();
  }
  
  public function getByProf($id) {
    $qb = $this->_em->createQuery(
      'SELECT q.id, q.intitule, q.ville FROM LGPUserBundle:Quartier q INNER JOIN q.profs p WHERE p.id = :id'
    );
    
    $qb->setParameter('id', $id);
    
    return $qb->getResult();
  }

  public function getQuarterIntitulesByCity($ville){
    $query = $this->_em->createQuery("SELECT DISTINCT q.intitule FROM LGPUserBundle:Quartier q WHERE q.ville = :ville Group By q.intitule");
    $query->setParameter("ville",$ville);
    return $query->getResult();
  }

  public function getQuarterCitiesByProf($id)
  {
    $query = $this->_em->createQuery("SELECT DISTINCT q.ville FROM LGPUserBundle:Prof p JOIN p.quartierCibles q WHERE p.id = :id Group By q.ville");
    $query->setParameter("id", $id);
    return $query->getResult();
  }
}