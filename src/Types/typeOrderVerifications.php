<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="orderVerifications">
        <xs:sequence>
                <xs:element maxOccurs="unbounded" name="verification" type="tns:orderVerification"/>
        </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the orderVerifications WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeOrderVerifications setVerification(PartnerAPITypeOrderVerification $value) Sets the verification element. This method removes all previously added verification elements and creates a new set of verification elements.
 * @method PartnerAPITypeOrderVerifications addVerification(PartnerAPITypeOrderVerification $value) Adds a new verification element to the existing set.
 * @method PartnerAPITypeOrderVerification|PartnerAPITypeOrderVerification[] getVerification() Gets the verification element or NULL. If there is only one element, it will be returned, otherwise an array of PartnerAPITypeOrderVerification objects will be returned.
 * @property PartnerAPITypeOrderVerification|PartnerAPITypeOrderVerification[] $verification Gets the verification element or NULL. If there is only one element, it will be returned, otherwise an array of PartnerAPITypeOrderVerification objects will be returned.
 *
 * @package types
 */
class PartnerAPITypeOrderVerifications extends PartnerAPIType
{
    protected function initData()
    {
        $n = array(
            'verification' => array('min' => 0, 'max' => null, 'value' => null, 'type' => 'PartnerAPITypeOrderVerification', 'nillable' => false)
        );
        return $n;
    }
}
