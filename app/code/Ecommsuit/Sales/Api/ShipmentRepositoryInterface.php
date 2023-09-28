<?php

namespace Ecommsuit\Sales\Api;

/**
 * Interface ShipmentRepositoryInterface
 * @package Ecommsuit\Sales\Api
 * @api
 */
interface ShipmentRepositoryInterface
{
    /**
     * @param int $customerId
     * @param int $orderId
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Sales\Api\Data\ShipmentSearchResultInterface Shipment search result interface.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList($customerId, $orderId, \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
