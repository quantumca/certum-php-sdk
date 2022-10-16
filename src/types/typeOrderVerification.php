<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="orderVerification">
        <xs:sequence>
                <xs:element name="type" type="tns:orderVerificationType"/>
                <xs:element name="state" type="tns:orderVerificationState"/>
                <xs:element name="expireDate" type="xs:dateTime"/>
        </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the orderVerification WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 * 
 * @method PartnerAPITypeOrderVerification setType(string $value) Sets the type element.
 * @method string getType() Gets the type element.
 * @property string $type Gets the type element.
 * 
 * @method PartnerAPITypeOrderVerification setState(string $value) Sets the state element.
 * @method string getState() Gets the state element or NULL.
 * @property string $state Gets the state element or NULL.
 * 
 * @method PartnerAPITypeOrderVerification setExpireDate(string $value) Sets the expireDate element.
 * @method string getExpireDate() Gets the expireDate element.
 * @property string $expireDate Gets the expireDate element.
 * 
 * @package types
 */
class PartnerAPITypeOrderVerification extends PartnerAPIType {
    
    protected function initData() {
        $n = array(
            'type'       => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'state'      => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'expireDate' => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE)
        );
        return $n;
    }


}
