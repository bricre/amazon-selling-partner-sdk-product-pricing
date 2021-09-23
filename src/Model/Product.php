<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An item.
 */
class Product extends AbstractModel
{
    /**
     * @var \Amz\ProductPricing\Model\IdentifierType
     */
    public $Identifiers = null;

    /**
     * @var \Amz\ProductPricing\Model\AttributeSetList
     */
    public $AttributeSets = null;

    /**
     * @var \Amz\ProductPricing\Model\RelationshipList
     */
    public $Relationships = null;

    /**
     * @var \Amz\ProductPricing\Model\CompetitivePricingType
     */
    public $CompetitivePricing = null;

    /**
     * @var \Amz\ProductPricing\Model\SalesRankList
     */
    public $SalesRankings = null;

    /**
     * @var \Amz\ProductPricing\Model\OffersList
     */
    public $Offers = null;
}
