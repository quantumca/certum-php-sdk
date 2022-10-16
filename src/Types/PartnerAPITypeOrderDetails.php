<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="orderDetails">
   <xs:sequence>
      <xs:element minOccurs="0" name="organizationInfo" type="tns:organizationInfo"/>
        <xs:element name="requestorInfo" type="tns:requestorInfo"/>
    </xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the orderDetails WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 *
 * @method PartnerAPITypeOrderDetails setOrganizationInfo(PartnerAPITypeOrganizationInfo $value) Sets the organizationInfo element.
 * @method PartnerAPITypeOrganizationInfo getOrganizationInfo() Gets the organizationInfo element or NULL.
 * @property PartnerAPITypeOrganizationInfo $organizationInfo Gets the organizationInfo element or NULL.
 *
 * @method PartnerAPITypeOrderDetails setRequestorInfo(PartnerAPITypeRequestorInfo $value) Sets the requestorInfo element.
 * @method PartnerAPITypeRequestorInfo getRequestorInfo() Gets the requestorInfo element.
 * @property PartnerAPITypeRequestorInfo $requestorInfo Gets the requestorInfo element.
 *
 * @package types
 */
class PartnerAPITypeOrderDetails extends PartnerAPIType
{
    protected function initData()
    {
        $n = array(
            'organizationInfo' => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeOrganizationInfo', 'nillable' => false),
            'requestorInfo'    => array('min' => 1, 'max' => 1, 'value' => new PartnerAPITypeRequestorInfo(), 'type' => 'PartnerAPITypeRequestorInfo', 'nillable' => false)
        );
        return $n;
    }
}
