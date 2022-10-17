<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="renewCertificateRequest">
    <xs:complexContent>
        <xs:extension base="tns:request">
            <xs:sequence>
                <xs:element minOccurs="0" name="SANApprover" type="tns:sanApprover"/>
                <xs:element name="CSR" type="xs:string"/>
                <xs:element name="customer" type="xs:string"/>
                <xs:element name="productCode" type="xs:string"/>
                <xs:element minOccurs="0" name="serialNumber" type="xs:string"/>
                <xs:element minOccurs="0" name="X509Cert" type="xs:string"/>
                <xs:element minOccurs="0" name="hashAlgorithm" type="tns:hashAlgorithmEnum"/>
                <xs:element minOccurs="0" name="userAgent" type="xs:string"/>
                <xs:element minOccurs="0" name="revocationContactEmail" type="xs:string"/>
                <xs:element minOccurs="0" name="shortenedValidityPeriod" type="xs:date"/>
            </xs:sequence>
        </xs:extension>
    </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the renewCertificateRequest WSDL type.
 *
 * It is an extension to the PartnerAPITypeRequest class.
 *
 * @method PartnerAPITypeRenewCertificateRequest setSANApprover(PartnerAPITypeSanApprover $value) Sets the SANApprover element.
 * @method PartnerAPITypeSanApprover|null getSANApprover() Gets the SANApprover element or NULL.
 * @property PartnerAPITypeSanApprover|null $SANApprover Gets the SANApprover element or NULL.
 *
 * @method PartnerAPITypeRenewCertificateRequest setCSR(string $value) Sets the CSR element.
 * @method string|null getCSR() Gets the CSR element.
 * @property string|null $CSR Gets the CSR element.
 *
 * @method PartnerAPITypeRenewCertificateRequest setCustomer(string $value) Sets the customer element.
 * @method string|null getCustomer() Gets the customer element.
 * @property string|null $customer Gets the customer element.
 *
 * @method PartnerAPITypeRenewCertificateRequest setProductCode(string $value) Sets the productCode element.
 * @method string|null getProductCode() Gets the productCode element.
 * @property string|null $productCode Gets the productCode element.
 *
 * @method PartnerAPITypeRenewCertificateRequest setSerialNumber(string $value) Sets the serialNumber element.
 * @method string|null getSerialNumber() Gets the serialNumber element or NULL.
 * @property string|null $serialNumber Gets the serialNumber element or NULL.
 *
 * @method PartnerAPITypeRenewCertificateRequest setX509Cert(string $value) Sets the X509Cert element.
 * @method string|null getX509Cert() Gets the X509Cert element or NULL.
 * @property string|null $X509Cert Gets the X509Cert element or NULL.
 *
 * @method PartnerAPITypeRenewCertificateRequest setHashAlgorithm(string $value) Sets the hashAlgorithm element.
 * @method string|null getHashAlgorithm() Gets the hashAlgorithm element or NULL.
 * @property string|null $hashAlgorithm Gets the hashAlgorithm element or NULL.
 *
 * @method PartnerAPITypeRenewCertificateRequest setUserAgent(string $value) Sets the UserAgent element.
 * @method string|null getUserAgent() Gets the UserAgent element or NULL.
 * @property string|null $userAgent Gets the UserAgent element or NULL.
 *
 * @method PartnerAPITypeOrderRequest setRevocationContactEmail(string $value) Sets the revocationContactEmail element.
 * @method string|null getRevocationContactEmail() Gets the revocationContactEmail element.
 * @property string|null $revocationContactEmail Gets the revocationContactEmail element.
 *
 * @method PartnerAPITypeOrderRequest setShortenedValidityPeriod(string $value) Sets the shortenedValidityPeriod element.
 * @method string|null getShortenedValidityPeriod() Gets the shortenedValidityPeriod element.
 * @property string|null $shortenedValidityPeriod Gets the shortenedValidityPeriod element.
 *
 * @package types
 */
class PartnerAPITypeRenewCertificateRequest extends PartnerAPITypeRequest
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'SANApprover'             => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeSanApprover', 'nillable' => false),
            'CSR'                     => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'customer'                => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'productCode'             => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'serialNumber'            => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'X509Cert'                => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'hashAlgorithm'           => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'userAgent'               => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'revocationContactEmail'  => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => true),
            'shortenedValidityPeriod' => array('min' => 0, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => true)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
