<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/rpc.proto

namespace Zomato\VernacularService\Metadata;

class Rpc
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Zomato\VernacularService\Metadata\Vernacular::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acc030a0f70726f746f2f7270632e70726f746f12117a6f6d61746f2e76" .
            "65726e6163756c617222070a05456d707479328d020a115665726e616375" .
            "6c61725365727669636512720a1742756c6b4765744c6f63616c697a6174" .
            "696f6e44617461122a2e7a6f6d61746f2e7665726e6163756c61722e5265" .
            "71756573744c6f63616c697a6174696f6e446174611a2b2e7a6f6d61746f" .
            "2e7665726e6163756c61722e526573706f6e73654c6f63616c697a617469" .
            "6f6e446174611283010a1a42756c6b496e736572744c6f63616c697a6174" .
            "696f6e4461746112312e7a6f6d61746f2e7665726e6163756c61722e5265" .
            "717565737442756c6b496e736572744c6f63616c697a6564446174611a32" .
            "2e7a6f6d61746f2e7665726e6163756c61722e526573706f6e736542756c" .
            "6b496e736572744c6f63616c697a6564446174614284015a436769746875" .
            "622e636f6d2f5a6f6d61746f2f7665726e6163756c61722d736572766963" .
            "652d636c69656e742d676f6c616e672f70726f746f2f7665726e6163756c" .
            "6172ca02185a6f6d61746f5c5665726e6163756c617253657276696365e2" .
            "02215a6f6d61746f5c5665726e6163756c6172536572766963655c4d6574" .
            "6164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

