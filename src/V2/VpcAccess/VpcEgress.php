<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/vendor_settings.proto

namespace Google\Cloud\Run\V2\VpcAccess;

use UnexpectedValueException;

/**
 * Egress options for VPC access.
 *
 * Protobuf type <code>google.cloud.run.v2.VpcAccess.VpcEgress</code>
 */
class VpcEgress
{
    /**
     * Unspecified
     *
     * Generated from protobuf enum <code>VPC_EGRESS_UNSPECIFIED = 0;</code>
     */
    const VPC_EGRESS_UNSPECIFIED = 0;
    /**
     * All outbound traffic is routed through the VPC connector.
     *
     * Generated from protobuf enum <code>ALL_TRAFFIC = 1;</code>
     */
    const ALL_TRAFFIC = 1;
    /**
     * Only private IP ranges are routed through the VPC connector.
     *
     * Generated from protobuf enum <code>PRIVATE_RANGES_ONLY = 2;</code>
     */
    const PRIVATE_RANGES_ONLY = 2;

    private static $valueToName = [
        self::VPC_EGRESS_UNSPECIFIED => 'VPC_EGRESS_UNSPECIFIED',
        self::ALL_TRAFFIC => 'ALL_TRAFFIC',
        self::PRIVATE_RANGES_ONLY => 'PRIVATE_RANGES_ONLY',
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


