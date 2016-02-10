<?php

namespace AppBundle\Entity;

/**
 * Items
 */
class Items
{
    /**
     * @var integer
     */
    private $c;

    /**
     * @var integer
     */
    private $code;

    /**
     * @var string
     */
    private $nm;

    /**
     * @var string
     */
    private $barcode;

    /**
     * @var string
     */
    private $buyprice;

    /**
     * @var string
     */
    private $saleprice;

    /**
     * @var \DateTime
     */
    private $stamddate;

    /**
     * @var boolean
     */
    private $swdelete;

    /**
     * @var boolean
     */
    private $swnotactive;

    /**
     * @var float
     */
    private $discount;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var boolean
     */
    private $existsInvoices;

    /**
     * @var integer
     */
    private $codeForeign;

    /**
     * @var integer
     */
    private $manufacturerId;

    /**
     * @var integer
     */
    private $barcodeNumerator;

    /**
     * @var \AppBundle\Entity\Companies
     */
    private $companyc;

    /**
     * @var \AppBundle\Entity\ItemsGroups
     */
    private $groupc;

    /**
     * @var \AppBundle\Entity\CatalogItemmaterial
     */
    private $itemMaterial;

    /**
     * @var \AppBundle\Entity\CatalogItemstandard
     */
    private $itemStandard;

    /**
     * @var \AppBundle\Entity\CatalogColor
     */
    private $color;

    /**
     * @var \AppBundle\Entity\Currencies
     */
    private $currencyBuyPrice;

    /**
     * @var \AppBundle\Entity\Currencies
     */
    private $currencySalePrice;

    /**
     * @var \AppBundle\Entity\CatalogImporter
     */
    private $importer;

    /**
     * @var \AppBundle\Entity\CatalogItemmodel
     */
    private $itemModel;

    /**
     * @var \AppBundle\Entity\CatalogSize
     */
    private $size;

    /**
     * @var \AppBundle\Entity\Devices
     */
    private $stampdevice;

    /**
     * @var \AppBundle\Entity\Vatgroups
     */
    private $vatgroup;

    /**
     * @var \AppBundle\Entity\CatalogItemsunits
     */
    private $unit;


    /**
     * Get c
     *
     * @return integer
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * Set code
     *
     * @param integer $code
     *
     * @return Items
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set nm
     *
     * @param string $nm
     *
     * @return Items
     */
    public function setNm($nm)
    {
        $this->nm = $nm;

        return $this;
    }

    /**
     * Get nm
     *
     * @return string
     */
    public function getNm()
    {
        return $this->nm;
    }

    /**
     * Set barcode
     *
     * @param string $barcode
     *
     * @return Items
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set buyprice
     *
     * @param string $buyprice
     *
     * @return Items
     */
    public function setBuyprice($buyprice)
    {
        $this->buyprice = $buyprice;

        return $this;
    }

    /**
     * Get buyprice
     *
     * @return string
     */
    public function getBuyprice()
    {
        return $this->buyprice;
    }

    /**
     * Set saleprice
     *
     * @param string $saleprice
     *
     * @return Items
     */
    public function setSaleprice($saleprice)
    {
        $this->saleprice = $saleprice;

        return $this;
    }

    /**
     * Get saleprice
     *
     * @return string
     */
    public function getSaleprice()
    {
        return $this->saleprice;
    }

    /**
     * Set stamddate
     *
     * @param \DateTime $stamddate
     *
     * @return Items
     */
    public function setStamddate($stamddate)
    {
        $this->stamddate = $stamddate;

        return $this;
    }

    /**
     * Get stamddate
     *
     * @return \DateTime
     */
    public function getStamddate()
    {
        return $this->stamddate;
    }

    /**
     * Set swdelete
     *
     * @param boolean $swdelete
     *
     * @return Items
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
     * Set swnotactive
     *
     * @param boolean $swnotactive
     *
     * @return Items
     */
    public function setSwnotactive($swnotactive)
    {
        $this->swnotactive = $swnotactive;

        return $this;
    }

    /**
     * Get swnotactive
     *
     * @return boolean
     */
    public function getSwnotactive()
    {
        return $this->swnotactive;
    }

    /**
     * Set discount
     *
     * @param float $discount
     *
     * @return Items
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Items
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
     * Set picture
     *
     * @param string $picture
     *
     * @return Items
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Items
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set existsInvoices
     *
     * @param boolean $existsInvoices
     *
     * @return Items
     */
    public function setExistsInvoices($existsInvoices)
    {
        $this->existsInvoices = $existsInvoices;

        return $this;
    }

    /**
     * Get existsInvoices
     *
     * @return boolean
     */
    public function getExistsInvoices()
    {
        return $this->existsInvoices;
    }

    /**
     * Set codeForeign
     *
     * @param integer $codeForeign
     *
     * @return Items
     */
    public function setCodeForeign($codeForeign)
    {
        $this->codeForeign = $codeForeign;

        return $this;
    }

    /**
     * Get codeForeign
     *
     * @return integer
     */
    public function getCodeForeign()
    {
        return $this->codeForeign;
    }

    /**
     * Set manufacturerId
     *
     * @param integer $manufacturerId
     *
     * @return Items
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;

        return $this;
    }

    /**
     * Get manufacturerId
     *
     * @return integer
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * Set barcodeNumerator
     *
     * @param integer $barcodeNumerator
     *
     * @return Items
     */
    public function setBarcodeNumerator($barcodeNumerator)
    {
        $this->barcodeNumerator = $barcodeNumerator;

        return $this;
    }

