<?php
namespace Gripli\CvBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Cv
{
      /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @MongoDB\string $title
     */
    protected $title;

        /**
     * @MongoDB\string $name
     */
    protected $name;
    
        /**
     * @MongoDB\string $reference
     */
    protected $reference;
    
        /**
     * @MongoDB\string $statut
     */
    protected $statut;
    
        /**
     * @MongoDB\int $viewcount
     */
    protected $viewcount;
    
            /**
     * @MongoDB\int $remuneration
     */
    protected $remuneration;
    
     /**
     * @MongoDB\string $grade
     */
    protected $grade;
    
   /** @MongoDB\ReferenceOne(targetDocument="Gripli\AuthBundle\Document\Users", inversedBy="cv") */
    private $user;


 

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param Gripli\AuthBundle\Document\Users $user
     * @return self
     */
    public function setUser(\Gripli\AuthBundle\Document\Users $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return Gripli\AuthBundle\Document\Users $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Get reference
     *
     * @return string $reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return self
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
        return $this;
    }

    /**
     * Get statut
     *
     * @return string $statut
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set viewcount
     *
     * @param int $viewcount
     * @return self
     */
    public function setViewcount($viewcount)
    {
        $this->viewcount = $viewcount;
        return $this;
    }

    /**
     * Get viewcount
     *
     * @return int $viewcount
     */
    public function getViewcount()
    {
        return $this->viewcount;
    }

    /**
     * Set remuneration
     *
     * @param int $remuneration
     * @return self
     */
    public function setRemuneration($remuneration)
    {
        $this->remuneration = $remuneration;
        return $this;
    }

    /**
     * Get remuneration
     *
     * @return int $remuneration
     */
    public function getRemuneration()
    {
        return $this->remuneration;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return self
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
        return $this;
    }

    /**
     * Get grade
     *
     * @return string $grade
     */
    public function getGrade()
    {
        return $this->grade;
    }
}
