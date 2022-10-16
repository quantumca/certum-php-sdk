<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="reissueCertificateResponse">
 <xs:complexContent>
        <xs:extension base="tns:response">
         <xs:sequence>
              <xs:element name="orderID" type="xs:string"/>
              <xs:element minOccurs="0" name="SANVerification" type="tns:sanVerification"/>
          </xs:sequence>
     </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the reissueCertificateResponse WSDL type.
 *
 * It is an extension to the PartnerAPITypeResponse class.
 *
 * @method PartnerAPITypeReissueCertificateResponse setOrderID(string $value) Sets the orderID element.
 * @method string getOrderID() Gets the orderID element.
 * @property string $orderID Gets the orderID element.
 *
 * @method PartnerAPITypeReissueCertificateResponse setSANVerification(PartnerAPITypeSanVerification $value) Sets the SANVerification element.
 * @method PartnerAPITypeSanVerification getSANVerification() Gets the SANVerification element or NULL.
 * @property PartnerAPITypeSanVerification $SANVerification Gets the SANVerification element or NULL.
 *
 * @package types
 */
class PartnerAPITypeReissueCertificateResponse extends PartnerAPITypeResponse
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'orderID' => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'SANVerification' => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeSanVerification', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
