<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authentication/authenticationService.proto

namespace Alfatraining\Grpc\Authentication;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * GuestAccessCredentials are used to provide a way for the platform to accept guests into a room or
 * temporary access to other services like our web apps or the file service (among others).
 * A user ID is auto-generated upon creation of guest access credentials and no user profile will be created.
 * Services that need to accept user IDs should also accept metadata maps where a display name can be added
 * under the guest user's ID as the key. Guest users usually don't have a lot of backend permissions, although
 * that's certainly possible.
 *
 * Generated from protobuf message <code>authentication.GuestAccessCredentials</code>
 */
class GuestAccessCredentials extends \Google\Protobuf\Internal\Message
{
    /**
     * only pass when authenticating; auth service will not accept this when creating guest access credentials
     *
     * Generated from protobuf field <code>string userId = 1;</code>
     */
    private $userId = '';
    /**
     * password, should be something random
     *
     * Generated from protobuf field <code>string code = 2;</code>
     */
    private $code = '';
    /**
     * Generated from protobuf field <code>string companyId = 3;</code>
     */
    private $companyId = '';
    /**
     * pass these when creating guest access credentials for a particular guest in a particular room
     *
     * Generated from protobuf field <code>string email = 4;</code>
     */
    private $email = '';
    /**
     * for now this is required when creating guest access credentials (subject to change)
     *
     * Generated from protobuf field <code>string roomId = 5;</code>
     */
    private $roomId = '';
    /**
     * optional; the email address is used if not set or, if that's not set either, "Unnamed guest" is used, can also be used when authenticating; added to the access token
     *
     * Generated from protobuf field <code>string displayName = 6;</code>
     */
    private $displayName = '';
    /**
     * optional, unix timestamp; will default to 30 days from the time the guest access credentials are created, accepts something in the far future (subject to change)
     *
     * Generated from protobuf field <code>int64 expiry = 7;</code>
     */
    private $expiry = 0;
    /**
     * provides shareable guest access credentials to be used multiple times
     *
     * Generated from protobuf field <code>bool shareable = 8;</code>
     */
    private $shareable = false;

    public function __construct() {
        \GPBMetadata\Authentication\AuthenticationService::initOnce();
        parent::__construct();
    }

    /**
     * only pass when authenticating; auth service will not accept this when creating guest access credentials
     *
     * Generated from protobuf field <code>string userId = 1;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * only pass when authenticating; auth service will not accept this when creating guest access credentials
     *
     * Generated from protobuf field <code>string userId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->userId = $var;

        return $this;
    }

    /**
     * password, should be something random
     *
     * Generated from protobuf field <code>string code = 2;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * password, should be something random
     *
     * Generated from protobuf field <code>string code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string companyId = 3;</code>
     * @return string
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Generated from protobuf field <code>string companyId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->companyId = $var;

        return $this;
    }

    /**
     * pass these when creating guest access credentials for a particular guest in a particular room
     *
     * Generated from protobuf field <code>string email = 4;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * pass these when creating guest access credentials for a particular guest in a particular room
     *
     * Generated from protobuf field <code>string email = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * for now this is required when creating guest access credentials (subject to change)
     *
     * Generated from protobuf field <code>string roomId = 5;</code>
     * @return string
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * for now this is required when creating guest access credentials (subject to change)
     *
     * Generated from protobuf field <code>string roomId = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkString($var, True);
        $this->roomId = $var;

        return $this;
    }

    /**
     * optional; the email address is used if not set or, if that's not set either, "Unnamed guest" is used, can also be used when authenticating; added to the access token
     *
     * Generated from protobuf field <code>string displayName = 6;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * optional; the email address is used if not set or, if that's not set either, "Unnamed guest" is used, can also be used when authenticating; added to the access token
     *
     * Generated from protobuf field <code>string displayName = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->displayName = $var;

        return $this;
    }

    /**
     * optional, unix timestamp; will default to 30 days from the time the guest access credentials are created, accepts something in the far future (subject to change)
     *
     * Generated from protobuf field <code>int64 expiry = 7;</code>
     * @return int|string
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * optional, unix timestamp; will default to 30 days from the time the guest access credentials are created, accepts something in the far future (subject to change)
     *
     * Generated from protobuf field <code>int64 expiry = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpiry($var)
    {
        GPBUtil::checkInt64($var);
        $this->expiry = $var;

        return $this;
    }

    /**
     * provides shareable guest access credentials to be used multiple times
     *
     * Generated from protobuf field <code>bool shareable = 8;</code>
     * @return bool
     */
    public function getShareable()
    {
        return $this->shareable;
    }

    /**
     * provides shareable guest access credentials to be used multiple times
     *
     * Generated from protobuf field <code>bool shareable = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setShareable($var)
    {
        GPBUtil::checkBool($var);
        $this->shareable = $var;

        return $this;
    }

}
