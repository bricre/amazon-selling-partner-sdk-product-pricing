<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Price extends AbstractModel
{
    /**
     * The status of the operation.
     *
     * @var string
     */
    public $status = null;

    /**
     * The seller stock keeping unit (SKU) of the item.
     *
     * @var string
     */
    public $SellerSKU = null;

    /**
     * The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @var string
     */
    public $ASIN = null;

    /**
     * @var \Amz\ProductPricing\Model\Product
     */
    public $Product = null;
}
