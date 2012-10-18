<?php

namespace Edry\Bundle\AssetManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Edry\Bundle\AssetManagerBundle\Entity\TechAssets
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TechAssets
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
     * @var integer $assettype_id
     *
     * @ORM\Column(name="assettype_id", type="integer")
     */
    private $assettype_id;

    /**
     * @var integer $techgroup_id
     *
     * @ORM\Column(name="techgroup_id", type="integer")
     */
    private $techgroup_id;

    /**
     * @var string $account_owner
     *
     * @ORM\Column(name="account_owner", type="string", length=255)
     */
    private $account_owner;

    /**
     * @var string $serial_number
     *
     * @ORM\Column(name="serial_number", type="string", length=255)
     */
    private $serial_number;

    /**
     * @var string $edry_tag
     *
     * @ORM\Column(name="edry_tag", type="string", length=255)
     */
    private $edry_tag;

    /**
     * @var string $manufacture_data
     *
     * @ORM\Column(name="manufacture_data", type="string", length=255)
     */
    private $manufacture_data;

    /**
     * @var string $condition_description
     *
     * @ORM\Column(name="condition_description", type="string", length=1000)
     */
    private $condition_description;

    /**
     * @var string $asset_value
     *
     * @ORM\Column(name="asset_value", type="string", length=255)
     */
    private $asset_value;

    /**
     * @var string $comments
     *
     * @ORM\Column(name="comments", type="string", length=1000)
     */
    private $comments;

    /**
     * @var string $attachement
     *
     * @ORM\Column(name="attachement", type="string", length=1000)
     */
    private $attachement;


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
     * Set assettype_id
     *
     * @param integer $assettypeId
     * @return TechAssets
     */
    public function setAssettypeId($assettypeId)
    {
        $this->assettype_id = $assettypeId;
    
        return $this;
    }

    /**
     * Get assettype_id
     *
     * @return integer 
     */
    public function getAssettypeId()
    {
        return $this->assettype_id;
    }

    /**
     * Set techgroup_id
     *
     * @param integer $techgroupId
     * @return TechAssets
     */
    public function setTechgroupId($techgroupId)
    {
        $this->techgroup_id = $techgroupId;
    
        return $this;
    }

    /**
     * Get techgroup_id
     *
     * @return integer 
     */
    public function getTechgroupId()
    {
        return $this->techgroup_id;
    }

    /**
     * Set account_owner
     *
     * @param string $accountOwner
     * @return TechAssets
     */
    public function setAccountOwner($accountOwner)
    {
        $this->account_owner = $accountOwner;
    
        return $this;
    }

    /**
     * Get account_owner
     *
     * @return string 
     */
    public function getAccountOwner()
    {
        return $this->account_owner;
    }

    /**
     * Set serial_number
     *
     * @param string $serialNumber
     * @return TechAssets
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serial_number = $serialNumber;
    
        return $this;
    }

    /**
     * Get serial_number
     *
     * @return string 
     */
    public function getSerialNumber()
    {
        return $this->serial_number;
    }

    /**
     * Set edry_tag
     *
     * @param string $edryTag
     * @return TechAssets
     */
    public function setEdryTag($edryTag)
    {
        $this->edry_tag = $edryTag;
    
        return $this;
    }

    /**
     * Get edry_tag
     *
     * @return string 
     */
    public function getEdryTag()
    {
        return $this->edry_tag;
    }

    /**
     * Set manufacture_data
     *
     * @param string $manufactureData
     * @return TechAssets
     */
    public function setManufactureData($manufactureData)
    {
        $this->manufacture_data = $manufactureData;
    
        return $this;
    }

    /**
     * Get manufacture_data
     *
     * @return string 
     */
    public function getManufactureData()
    {
        return $this->manufacture_data;
    }

    /**
     * Set condition_description
     *
     * @param string $conditionDescription
     * @return TechAssets
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
     * Set asset_value
     *
     * @param string $assetValue
     * @return TechAssets
     */
    public function setAssetValue($assetValue)
    {
        $this->asset_value = $assetValue;
    
        return $this;
    }

    /**
     * Get asset_value
     *
     * @return string 
     */
    public function getAssetValue()
    {
        return $this->asset_value;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return TechAssets
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    
        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set attachement
     *
     * @param string $attachement
     * @return TechAssets
     */
    public function setAttachement($attachement)
    {
        $this->attachement = $attachement;
    
        return $this;
    }

    /**
     * Get attachement
     *
     * @return string 
     */
    public function getAttachement()
    {
        return $this->attachement;
    }
}
