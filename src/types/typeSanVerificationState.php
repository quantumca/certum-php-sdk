<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="sanVerificationState">
    <xs:sequence>
        <xs:element name="FQDN" type="xs:string"/>
        <xs:element name="manualVerification" type="tns:sanVerificationManualState"/>
        <xs:element maxOccurs="unbounded" minOccurs="0" name="systemVerification" type="tns:sanVerificationSystemState"/>
    </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the sanVerificationState WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeSanVerificationState setFQDN(string $value) Sets the FQDN element.
 * @method string getFQDN() Gets the FQDN element.
 * @property string $FQDN Gets the FQDN element.
 *
 * @method PartnerAPITypeSanVerificationState setManualVerification(PartnerAPITypeSanVerificationManualState $value) Sets the manualVerification element.
 * @method PartnerAPITypeSanVerificationManualState getManualVerification() Gets the manualVerification element.
 * @property PartnerAPITypeSanVerificationManualState $manualVerification Gets the manualVerification element.
 *
 * @method PartnerAPITypeSanVerificationState setSystemVerification(PartnerAPITypeSanVerificationSystemState $value) Sets the systemVerification element. This method removes all previously added systemVerification elements and creates a new set of systemVerification elements.
 * @method PartnerAPITypeSanVerificationSystemState addSystemVerification(PartnerAPITypeSanVerificationSystemState $value) Adds a new systemVerification element to the existing set.
 * @method PartnerAPITypeSanVerificationSystemState|PartnerAPITypeSanVerificationSystemState[] getSystemVerification() Gets the systemVerification element or NULL. If there is only one element, it will be returned, otherwise an array of PartnerAPITypeSanVerificationSystemState objects will be returned.
 * @property PartnerAPITypeSanVerificationSystemState|PartnerAPITypeSanVerificationSystemState[] $systemVerification Gets the systemVerification element or NULL. If there is only one element, it will be returned, otherwise an array of PartnerAPITypeSanVerificationSystemState objects will be returned.
 *
 * @package types
 */
class PartnerAPITypeSanVerificationState extends PartnerAPIType {

    protected function initData() {
        $n = array(
            'FQDN'                 => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'manualVerification'   => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'PartnerAPITypeSanVerificationManualState', 'nillable' => FALSE),
            'systemVerification' => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'PartnerAPITypeSanVerificationSystemState', 'nillable' => TRUE)
        );
        return $n;
    }


}
