<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information that identifies an item.
 */
class ItemIdentifier extends AbstractModel
{
    /**
     * A marketplace identifier. Specifies the marketplace from which prices are
     * returned.
     *
     * @var string
     */
    public $MarketplaceId = null;

    /**
     * The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @var string
     */
    public $ASIN = null;

    /**
     * The seller stock keeping unit (SKU) of the item.
     *
     * @var string
     */
    public $SellerSKU = null;

    /**
     * The condition of the item.
     *
     * @var \Amz\ProductPricing\Model\ConditionType
     */
    public $ItemCondition = null;
}
