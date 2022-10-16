<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="sanVerificationManualState">
    <xs:sequence>
        <xs:element name="state" type="tns:sanVerificationStateEnum"/>
        <xs:element minOccurs="0" name="expireDate" type="xs:dateTime"/>
        <xs:element minOccurs="0" name="info" type="xs:string"/>
    </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the sanVerificationManualState WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeSanVerificationManualState setState(string $value) Sets the state element.
 * @method string getState() Gets the state element.
 * @property string $state Gets the state element.
 *
 * @method PartnerAPITypeSanVerificationManualState setExpireDate(string $value) Sets the expireDate element.
 * @method string getExpireDate() Gets the expireDate element.
 * @property string $expireDate Gets the expireDate element.
 *
 * @method PartnerAPITypeSanVerificationManualState setInfo(string $value) Sets the info element.
 * @method string getInfo() Gets the info element.
 * @property string $info Gets the info element.
 *
 * @package types
 */
class PartnerAPITypeSanVerificationManualState extends PartnerAPIType {

    protected function initData() {
        $n = array(
            'state'      => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'expireDate' => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'info'       => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE)
        );
        return $n;
    }


}
