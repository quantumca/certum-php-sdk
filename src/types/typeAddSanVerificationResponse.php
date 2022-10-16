<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:complexType name="addSanVerificationResponse">
    <xs:complexContent>
        <xs:extension base="tns:response">
            <xs:sequence>
                <xs:element minOccurs="0" name="SANVerification" type="tns:sanVerification"/>
            </xs:sequence>
        </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the addSanVerificationResponse WSDL type.
 *
 * It is an extension to the PartnerAPITypeResponse class.
 *
 * @method PartnerAPITypeAddSanVerificationResponse setSANVerification(PartnerAPITypeSanVerification $value) Sets the SANVerification element.
 * @method PartnerAPITypeSanVerification getSANVerification() Gets the SANVerification element or NULL.
 * @property PartnerAPITypeSanVerification $SANVerification Gets the SANVerification element or NULL.
 *
 * @package types
 */
class PartnerAPITypeAddSanVerificationResponse extends PartnerAPITypeResponse
{

    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'SANVerification' => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'PartnerAPITypeSanVerification', 'nillable' => TRUE)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
