<?php
/**
 * Product : Huvema - CatalogExtraColumn
 *
 * @copyright Copyright © 2021 Huvema. All rights reserved.
 * @author    Isolde van Oosterhout
 */

namespace Huvema\CatalogExtraColumn\Block\Adminhtml\Category\Tab;

class Product extends \Magento\Catalog\Block\Adminhtml\Category\Tab\Product
{
    /**
     * Set collection object
     *
     * @param \Magento\Framework\Data\Collection $collection
     * @return void
     */
    public function setCollection($collection)
    {
        $collection->addAttributeToSelect('eb_type_number');
        parent::setCollection($collection);
    }

    /**
     * @return $this
     */
    protected function _prepareColumns()
    {
        parent::_prepareColumns();
        $this->addColumnAfter('eb_type_number', array(
            'header' => __('Eb type nr'),
            'index' => 'eb_type_number',
        ), 'sku');

        $this->sortColumnsByOrder();
        return $this;
    }
}
