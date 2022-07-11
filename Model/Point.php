<?php
declare(strict_types=1);

namespace Flat101\PickUpPoints\Model;

use Flat101\PickUpPoints\Api\Data\PointInterface;
use Magento\Framework\Model\AbstractModel;

class Point extends AbstractModel implements PointInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Flat101\PickUpPoints\Model\ResourceModel\Point::class);
    }

    /**
     * @inheritDoc
     */
    public function getPointId()
    {
        return $this->getData(self::POINT_ID);
    }

    /**
     * @inheritDoc
     */
    public function setPointId($pointId)
    {
        return $this->setData(self::POINT_ID, $pointId);
    }

    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @inheritDoc
     */
    public function getAddress()
    {
        return $this->getData(self::ADDRESS);
    }

    /**
     * @inheritDoc
     */
    public function setAddress($address)
    {
        return $this->setData(self::ADDRESS, $address);
    }

    /**
     * @inheritDoc
     */
    public function getLatitude()
    {
        return $this->getData(self::LATITUDE);
    }

    /**
     * @inheritDoc
     */
    public function setLatitude($latitude)
    {
        return $this->setData(self::LATITUDE, $latitude);
    }

    /**
     * @inheritDoc
     */
    public function getLongitude()
    {
        return $this->getData(self::LONGITUDE);
    }

    /**
     * @inheritDoc
     */
    public function setLongitude($longitude)
    {
        return $this->setData(self::LONGITUDE, $longitude);
    }

    /**
     * @inheritDoc
     */
    public function getLocation()
    {
        return $this->getData(self::LOCATION);
    }

    /**
     * @inheritDoc
     */
    public function setLocation($location)
    {
        return $this->setData(self::LOCATION, $location);
    }

    /**
     * @inheritDoc
     */
    public function getShippingMethod()
    {
        return $this->getData(self::SHIPPING_METHOD);
    }

    /**
     * @inheritDoc
     */
    public function setShippingMethod($shippingMethod)
    {
        return $this->setData(self::SHIPPING_METHOD, $shippingMethod);
    }
}

