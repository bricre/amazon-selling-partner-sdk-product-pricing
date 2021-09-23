<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The number of active offer listings for the item that was submitted. The listing
 * count is returned by condition, one for each listing condition value that is
 * returned.
 */
class NumberOfOfferListingsList extends AbstractModel
{
    protected $isRawObject = true;
}
