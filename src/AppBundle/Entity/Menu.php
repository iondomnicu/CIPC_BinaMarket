<?php

namespace AppBundle\Entity;

/**
 * Menu
 *@ORM\Entity
 *@ORM\Entity(repositoryClass="AppBundle\Entity\MenuRepository")
 */
class Menu
{
    /**
     * @var integer
     */
    private $idMenu;

    /**
     * @var string
     */
    private $denMenu;


    /**
     * Get idMenu
     *
     * @return integer
     */
    public function getIdMenu()
    {
        return $this->idMenu;
    }

    /**
     * Set denMenu
     *
     * @param string $denMenu
     *
     * @return Menu
     */
    public function setDenMenu($denMenu)
    {
        $this->denMenu = $denMenu;

        return $this;
    }

    /**
     * Get denMenu
     *
     * @return string
     */
    public function getDenMenu()
    {
        return $this->denMenu;
    }
}

