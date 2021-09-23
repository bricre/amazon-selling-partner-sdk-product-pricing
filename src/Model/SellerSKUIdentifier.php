<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class SellerSKUIdentifier extends AbstractModel
{
    /**
     * A marketplace identifier.
     *
     * @var string
     */
    public $MarketplaceId = null;

    /**
     * The seller identifier submitted for the operation.
     *
     * @var string
     */
    public $SellerId = null;

    /**
     * The seller stock keeping unit (SKU) of the item.
     *
     * @var string
     */
    public $SellerSKU = null;
}
