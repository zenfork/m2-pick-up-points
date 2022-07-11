<?php
declare(strict_types=1);

namespace Flat101\PickUpPoints\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface PointRepositoryInterface
{

    /**
     * Save Point
     * @param \Flat101\PickUpPoints\Api\Data\PointInterface $points
     * @return \Flat101\PickUpPoints\Api\Data\PointInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Flat101\PickUpPoints\Api\Data\PointInterface $points
    );

    /**
     * Retrieve Point
     * @param string $pointId
     * @return \Flat101\PickUpPoints\Api\Data\PointInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($pointId);

    /**
     * Retrieve Point matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Flat101\PickUpPoints\Api\Data\PointSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Point
     * @param \Flat101\PickUpPoints\Api\Data\PointInterface $points
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Flat101\PickUpPoints\Api\Data\PointInterface $points
    );

    /**
     * Delete Point by ID
     * @param string $pointId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($pointId);
}

