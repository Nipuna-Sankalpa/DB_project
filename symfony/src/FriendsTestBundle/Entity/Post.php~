<?php

namespace FriendsTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 */
class Post
{
    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $timePosted;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \FriendsTestBundle\Entity\Login
     */
    private $email;


    /**
     * Set content
     *
     * @param string $content
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set timePosted
     *
     * @param \DateTime $timePosted
     * @return Post
     */
    public function setTimePosted($timePosted)
    {
        $this->timePosted = $timePosted;

        return $this;
    }

    /**
     * Get timePosted
     *
     * @return \DateTime 
     */
    public function getTimePosted()
    {
        return $this->timePosted;
    }

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
     * Set email
     *
     * @param \FriendsTestBundle\Entity\Login $email
     * @return Post
     */
    public function setEmail(\FriendsTestBundle\Entity\Login $email = null)
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
