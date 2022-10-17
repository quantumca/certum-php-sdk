<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="orderRequest">
   <xs:complexContent>
        <xs:extension base="tns:request">
          <xs:sequence>
              <xs:element minOccurs="0" name="SANApprover" type="tns:sanApprover"/>
              <xs:element name="orderParameters" type="tns:orderParameters"/>
                <xs:element minOccurs="0" name="organizationInfo" type="tns:organizationInfo"/>
                <xs:element name="requestorInfo" type="tns:requestorInfo"/>
                <xs:element minOccurs="0" name="SANEntries" type="tns:sanEntries"/>
            </xs:sequence>
     </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the orderRequest WSDL type.
 *
 * It is an extension to the PartnerAPITypeRequest class.
 *
 * @method PartnerAPITypeOrderRequest setSANApprover(PartnerAPITypeSanApprover $value) Sets the SANApprover element.
 * @method PartnerAPITypeSanApprover|null getSANApprover() Gets the SANApprover element or NULL.
 * @property PartnerAPITypeSanApprover|null $SANApprover Gets the SANApprover element or NULL.
 *
 * @method PartnerAPITypeOrderRequest setOrderParameters(PartnerAPITypeOrderParameters $value) Sets the orderParameters element.
 * @method PartnerAPITypeOrderParameters|null getOrderParameters() Gets the orderParameters element.
 * @property PartnerAPITypeOrderParameters|null $orderParameters Gets the orderParameters element.
 *
 * @method PartnerAPITypeOrderRequest setOrganizationInfo(PartnerAPITypeOrganizationInfo $value) Sets the organizationInfo element.
 * @method PartnerAPITypeOrganizationInfo|null getOrganizationInfo() Gets the organizationInfo element or NULL.
 * @property PartnerAPITypeOrganizationInfo|null $organizationInfo Gets the organizationInfo element or NULL.
 *
 * @method PartnerAPITypeOrderRequest setRequestorInfo(PartnerAPITypeRequestorInfo $value) Sets the requestorInfo element.
 * @method PartnerAPITypeRequestorInfo|null getRequestorInfo() Gets the requestorInfo element.
 * @property PartnerAPITypeRequestorInfo|null $requestorInfo Gets the requestorInfo element.
 *
 * @method PartnerAPITypeOrderRequest setSANEntries(PartnerAPITypeSanEntries $value) Sets the SANEntries element.
 * @method PartnerAPITypeSanEntries|null getSANEntries() Gets the SANEntries element or NULL.
 * @property PartnerAPITypeSanEntries|null $SANEntries Gets the SANEntries element or NULL.
 *
 * @package types
 */
class PartnerAPITypeOrderRequest extends PartnerAPITypeRequest
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'SANApprover'            => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeSanApprover', 'nillable' => false),
            'orderParameters'        => array('min' => 1, 'max' => 1, 'value' => new PartnerAPITypeOrderParameters(), 'type' => 'PartnerAPITypeOrderParameters', 'nillable' => false),
            'organizationInfo'       => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeOrganizationInfo', 'nillable' => true),
            'requestorInfo'          => array('min' => 1, 'max' => 1, 'value' => new PartnerAPITypeRequestorInfo(), 'type' => 'PartnerAPITypeRequestorInfo', 'nillable' => false),
            'SANEntries'             => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeSanEntries', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
