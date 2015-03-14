<?php

namespace FriendsTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserEducation
 */
class UserEducation
{
    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var \FriendsTestBundle\Entity\Login
     */
    private $email;

    /**
     * @var \FriendsTestBundle\Entity\EducationalInstitute
     */
    private $institute;


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return UserEducation
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return UserEducation
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set email
     *
     * @param \FriendsTestBundle\Entity\Login $email
     * @return UserEducation
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

    /**
     * Set institute
     *
     * @param \FriendsTestBundle\Entity\EducationalInstitute $institute
     * @return UserEducation
     */
    public function setInstitute(\FriendsTestBundle\Entity\EducationalInstitute $institute = null)
    {
        $this->institute = $institute;

        return $this;
    }

    /**
     * Get institute
     *
     * @return \FriendsTestBundle\Entity\EducationalInstitute 
     */
    public function getInstitute()
    {
        return $this->institute;
    }
}
