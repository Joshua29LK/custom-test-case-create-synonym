<?php

namespace Magento\Search\Test\Fixture\Synonym;

use Magento\Store\Test\Fixture\Store;
use Magento\Mtf\Fixture\FixtureFactory;
use Magento\Mtf\Fixture\DataSource;

/**
 * Prepare Store.
 */
class ScopeId extends DataSource
{
    /**
     * Return store.
     *
     * @var Store
     */
    protected $store = null;

    /**
     * @constructor
     * @param FixtureFactory $fixtureFactory
     * @param array $params
     * @param array $data
     */
    public function __construct(FixtureFactory $fixtureFactory, array $params, array $data = [])
    {
        $this->params = $params;
        if (isset($data['dataset'])) {
            $store = $fixtureFactory->createByCode('store', ['dataset' => $data['dataset']]);
            if (!$store->hasData('store_id')) {
                $store->persist();
            }
            $this->store = $store;
            $this->data = $store->getName();
        } else {
            $this->data = $data;
        }
    }

    /**
     * Return store.
     *
     * @return Store
     */
    public function getStore()
    {
        return $this->store;
    }
}