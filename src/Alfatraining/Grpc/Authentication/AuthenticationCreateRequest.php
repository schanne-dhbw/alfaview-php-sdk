<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authentication/authenticationService.proto

namespace Alfatraining\Grpc\Authentication;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AuthenticationCreateRequest carries all the required information
 * to create authentication methods for a user.
 * This is only used if the user ID is not known and should be picked
 * by the authentication service, otherwise use the AuthenticationUpdateRequest.
 *
 * Generated from protobuf message <code>authentication.AuthenticationCreateRequest</code>
 */
class AuthenticationCreateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.common.AccessInfo accessInfo = 1;</code>
     */
    private $accessInfo = null;
    /**
     * Generated from protobuf field <code>.authentication.AuthenticationRequest authenticationRequest = 12;</code>
     */
    private $authenticationRequest = null;

    public function __construct() {
        \GPBMetadata\Authentication\AuthenticationService::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.common.AccessInfo accessInfo = 1;</code>
     * @return \Alfatraining\Grpc\Common\AccessInfo
     */
    public function getAccessInfo()
    {
        return $this->accessInfo;
    }

    /**
     * Generated from protobuf field <code>.common.AccessInfo accessInfo = 1;</code>
     * @param \Alfatraining\Grpc\Common\AccessInfo $var
     * @return $this
     */
    public function setAccessInfo($var)
    {
        GPBUtil::checkMessage($var, \Alfatraining\Grpc\Common\AccessInfo::class);
        $this->accessInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.authentication.AuthenticationRequest authenticationRequest = 12;</code>
     * @return \Alfatraining\Grpc\Authentication\AuthenticationRequest
     */
    public function getAuthenticationRequest()
    {
        return $this->authenticationRequest;
    }

    /**
     * Generated from protobuf field <code>.authentication.AuthenticationRequest authenticationRequest = 12;</code>
     * @param \Alfatraining\Grpc\Authentication\AuthenticationRequest $var
     * @return $this
     */
    public function setAuthenticationRequest($var)
    {
        GPBUtil::checkMessage($var, \Alfatraining\Grpc\Authentication\AuthenticationRequest::class);
        $this->authenticationRequest = $var;

        return $this;
    }

}
