<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Points extends AbstractModel
{
    /**
     * The number of points.
     *
     * @var int
     */
    public $PointsNumber = null;

    /**
     * The monetary value of the points.
     *
     * @var \Amz\ProductPricing\Model\MoneyType
     */
    public $PointsMonetaryValue = null;
}
