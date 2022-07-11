<?php
declare(strict_types=1);

namespace Flat101\PickUpPoints\Model;

use Flat101\PickUpPoints\Api\Data\PointInterface;
use Flat101\PickUpPoints\Api\Data\PointInterfaceFactory;
use Flat101\PickUpPoints\Api\Data\PointSearchResultsInterfaceFactory;
use Flat101\PickUpPoints\Api\PointRepositoryInterface;
use Flat101\PickUpPoints\Model\ResourceModel\Point as ResourcePoint;
use Flat101\PickUpPoints\Model\ResourceModel\Point\CollectionFactory as PointCollectionFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class PointRepository implements PointRepositoryInterface
{

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var PointsInterfaceFactory
     */
    protected $pointFactory;

    /**
     * @var Point
     */
    protected $searchResultsFactory;

    /**
     * @var PointCollectionFactory
     */
    protected $pointCollectionFactory;

    /**
     * @var ResourcePoint
     */
    protected $resource;


    /**
     * @param ResourcePoint $resource
     * @param PointInterfaceFactory $pointFactory
     * @param PointCollectionFactory $pointCollectionFactory
     * @param PointSearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourcePoint                      $resource,
        PointInterfaceFactory              $pointFactory,
        PointCollectionFactory             $pointCollectionFactory,
        PointSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface       $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->pointFactory = $pointFactory;
        $this->pointCollectionFactory = $pointCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(PointInterface $points)
    {
        try {
            $this->resource->save($points);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the points: %1',
                $exception->getMessage()
            ));
        }
        return $points;
    }

    /**
     * @inheritDoc
     */
    public function get($pointId)
    {
        $points = $this->pointFactory->create();
        $this->resource->load($points, $pointId);
        if (!$points->getId()) {
            throw new NoSuchEntityException(__('Point with id "%1" does not exist.', $pointId));
        }
        return $points;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->pointCollectionFactory->create();
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(PointInterface $points)
    {
        try {
            $pointsModel = $this->pointFactory->create();
            $this->resource->load($pointsModel, $points->getPointId());
            $this->resource->delete($pointsModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Point: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($pointId)
    {
        return $this->delete($this->get($pointId));
    }
}

