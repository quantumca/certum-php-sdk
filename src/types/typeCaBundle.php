<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:complexType name="caBundle">
	<xs:sequence>
		<xs:element maxOccurs="unbounded" name="X509Cert" type="xs:string"/>
	</xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the caBundle WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 * 
 * @method PartnerAPITypeCaBundle setX509Cert(string $value) Sets the X509Cert element. This method removes all previously added X509Cert elements and creates a new set of X509Cert elements.
 * @method PartnerAPITypeCaBundle addX509Cert(string $value) Adds a new X509Cert element to the existing set.
 * @method string|string[] getX509Cert() Gets the X509Cert element. If there is only one element, it will be returned, otherwise an array of string values will be returned.
 * @property string|string[] $X509Cert Gets the X509Cert element. If there is only one element, it will be returned, otherwise an array of string values will be returned.
 * 
 * @package types
 */
class PartnerAPITypeCaBundle extends PartnerAPIType {
    
    protected function initData() {
        $n = array(
            'X509Cert' => array('min' => 1, 'max' => NULL, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE)
        );
        return $n;
    }


}
