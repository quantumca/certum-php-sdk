<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="verifyOrderRequest">
 <xs:complexContent>
        <xs:extension base="tns:request">
          <xs:sequence>
              <xs:element name="verifyOrderParameters" type="tns:verifyOrderParameters"/>
            </xs:sequence>
     </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the verifyOrderRequest WSDL type.
 *
 * It is an extension to the PartnerAPITypeRequest class.
 *
 * @method PartnerAPITypeVerifyOrderRequest setVerifyOrderParameters(PartnerAPITypeVerifyOrderParameters $value) Sets the verifyOrderParameters element.
 * @method PartnerAPITypeVerifyOrderParameters getVerifyOrderParameters() Gets the verifyOrderParameters element.
 * @property PartnerAPITypeVerifyOrderParameters $verifyOrderParameters Gets the verifyOrderParameters element.
 *
 * @package types
 */
class PartnerAPITypeVerifyOrderRequest extends PartnerAPITypeRequest
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'verifyOrderParameters' => array('min' => 1, 'max' => 1, 'value' => new PartnerAPITypeVerifyOrderParameters(), 'type' => 'PartnerAPITypeVerifyOrderParameters', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
