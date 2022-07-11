<?php

namespace Flat101\PickUpPoints\ViewModel;

use Flat101\PickUpPoints\Model\ResourceModel\Point\CollectionFactory;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Shipping\Model\Config\Source\Allmethods;

class Points implements ArgumentInterface
{
    /**
     * @inheritDoc
     */
    protected $collection;

    /**
     * @inheritDoc
     */
    protected $pointItems;

    /**
     * @var Allmethods
     */
    protected $carrierMethods;

    /**
     * @param CollectionFactory $collectionFactory
     * @param Allmethods $carrierMethods
     */
    public function __construct(
        CollectionFactory $collectionFactory,
        Allmethods $carrierMethods
    ) {
        $this->collection = $collectionFactory->create();
        $this->carrierMethods = $carrierMethods;
    }

    /**
     * @return \Magento\Framework\DataObject[]
     */
    public function getPoints()
    {
        if ($this->pointItems) {
            return $this->pointItems;
        } else {
            $pointItems = $this->collection->getItems();
            return $this->pointItems = $pointItems;
        }
    }

    /**
     * Find method name by shipping method code
     *
     * @param string|null $methodCode
     * @return string
     */
    public function findMethodNameByMethodCode(?string $methodCode): ?string
    {
        $allCarrierMethods = $this->carrierMethods->toOptionArray();

        foreach ($allCarrierMethods as $carrierMethods) {
            $carrierMethodOptions = $carrierMethods['value'];
            if (is_array($carrierMethodOptions)) {
                foreach ($carrierMethodOptions as $option) {
                    if ($option['value'] === $methodCode) {
                        return $option['label'];
                    }
                }
            }
        }

        return $methodCode;
    }
}