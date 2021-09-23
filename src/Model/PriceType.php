<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class PriceType extends AbstractModel
{
    /**
     * The value calculated by adding ListingPrice + Shipping - Points. Note that if
     * the landed price is not returned, the listing price represents the product with
     * the lowest landed price.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $LandedPrice = null;

    /**
     * The listing price of the item including any promotions that apply.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $ListingPrice = null;

    /**
     * The shipping cost of the product. Note that the shipping cost is not always
     * available.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $Shipping = null;

    /**
     * The number of Amazon Points offered with the purchase of an item, and their
     * monetary value.
     *
     * @var \Amz\ProductPricing\Model\Points
     */
    public $Points = null;
}
