<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Indicates the condition of the item. Possible values: New, Used, Collectible,
 * Refurbished, Club.
 */
class ConditionType extends AbstractModel
{
    protected $isRawObject = true;
}
