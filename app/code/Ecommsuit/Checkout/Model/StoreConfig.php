<?php declare(strict_types=1);

namespace Ecommsuit\Checkout\Model;

use Ecommsuit\Checkout\Api\StoreConfigInterface;

class StoreConfig implements StoreConfigInterface
{
    /**
     * @var CompositeConfigProviderFactory
     */
    protected $configProviderFactory;

    /**
     * StoreConfig constructor.
     * @param CompositeConfigProviderFactory $compositeConfigProviderFactory
     */
    public function __construct(
        CompositeConfigProviderFactory $compositeConfigProviderFactory
    ) {
        $this->configProviderFactory = $compositeConfigProviderFactory;
    }

    /**
     * @inheritDoc
     */
    public function getStoreConfigsFromCart($cartId)
    {
        return $this->configProviderFactory->create()->getConfig($cartId);
    }
}
