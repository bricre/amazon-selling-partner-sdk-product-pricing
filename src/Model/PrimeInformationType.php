<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Amazon Prime information.
 */
class PrimeInformationType extends AbstractModel
{
    /**
     * Indicates whether the offer is an Amazon Prime offer.
     *
     * @var bool
     */
    public $IsPrime = null;

    /**
     * Indicates whether the offer is an Amazon Prime offer throughout the entire
     * marketplace where it is listed.
     *
     * @var bool
     */
    public $IsNationalPrime = null;
}
