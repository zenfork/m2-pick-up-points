<?php
declare(strict_types=1);

namespace Flat101\PickUpPoints\Api\Data;

interface PointInterface
{

    const ADDRESS = 'address';
    const NAME = 'name';
    const LONGITUDE = 'longitude';
    const SHIPPING_METHOD = 'shipping_method';
    const LATITUDE = 'latitude';
    const POINT_ID = 'point_id';
    const LOCATION = 'location';

    /**
     * Get point_id
     * @return string|null
     */
    public function getPointId();

    /**
     * Set point_id
     * @param string $pointId
     * @return \Flat101\PickUpPoints\Points\Api\Data\PointsInterface
     */
    public function setPointId($pointId);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \Flat101\PickUpPoints\Points\Api\Data\PointsInterface
     */
    public function setName($name);

    /**
     * Get address
     * @return string|null
     */
    public function getAddress();

    /**
     * Set address
     * @param string $address
     * @return \Flat101\PickUpPoints\Points\Api\Data\PointsInterface
     */
    public function setAddress($address);

    /**
     * Get latitude
     * @return string|null
     */
    public function getLatitude();

    /**
     * Set latitude
     * @param string $latitude
     * @return \Flat101\PickUpPoints\Points\Api\Data\PointsInterface
     */
    public function setLatitude($latitude);

    /**
     * Get longitude
     * @return string|null
     */
    public function getLongitude();

    /**
     * Set longitude
     * @param string $longitude
     * @return \Flat101\PickUpPoints\Points\Api\Data\PointsInterface
     */
    public function setLongitude($longitude);

    /**
     * Get location
     * @return string|null
     */
    public function getLocation();

    /**
     * Set location
     * @param string $location
     * @return \Flat101\PickUpPoints\Points\Api\Data\PointsInterface
     */
    public function setLocation($location);

    /**
     * Get shipping_method
     * @return string|null
     */
    public function getShippingMethod();

    /**
     * Set shipping_method
     * @param string $shippingMethod
     * @return \Flat101\PickUpPoints\Points\Api\Data\PointsInterface
     */
    public function setShippingMethod($shippingMethod);
}

