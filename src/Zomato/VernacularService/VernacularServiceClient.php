<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Zomato\VernacularService;

/**
 * VernacularService hold RPCs supported in vernacular service
 */
class VernacularServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * BulkGetLocalizationData rpc for bulk get localization data
     * @param \Zomato\VernacularService\RequestLocalizationData $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BulkGetLocalizationData(\Zomato\VernacularService\RequestLocalizationData $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zomato.vernacular.VernacularService/BulkGetLocalizationData',
        $argument,
        ['\Zomato\VernacularService\ResponseLocalizationData', 'decode'],
        $metadata, $options);
    }

    /**
     * BulkInsertLocalizationData rpc for bulk insert localization data
     * @param \Zomato\VernacularService\RequestBulkInsertLocalizedData $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BulkInsertLocalizationData(\Zomato\VernacularService\RequestBulkInsertLocalizedData $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/zomato.vernacular.VernacularService/BulkInsertLocalizationData',
        $argument,
        ['\Zomato\VernacularService\ResponseBulkInsertLocalizedData', 'decode'],
        $metadata, $options);
    }

}
