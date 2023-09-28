<?php

namespace Ecommsuit\Wishlist\Api;

use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Interface WishlistRepositoryInterface
 * @package Ecommsuit\Wishlist\Api
 * @api
 */
interface WishlistRepositoryInterface
{
    /**
     * @param int $customerId
     * @return \Ecommsuit\Wishlist\Api\Data\WishlistInterface
     * @throws NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getWishlist($customerId);

    /**
     * Add an item from the customers wishlist
     *
     * @param int $customerId
     * @param int $productId
     * @param \Ecommsuit\Wishlist\Api\Data\BuyRequestInterface $buyRequest
     * @return bool
     * @throws NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function addItem($customerId, $productId, $buyRequest): bool;

    /**
     * Remove an item from the customers wishlist
     *
     * @param int $customerId
     * @param int $itemId
     * @return boolean
     * @throws NoSuchEntityException
     * @throws \Exception
     */
    public function removeItem($customerId, $itemId): bool;
}
