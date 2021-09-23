<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getPricing and getCompetitivePricing operations.
 */
class GetPricingResponse extends AbstractModel
{
    /**
     * The payload for the getPricing and getCompetitivePricing operations.
     *
     * @var \Amz\ProductPricing\Model\PriceList
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the operation.
     *
     * @var \Amz\ProductPricing\Model\ErrorList
     */
    public $errors = null;
}
