<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Contains pricing information that includes special pricing when buying in bulk.
 */
class QuantityDiscountPriceType extends AbstractModel
{
    /**
     * Indicates at what quantity this price becomes active.
     *
     * @var int
     */
    public $quantityTier = null;

    /**
     * Indicates the type of quantity discount this price applies to.
     *
     * @var \Amz\ProductPricing\Model\QuantityDiscountType
     */
    public $quantityDiscountType = null;

    /**
     * The price at this quantity tier.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $listingPrice = null;
}
