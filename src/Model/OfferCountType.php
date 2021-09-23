<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The total number of offers for the specified condition and fulfillment channel.
 */
class OfferCountType extends AbstractModel
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
     * @var \Amz\ProductPricing\Model\FulfillmentChannelType
     */
    public $fulfillmentChannel = null;

    /**
     * The number of offers in a fulfillment channel that meet a specific condition.
     *
     * @var int
     */
    public $OfferCount = null;
}
