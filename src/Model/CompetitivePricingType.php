<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Competitive pricing information for the item.
 */
class CompetitivePricingType extends AbstractModel
{
    /**
     * @var \Amz\ProductPricing\Model\CompetitivePriceList
     */
    public $CompetitivePrices = null;

    /**
     * @var \Amz\ProductPricing\Model\NumberOfOfferListingsList
     */
    public $NumberOfOfferListings = null;

    /**
     * The trade-in value of the item in the trade-in program.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $TradeInValue = null;
}
