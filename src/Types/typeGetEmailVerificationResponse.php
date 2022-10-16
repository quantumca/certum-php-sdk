<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="getEmailVerificationResponse">
    <xs:complexContent>
        <xs:extension base="tns:response">
            <xs:sequence>
                <xs:element minOccurs="0" name="emailVerification" type="tns:emailVerification"/>
            </xs:sequence>
        </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the getEmailVerificationResponse WSDL type.
 *
 * It is an extension to the PartnerAPITypeResponse class.
 *
 * @method PartnerAPITypeGetEmailVerificationResponse setEmailVerification(PartnerAPITypeEmailVerification $value) Sets the emailVerification element.
 * @method PartnerAPITypeEmailVerification getEmailVerification() Gets the emailVerification element or NULL.
 * @property PartnerAPITypeEmailVerification $emailVerification Gets the emailVerification element or NULL.
 *
 * @package types
 */
class PartnerAPITypeGetEmailVerificationResponse extends PartnerAPITypeResponse
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'emailVerification' => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeEmailVerification', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
