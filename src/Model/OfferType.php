<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class OfferType extends AbstractModel
{
    /**
     * Indicates the type of customer that the offer is valid for.
     *
     * @var \Amz\ProductPricing\Model\OfferCustomerType
     */
    public $offerType = null;

    /**
     * Contains pricing information that includes promotions and contains the shipping
     * cost.
     *
     * @var \Amz\ProductPricing\Model\PriceType
     */
    public $BuyingPrice = null;

    /**
     * The current price excluding any promotions that apply to the product. Excludes
     * the shipping cost.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $RegularPrice = null;

    /**
     * The current listing price for Business buyers.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $businessPrice = null;

    /**
     * @var \Amz\ProductPricing\Model\QuantityDiscountPriceType[]
     */
    public $quantityDiscountPrices = null;

    /**
     * The fulfillment channel for the offer listing. Possible values:.
     *
     * * Amazon - Fulfilled by Amazon.
     * * Merchant - Fulfilled by the seller.
     *
     * @var string
     */
    public $FulfillmentChannel = null;

    /**
     * The item condition for the offer listing. Possible values: New, Used,
     * Collectible, Refurbished, or Club.
     *
     * @var string
     */
    public $ItemCondition = null;

    /**
     * The item subcondition for the offer listing. Possible values: New, Mint, Very
     * Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty,
     * Refurbished, Open Box, or Other.
     *
     * @var string
     */
    public $ItemSubCondition = null;

    /**
     * The seller stock keeping unit (SKU) of the item.
     *
     * @var string
     */
    public $SellerSKU = null;
}
