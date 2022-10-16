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
 * @method PartnerAPITypeSanApprover getSANApprover() Gets the SANApprover element or NULL.
 * @property PartnerAPITypeSanApprover $SANApprover Gets the SANApprover element or NULL.
 *
 * @method PartnerAPITypeRenewCertificateRequest setCSR(string $value) Sets the CSR element.
 * @method string getCSR() Gets the CSR element.
 * @property string $CSR Gets the CSR element.
 *
 * @method PartnerAPITypeRenewCertificateRequest setCustomer(string $value) Sets the customer element.
 * @method string getCustomer() Gets the customer element.
 * @property string $customer Gets the customer element.
 *
 * @method PartnerAPITypeRenewCertificateRequest setProductCode(string $value) Sets the productCode element.
 * @method string getProductCode() Gets the productCode element.
 * @property string $productCode Gets the productCode element.
 *
 * @method PartnerAPITypeRenewCertificateRequest setSerialNumber(string $value) Sets the serialNumber element.
 * @method string getSerialNumber() Gets the serialNumber element or NULL.
 * @property string $serialNumber Gets the serialNumber element or NULL.
 *
 * @method PartnerAPITypeRenewCertificateRequest setX509Cert(string $value) Sets the X509Cert element.
 * @method string getX509Cert() Gets the X509Cert element or NULL.
 * @property string $X509Cert Gets the X509Cert element or NULL.
 *
 * @method PartnerAPITypeRenewCertificateRequest setHashAlgorithm(string $value) Sets the hashAlgorithm element.
 * @method string getHashAlgorithm() Gets the hashAlgorithm element or NULL.
 * @property string $hashAlgorithm Gets the hashAlgorithm element or NULL.
 *
 * @method PartnerAPITypeRenewCertificateRequest setUserAgent(string $value) Sets the UserAgent element.
 * @method string getUserAgent() Gets the UserAgent element or NULL.
 * @property string $userAgent Gets the UserAgent element or NULL.
 *
 * @method PartnerAPITypeOrderRequest setRevocationContactEmail $value) Sets the revocationContactEmail element.
 * @method string getRevocationContactEmail() Gets the revocationContactEmail element.
 * @property string $revocationContactEmail Gets the revocationContactEmail element.
 * 
 * @method PartnerAPITypeOrderRequest setShortenedValidityPeriod(string $value) Sets the shortenedValidityPeriod element.
 * @method string getShortenedValidityPeriod() Gets the shortenedValidityPeriod element.
 * @property string $shortenedValidityPeriod Gets the shortenedValidityPeriod element.
 *
 * @package types
 */
class PartnerAPITypeRenewCertificateRequest extends PartnerAPITypeRequest {

    protected function initData() {
        $p = parent::initData();
        $n = array(
            'SANApprover'             => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'PartnerAPITypeSanApprover', 'nillable' => FALSE),
            'CSR'                     => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'customer'                => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'productCode'             => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'serialNumber'            => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'X509Cert'                => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'hashAlgorithm'           => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'userAgent'               => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'revocationContactEmail'  => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => TRUE),
            'shortenedValidityPeriod' => array('min' => 0, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => TRUE)
        );
        $n = array_merge($p, $n);
        return $n;
    }


}
