<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SetNetworkPolicyRequest enables/disables network policy for a cluster.
 *
 * Generated from protobuf message <code>google.container.v1.SetNetworkPolicyRequest</code>
 */
class SetNetworkPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     */
    private $zone = '';
    /**
     * The name of the cluster.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     */
    private $cluster_id = '';
    /**
     * Configuration options for the NetworkPolicy feature.
     *
     * Generated from protobuf field <code>.google.container.v1.NetworkPolicy network_policy = 4;</code>
     */
    private $network_policy = null;

    public function __construct() {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct();
    }

    /**
     * The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     *
     * Generated from protobuf field <code>string zone = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * The name of the cluster.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * The name of the cluster.
     *
     * Generated from protobuf field <code>string cluster_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Configuration options for the NetworkPolicy feature.
     *
     * Generated from protobuf field <code>.google.container.v1.NetworkPolicy network_policy = 4;</code>
     * @return \Google\Cloud\Container\V1\NetworkPolicy
     */
    public function getNetworkPolicy()
    {
        return $this->network_policy;
    }

    /**
     * Configuration options for the NetworkPolicy feature.
     *
     * Generated from protobuf field <code>.google.container.v1.NetworkPolicy network_policy = 4;</code>
     * @param \Google\Cloud\Container\V1\NetworkPolicy $var
     * @return $this
     */
    public function setNetworkPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NetworkPolicy::class);
        $this->network_policy = $var;

        return $this;
    }

}

