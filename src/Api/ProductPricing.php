<?php

namespace Amz\ProductPricing\Api;

use Amz\ProductPricing\Model\GetOffersResponse as GetOffersResponse;
use Amz\ProductPricing\Model\GetPricingResponse as GetPricingResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class ProductPricing extends AbstractAPI
{
    /**
     * Returns pricing information for a seller's offer listings based on seller SKU or
     * ASIN.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 20 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param array $queries options:
     *                       'MarketplaceId'		A marketplace identifier. Specifies the marketplace for which
     *                       prices are returned.
     *                       'Asins'		A list of up to twenty Amazon Standard Identification Number (ASIN)
     *                       values used to identify items in the given marketplace.
     *                       'Skus'		A list of up to twenty seller SKU values used to identify items in the
     *                       given marketplace.
     *
     * @return GetPricingResponse
     */
    public function getPricing(array $queries = []): GetPricingResponse
    {
        return $this->client->request('getPricing', 'GET', 'products/pricing/v0/price',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns competitive pricing information for a seller's offer listings based on
     * seller SKU or ASIN.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 20 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param array $queries options:
     *                       'MarketplaceId'		A marketplace identifier. Specifies the marketplace for which
     *                       prices are returned.
     *                       'Asins'		A list of up to twenty Amazon Standard Identification Number (ASIN)
     *                       values used to identify items in the given marketplace.
     *                       'Skus'		A list of up to twenty seller SKU values used to identify items in the
     *                       given marketplace.
     *
     * @return GetPricingResponse
     */
    public function getCompetitivePricing(array $queries = []): GetPricingResponse
    {
        return $this->client->request('getCompetitivePricing', 'GET', 'products/pricing/v0/competitivePrice',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns the lowest priced offers for a single SKU listing.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 5 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $SellerSKU Identifies an item in the given marketplace. SellerSKU is
     * qualified by the seller's SellerId, which is included with every operation that
     * you submit.
     * @param array $queries options:
     *                       'MarketplaceId'		A marketplace identifier. Specifies the marketplace for which
     *                       prices are returned.
     *
     * @return GetOffersResponse
     */
    public function getListingOffers($SellerSKU, array $queries = []): GetOffersResponse
    {
        return $this->client->request('getListingOffers', 'GET', "products/pricing/v0/listings/{$SellerSKU}/offers",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns the lowest priced offers for a single item based on ASIN.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 5 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $Asin The Amazon Standard Identification Number (ASIN) of the item
     * @param array $queries options:
     *                       'MarketplaceId'		A marketplace identifier. Specifies the marketplace for which
     *                       prices are returned.
     *
     * @return GetOffersResponse
     */
    public function getItemOffers($Asin, array $queries = []): GetOffersResponse
    {
        return $this->client->request('getItemOffers', 'GET', "products/pricing/v0/items/{$Asin}/offers",
            [
                'query' => $queries,
            ]
        );
    }
}
