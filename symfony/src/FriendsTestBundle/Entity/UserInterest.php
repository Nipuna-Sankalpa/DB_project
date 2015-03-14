<?php

namespace FriendsTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserInterest
 */
class UserInterest
{
    /**
     * @var string
     */
    private $interest;

    /**
     * @var string
     */
    private $type;

    /**
     * @var \FriendsTestBundle\Entity\Login
     */
    private $email;


    /**
     * Set interest
     *
     * @param string $interest
     * @return UserInterest
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;

        return $this;
    }

    /**
     * Get interest
     *
     * @return string 
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return UserInterest
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set email
     *
     * @param \FriendsTestBundle\Entity\Login $email
     * @return UserInterest
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