    /**
     * Get barcodeNumerator
     *
     * @return integer
     */
    public function getBarcodeNumerator()
    {
        return $this->barcodeNumerator;
    }

    /**
     * Set companyc
     *
     * @param \AppBundle\Entity\Companies $companyc
     *
     * @return Items
     */
    public function setCompanyc(\AppBundle\Entity\Companies $companyc = null)
    {
        $this->companyc = $companyc;

        return $this;
    }

    /**
     * Get companyc
     *
     * @return \AppBundle\Entity\Companies
     */
    public function getCompanyc()
    {
        return $this->companyc;
    }

    /**
     * Set groupc
     *
     * @param \AppBundle\Entity\ItemsGroups $groupc
     *
     * @return Items
     */
    public function setGroupc(\AppBundle\Entity\ItemsGroups $groupc = null)
    {
        $this->groupc = $groupc;

        return $this;
    }

    /**
     * Get groupc
     *
     * @return \AppBundle\Entity\ItemsGroups
     */
    public function getGroupc()
    {
        return $this->groupc;
    }

    /**
     * Set itemMaterial
     *
     * @param \AppBundle\Entity\CatalogItemmaterial $itemMaterial
     *
     * @return Items
     */
    public function setItemMaterial(\AppBundle\Entity\CatalogItemmaterial $itemMaterial = null)
    {
        $this->itemMaterial = $itemMaterial;

        return $this;
    }

    /**
     * Get itemMaterial
     *
     * @return \AppBundle\Entity\CatalogItemmaterial
     */
    public function getItemMaterial()
    {
        return $this->itemMaterial;
    }

    /**
     * Set itemStandard
     *
     * @param \AppBundle\Entity\CatalogItemstandard $itemStandard
     *
     * @return Items
     */
    public function setItemStandard(\AppBundle\Entity\CatalogItemstandard $itemStandard = null)
    {
        $this->itemStandard = $itemStandard;

        return $this;
    }

    /**
     * Get itemStandard
     *
     * @return \AppBundle\Entity\CatalogItemstandard
     */
    public function getItemStandard()
    {
        return $this->itemStandard;
    }

    /**
     * Set color
     *
     * @param \AppBundle\Entity\CatalogColor $color
     *
     * @return Items
     */
    public function setColor(\AppBundle\Entity\CatalogColor $color = null)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return \AppBundle\Entity\CatalogColor
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set currencyBuyPrice
     *
     * @param \AppBundle\Entity\Currencies $currencyBuyPrice
     *
     * @return Items
     */
    public function setCurrencyBuyPrice(\AppBundle\Entity\Currencies $currencyBuyPrice = null)
    {
        $this->currencyBuyPrice = $currencyBuyPrice;

        return $this;
    }

    /**
     * Get currencyBuyPrice
     *
     * @return \AppBundle\Entity\Currencies
     */
    public function getCurrencyBuyPrice()
    {
        return $this->currencyBuyPrice;
    }

    /**
     * Set currencySalePrice
     *
     * @param \AppBundle\Entity\Currencies $currencySalePrice
     *
     * @return Items
     */
    public function setCurrencySalePrice(\AppBundle\Entity\Currencies $currencySalePrice = null)
    {
        $this->currencySalePrice = $currencySalePrice;

        return $this;
    }

    /**
     * Get currencySalePrice
     *
     * @return \AppBundle\Entity\Currencies
     */
    public function getCurrencySalePrice()
    {
        return $this->currencySalePrice;
    }

    /**
     * Set importer
     *
     * @param \AppBundle\Entity\CatalogImporter $importer
     *
     * @return Items
     */
    public function setImporter(\AppBundle\Entity\CatalogImporter $importer = null)
    {
        $this->importer = $importer;

        return $this;
    }

    /**
     * Get importer
     *
     * @return \AppBundle\Entity\CatalogImporter
     */
    public function getImporter()
    {
        return $this->importer;
    }

    /**
     * Set itemModel
     *
     * @param \AppBundle\Entity\CatalogItemmodel $itemModel
     *
     * @return Items
     */
    public function setItemModel(\AppBundle\Entity\CatalogItemmodel $itemModel = null)
    {
        $this->itemModel = $itemModel;

        return $this;
    }

    /**
     * Get itemModel
     *
     * @return \AppBundle\Entity\CatalogItemmodel
     */
    public function getItemModel()
    {
        return $this->itemModel;
    }

    /**
     * Set size
     *
     * @param \AppBundle\Entity\CatalogSize $size
     *
     * @return Items
     */
    public function setSize(\AppBundle\Entity\CatalogSize $size = null)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return \AppBundle\Entity\CatalogSize
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set stampdevice
     *
     * @param \AppBundle\Entity\Devices $stampdevice
     *
     * @return Items
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

    /**
     * Set vatgroup
     *
     * @param \AppBundle\Entity\Vatgroups $vatgroup
     *
     * @return Items
     */
    public function setVatgroup(\AppBundle\Entity\Vatgroups $vatgroup = null)
    {
        $this->vatgroup = $vatgroup;

        return $this;
    }

    /**
     * Get vatgroup
     *
     * @return \AppBundle\Entity\Vatgroups
     */
    public function getVatgroup()
    {
        return $this->vatgroup;
    }

    /**
     * Set unit
     *
     * @param \AppBundle\Entity\CatalogItemsunits $unit
     *
     * @return Items
     */
    public function setUnit(\AppBundle\Entity\CatalogItemsunits $unit = null)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return \AppBundle\Entity\CatalogItemsunits
     */
    public function getUnit()
    {
        return $this->unit;
    }
}

