<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="getExpiringCertificatesRequest">
    <xs:complexContent>
        <xs:extension base="tns:request">
            <xs:sequence>
                <xs:element name="validityDaysLeft" type="xs:int"/>
                <xs:element default="1" minOccurs="0" name="pageNumber" type="xs:int"/>
            </xs:sequence>
        </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the getExpiringCertificatesRequest WSDL type.
 *
 * It is an extension to the PartnerAPITypeRequest class.
 *
 * @method PartnerAPITypeGetExpiringCertificatesRequest setValidityDaysLeft(int $value) Sets the validityDaysLeft element.
 * @method int getValidityDaysLeft() Gets the validityDaysLeft element.
 * @property int $validityDaysLeft Gets the validityDaysLeft element.
 *
 * @method PartnerAPITypeGetExpiringCertificatesRequest setPageNumber(int $value) Sets the pageNumber element.
 * @method int getPageNumber() Gets the pageNumber element or NULL.
 * @property int $pageNumber Gets the pageNumber element or NULL.
 *
 * @package types
 */
class PartnerAPITypeGetExpiringCertificatesRequest extends PartnerAPITypeRequest
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'validityDaysLeft' => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'int', 'nillable' => false),
            'pageNumber'       => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'int', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
