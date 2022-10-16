<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="file">
	<xs:sequence>
		<xs:element name="fileName" type="tns:fileName"/>
		<xs:element name="content" type="xs:base64Binary" xmime:expectedContentTypes="application/octet-stream"/>
	</xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the file WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 * 
 * @method PartnerAPITypeFile setFileName(string $value) Sets the fileName element.
 * @method string getFileName() Gets the fileName element.
 * @property string $fileName Gets the fileName element.
 * 
 * @method PartnerAPITypeFile setContent(string $value) Sets the content element.
 * @method string getContent() Gets the content element.
 * @property string $content Gets the content element.
 * 
 * @package types
 */
class PartnerAPITypeFile extends PartnerAPIType
{

    protected function initData()
    {
        $n = array(
            'fileName' => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'content'  => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE)
        );
        return $n;
    }
}
