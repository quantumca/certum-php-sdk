<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="requestorInfo">
	<xs:sequence>
		<xs:element name="email" type="xs:string"/>
		<xs:element name="firstName" type="xs:string"/>
		<xs:element name="lastName" type="xs:string"/>
		<xs:element name="phone" type="xs:string"/>
	</xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the requestorInfo WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 * 
 * @method PartnerAPITypeRequestorInfo setEmail(string $value) Sets the email element.
 * @method string getEmail() Gets the email element.
 * @property string $email Gets the email element.
 * 
 * @method PartnerAPITypeRequestorInfo setFirstName(string $value) Sets the firstName element.
 * @method string getFirstName() Gets the firstName element.
 * @property string $firstName Gets the firstName element.
 * 
 * @method PartnerAPITypeRequestorInfo setLastName(string $value) Sets the lastName element.
 * @method string getLastName() Gets the lastName element.
 * @property string $lastName Gets the lastName element.
 * 
 * @method PartnerAPITypeRequestorInfo setPhone(string $value) Sets the phone element.
 * @method string getPhone() Gets the phone element.
 * @property string $phone Gets the phone element.
 * 
 * @package types
 */
class PartnerAPITypeRequestorInfo extends PartnerAPIType {
    
    protected function initData() {
        $n = array(
            'email'        => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'firstName'    => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'lastName'     => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'phone'        => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => TRUE)
        );
        return $n;
    }


}
