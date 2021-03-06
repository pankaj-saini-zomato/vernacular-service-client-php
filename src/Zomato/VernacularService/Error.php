<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/response.proto

namespace Zomato\VernacularService;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Error holds error info for RPC's response
 *
 * Generated from protobuf message <code>zomato.vernacular.Error</code>
 */
class Error extends \Google\Protobuf\Internal\Message
{
    /**
     * error_code according to type of error
     *
     * Generated from protobuf field <code>uint64 error_code = 1;</code>
     */
    private $error_code = 0;
    /**
     * error_message contains detailed error message
     *
     * Generated from protobuf field <code>string error_message = 2;</code>
     */
    private $error_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $error_code
     *           error_code according to type of error
     *     @type string $error_message
     *           error_message contains detailed error message
     * }
     */
    public function __construct($data = NULL) {
        \Zomato\VernacularService\Metadata\Response::initOnce();
        parent::__construct($data);
    }

    /**
     * error_code according to type of error
     *
     * Generated from protobuf field <code>uint64 error_code = 1;</code>
     * @return int|string
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * error_code according to type of error
     *
     * Generated from protobuf field <code>uint64 error_code = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkUint64($var);
        $this->error_code = $var;

        return $this;
    }

    /**
     * error_message contains detailed error message
     *
     * Generated from protobuf field <code>string error_message = 2;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * error_message contains detailed error message
     *
     * Generated from protobuf field <code>string error_message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;

        return $this;
    }

}

