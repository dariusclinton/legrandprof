<?php

namespace LGP\CourseBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * CategorieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategorieRepository extends EntityRepository
{

    public function getCategorieByIntitule($intitule)
    {
        $query = $this->_em->createQuery("SELECT c FROM LGPCourseBundle:Categorie c WHERE c.intitule LIKE :intitule");
        $query->setParameter("intitule", $intitule . "%");
        $query->getSingleResult();
    }

    public function getcountProfsByCategory($intitule)
    {
        $query = $this->_em->createQuery("SELECT p.id FROM LGPCourseBundle:Enseignement e JOIN e.cours c JOIN e.prof p WHERE c.id IN (SELECT c1.id FROM LGPCourseBundle:Cours c1 JOIN c1.categorie cat WHERE cat.intitule LIKE :intitule ) GROUP BY p.id");
//        $query = $this->_em->createQuery("SELECT c FROM LGPCourseBundle:Cours c WHERE c.intitule LIKE :intitule");
        $query->setParameter("intitule", $intitule . "%");
        $result = $query->getResult();
        return count($result);
    }

    public function getAllCategories($page = 1, $max = 10)
    {
        $query = $this->createQueryBuilder('c')
            ->select('c')
            ->setFirstResult(($page - 1) * $max)
            ->setMaxResults($max);
        $paginator = new Paginator($query);
        return $paginator;
    }

    public function getCategoriesNames()
    {
        $query = $this->_em->createQuery("SELECT cat.intitule FROM LGPCourseBundle:Categorie cat GROUP BY cat.id");
        $result = $query->getResult();
        return $result;
    }

}
