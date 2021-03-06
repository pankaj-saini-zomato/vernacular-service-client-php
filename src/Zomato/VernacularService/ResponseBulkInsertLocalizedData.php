<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/vernacular.proto

namespace Zomato\VernacularService;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ResponseBulkInsertLocalizationData
 *
 * Generated from protobuf message <code>zomato.vernacular.ResponseBulkInsertLocalizedData</code>
 */
class ResponseBulkInsertLocalizedData extends \Google\Protobuf\Internal\Message
{
    /**
     * status holds RPCs status
     *
     * Generated from protobuf field <code>.zomato.vernacular.ResponseStatus status = 1;</code>
     */
    private $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Zomato\VernacularService\ResponseStatus $status
     *           status holds RPCs status
     * }
     */
    public function __construct($data = NULL) {
        \Zomato\VernacularService\Metadata\Vernacular::initOnce();
        parent::__construct($data);
    }

    /**
     * status holds RPCs status
     *
     * Generated from protobuf field <code>.zomato.vernacular.ResponseStatus status = 1;</code>
     * @return \Zomato\VernacularService\ResponseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * status holds RPCs status
     *
     * Generated from protobuf field <code>.zomato.vernacular.ResponseStatus status = 1;</code>
     * @param \Zomato\VernacularService\ResponseStatus $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Zomato\VernacularService\ResponseStatus::class);
        $this->status = $var;

        return $this;
    }

}

