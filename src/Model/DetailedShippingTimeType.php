<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The time range in which an item will likely be shipped once an order has been
 * placed.
 */
class DetailedShippingTimeType extends AbstractModel
{
    /**
     * The minimum time, in hours, that the item will likely be shipped after the order
     * has been placed.
     *
     * @var int
     */
    public $minimumHours = null;

    /**
     * The maximum time, in hours, that the item will likely be shipped after the order
     * has been placed.
     *
     * @var int
     */
    public $maximumHours = null;

    /**
     * The date when the item will be available for shipping. Only displayed for items
     * that are not currently available for shipping.
     *
     * @var string
     */
    public $availableDate = null;

    /**
     * Indicates whether the item is available for shipping now, or on a known or an
     * unknown date in the future. If known, the availableDate property indicates the
     * date that the item will be available for shipping. Possible values: NOW,
     * FUTURE_WITHOUT_DATE, FUTURE_WITH_DATE.
     *
     * @var string
     */
    public $availabilityType = null;
}
