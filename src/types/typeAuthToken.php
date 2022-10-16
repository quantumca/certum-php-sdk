<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:complexType name="authToken">
	<xs:sequence>
		<xs:element name="password" type="xs:string"/>
		<xs:element name="userName" type="xs:string"/>
	</xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the authToken WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 * 
 * @method PartnerAPITypeAuthToken setPassword(string $value) Sets the password element.
 * @method string getPassword() Gets the password element.
 * @property string $password Gets the password element.
 * 
 * @method PartnerAPITypeAuthToken setUserName(string $value) Sets the userName element.
 * @method string getUserName() Gets the userName element.
 * @property string $userName Gets the userName element.
 * 
 * @package types
 */
class PartnerAPITypeAuthToken extends PartnerAPIType
{

    protected function initData()
    {
        $n = array(
            'password' => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'userName' => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE)
        );
        return $n;
    }
}
