<?php
declare(strict_types=1);

namespace Flat101\PickUpPoints\Api\Data;

interface PointSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Point list.
     * @return \Flat101\PickUpPoints\Api\Data\PointInterface[]
     */
    public function getItems();

    /**
     * Set name list.
     * @param \Flat101\PickUpPoints\Api\Data\PointInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

