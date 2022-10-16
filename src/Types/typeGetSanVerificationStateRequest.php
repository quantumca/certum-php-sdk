<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="getSanVerificationStateRequest">
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
 * This class represents the getSanVerificationStateRequest WSDL type.
 *
 * It is an extension to the PartnerAPITypeRequest class.
 *
 * @method PartnerAPITypeGetSanVerificationStateRequest setOrderID(string $value) Sets the orderID element.
 * @method string getOrderID() Gets the orderID element.
 * @property string $orderID Gets the orderID element.
 *
 * @method PartnerAPITypeGetSanVerificationStateRequest setOrderOption(PartnerAPITypeOrderOption $value) Sets the orderOption element.
 * @method PartnerAPITypeOrderOption getOrderOption() Gets the orderOption element or NULL.
 * @property PartnerAPITypeOrderOption $orderOption Gets the orderOption element or NULL.
 *
 * @package types
 */
class PartnerAPITypeGetSanVerificationStateRequest extends PartnerAPITypeRequest
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
