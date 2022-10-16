<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="FQDNs">
	<xs:sequence>
		<xs:element maxOccurs="unbounded" name="FQDN" type="xs:string"/>
	</xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the FQDNs WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 * 
 * @method PartnerAPITypeFQDNs setFQDN(string $value) Sets the FQDN element. This method removes all previously added FQDN elements and creates a new set of FQDN elements.
 * @method PartnerAPITypeFQDNs addFQDN(string $value) Adds a new FQDN element to the existing set.
 * @method string|string[] getFQDN() Gets the FQDN element. If there is only one element, it will be returned, otherwise an array of string values will be returned.
 * @property string|string[] $FQDN Gets the FQDN element. If there is only one element, it will be returned, otherwise an array of string values will be returned.
 * 
 * @package types
 */
class PartnerAPITypeFQDNs extends PartnerAPIType
{

    protected function initData()
    {
        $n = array(
            'FQDN' => array('min' => 1, 'max' => NULL, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE)
        );
        return $n;
    }
}
