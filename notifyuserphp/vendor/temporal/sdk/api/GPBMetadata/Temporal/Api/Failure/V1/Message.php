<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/failure/v1/message.proto

namespace GPBMetadata\Temporal\Api\Failure\V1;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Temporal\Api\Common\V1\Message::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\Workflow::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8f100a2574656d706f72616c2f6170692f6661696c7572652f76312f6d6573736167652e70726f746f121774656d706f72616c2e6170692e6661696c7572652e76311a2474656d706f72616c2f6170692f656e756d732f76312f776f726b666c6f772e70726f746f22700a164170706c69636174696f6e4661696c757265496e666f120c0a047479706518012001280912150a0d6e6f6e5f726574727961626c6518022001280812310a0764657461696c7318032001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f6164732290010a1254696d656f75744661696c757265496e666f12380a0c74696d656f75745f7479706518012001280e32222e74656d706f72616c2e6170692e656e756d732e76312e54696d656f75745479706512400a166c6173745f6865617274626561745f64657461696c7318022001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647322480a1343616e63656c65644661696c757265496e666f12310a0764657461696c7318012001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647322170a155465726d696e617465644661696c757265496e666f222a0a115365727665724661696c757265496e666f12150a0d6e6f6e5f726574727961626c65180120012808225c0a185265736574576f726b666c6f774661696c757265496e666f12400a166c6173745f6865617274626561745f64657461696c7318012001280b32202e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e5061796c6f61647322e7010a1341637469766974794661696c757265496e666f121a0a127363686564756c65645f6576656e745f696418012001280312180a10737461727465645f6576656e745f696418022001280312100a086964656e74697479180320012809123b0a0d61637469766974795f7479706518042001280b32242e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e41637469766974795479706512130a0b61637469766974795f696418052001280912360a0b72657472795f737461746518062001280e32212e74656d706f72616c2e6170692e656e756d732e76312e5265747279537461746522a8020a214368696c64576f726b666c6f77457865637574696f6e4661696c757265496e666f12110a096e616d65737061636518012001280912450a12776f726b666c6f775f657865637574696f6e18022001280b32292e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f77457865637574696f6e123b0a0d776f726b666c6f775f7479706518032001280b32242e74656d706f72616c2e6170692e636f6d6d6f6e2e76312e576f726b666c6f7754797065121a0a12696e697469617465645f6576656e745f696418042001280312180a10737461727465645f6576656e745f696418052001280312360a0b72657472795f737461746518062001280e32212e74656d706f72616c2e6170692e656e756d732e76312e5265747279537461746522a5060a074661696c757265120f0a076d657373616765180120012809120e0a06736f7572636518022001280912130a0b737461636b5f7472616365180320012809122f0a05636175736518042001280b32202e74656d706f72616c2e6170692e6661696c7572652e76312e4661696c75726512530a186170706c69636174696f6e5f6661696c7572655f696e666f18052001280b322f2e74656d706f72616c2e6170692e6661696c7572652e76312e4170706c69636174696f6e4661696c757265496e666f4800124b0a1474696d656f75745f6661696c7572655f696e666f18062001280b322b2e74656d706f72616c2e6170692e6661696c7572652e76312e54696d656f75744661696c757265496e666f4800124d0a1563616e63656c65645f6661696c7572655f696e666f18072001280b322c2e74656d706f72616c2e6170692e6661696c7572652e76312e43616e63656c65644661696c757265496e666f480012510a177465726d696e617465645f6661696c7572655f696e666f18082001280b322e2e74656d706f72616c2e6170692e6661696c7572652e76312e5465726d696e617465644661696c757265496e666f480012490a137365727665725f6661696c7572655f696e666f18092001280b322a2e74656d706f72616c2e6170692e6661696c7572652e76312e5365727665724661696c757265496e666f480012580a1b72657365745f776f726b666c6f775f6661696c7572655f696e666f180a2001280b32312e74656d706f72616c2e6170692e6661696c7572652e76312e5265736574576f726b666c6f774661696c757265496e666f4800124d0a1561637469766974795f6661696c7572655f696e666f180b2001280b322c2e74656d706f72616c2e6170692e6661696c7572652e76312e41637469766974794661696c757265496e666f4800126b0a256368696c645f776f726b666c6f775f657865637574696f6e5f6661696c7572655f696e666f180c2001280b323a2e74656d706f72616c2e6170692e6661696c7572652e76312e4368696c64576f726b666c6f77457865637574696f6e4661696c757265496e666f4800420e0a0c6661696c7572655f696e666f42700a1a696f2e74656d706f72616c2e6170692e6661696c7572652e7631420c4d65737361676550726f746f50015a25676f2e74656d706f72616c2e696f2f6170692f6661696c7572652f76313b6661696c757265ea021a54656d706f72616c3a3a4170693a3a4661696c7572653a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

