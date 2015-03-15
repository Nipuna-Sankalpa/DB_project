<?php

namespace FriendsEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 */
class Posts
{
    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $timestamp;

    /**
     * @var integer
     */
    private $postId;

    /**
     * @var \FriendsEntityBundle\Entity\Profile
     */
    private $userEmail;


    /**
     * Set content
     *
     * @param string $content
     * @return Posts
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
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return Posts
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Get postId
     *
     * @return integer 
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set userEmail
     *
     * @param \FriendsEntityBundle\Entity\Profile $userEmail
     * @return Posts
     */
    public function setUserEmail(\FriendsEntityBundle\Entity\Profile $userEmail = null)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return \FriendsEntityBundle\Entity\Profile 
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }
}
