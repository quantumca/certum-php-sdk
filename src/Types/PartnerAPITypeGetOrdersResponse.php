<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="getOrdersResponse">
  <xs:complexContent>
        <xs:extension base="tns:response">
         <xs:sequence>
              <xs:element minOccurs="0" name="orders" type="tns:orders"/>
            </xs:sequence>
     </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the getOrdersResponse WSDL type.
 *
 * It is an extension to the PartnerAPITypeResponse class.
 *
 * @method PartnerAPITypeGetOrdersResponse setOrders(PartnerAPITypeOrders $value) Sets the orders element.
 * @method PartnerAPITypeOrders|null getOrders() Gets the orders element or NULL.
 * @property PartnerAPITypeOrders|null $orders Gets the orders element or NULL.
 *
 * @package types
 */
class PartnerAPITypeGetOrdersResponse extends PartnerAPITypeResponse
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'orders' => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeOrders', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
