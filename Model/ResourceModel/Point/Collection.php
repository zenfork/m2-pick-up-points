<?php
declare(strict_types=1);

namespace Flat101\PickUpPoints\Model\ResourceModel\Point;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'point_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Flat101\PickUpPoints\Model\Point::class,
            \Flat101\PickUpPoints\Model\ResourceModel\Point::class
        );
    }
}

