<?php
declare(strict_types=1);

namespace Flat101\PickUpPoints\Controller\Adminhtml\Points;

class Delete extends \Flat101\PickUpPoints\Controller\Adminhtml\Points
{

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('point_id');
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create(\Flat101\PickUpPoints\Model\Point::class);
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the Point.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['point_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a Point to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}

