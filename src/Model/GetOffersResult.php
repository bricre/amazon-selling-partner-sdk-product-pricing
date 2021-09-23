<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class GetOffersResult extends AbstractModel
{
    /**
     * A marketplace identifier.
     *
     * @var string
     */
    public $MarketplaceID = null;

    /**
     * The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @var string
     */
    public $ASIN = null;

    /**
     * The stock keeping unit (SKU) of the item.
     *
     * @var string
     */
    public $SKU = null;

    /**
     * The condition of the item.
     *
     * @var \Amz\ProductPricing\Model\ConditionType
     */
    public $ItemCondition = null;

    /**
     * The status of the operation.
     *
     * @var string
     */
    public $status = null;

    /**
     * Metadata that identifies the item.
     *
     * @var \Amz\ProductPricing\Model\ItemIdentifier
     */
    public $Identifier = null;

    /**
     * Pricing information about the item.
     *
     * @var \Amz\ProductPricing\Model\Summary
     */
    public $Summary = null;

    /**
     * A list of offer details. The list is the same length as the TotalOfferCount in
     * the Summary or 20, whichever is less.
     *
     * @var \Amz\ProductPricing\Model\OfferDetailList
     */
    public $Offers = null;
}
