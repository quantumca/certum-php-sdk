<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="getProductListResponse">
 <xs:complexContent>
        <xs:extension base="tns:response">
         <xs:sequence>
              <xs:element minOccurs="0" name="products">
                 <xs:complexType>
                       <xs:sequence>
                          <xs:element maxOccurs="unbounded" name="product" type="tns:product"/>
                      </xs:sequence>
                 </xs:complexType>
              </xs:element>
          </xs:sequence>
     </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the getProductListResponse WSDL type.
 *
 * It is an extension to the PartnerAPITypeResponse class.
 *
 * @method PartnerAPITypeGetProductListResponse setProducts(PartnerAPITypeGetProductListResponse_Products $value) Sets the products element.
 * @method PartnerAPITypeGetProductListResponse_Products|null getProducts() Gets the products element or NULL.
 * @property PartnerAPITypeGetProductListResponse_Products|null $products Gets the products element or NULL.
 *
 * @package types
 */
class PartnerAPITypeGetProductListResponse extends PartnerAPITypeResponse
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'products' => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeGetProductListResponse_Products', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
