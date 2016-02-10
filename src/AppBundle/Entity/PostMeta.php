<?php

namespace AppBundle\Entity;

/**
 * PostMeta
 */
class PostMeta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $attributeid;

    /**
     * @var integer
     */
    private $postid;

    /**
     * @var string
     */
    private $value;


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
     * Set attributeid
     *
     * @param integer $attributeid
     *
     * @return PostMeta
     */
    public function setAttributeid($attributeid)
    {
        $this->attributeid = $attributeid;

        return $this;
    }

    /**
     * Get attributeid
     *
     * @return integer
     */
    public function getAttributeid()
    {
        return $this->attributeid;
    }

    /**
     * Set postid
     *
     * @param integer $postid
     *
     * @return PostMeta
     */
    public function setPostid($postid)
    {
        $this->postid = $postid;

        return $this;
    }

    /**
     * Get postid
     *
     * @return integer
     */
    public function getPostid()
    {
        return $this->postid;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return PostMeta
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}

