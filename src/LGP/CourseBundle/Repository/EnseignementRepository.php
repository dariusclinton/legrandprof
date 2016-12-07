<?php

namespace LGP\CourseBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\Validator\Exception\InvalidArgumentException;

/**
 * EnseignementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EnseignementRepository extends EntityRepository
{

    /**
     * @param $cours
     * @param int $page
     * @param int $max
     * @return Paginator
     */
    public function getProfsByCours($cours, $page = 1, $max = 10)
    {
        if (!is_numeric($max)) {
            throw new InvalidArgumentException('Le nombre max par page est incorrect (valeur : ' . $max . ').');
        }

        $query = $this->_em->createQuery("SELECT DISTINCT e, p FROM LGPCourseBundle:Enseignement e JOIN e.prof p WHERE e.cours = :cours GROUP BY p.id");
        $query->setParameter('cours', $cours)
            ->setFirstResult(($page - 1) * $max)
            ->setMaxResults($max);
        $paginator = new Paginator($query);
        return $paginator;
    }

    public function getProfsByName($name, $page = 1, $max = 10)
    {
        if (!is_numeric($max)) {
            throw new InvalidArgumentException('Le nombre max par page est incorrect (valeur : ' . $max . ').');
        }

        $query = $this->_em->createQuery("SELECT DISTINCT e, p FROM LGPCourseBundle:Enseignement e JOIN e.prof p WHERE p.nom LIKE :nom OR p.prenoms LIKE :nom GROUP BY p.id");
        $query->setParameter("nom", "%" . $name . "%")
            ->setFirstResult(($page - 1) * $max)
            ->setMaxResults($max);
        $paginator = new Paginator($query);
        return $paginator;
    }

    public function getProfsByCategory($category_name, $page = 1, $max = 10)
    {
        if (!is_numeric($max)) {
            throw new InvalidArgumentException('Le nombre max par page est incorrect (valeur : ' . $max . ').');
        }

        $query = $this->_em->createQuery("SELECT e, p FROM LGPCourseBundle:Enseignement e JOIN e.cours c JOIN e.prof p WHERE c.id IN (SELECT c1.id FROM LGPCourseBundle:Cours c1 JOIN c1.categorie cat WHERE cat.intitule LIKE :intitule ) GROUP BY p.id");
        $query->setParameter("intitule", "%" . $category_name . "%")
            ->setFirstResult(($page - 1) * $max)
            ->setMaxResults($max);
        $paginator = new Paginator($query);
        return $paginator;
    }

    /**
     * @param $cours
     * @param $quartier
     * @param int $page
     * @param int $max
     * @return Paginator
     */
    public function getProfsByCoursAndCity($cours, $city, $page = 1, $max = 10)
    {
        if (!is_numeric($max)) {
            throw new InvalidArgumentException('Le nombre max par page est incorrect (valeur : ' . $max . ').');
        }

        $query = $this->_em->createQuery("SELECT DISTINCT e, p FROM LGPCourseBundle:Enseignement e JOIN e.prof p WHERE e.cours = :cours AND p.id IN (SELECT p1.id FROM LGPUserBundle:Quartier q JOIN q.profs p1 WHERE q.ville = :ville) GROUP BY p.id");
        $query->setParameter('cours', $cours)
            ->setParameter('ville', $city)
            ->setFirstResult(($page - 1) * $max)
            ->setMaxResults($max);
        $paginator = new Paginator($query);
        return $paginator;
    }

    public function getProfsByCoursAndQuarter($course, $quarter, $page = 1, $max = 10)
    {
        if (!is_numeric($max)) {
            throw new InvalidArgumentException('Le nombre max par page est incorrect (valeur : ' . $max . ').');
        }

        $query = $this->_em->createQuery("SELECT DISTINCT e, p FROM LGPCourseBundle:Enseignement e JOIN e.prof p WHERE e.cours = :course AND p.id IN (SELECT p1.id FROM LGPUserBundle:Quartier q JOIN q.profs p1 WHERE q.intitule = :intitule) GROUP BY p.id");
        $query->setParameter('course', $course)
            ->setParameter('intitule', $quarter)
            ->setFirstResult(($page - 1) * $max)
            ->setMaxResults($max);
        $paginator = new Paginator($query);
        return $paginator;
    }

    public function getProfsByCityAndQuarter($city, $intitule, $page = 1, $max = 10)
    {
        if (!is_numeric($max)) {
            throw new InvalidArgumentException('Le nombre max par page est incorrect (valeur : ' . $max . ').');
        }

        $query = $this->_em->createQuery("SELECT DISTINCT e, p FROM LGPCourseBundle:Enseignement e JOIN e.prof p WHERE p.id IN (SELECT p1.id FROM LGPUserBundle:Quartier q JOIN q.profs p1 WHERE q.ville = :city AND q.intitule = :intitule) GROUP BY p.id")
            ->setParameter('city', $city)
            ->setParameter('intitule', $intitule)
            ->setFirstResult(($page - 1) * $max)
            ->setMaxResults($max);
        $paginator = new Paginator($query);
        return $paginator;
    }

    public function getProfsByCoursAndCityAndQuarter($course, $city, $quarter, $page = 1, $max = 10)
    {
        if (!is_numeric($max)) {
            throw new InvalidArgumentException('Le nombre max par page est incorrect (valeur : ' . $max . ').');
        }

        $query = $this->_em->createQuery("SELECT DISTINCT e, p FROM LGPCourseBundle:Enseignement e JOIN e.prof p WHERE e.cours = :course AND p.id IN (SELECT p1.id FROM LGPUserBundle:Quartier q JOIN q.profs p1 WHERE q.ville = :city AND q.intitule = :intitule) GROUP BY p.id");
        $query->setParameter('course', $course)
            ->setParameter('city', $city)
            ->setParameter('intitule', $quarter)
            ->setFirstResult(($page - 1) * $max)
            ->setMaxResults($max);
        $paginator = new Paginator($query);
        return $paginator;
    }

    /**
     *
     * @param type $ville
     * @param type $page
     * @param type $max
     * @return Paginator
     * @throws InvalidArgumentException
     */
    public function getProfsByCity($ville, $page = 1, $max = 10)
    {
        if (!is_numeric($max)) {
            throw new InvalidArgumentException('Le nombre max par page est incorrect (valeur : ' . $max . ').');
        }
        $query = $this->_em->createQuery("SELECT DISTINCT e, p FROM LGPCourseBundle:Enseignement e JOIN e.prof p WHERE p.id IN(SELECT p1.id FROM LGPUserBundle:Quartier q JOIN q.profs p1 WHERE q.ville = :ville) GROUP BY p.id");
        $query->setParameter('ville', $ville)
            ->setFirstResult(($page - 1) * $max)
            ->setMaxResults($max);
        $paginator = new Paginator($query);
        return $paginator;
    }
    
    public function getCountProfsByCity($ville)
    {
        $query = $this->_em->createQuery("SELECT DISTINCT e, p FROM LGPCourseBundle:Enseignement e JOIN e.prof p WHERE p.id IN(SELECT p1.id FROM LGPUserBundle:Quartier q JOIN q.profs p1 WHERE q.ville = :ville) GROUP BY p.id");
        $query->setParameter('ville', $ville);
        $profsNumber = $query->getResult();
        return count($profsNumber);
    }

    /**
     *
     * @param type $prof
     * @return type
     */
    public function getCoursByProf($prof)
    {
        $query = $this->_em->createQuery("SELECT DISTINCT e, c FROM LGPCourseBundle:Enseignement e JOIN e.cours c WHERE e.prof = :prof GROUP BY c.id");

        $query->setParameter('prof', $prof);
//        $query->setMaxResults(2);
        return $query->getResult();
    }

    public function getAllProfsEnseignants($page = 1, $max = 10)
    {
        if (!is_numeric($max)) {
            throw new InvalidArgumentException('Le nombre max par page est incorrect (valeur : ' . $max . ').');
        }

        $query = $this->_em->createQuery("SELECT DISTINCT e, p FROM LGPCourseBundle:Enseignement e JOIN e.prof p GROUP BY p.id");
        $query->setFirstResult(($page - 1) * $max)
            ->setMaxResults($max);
        $paginator = new Paginator($query);
        return $paginator;
    }

    public function getClasseByCoursAndProf($profId, $coursId)
    {
        $query = $this->_em->createQuery("SELECT e.classe, e.prix FROM LGPCourseBundle:Enseignement e JOIN e.cours c JOIN e.prof p WHERE p.id = :profId AND c.id = :coursId");
        $query->setParameter('profId', $profId)
            ->setParameter('coursId', $coursId);
        return $query->getResult();
    }

    public function getPrixProf($prof)
    {
        $query = $this->_em->createQuery("SELECT Min(e.prix) FROM LGPCourseBundle:Enseignement e WHERE e.prof = :prof");
        $query->setParameter('prof', $prof);
        return $query->getSingleScalarResult();
    }

    public function getSimilarProfs($profId)
    {
        $query = $this->_em->createQuery("SELECT e, p FROM LGPCourseBundle:Enseignement e JOIN e.cours c JOIN e.prof p WHERE c.id IN (SELECT c1.id FROM LGPCourseBundle:Enseignement e1 JOIN e1.cours c1 JOIN e1.prof p1 WHERE p1.id = :profId GROUP BY c1.id) AND p.id <> :profId GROUP BY p.id");
        $query->setParameter('profId', $profId)
            ->setMaxResults(3);
        return $query->getResult();
    }

    public function getProfsNames()
    {
        $query = $this->_em->createQuery("SELECT p.nom, p.prenoms FROM LGPCourseBundle:Enseignement e JOIN e.prof p GROUP BY p.id");
        return $query->getResult();
    }

}
