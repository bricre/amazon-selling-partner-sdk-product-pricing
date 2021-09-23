<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Specifies the identifiers used to uniquely identify an item.
 */
class IdentifierType extends AbstractModel
{
    /**
     * Indicates the item is identified by MarketPlaceId and ASIN.
     *
     * @var \Amz\ProductPricing\Model\ASINIdentifier
     */
    public $MarketplaceASIN = null;

    /**
     * Indicates the item is identified by MarketPlaceId, SellerId, and SellerSKU.
     *
     * @var \Amz\ProductPricing\Model\SellerSKUIdentifier
     */
    public $SKUIdentifier = null;
}
