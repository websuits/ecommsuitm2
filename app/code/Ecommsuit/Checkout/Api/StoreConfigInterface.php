<?php

namespace Ecommsuit\Checkout\Api;

/**
 * Interface StoreConfigInterface
 * @api
 */
interface StoreConfigInterface
{
    /**
     * @param int $cartId
     * @return string[]
     */
    public function getStoreConfigsFromCart($cartId);
}
