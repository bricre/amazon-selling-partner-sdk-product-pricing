<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ASINIdentifier extends AbstractModel
{
    /**
     * A marketplace identifier.
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
}
