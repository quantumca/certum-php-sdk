<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="sanEntry">
   <xs:sequence>
      <xs:element name="DNSName" type="xs:string"/>
  </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the sanEntry WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeSanEntry setDNSName(string $value) Sets the DNSName element.
 * @method string getDNSName() Gets the DNSName element.
 * @property string $DNSName Gets the DNSName element.
 *
 * @package types
 */
class PartnerAPITypeSanEntry extends PartnerAPIType
{
    protected function initData()
    {
        $n = array(
            'DNSName' => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false)
        );
        return $n;
    }
}
