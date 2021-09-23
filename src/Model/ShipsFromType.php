<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The state and country from where the item is shipped.
 */
class ShipsFromType extends AbstractModel
{
    /**
     * The state from where the item is shipped.
     *
     * @var string
     */
    public $State = null;

    /**
     * The country from where the item is shipped.
     *
     * @var string
     */
    public $Country = null;
}
