<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="orderSNICertificateResponse">
	<xs:complexContent>
		<xs:extension base="tns:response">
			<xs:sequence>
				<xs:element name="orderID" type="xs:string"/>
				<xs:element minOccurs="0" name="invalidSerialNumbers" type="tns:invalidSerialNumbers"/>
			</xs:sequence>
		</xs:extension>
	</xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the orderSNICertificateResponse WSDL type.
 *
 * It is an extension to the PartnerAPITypeResponse class.
 * 
 * @method PartnerAPITypeOrderSNICertificateResponse setOrderID(string $value) Sets the orderID element.
 * @method string getOrderID() Gets the orderID element.
 * @property string $orderID Gets the orderID element.
 * 
 * @method PartnerAPITypeOrderSNICertificateResponse setInvalidSerialNumbers(PartnerAPITypeInvalidSerialNumbers $value) Sets the invalidSerialNumbers element.
 * @method PartnerAPITypeInvalidSerialNumbers getInvalidSerialNumbers() Gets the invalidSerialNumbers element or NULL.
 * @property PartnerAPITypeInvalidSerialNumbers $invalidSerialNumbers Gets the invalidSerialNumbers element or NULL.
 * 
 * @package types
 */
class PartnerAPITypeOrderSNICertificateResponse extends PartnerAPITypeResponse {
    
    protected function initData() {
        $p = parent::initData();
        $n = array(
            'orderID'              => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'invalidSerialNumbers' => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'PartnerAPITypeInvalidSerialNumbers', 'nillable' => FALSE)
        );
        $n = array_merge($p, $n);
        return $n;
    }


}
