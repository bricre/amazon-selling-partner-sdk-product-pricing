<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class LowestPriceType extends AbstractModel
{
    /**
     * Indicates the condition of the item. For example: New, Used, Collectible,
     * Refurbished, or Club.
     *
     * @var string
     */
    public $condition = null;

    /**
     * Indicates whether the item is fulfilled by Amazon or by the seller.
     *
     * @var string
     */
    public $fulfillmentChannel = null;

    /**
     * Indicates the type of customer that the offer is valid for.
     *
     * @var \Amz\ProductPricing\Model\OfferCustomerType
     */
    public $offerType = null;

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
     * The value calculated by adding ListingPrice + Shipping - Points.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $LandedPrice = null;

    /**
     * The price of the item.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $ListingPrice = null;

    /**
     * The shipping cost.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $Shipping = null;

    /**
     * The number of Amazon Points offered with the purchase of an item.
     *
     * @var \Amz\ProductPricing\Model\Points
     */
    public $Points = null;
}
