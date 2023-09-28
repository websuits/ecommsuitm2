<?php

namespace Ecommsuit\Sales\Api;

/**
 * Interface OrderManagementInterface
 * @package Ecommsuit\Sales\Api
 * @api
 */
interface OrderManagementInterface
{
    /**
     * Cancels a specified order.
     *
     * @param int $id The order ID.
     * @param int $customerId The customer ID
     * @return bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function cancel($id, $customerId);

    /**
     * @param int $id the order id
     * @param int $customerId The customer ID
     * @return mixed
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function reorder($id, $customerId);
}
