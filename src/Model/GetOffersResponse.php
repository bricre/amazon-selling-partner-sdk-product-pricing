<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getListingOffers and getItemOffers operations.
 */
class GetOffersResponse extends AbstractModel
{
    /**
     * The payload for the getListingOffers and getItemOffers operations.
     *
     * @var \Amz\ProductPricing\Model\GetOffersResult
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the operation.
     *
     * @var \Amz\ProductPricing\Model\ErrorList
     */
    public $errors = null;
}
