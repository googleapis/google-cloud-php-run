<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/status.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Effective settings for the current revision
 *
 * Generated from protobuf message <code>google.cloud.run.v2.RevisionScalingStatus</code>
 */
class RevisionScalingStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * The current number of min instances provisioned for this revision.
     *
     * Generated from protobuf field <code>int32 desired_min_instance_count = 1;</code>
     */
    private $desired_min_instance_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $desired_min_instance_count
     *           The current number of min instances provisioned for this revision.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\Status::initOnce();
        parent::__construct($data);
    }

    /**
     * The current number of min instances provisioned for this revision.
     *
     * Generated from protobuf field <code>int32 desired_min_instance_count = 1;</code>
     * @return int
     */
    public function getDesiredMinInstanceCount()
    {
        return $this->desired_min_instance_count;
    }

    /**
     * The current number of min instances provisioned for this revision.
     *
     * Generated from protobuf field <code>int32 desired_min_instance_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDesiredMinInstanceCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->desired_min_instance_count = $var;

        return $this;
    }

}
