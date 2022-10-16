<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="response">
   <xs:sequence>
      <xs:element name="responseHeader" type="tns:responseHeader"/>
  </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the response WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeResponse setResponseHeader(PartnerAPITypeResponseHeader $value) Sets the responseHeader element.
 * @method PartnerAPITypeResponseHeader getResponseHeader() Gets the responseHeader element.
 * @property PartnerAPITypeResponseHeader $responseHeader Gets the responseHeader element.
 *
 * @package types
 */
class PartnerAPITypeResponse extends PartnerAPIType
{
    protected function initData()
    {
        $n = array(
            'responseHeader' => array('min' => 1, 'max' => 1, 'value' => new PartnerAPITypeResponseHeader(), 'type' => 'PartnerAPITypeResponseHeader', 'nillable' => false)
        );
        return $n;
    }
}
