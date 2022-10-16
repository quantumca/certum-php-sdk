<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:complexType name="addEmailVerificationRequest">
    <xs:complexContent>
        <xs:extension base="tns:request">
            <xs:sequence>
                <xs:element name="orderID" type="xs:string"/>
            </xs:sequence>
        </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the addEmailVerificationRequest WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeAddEmailVerificationRequest setOrderID(string $value) Sets the orderID element.
 * @method string getOrderID() Gets the orderID element.
 * @property string $orderID Gets the orderID element.
 *
 * @package types
 */
class PartnerAPITypeAddEmailVerificationRequest extends PartnerAPITypeRequest
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'orderID' => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
