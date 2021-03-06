<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/vernacular.proto

namespace Zomato\VernacularService;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RequestLocalizationData holds parameter required for BulkGetLocalizationData
 *
 * Generated from protobuf message <code>zomato.vernacular.RequestLocalizationData</code>
 */
class RequestLocalizationData extends \Google\Protobuf\Internal\Message
{
    /**
     * texts list of strings to be localized
     *
     * Generated from protobuf field <code>repeated string texts = 1;</code>
     */
    private $texts;
    /**
     * lang_code is the language code
     *
     * Generated from protobuf field <code>string lang_code = 2;</code>
     */
    private $lang_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $texts
     *           texts list of strings to be localized
     *     @type string $lang_code
     *           lang_code is the language code
     * }
     */
    public function __construct($data = NULL) {
        \Zomato\VernacularService\Metadata\Vernacular::initOnce();
        parent::__construct($data);
    }

    /**
     * texts list of strings to be localized
     *
     * Generated from protobuf field <code>repeated string texts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTexts()
    {
        return $this->texts;
    }

    /**
     * texts list of strings to be localized
     *
     * Generated from protobuf field <code>repeated string texts = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTexts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->texts = $arr;

        return $this;
    }

    /**
     * lang_code is the language code
     *
     * Generated from protobuf field <code>string lang_code = 2;</code>
     * @return string
     */
    public function getLangCode()
    {
        return $this->lang_code;
    }

    /**
     * lang_code is the language code
     *
     * Generated from protobuf field <code>string lang_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLangCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->lang_code = $var;

        return $this;
    }

}

