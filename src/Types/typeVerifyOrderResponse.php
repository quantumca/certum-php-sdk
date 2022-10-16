<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="verifyOrderResponse">
    <xs:complexContent>
        <xs:extension base="tns:response">
         <xs:sequence/>
     </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the verifyOrderResponse WSDL type.
 *
 * It is an extension to the PartnerAPITypeResponse class.
 *
 * @package types
 */
class PartnerAPITypeVerifyOrderResponse extends PartnerAPITypeResponse
{
    protected function initData()
    {
        return parent::initData();
    }
}
