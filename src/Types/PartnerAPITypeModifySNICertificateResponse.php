<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="modifySNICertificateResponse">
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
 * This class represents the modifySNICertificateResponse WSDL type.
 *
 * It is an extension to the PartnerAPITypeResponse class.
 *
 * @method PartnerAPITypeModifySNICertificateResponse setOrderID(string $value) Sets the orderID element.
 * @method string|null getOrderID() Gets the orderID element.
 * @property string|null $orderID Gets the orderID element.
 *
 * @method PartnerAPITypeModifySNICertificateResponse setInvalidSerialNumbers(PartnerAPITypeInvalidSerialNumbers $value) Sets the invalidSerialNumbers element.
 * @method PartnerAPITypeInvalidSerialNumbers|null getInvalidSerialNumbers() Gets the invalidSerialNumbers element or NULL.
 * @property PartnerAPITypeInvalidSerialNumbers|null $invalidSerialNumbers Gets the invalidSerialNumbers element or NULL.
 *
 * @package types
 */
class PartnerAPITypeModifySNICertificateResponse extends PartnerAPITypeResponse
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'orderID'              => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'invalidSerialNumbers' => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeInvalidSerialNumbers', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
