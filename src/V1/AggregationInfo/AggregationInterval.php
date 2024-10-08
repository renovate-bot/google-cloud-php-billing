<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/v1/cloud_catalog.proto

namespace Google\Cloud\Billing\V1\AggregationInfo;

use UnexpectedValueException;

/**
 * The interval at which usage is aggregated to compute cost.
 * Example: "MONTHLY" aggregation interval indicates that usage for tiered
 * pricing is aggregated every month.
 *
 * Protobuf type <code>google.cloud.billing.v1.AggregationInfo.AggregationInterval</code>
 */
class AggregationInterval
{
    /**
     * Generated from protobuf enum <code>AGGREGATION_INTERVAL_UNSPECIFIED = 0;</code>
     */
    const AGGREGATION_INTERVAL_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>DAILY = 1;</code>
     */
    const DAILY = 1;
    /**
     * Generated from protobuf enum <code>MONTHLY = 2;</code>
     */
    const MONTHLY = 2;

    private static $valueToName = [
        self::AGGREGATION_INTERVAL_UNSPECIFIED => 'AGGREGATION_INTERVAL_UNSPECIFIED',
        self::DAILY => 'DAILY',
        self::MONTHLY => 'MONTHLY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


