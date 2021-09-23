<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The number of offer listings with the specified condition.
 */
class OfferListingCountType extends AbstractModel
{
    /**
     * The number of offer listings.
     *
     * @var int
     */
    public $Count = null;

    /**
     * The condition of the item.
     *
     * @var string
     */
    public $condition = null;
}
