<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:complexType name="addSanVerificationRequest">
    <xs:complexContent>
        <xs:extension base="tns:request">
            <xs:sequence>
                <xs:element minOccurs="0" name="SANApprover" type="tns:sanApprover"/>
                <xs:element name="orderID" type="xs:string"/>
            </xs:sequence>
        </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the addSanVerificationRequest WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeAddSanVerificationRequest setSANApprover(PartnerAPITypeSanApprover $value) Sets the SANApprover element.
 * @method PartnerAPITypeSanApprover|null getSANApprover() Gets the SANApprover element or NULL.
 * @property PartnerAPITypeSanApprover|null $SANApprover Gets the SANApprover element or NULL.
 *
 * @method PartnerAPITypeAddSanVerificationRequest setOrderID(string $value) Sets the orderID element.
 * @method string getOrderID() Gets the orderID element.
 * @property string $orderID Gets the orderID element.
 *
 * @package types
 */
class PartnerAPITypeAddSanVerificationRequest extends PartnerAPITypeRequest
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'SANApprover' => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeSanApprover', 'nillable' => true),
            'orderID'     => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
