<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="getSanVerificationStateResponse">
    <xs:complexContent>
        <xs:extension base="tns:response">
            <xs:sequence>
                <xs:element name="sanVerifications" type="tns:sanVerificationStates"/>
            </xs:sequence>
        </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the getSanVerificationStateResponse WSDL type.
 *
 * It is an extension to the PartnerAPITypeResponse class.
 *
 * @method PartnerAPITypeGetSanVerificationStateResponse setSanVerifications(PartnerAPITypeSanVerificationStates $value) Sets the sanVerifications element.
 * @method PartnerAPITypeSanVerificationStates|null getSanVerifications() Gets the sanVerifications element or NULL.
 * @property PartnerAPITypeSanVerificationStates|null $sanVerifications Gets the sanVerifications element or NULL.
 *
 * @package types
 */
class PartnerAPITypeGetSanVerificationStateResponse extends PartnerAPITypeResponse
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'sanVerifications' => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeSanVerificationStates', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
