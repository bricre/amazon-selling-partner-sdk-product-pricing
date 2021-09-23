<?php

namespace Amz\ProductPricing\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about the seller's feedback, including the percentage of positive
 * feedback, and the total number of ratings received.
 */
class SellerFeedbackType extends AbstractModel
{
    /**
     * The percentage of positive feedback for the seller in the past 365 days.
     *
     * @var float
     */
    public $SellerPositiveFeedbackRating = null;

    /**
     * The number of ratings received about the seller.
     *
     * @var int
     */
    public $FeedbackCount = null;
}
