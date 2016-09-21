<?php

namespace LGP\CourseBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * CoursRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CoursRepository extends EntityRepository {

    /**
     * 
     * @param type $cat
     * @param type $page
     * @param type $max
     * @return Paginator
     */
    public function getAllCoursesByCategory($cat, $page = 1, $max = 10) {
        $query = $this->_em->createQuery('SELECT c FROM LGPCourseBundle:Cours c WHERE c.categorie = :categorie');
        $query->setParameter('categorie', $cat)
                ->setFirstResult(($page - 1) * $max)
                ->setMaxResults($max);

        return new Paginator($query);
    }

    public function getCoursByIntitule($intitule) {
        $query = $this->_em->createQuery("SELECT c FROM LGPCourseBundle:Cours c WHERE c.intitule LIKE :intitule");
        $query->setParameter("intitule", $intitule . "%")
                ->setMaxResults(1);
        return $query->getOneOrNullResult();
    }
    
    public function getIntituleCourse(){
        $query = $this->_em->createQuery("SELECT c.intitule FROM LGPCourseBundle:Cours c");
        return $query->getResult();
    }

}
