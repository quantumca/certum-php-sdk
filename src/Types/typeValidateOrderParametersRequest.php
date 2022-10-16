<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="validateOrderParametersRequest">
 <xs:complexContent>
        <xs:extension base="tns:orderRequest">
         <xs:sequence/>
     </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the validateOrderParametersRequest WSDL type.
 *
 * It is an extension to the PartnerAPITypeOrderRequest class.
 *
 * @package types
 */
class PartnerAPITypeValidateOrderParametersRequest extends PartnerAPITypeOrderRequest
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
