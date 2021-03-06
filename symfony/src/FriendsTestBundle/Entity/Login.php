<?php

namespace FriendsTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Login
 */
class Login
{
    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \FriendsTestBundle\Entity\Profile
     */
    private $profile;
    
    
    
    public function __construct() {
        
        
    }


    /**
     * Set password
     *
     * @param string $password
     * @return Login
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Login
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
     * Set profile
     *
     * @param \FriendsTestBundle\Entity\Profile $profile
     * @return Login
     */
    public function setProfile(\FriendsTestBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \FriendsTestBundle\Entity\Profile 
     */
    public function getProfile()
    {
        return $this->profile;
    }
    /**
     * @var string
     */
    private $name;


    /**
     * Set name
     *
     * @param string $name
     * @return Login
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $mobileNumbers;


    /**
     * Add mobileNumbers
     *
     * @param \FriendsTestBundle\Entity\UserMobile $mobileNumbers
     * @return Login
     */
    public function addMobileNumber(\FriendsTestBundle\Entity\UserMobile $mobileNumbers)
    {
        $this->mobileNumbers[] = $mobileNumbers;

        return $this;
    }

    /**
     * Remove mobileNumbers
     *
     * @param \FriendsTestBundle\Entity\UserMobile $mobileNumbers
     */
    public function removeMobileNumber(\FriendsTestBundle\Entity\UserMobile $mobileNumbers)
    {
        $this->mobileNumbers->removeElement($mobileNumbers);
    }

    /**
     * Get mobileNumbers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMobileNumbers()
    {
        return $this->mobileNumbers;
    }
}
