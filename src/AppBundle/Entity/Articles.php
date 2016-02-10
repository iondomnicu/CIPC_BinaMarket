<?php

namespace AppBundle\Entity;

/**
 * Articles
 */
class Articles
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $tags;

    /**
     * @var boolean
     */
    private $published;

    /**
     * @var string
     */
    private $image;

    /**
     * @var boolean
     */
    private $swdelete;

    /**
     * @var \DateTime
     */
    private $stampdate;

    /**
     * @var \AppBundle\Entity\OnlineArticlessubject
     */
    private $subject;

    /**
     * @var \AppBundle\Entity\Companies
     */
    private $company;

    /**
     * @var \AppBundle\Entity\Users
     */
    private $lastModifiedUser;

    /**
     * @var \AppBundle\Entity\Devices
     */
    private $stampdevice;


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
     * Set title
     *
     * @param string $title
     *
     * @return Articles
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Articles
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Articles
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Articles
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return Articles
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Articles
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Articles
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set swdelete
     *
     * @param boolean $swdelete
     *
     * @return Articles
     */
    public function setSwdelete($swdelete)
    {
        $this->swdelete = $swdelete;

        return $this;
    }

    /**
     * Get swdelete
     *
     * @return boolean
     */
    public function getSwdelete()
    {
        return $this->swdelete;
    }

    /**
     * Set stampdate
     *
     * @param \DateTime $stampdate
     *
     * @return Articles
     */
    public function setStampdate($stampdate)
    {
        $this->stampdate = $stampdate;

        return $this;
    }

    /**
     * Get stampdate
     *
     * @return \DateTime
     */
    public function getStampdate()
    {
        return $this->stampdate;
    }

    /**
     * Set subject
     *
     * @return Articles
     */
    public function setSubject()
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return \AppBundle\Entity\OnlineArticlessubject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set company
     *
     * @param \AppBundle\Entity\Companies $company
     *
     * @return Articles
     */
    public function setCompany(\AppBundle\Entity\Companies $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \AppBundle\Entity\Companies
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set lastModifiedUser
     *
     * @param \AppBundle\Entity\Users $lastModifiedUser
     *
     * @return Articles
     */
    public function setLastModifiedUser(\AppBundle\Entity\Users $lastModifiedUser = null)
    {
        $this->lastModifiedUser = $lastModifiedUser;

        return $this;
    }

    /**
     * Get lastModifiedUser
     *
     * @return \AppBundle\Entity\Users
     */
    public function getLastModifiedUser()
    {
        return $this->lastModifiedUser;
    }

    /**
     * Set stampdevice
     *
     * @param \AppBundle\Entity\Devices $stampdevice
     *
     * @return Articles
     */
    public function setStampdevice(\AppBundle\Entity\Devices $stampdevice = null)
    {
        $this->stampdevice = $stampdevice;

        return $this;
    }

    /**
     * Get stampdevice
     *
     * @return \AppBundle\Entity\Devices
     */
    public function getStampdevice()
    {
        return $this->stampdevice;
    }
}

