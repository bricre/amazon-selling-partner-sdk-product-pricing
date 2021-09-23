<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CompetitivePriceType extends AbstractModel
{
    /**
     * The pricing model for each price that is returned.
     *
     * Possible values:
     *
     * * 1 - New Buy Box Price.
     * * 2 - Used Buy Box Price.
     *
     * @var string
     */
    public $CompetitivePriceId = null;

    /**
     * Pricing information for a given CompetitivePriceId value.
     *
     * @var \Amz\ProductPricing\Model\PriceType
     */
    public $Price = null;

    /**
     * Indicates the condition of the item whose pricing information is returned.
     * Possible values are: New, Used, Collectible, Refurbished, or Club.
     *
     * @var string
     */
    public $condition = null;

    /**
     * Indicates the subcondition of the item whose pricing information is returned.
     * Possible values are: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM,
     * Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     *
     * @var string
     */
    public $subcondition = null;

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
     * The seller identifier for the offer.
     *
     * @var string
     */
    public $sellerId = null;

    /**
     * Indicates whether or not the pricing information is for an offer listing that
     * belongs to the requester. The requester is the seller associated with the
     * SellerId that was submitted with the request. Possible values are: true and
     * false.
     *
     * @var bool
     */
    public $belongsToRequester = null;
}
