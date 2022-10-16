<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="requestHeader">
	<xs:sequence>
		<xs:element name="authToken" type="tns:authToken"/>
	</xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the requestHeader WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 * 
 * @method PartnerAPITypeRequestHeader setAuthToken(PartnerAPITypeAuthToken $value) Sets the authToken element.
 * @method PartnerAPITypeAuthToken getAuthToken() Gets the authToken element.
 * @property PartnerAPITypeAuthToken $authToken Gets the authToken element.
 * 
 * @package types
 */
class PartnerAPITypeRequestHeader extends PartnerAPIType {
    
    protected function initData() {
        $n = array(
            'authToken' => array('min' => 1, 'max' => 1, 'value' => new PartnerAPITypeAuthToken(), 'type' => 'PartnerAPITypeAuthToken', 'nillable' => FALSE)
        );
        return $n;
    }


}
