<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="sanVerificationSystemState">
    <xs:sequence>
        <xs:element name="method" type="tns:sanVerificationSystemMethodEnum"/>
    </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the sanVerificationSystemState WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeSanVerificationSystemState setMethod(string $value) Sets the method list.
 * @method string getName() Gets the method list.
 * @property string $name Gets the method list.
 *
 * @package types
 */
class PartnerAPITypeSanVerificationSystemState extends PartnerAPIType
{
    protected function initData()
    {
        $n = array(
            'method'       => array('min' => 1, 'max' => null, 'value' => null, 'type' => 'string', 'nillable' => false),
        );
        return $n;
    }
}
