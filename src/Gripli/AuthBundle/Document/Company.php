<?php
namespace Gripli\AuthBundle\Document;

use Gripli\AuthBundle\Document\Users;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDB\Document
 */
class Company extends Users
{


    /** @MongoDB\String */
    protected $nameCompany;
    
      /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var string $email
     */
    protected $email;


    /**
     * @var string $lastname
     */
    protected $lastname;

    /**
     * @var string $firstname
     */
    protected $firstname;

    /**
     * @var string $facebookId
     */
    protected $facebookId;


    

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
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    

    /**
     * Set nameCompany
     *
     * @param string $nameCompany
     * @return self
     */
    public function setNameCompany($nameCompany)
    {
        $this->nameCompany = $nameCompany;
        return $this;
    }
     /**
     * Get nameCompany
     *
     * @return string $nameCompany
     */
    public function getNameCompany()
    {
        return $this->nameCompany;
    }
    /**
     * Set lastname
     *
     * @param string $lastname
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set facebookId
     *
     * @param string $facebookId
     * @return self
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string $facebookId
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * @var date $created
     */
    protected $created;


    /**
     * Set created
     *
     * @param date $created
     * @return self
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return date $created
     */
    public function getCreated()
    {
        return $this->created;
    }
    /**
     * @var date $lastupdate
     */
    protected $lastupdate;


    /**
     * Set lastupdate
     *
     * @param date $lastupdate
     * @return self
     */
    public function setLastupdate($lastupdate)
    {
        $this->lastupdate = $lastupdate;
        return $this;
    }

    /**
     * Get lastupdate
     *
     * @return date $lastupdate
     */
    public function getLastupdate()
    {
        return $this->lastupdate;
    }
}
