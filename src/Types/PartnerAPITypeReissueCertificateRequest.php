<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="reissueCertificateRequest">
  <xs:complexContent>
        <xs:extension base="tns:request">
          <xs:sequence>
              <xs:element minOccurs="0" name="serialNumber" type="xs:string"/>
               <xs:element minOccurs="0" name="X509Cert" type="xs:string"/>
               <xs:element minOccurs="0" name="hashAlgorithm" type="tns:hashAlgorithmEnum"/>
              <xs:element minOccurs="0" name="CSR" type="xs:string"/>
                <xs:element minOccurs="0" name="SANApprover" type="tns:sanApprover"/>
              <xs:element minOccurs="0" name="SANEntries" type="tns:sanEntries"/>
                <xs:element minOccurs="0" name="userAgent" type="xs:string"/>
          </xs:sequence>
     </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the reissueCertificateRequest WSDL type.
 *
 * It is an extension to the PartnerAPITypeRequest class.
 *
 * @method PartnerAPITypeReissueCertificateRequest setSerialNumber(string $value) Sets the serialNumber element.
 * @method string|null getSerialNumber() Gets the serialNumber element or NULL.
 * @property string|null $serialNumber Gets the serialNumber element or NULL.
 *
 * @method PartnerAPITypeReissueCertificateRequest setX509Cert(string $value) Sets the X509Cert element.
 * @method string|null getX509Cert() Gets the X509Cert element or NULL.
 * @property string|null $X509Cert Gets the X509Cert element or NULL.
 *
 * @method PartnerAPITypeReissueCertificateRequest setHashAlgorithm(string $value) Sets the hashAlgorithm element.
 * @method string|null getHashAlgorithm() Gets the hashAlgorithm element or NULL.
 * @property string|null $hashAlgorithm Gets the hashAlgorithm element or NULL.
 *
 * @method PartnerAPITypeReissueCertificateRequest setCSR(string $value) Sets the CSR element.
 * @method string|null getCSR() Gets the CSR element or NULL.
 * @property string|null $CSR Gets the CSR element or NULL.
 *
 * @method PartnerAPITypeReissueCertificateRequest setSANApprover(PartnerAPITypeSanApprover $value) Sets the SANApprover element.
 * @method PartnerAPITypeSanApprover|null getSANApprover() Gets the SANApprover element or NULL.
 * @property PartnerAPITypeSanApprover|null $SANApprover Gets the SANApprover element or NULL.
 *
 * @method PartnerAPITypeReissueCertificateRequest setSANEntries(PartnerAPITypeSanEntries $value) Sets the SANEntries element.
 * @method PartnerAPITypeSanEntries|null getSANEntries() Gets the SANEntries element or NULL.
 * @property PartnerAPITypeSanEntries|null $SANEntries Gets the SANEntries element or NULL.
 *
 * @method PartnerAPITypeReissueCertificateRequest setUserAgent(string $value) Sets the UserAgent element.
 * @method string|null getUserAgent() Gets the UserAgent element or NULL.
 * @property string|null $userAgent Gets the UserAgent element or NULL.
 *
 * @package types
 */
class PartnerAPITypeReissueCertificateRequest extends PartnerAPITypeRequest
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'serialNumber'  => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'X509Cert'      => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'hashAlgorithm' => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'CSR'           => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'SANApprover'   => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeSanApprover', 'nillable' => false),
            'SANEntries'    => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeSanEntries', 'nillable' => false),
            'userAgent'     => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
