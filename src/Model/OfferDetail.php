<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class OfferDetail extends AbstractModel
{
    /**
     * The seller identifier for the offer.
     *
     * @var string
     */
    public $sellerId = null;

    /**
     * When true, this is the seller's offer.
     *
     * @var bool
     */
    public $MyOffer = null;

    /**
     * Indicates the type of customer that the offer is valid for.
     *
     * @var \Amz\ProductPricing\Model\OfferCustomerType
     */
    public $offerType = null;

    /**
     * The subcondition of the item. Subcondition values: New, Mint, Very Good, Good,
     * Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open
     * Box, or Other.
     *
     * @var string
     */
    public $SubCondition = null;

    /**
     * The seller identifier for the offer.
     *
     * @var string
     */
    public $SellerId = null;

    /**
     * Information about the condition of the item.
     *
     * @var string
     */
    public $ConditionNotes = null;

    /**
     * Information about the seller's feedback, including the percentage of positive
     * feedback, and the total number of ratings received.
     *
     * @var \Amz\ProductPricing\Model\SellerFeedbackType
     */
    public $SellerFeedbackRating = null;

    /**
     * The maximum time within which the item will likely be shipped once an order has
     * been placed.
     *
     * @var \Amz\ProductPricing\Model\DetailedShippingTimeType
     */
    public $ShippingTime = null;

    /**
     * The price of the item.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $ListingPrice = null;

    /**
     * @var \Amz\ProductPricing\Model\QuantityDiscountPriceType[]
     */
    public $quantityDiscountPrices = null;

    /**
     * The number of Amazon Points offered with the purchase of an item.
     *
     * @var \Amz\ProductPricing\Model\Points
     */
    public $Points = null;

    /**
     * The shipping cost.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $Shipping = null;

    /**
     * The state and country from where the item is shipped.
     *
     * @var \Amz\ProductPricing\Model\ShipsFromType
     */
    public $ShipsFrom = null;

    /**
     * When true, the offer is fulfilled by Amazon.
     *
     * @var bool
     */
    public $IsFulfilledByAmazon = null;

    /**
     * Amazon Prime information.
     *
     * @var \Amz\ProductPricing\Model\PrimeInformationType
     */
    public $PrimeInformation = null;

    /**
     * When true, the offer is currently in the Buy Box. There can be up to two Buy Box
     * winners at any time per ASIN, one that is eligible for Prime and one that is not
     * eligible for Prime.
     *
     * @var bool
     */
    public $IsBuyBoxWinner = null;

    /**
     * When true, the seller of the item is eligible to win the Buy Box.
     *
     * @var bool
     */
    public $IsFeaturedMerchant = null;
}
