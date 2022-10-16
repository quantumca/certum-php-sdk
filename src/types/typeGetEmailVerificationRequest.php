<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="getEmailVerificationRequest">
	<xs:complexContent>
		<xs:extension base="tns:request">
			<xs:sequence>
				<xs:element name="orderID" type="xs:string"/>
			</xs:sequence>
		</xs:extension>
	</xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the getEmailVerificationRequest WSDL type.
 *
 * It is an extension to the PartnerAPITypeRequest class.
 * 
 * @method PartnerAPITypeGetEmailVerificationRequest setOrderID(string $value) Sets the orderID element.
 * @method string getOrderID() Gets the orderID element.
 * @property string $orderID Gets the orderID element.
 * 
 * @package types
 */
class PartnerAPITypeGetEmailVerificationRequest extends PartnerAPITypeRequest
{

    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'orderID'      => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
