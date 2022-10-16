<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:complexType name="addSerialNumbers">
	<xs:sequence>
		<xs:element maxOccurs="unbounded" name="serialNumber" type="xs:string"/>
	</xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the addSerialNumbers WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 * 
 * @method PartnerAPITypeAddSerialNumbers setSerialNumber(string $value) Sets the serialNumber element. This method removes all previously added serialNumber elements and creates a new set of serialNumber elements.
 * @method PartnerAPITypeAddSerialNumbers addSerialNumber(string $value) Adds a new serialNumber element to the existing set.
 * @method string|string[] getSerialNumber() Gets the serialNumber element. If there is only one element, it will be returned, otherwise an array of string values will be returned.
 * @property string|string[] $serialNumber Gets the serialNumber element. If there is only one element, it will be returned, otherwise an array of string values will be returned.
 * 
 * @package types
 */
class PartnerAPITypeAddSerialNumbers extends PartnerAPIType
{

    protected function initData()
    {
        $n = array(
            'serialNumber' => array('min' => 1, 'max' => NULL, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE)
        );
        return $n;
    }
}
