<?php

namespace LGP\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation")
 * @ORM\Entity(repositoryClass="LGP\CourseBundle\Repository\EvaluationRepository")
 */
class Evaluation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

      /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=true)
     */
    private $lieu;
    
    /**
     * @var \LGP\CourseBundle\Entity\Cours
     * 
     * @ORM\ManyToOne(targetEntity="LGP\CourseBundle\Entity\Cours", inversedBy="evaluations")
     */
    private $cours;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Evaluation
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Evaluation
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    
        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set cours
     *
     * @param \LGP\CourseBundle\Entity\Cours $cours
     *
     * @return Evaluation
     */
    public function setCours(\LGP\CourseBundle\Entity\Cours $cours = null)
    {
        $this->cours = $cours;
    
        return $this;
    }

    /**
     * Get cours
     *
     * @return \LGP\CourseBundle\Entity\Cours
     */
    public function getCours()
    {
        return $this->cours;
    }
}
