<?php

namespace FriendsTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserMobile
 */
class UserMobile
{
    /**
     * @var string
     */
    private $mobileNumber;

    /**
     * @var \FriendsTestBundle\Entity\Login
     */
    private $email;


    /**
     * Set mobileNumber
     *
     * @param string $mobileNumber
     * @return UserMobile
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;

        return $this;
    }

    /**
     * Get mobileNumber
     *
     * @return string 
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Set email
     *
     * @param \FriendsTestBundle\Entity\Login $email
     * @return UserMobile
     */
    public function setEmail(\FriendsTestBundle\Entity\Login $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return \FriendsTestBundle\Entity\Login 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
