<?php

namespace Edry\Bundle\AssetManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Edry\Bundle\AssetManagerBundle\Entity\TechGroup
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TechGroup
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $van_rego
     *
     * @ORM\Column(name="van_rego", type="string", length=255)
     */
    private $van_rego;

    /**
     * @var string $location
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var string $driver
     *
     * @ORM\Column(name="driver", type="string", length=255)
     */
    private $driver;

    /**
     * @var \DateTime $timestamp
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;

    /**
     * @var string $make
     *
     * @ORM\Column(name="make", type="string", length=255)
     */
    private $make;

    /**
     * @var string $car_year
     *
     * @ORM\Column(name="car_year", type="string", length=255)
     */
    private $car_year;

    /**
     * @var integer $odo
     *
     * @ORM\Column(name="odo", type="integer")
     */
    private $odo;

    /**
     * @var string $vin
     *
     * @ORM\Column(name="vin", type="string", length=255)
     */
    private $vin;

    /**
     * @var string $condition_description
     *
     * @ORM\Column(name="condition_description", type="string", length=1000)
     */
    private $condition_description;

    /**
     * @var string $fuel_card
     *
     * @ORM\Column(name="fuel_card", type="string", length=255)
     */
    private $fuel_card;

    /**
     * @var string $tag_time
     *
     * @ORM\Column(name="tag_time", type="string", length=255)
     */
    private $tag_time;

    /**
     * @var string $radio_code
     *
     * @ORM\Column(name="radio_code", type="string", length=255)
     */
    private $radio_code;

    /**
     * @var string $imarda_tag
     *
     * @ORM\Column(name="imarda_tag", type="string", length=255)
     */
    private $imarda_tag;

    /**
     * @var string $van_tracker
     *
     * @ORM\Column(name="van_tracker", type="string", length=255)
     */
    private $van_tracker;

    /**
     * @var boolean $tow_bar
     *
     * @ORM\Column(name="tow_bar", type="boolean")
     */
    private $tow_bar;

    /**
     * @var string $spare_key
     *
     * @ORM\Column(name="spare_key", type="string", length=255)
     */
    private $spare_key;


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
     * Set van_rego
     *
     * @param string $vanRego
     * @return TechGroup
     */
    public function setVanRego($vanRego)
    {
        $this->van_rego = $vanRego;
    
        return $this;
    }

    /**
     * Get van_rego
     *
     * @return string 
     */
    public function getVanRego()
    {
        return $this->van_rego;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return TechGroup
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set driver
     *
     * @param string $driver
     * @return TechGroup
     */
    public function setDriver($driver)
    {
        $this->driver = $driver;
    
        return $this;
    }

    /**
     * Get driver
     *
     * @return string 
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return TechGroup
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
     * Set make
     *
     * @param string $make
     * @return TechGroup
     */
    public function setMake($make)
    {
        $this->make = $make;
    
        return $this;
    }

    /**
     * Get make
     *
     * @return string 
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * Set car_year
     *
     * @param string $carYear
     * @return TechGroup
     */
    public function setCarYear($carYear)
    {
        $this->car_year = $carYear;
    
        return $this;
    }

    /**
     * Get car_year
     *
     * @return string 
     */
    public function getCarYear()
    {
        return $this->car_year;
    }

    /**
     * Set odo
     *
     * @param integer $odo
     * @return TechGroup
     */
    public function setOdo($odo)
    {
        $this->odo = $odo;
    
        return $this;
    }

    /**
     * Get odo
     *
     * @return integer 
     */
    public function getOdo()
    {
        return $this->odo;
    }

    /**
     * Set vin
     *
     * @param string $vin
     * @return TechGroup
     */
    public function setVin($vin)
    {
        $this->vin = $vin;
    
        return $this;
    }

    /**
     * Get vin
     *
     * @return string 
     */
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * Set condition_description
     *
     * @param string $conditionDescription
     * @return TechGroup
     */
    public function setConditionDescription($conditionDescription)
    {
        $this->condition_description = $conditionDescription;
    
        return $this;
    }

    /**
     * Get condition_description
     *
     * @return string 
     */
    public function getConditionDescription()
    {
        return $this->condition_description;
    }

    /**
     * Set fuel_card
     *
     * @param string $fuelCard
     * @return TechGroup
     */
    public function setFuelCard($fuelCard)
    {
        $this->fuel_card = $fuelCard;
    
        return $this;
    }

    /**
     * Get fuel_card
     *
     * @return string 
     */
    public function getFuelCard()
    {
        return $this->fuel_card;
    }

    /**
     * Set tag_time
     *
     * @param string $tagTime
     * @return TechGroup
     */
    public function setTagTime($tagTime)
    {
        $this->tag_time = $tagTime;
    
        return $this;
    }

    /**
     * Get tag_time
     *
     * @return string 
     */
    public function getTagTime()
    {
        return $this->tag_time;
    }

    /**
     * Set radio_code
     *
     * @param string $radioCode
     * @return TechGroup
     */
    public function setRadioCode($radioCode)
    {
        $this->radio_code = $radioCode;
    
        return $this;
    }

    /**
     * Get radio_code
     *
     * @return string 
     */
    public function getRadioCode()
    {
        return $this->radio_code;
    }

    /**
     * Set imarda_tag
     *
     * @param string $imardaTag
     * @return TechGroup
     */
    public function setImardaTag($imardaTag)
    {
        $this->imarda_tag = $imardaTag;
    
        return $this;
    }

    /**
     * Get imarda_tag
     *
     * @return string 
     */
    public function getImardaTag()
    {
        return $this->imarda_tag;
    }

    /**
     * Set van_tracker
     *
     * @param string $vanTracker
     * @return TechGroup
     */
    public function setVanTracker($vanTracker)
    {
        $this->van_tracker = $vanTracker;
    
        return $this;
    }

    /**
     * Get van_tracker
     *
     * @return string 
     */
    public function getVanTracker()
    {
        return $this->van_tracker;
    }

    /**
     * Set tow_bar
     *
     * @param boolean $towBar
     * @return TechGroup
     */
    public function setTowBar($towBar)
    {
        $this->tow_bar = $towBar;
    
        return $this;
    }

    /**
     * Get tow_bar
     *
     * @return boolean 
     */
    public function getTowBar()
    {
        return $this->tow_bar;
    }

    /**
     * Set spare_key
     *
     * @param string $spareKey
     * @return TechGroup
     */
    public function setSpareKey($spareKey)
    {
        $this->spare_key = $spareKey;
    
        return $this;
    }

    /**
     * Get spare_key
     *
     * @return string 
     */
    public function getSpareKey()
    {
        return $this->spare_key;
    }
    
    public function __toString(){
	    return $this->location;
    }
    
}