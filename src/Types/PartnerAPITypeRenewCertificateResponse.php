<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="renewCertificateResponse">
   <xs:complexContent>
        <xs:extension base="tns:response">
         <xs:sequence>
              <xs:element name="orderID" type="xs:string"/>
              <xs:element minOccurs="0" name="verifications" type="tns:verifications"/>
          </xs:sequence>
     </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the renewCertificateResponse WSDL type.
 *
 * It is an extension to the PartnerAPITypeResponse class.
 *
 * @method PartnerAPITypeRenewCertificateResponse setOrderID(string $value) Sets the orderID element.
 * @method string getOrderID() Gets the orderID element.
 * @property string $orderID Gets the orderID element.
 *
 * @method PartnerAPITypeRenewCertificateResponse setSANVerification(PartnerAPITypeSanVerification $value) Sets the SANVerification element.
 * @method PartnerAPITypeSanVerification|null getSANVerification() Gets the SANVerification element or NULL.
 * @property PartnerAPITypeSanVerification|null $SANVerification Gets the SANVerification element or NULL.
 *
 * @package types
 */
class PartnerAPITypeRenewCertificateResponse extends PartnerAPITypeResponse
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'orderID'       => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'SANVerification' => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeSanVerification', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
