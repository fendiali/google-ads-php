<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/third_party_app_analytics_link_service.proto

namespace Google\Ads\GoogleAds\V5\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ThirdPartyAppAnalyticsLinkService.GetThirdPartyAppAnalyticsLink][google.ads.googleads.v5.services.ThirdPartyAppAnalyticsLinkService.GetThirdPartyAppAnalyticsLink].
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.services.GetThirdPartyAppAnalyticsLinkRequest</code>
 */
class GetThirdPartyAppAnalyticsLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the third party app analytics link.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Resource name of the third party app analytics link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Services\ThirdPartyAppAnalyticsLinkService::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the third party app analytics link.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Resource name of the third party app analytics link.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

}
