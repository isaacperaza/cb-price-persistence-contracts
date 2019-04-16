<?php

namespace Cb\PricePersistenceContracts\Daos;

use Cb\PricePersistenceContracts\Models\Price;

/**
 * Dao contract to fetch all available prices from repository (Database, Cache, File, etc)
 * @package Cb\PricePersistenceContracts\Daos
 */
interface PricesGetAllDaoInterface
{
    /**
     * @return Price[]
     */
    public function getAll();
}
