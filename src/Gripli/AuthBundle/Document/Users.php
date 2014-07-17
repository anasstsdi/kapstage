<?php
namespace Gripli\AuthBundle\Document;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * * @MongoDB\Document
 * @MongoDB\InheritanceType("SINGLE_COLLECTION")
 * @MongoDB\DiscriminatorField("typeUser")
 * @MongoDB\DiscriminatorMap({"users"="Users", "company"="Company","school"="School"})
 */
class Users extends BaseUser
{
   /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;
    
    /**
     * @MongoDB\String
     */
    protected $lastname;
        /**
     * @MongoDB\String
     */
    protected $firstname; 
    /**
     * @MongoDB\String
     */
    protected $email;
        /**
     * @MongoDB\String
     */
    protected $facebookId;
    
    
    /**
     * @Gedmo\Timestampable(on="create")
     * @MongoDB\Date
     */
    protected $created;
        /**
     * @Gedmo\Timestampable(on="update")
     * @MongoDB\Date
     */
    protected $lastupdate;
    
   /** @MongoDB\ReferenceMany(targetDocument="Gripli\CvBundle\Document\Cv", mappedBy="user") */
    private $cv;
    
    
    
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
     * @MongoDB\ReferenceMany(
     *   discriminatorMap={
     *     "company"="Company"
     *   }
     * )
     */
    private $type;
    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        parent::setEmail($email);
        //$this->username = $email;
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
     * Add type
     *
     * @param $type
     */
    public function addType($type)
    {
        $this->type[] = $type;
    }

    /**
     * Remove type
     *
     * @param $type
     */
    public function removeType($type)
    {
        $this->type->removeElement($type);
    }

    /**
     * Get type
     *
     * @return Doctrine\Common\Collections\Collection $type
     */
    public function getType()
    {
        return $this->type;
    }
    
        /**
     * @param string $facebookId
     * @return void
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
        $this->setUsername($facebookId);
    }
    
    /**
     * @param Array
     */
    public function setFBData($fbdata) // C'est dans cette méthode que vous ajouterez vos informations
    {
        if (isset($fbdata['id'])) {
            $this->setFacebookId($fbdata['id']);
            $this->addRole('ROLE_FACEBOOK');
        }
        if (isset($fbdata['first_name'])) {
            $this->setFirstname($fbdata['first_name']);
        }
        if (isset($fbdata['last_name'])) {
            $this->setLastname($fbdata['last_name']);
        }
        if (isset($fbdata['email'])) {
            $this->setEmail($fbdata['email']);
        }
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
     * Get facebookId
     *
     * @return string $facebookId
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Add cv
     *
     * @param Gripli\CvBundle\Document\Cv $cv
     */
    public function addCv(\Gripli\CvBundle\Document\Cv $cv)
    {
        $this->cv[] = $cv;
    }

    /**
     * Remove cv
     *
     * @param Gripli\CvBundle\Document\Cv $cv
     */
    public function removeCv(\Gripli\CvBundle\Document\Cv $cv)
    {
        $this->cv->removeElement($cv);
    }

    /**
     * Get cv
     *
     * @return Doctrine\Common\Collections\Collection $cv
     */
    public function getCv()
    {
        return $this->cv;
    }




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
