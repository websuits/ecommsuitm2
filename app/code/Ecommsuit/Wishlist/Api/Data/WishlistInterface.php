<?php

namespace Ecommsuit\Wishlist\Api\Data;

interface WishlistInterface
{
    /**
     * @return int
     */
    public function getCustomerId();

    /**
     * @return string
     */
    public function getSharingCode();

    /**
     * Get the amount of items in the wishlist
     *
     * @return int
     */
    public function getItemsCount();

    /**
     * @return \Ecommsuit\Wishlist\Api\Data\ItemInterface[]
     */
    public function getItems();
}
