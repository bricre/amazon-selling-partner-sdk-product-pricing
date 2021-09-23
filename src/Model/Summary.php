<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Contains price information about the product, including the LowestPrices and
 * BuyBoxPrices, the ListPrice, the SuggestedLowerPricePlusShipping, and
 * NumberOfOffers and NumberOfBuyBoxEligibleOffers.
 */
class Summary extends AbstractModel
{
    /**
     * The number of unique offers contained in NumberOfOffers.
     *
     * @var int
     */
    public $TotalOfferCount = null;

    /**
     * A list that contains the total number of offers for the item for the given
     * conditions and fulfillment channels.
     *
     * @var \Amz\ProductPricing\Model\NumberOfOffers
     */
    public $NumberOfOffers = null;

    /**
     * A list of the lowest prices for the item.
     *
     * @var \Amz\ProductPricing\Model\LowestPrices
     */
    public $LowestPrices = null;

    /**
     * A list of item prices.
     *
     * @var \Amz\ProductPricing\Model\BuyBoxPrices
     */
    public $BuyBoxPrices = null;

    /**
     * The list price of the item as suggested by the manufacturer.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $ListPrice = null;

    /**
     * This price is based on competitive prices from other retailers (excluding other
     * Amazon sellers). The offer may be ineligible for the Buy Box if the seller's
     * price + shipping (minus Amazon Points) is greater than this competitive price.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $CompetitivePriceThreshold = null;

    /**
     * The suggested lower price of the item, including shipping and Amazon Points. The
     * suggested lower price is based on a range of factors, including historical
     * selling prices, recent Buy Box-eligible prices, and input from customers for
     * your products.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $SuggestedLowerPricePlusShipping = null;

    /**
     * A list that contains the sales rank of the item in the given product categories.
     *
     * @var \Amz\ProductPricing\Model\SalesRankList
     */
    public $SalesRankings = null;

    /**
     * A list that contains the total number of offers that are eligible for the Buy
     * Box for the given conditions and fulfillment channels.
     *
     * @var \Amz\ProductPricing\Model\BuyBoxEligibleOffers
     */
    public $BuyBoxEligibleOffers = null;

    /**
     * When the status is ActiveButTooSoonForProcessing, this is the time when the
     * offers will be available for processing.
     *
     * @var string
     */
    public $OffersAvailableTime = null;
}
