<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="sanVerificationStates">
    <xs:sequence>
        <xs:element maxOccurs="unbounded" minOccurs="0" name="sanVerification" type="tns:sanVerificationState"/>
    </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the sanVerificationStates WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeSanVerificationStates setSanVerification(PartnerAPITypeSanVerificationState $value) Sets the sanVerification element. This method removes all previously added sanVerification elements and creates a new set of sanVerification elements.
 * @method PartnerAPITypeSanVerificationStates addSanVerification(PartnerAPITypeSanVerificationState $value) Adds a new sanVerification element to the existing set.
 * @method PartnerAPITypeSanVerificationState|PartnerAPITypeSanVerificationState[] getSanVerification() Gets the sanVerification element or NULL. If there is only one element, it will be returned, otherwise an array of PartnerAPITypeSanVerificationState objects will be returned.
 * @property PartnerAPITypeSanVerificationState|PartnerAPITypeSanVerificationState[] $sanVerification Gets the sanVerification element or NULL. If there is only one element, it will be returned, otherwise an array of PartnerAPITypeSanVerificationState objects will be returned.
 *
 * @package types
 */
class PartnerAPITypeSanVerificationStates extends PartnerAPIType {

    protected function initData() {
        $n = array(
            'sanVerification' => array('min' => 0, 'max' => NULL, 'value' => NULL, 'type' => 'PartnerAPITypeSanVerificationState', 'nillable' => FALSE)
        );
        return $n;
    }


}
