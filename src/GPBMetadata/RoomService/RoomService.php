<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: roomService/roomService.proto

namespace GPBMetadata\RoomService;

class RoomService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common\AccessInfo::initOnce();
        \GPBMetadata\Common\ReplyInfo::initOnce();
        \GPBMetadata\Common\Room::initOnce();
        \GPBMetadata\Common\Permissions::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a85130a1d726f6f6d536572766963652f726f6f6d536572766963652e70" .
            "726f746f120b726f6f6d536572766963651a16636f6d6d6f6e2f7265706c" .
            "79496e666f2e70726f746f1a11636f6d6d6f6e2f726f6f6d2e70726f746f" .
            "1a18636f6d6d6f6e2f7065726d697373696f6e732e70726f746f22600a16" .
            "526f6f6d5065726d697373696f6e735265717565737412260a0a61636365" .
            "7373496e666f18012001280b32122e636f6d6d6f6e2e416363657373496e" .
            "666f120e0a06757365724964180b20012809120e0a06726f6f6d4964180c" .
            "2001280922660a14526f6f6d5065726d697373696f6e735265706c791224" .
            "0a097265706c79496e666f18012001280b32112e636f6d6d6f6e2e526570" .
            "6c79496e666f12280a0b7065726d697373696f6e73180d2001280b32132e" .
            "636f6d6d6f6e2e5065726d697373696f6e73224c0a11526f6f6d53746174" .
            "75735265717565737412260a0a616363657373496e666f18012001280b32" .
            "122e636f6d6d6f6e2e416363657373496e666f120f0a07726f6f6d496473" .
            "180d2003280922b4010a0f526f6f6d5374617475735265706c7912240a09" .
            "7265706c79496e666f18012001280b32112e636f6d6d6f6e2e5265706c79" .
            "496e666f12360a05726f6f6d73180e2003280b32272e726f6f6d53657276" .
            "6963652e526f6f6d5374617475735265706c792e526f6f6d73456e747279" .
            "1a430a0a526f6f6d73456e747279120b0a036b657918012001280912240a" .
            "0576616c756518022001280b32152e726f6f6d536572766963652e526f6f" .
            "6d496e666f3a0238012280010a08526f6f6d496e666f122f0a0575736572" .
            "73180f2003280b32202e726f6f6d536572766963652e526f6f6d496e666f" .
            "2e5573657273456e7472791a430a0a5573657273456e747279120b0a036b" .
            "657918012001280912240a0576616c756518022001280b32152e726f6f6d" .
            "536572766963652e55736572496e666f3a023801221a0a0855736572496e" .
            "666f120e0a066f6e6c696e6518012001280822570a11526f6f6d43726561" .
            "74655265717565737412260a0a616363657373496e666f18012001280b32" .
            "122e636f6d6d6f6e2e416363657373496e666f121a0a04726f6f6d180620" .
            "01280b320c2e636f6d6d6f6e2e526f6f6d22630a0f526f6f6d4372656174" .
            "655265706c7912240a097265706c79496e666f18012001280b32112e636f" .
            "6d6d6f6e2e5265706c79496e666f120e0a06726f6f6d4964180c20012809" .
            "121a0a04726f6f6d18062001280b320c2e636f6d6d6f6e2e526f6f6d226f" .
            "0a0f526f6f6d4c6973745265717565737412260a0a616363657373496e66" .
            "6f18012001280b32122e636f6d6d6f6e2e416363657373496e666f120d0a" .
            "056c696d6974180d2001280d120e0a066f6666736574180e2001280d1215" .
            "0a0d66696c746572526f6f6d49647318322003280922a7010a0d526f6f6d" .
            "4c6973745265706c7912240a097265706c79496e666f18012001280b3211" .
            "2e636f6d6d6f6e2e5265706c79496e666f12340a05726f6f6d7318072003" .
            "280b32252e726f6f6d536572766963652e526f6f6d4c6973745265706c79" .
            "2e526f6f6d73456e7472791a3a0a0a526f6f6d73456e747279120b0a036b" .
            "6579180120012809121b0a0576616c756518022001280b320c2e636f6d6d" .
            "6f6e2e526f6f6d3a023801224c0a12526f6f6d44657374726f7952657175" .
            "65737412260a0a616363657373496e666f18012001280b32122e636f6d6d" .
            "6f6e2e416363657373496e666f120e0a06726f6f6d496418052001280922" .
            "380a10526f6f6d44657374726f795265706c7912240a097265706c79496e" .
            "666f18012001280b32112e636f6d6d6f6e2e5265706c79496e666f228901" .
            "0a11526f6f6d5570646174655265717565737412260a0a61636365737349" .
            "6e666f18012001280b32122e636f6d6d6f6e2e416363657373496e666f12" .
            "0e0a06726f6f6d4964180520012809121a0a04726f6f6d18062001280b32" .
            "0c2e636f6d6d6f6e2e526f6f6d12200a1872656d6f766544656661756c74" .
            "5065726d697373696f6e7318072001280822370a0f526f6f6d5570646174" .
            "655265706c7912240a097265706c79496e666f18012001280b32112e636f" .
            "6d6d6f6e2e5265706c79496e666f22730a12526f6f6d7355706461746552" .
            "65717565737412260a0a616363657373496e666f18012001280b32122e63" .
            "6f6d6d6f6e2e416363657373496e666f12350a0d726f6f6d73546f557064" .
            "61746518022003280b321e2e726f6f6d536572766963652e526f6f6d5570" .
            "646174655265717565737422ca010a10526f6f6d73557064617465526570" .
            "6c7912240a097265706c79496e666f18012001280b32112e636f6d6d6f6e" .
            "2e5265706c79496e666f12470a0d7570646174655265706c696573180220" .
            "03280b32302e726f6f6d536572766963652e526f6f6d7355706461746552" .
            "65706c792e5570646174655265706c696573456e7472791a470a12557064" .
            "6174655265706c696573456e747279120b0a036b65791801200128091220" .
            "0a0576616c756518022001280b32112e636f6d6d6f6e2e5265706c79496e" .
            "666f3a0238013298040a0b726f6f6d5365727669636512460a0643726561" .
            "7465121e2e726f6f6d536572766963652e526f6f6d437265617465526571" .
            "756573741a1c2e726f6f6d536572766963652e526f6f6d43726561746552" .
            "65706c7912460a06557064617465121e2e726f6f6d536572766963652e52" .
            "6f6f6d557064617465526571756573741a1c2e726f6f6d53657276696365" .
            "2e526f6f6d5570646174655265706c79124d0a0b557064617465526f6f6d" .
            "73121f2e726f6f6d536572766963652e526f6f6d73557064617465526571" .
            "756573741a1d2e726f6f6d536572766963652e526f6f6d73557064617465" .
            "5265706c7912400a044c697374121c2e726f6f6d536572766963652e526f" .
            "6f6d4c697374526571756573741a1a2e726f6f6d536572766963652e526f" .
            "6f6d4c6973745265706c7912490a0744657374726f79121f2e726f6f6d53" .
            "6572766963652e526f6f6d44657374726f79526571756573741a1d2e726f" .
            "6f6d536572766963652e526f6f6d44657374726f795265706c7912460a06" .
            "537461747573121e2e726f6f6d536572766963652e526f6f6d5374617475" .
            "73526571756573741a1c2e726f6f6d536572766963652e526f6f6d537461" .
            "7475735265706c7912550a0b5065726d697373696f6e7312232e726f6f6d" .
            "536572766963652e526f6f6d5065726d697373696f6e7352657175657374" .
            "1a212e726f6f6d536572766963652e526f6f6d5065726d697373696f6e73" .
            "5265706c794219ca0216416c6661747261696e696e675c477270635c526f" .
            "6f6d620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
