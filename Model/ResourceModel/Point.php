<?php
declare(strict_types=1);

namespace Flat101\PickUpPoints\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Point extends AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('flat101_pickuppoints_points', 'point_id');
    }
}

