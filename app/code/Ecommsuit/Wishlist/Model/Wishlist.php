<?php declare(strict_types=1);

namespace Ecommsuit\Wishlist\Model;

use Ecommsuit\Wishlist\Api\Data\WishlistInterface;

class Wishlist extends \Magento\Wishlist\Model\Wishlist implements WishlistInterface
{
    /**
     * @inheritDoc
     */
    public function getSharingCode()
    {
        return parent::getSharingCode();
    }

    /**
     * @inheritDoc
     */
    public function getItems()
    {
        return $this->getItemCollection()->getItems();
    }
}
