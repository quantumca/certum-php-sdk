<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="orderStatus">
    <xs:sequence>
      <xs:element name="customer" type="xs:string"/>
     <xs:element name="orderDate" type="xs:dateTime"/>
      <xs:element name="orderID" type="xs:string"/>
      <xs:element name="orderStatus" type="tns:certificationRequestStateTypeEnum"/>
      <xs:element name="productCode" type="xs:string"/>
      <xs:element minOccurs="0" name="serialNumber" type="xs:string"/>
   </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the orderStatus WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeOrderStatus setCustomer(string $value) Sets the customer element.
 * @method string getCustomer() Gets the customer element.
 * @property string $customer Gets the customer element.
 *
 * @method PartnerAPITypeOrderStatus setOrderDate(string $value) Sets the orderDate element.
 * @method string getOrderDate() Gets the orderDate element.
 * @property string $orderDate Gets the orderDate element.
 *
 * @method PartnerAPITypeOrderStatus setOrderID(string $value) Sets the orderID element.
 * @method string getOrderID() Gets the orderID element.
 * @property string $orderID Gets the orderID element.
 *
 * @method PartnerAPITypeOrderStatus setOrderStatus(string $value) Sets the orderStatus element.
 * @method string getOrderStatus() Gets the orderStatus element.
 * @property string $orderStatus Gets the orderStatus element.
 *
 * @method PartnerAPITypeOrderStatus setProductCode(string $value) Sets the productCode element.
 * @method string getProductCode() Gets the productCode element.
 * @property string $productCode Gets the productCode element.
 *
 * @method PartnerAPITypeOrderStatus setSerialNumber(string $value) Sets the serialNumber element.
 * @method string getSerialNumber() Gets the serialNumber element or NULL.
 * @property string $serialNumber Gets the serialNumber element or NULL.
 *
 * @package types
 */
class PartnerAPITypeOrderStatus extends PartnerAPIType
{
    protected function initData()
    {
        $n = array(
            'customer'     => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'orderDate'    => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'orderID'      => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'orderStatus'  => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'productCode'  => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'serialNumber' => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false)
        );
        return $n;
    }
}
