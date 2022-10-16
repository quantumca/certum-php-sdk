<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="domainVerificationRequest">
  <xs:complexContent>
        <xs:extension base="tns:request">
          <xs:sequence>
              <xs:element name="code" type="xs:string"/>
         </xs:sequence>
     </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the domainVerificationRequest WSDL type.
 *
 * It is an extension to the PartnerAPITypeRequest class.
 *
 * @method PartnerAPITypeDomainVerificationRequest setCode(string $value) Sets the code element.
 * @method string getCode() Gets the code element.
 * @property string $code Gets the code element.
 *
 * @package types
 */
class PartnerAPITypeDomainVerificationRequest extends PartnerAPITypeRequest
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'code' => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
