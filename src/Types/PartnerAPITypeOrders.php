<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="orders">
 <xs:sequence>
      <xs:element maxOccurs="unbounded" name="Order" type="tns:order"/>
  </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the orders WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeOrders setOrder(PartnerAPITypeOrder $value) Sets the Order element. This method removes all previously added Order elements and creates a new set of Order elements.
 * @method PartnerAPITypeOrders addOrder(PartnerAPITypeOrder $value) Adds a new Order element to the existing set.
 * @method PartnerAPITypeOrder|PartnerAPITypeOrder[] getOrder() Gets the Order element. If there is only one element, it will be returned, otherwise an array of PartnerAPITypeOrder objects will be returned.
 * @property PartnerAPITypeOrder|PartnerAPITypeOrder[] $Order Gets the Order element. If there is only one element, it will be returned, otherwise an array of PartnerAPITypeOrder objects will be returned.
 *
 * @package types
 */
class PartnerAPITypeOrders extends PartnerAPIType
{
    protected function initData()
    {
        $n = array(
            'Order' => array('min' => 1, 'max' => null, 'value' => new PartnerAPITypeOrder(), 'type' => 'PartnerAPITypeOrder', 'nillable' => false)
        );
        return $n;
    }
}
