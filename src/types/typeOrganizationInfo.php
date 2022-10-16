<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="organizationInfo">
	<xs:sequence>
		<xs:element name="taxIdentificationNumber" type="xs:string"/>
	</xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the organizationInfo WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 * 
 * @method PartnerAPITypeOrganizationInfo setTaxIdentificationNumber(string $value) Sets the taxIdentificationNumber element.
 * @method string getTaxIdentificationNumber() Gets the taxIdentificationNumber element.
 * @property string $taxIdentificationNumber Gets the taxIdentificationNumber element.
 * 
 * @package types
 */
class PartnerAPITypeOrganizationInfo extends PartnerAPIType {
    
    protected function initData() {
        $n = array(
            'taxIdentificationNumber' => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
        );
        return $n;
    }


}
