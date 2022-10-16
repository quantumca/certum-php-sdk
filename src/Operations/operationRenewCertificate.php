<?php

namespace Certum\Sdk\Operations;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

use Certum\Sdk\Messages\PartnerAPIMessageRenewCertificate;
use Certum\Sdk\Messages\PartnerAPIMessageRenewCertificateResponse;
use Certum\Sdk\Types\PartnerAPITypeSanApprover;

/*
<operation name="renewCertificate" parameterOrder="renewCertificate">
    <input message="tns:PartnerServicePortType_renewCertificate">
    </input>
    <output message="tns:PartnerServicePortType_renewCertificateResponse">
    </output>
</operation>
*/

/**
 * This class represents the renewCertificate WSDL operation.
 *
 * It is based on the PartnerAPIOperation class and derives some properties and methods from that class.
 *
 * @method PartnerAPIMessageRenewCertificateResponse getResponseMessage() A complete response from a service
 *
 * @package operations
 */
class PartnerAPIOperationRenewCertificate extends PartnerAPIOperation
{
    /**
     * @var PartnerAPIMessageRenewCertificate
     */
    protected $_input = null;
/**
     * @var PartnerAPIMessageRenewCertificateResponse
     */
    protected $_output = null;
/**
     * @var string
     */
    protected $_operation = 'renewCertificate';

    /**
     * The constructor.
     *
     * It initializes input and output data.
     */
    public function __construct()
    {
        $this->_input  = new PartnerAPIMessageRenewCertificate();
        $this->_output = new PartnerAPIMessageRenewCertificateResponse();
    }

    /**
     * Sets the approverMethod option for SANApprover.
     *
     * This option determines which approve method will be used for domain verification.
     *
     * @param string $approverMethod
     * @return PartnerAPIOperationQuickOrder
     */
    public function setApproverMethod($approverMethod)
    {
        $approver = $this->_input->renewCertificate->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->renewCertificate->setSANApprover($approver);
        }
        $approver->setApproverMethod($approverMethod);
        return $this;
    }

    /**
     * Sets the approverEmail option for SANApprover.
     *
     * This option determines where will be sent e-mail with instructions for FILE or DNS approve method.
     * This method cannot be used with EMAIL approve method.
     *
     * @param string $approverEmail
     * @return PartnerAPIOperationQuickOrder
     */
    public function setApproverEmail($approverEmail)
    {
        $approver = $this->_input->renewCertificate->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->renewCertificate->setSANApprover($approver);
        }
        $approver->setApproverEmail($approverEmail);
        return $this;
    }

    /**
     * Sets the approverEmailPrefix option for SANApprover.
     *
     * This option determines which e-mail prefix will be used for EMAIL approve method.
     * This method cannot be used with FILE or DNS approve method.
     *
     * @param string $approverEmailPrefix
     * @return PartnerAPIOperationQuickOrder
     */
    public function setApproverEmailPrefix($approverEmailPrefix)
    {
        $approver = $this->_input->renewCertificate->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->renewCertificate->setSANApprover($approver);
        }
        $approver->setApproverEmailPrefix($approverEmailPrefix);
        return $this;
    }

    /**
     * Sets the verificationNotificationEnabled option for SANApprover.
     *
     * This option determines if verification e-mails for all approvers will be sent or not.
     *
     * @param boolean $yes_or_no
     * @return PartnerAPIOperationQuickOrder
     */
    public function setVerificationNotificationEnabled($yes_or_no)
    {
        $approver = $this->_input->renewCertificate->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->renewCertificate->setSANApprover($approver);
        }
        $approver->setVerificationNotificationEnabled($yes_or_no);
        return $this;
    }

    /**
     * Sets a CSR for the request.
     *
     * Setting this value is required.
     *
     * @param string $csr
     * @return PartnerAPIOperationRenewCertificate
     */
    public function setCSR($csr)
    {
        $this->_input->renewCertificate->setCSR($csr);
        return $this;
    }

    /**
     * Sets a customer name for the request.
     *
     * Setting this value is required.
     *
     * @param string $customer
     * @return PartnerAPIOperationRenewCertificate
     */
    public function setCustomer($customer)
    {
        $this->_input->renewCertificate->setCustomer($customer);
        return $this;
    }

    /**
     * Sets a product code for the request.
     *
     * Setting this value is required.
     *
     * @param string $productCode
     * @return PartnerAPIOperationRenewCertificate
     */
    public function setProductCode($productCode)
    {
        $this->_input->renewCertificate->setProductCode($productCode);
        return $this;
    }

    /**
     * Sets the serial number of a certificate to be renew.
     *
     * It is required to set X509Cert or serialNumber value but only one
     * of them may be set. Setting both values is an error.
     *
     * @param string $serialNumber
     * @return PartnerAPIOperationRenewCertificate
     */
    public function setSerialNumber($serialNumber)
    {
        $this->_input->renewCertificate->setSerialNumber($serialNumber);
        return $this;
    }

    /**
     * Sets a certificate to be renew.
     *
     * It is required to set X509Cert or serialNumber value but only one
     * of them may be set. Setting both values is an error.
     *
     * @param string $x509cert
     * @return PartnerAPIOperationRenewCertificate
     */
    public function setX509Cert($x509cert)
    {
        $this->_input->renewCertificate->setX509Cert($x509cert);
        return $this;
    }

    /**
     * Sets a hash algorithm to be used.
     *
     * @param string $hashAlgorithm
     * @return PartnerAPIOperationRenewCertificate
     */
    public function setHashAlgorithm($hashAlgorithm)
    {
        $this->_input->renewCertificate->setHashAlgorithm($hashAlgorithm);
        return $this;
    }

    /**
     * Sets the userAgent for the request
     *
     * @param string $userAgent
     * @return PartnerAPIOperationRenewCertificate
     */
    public function setUserAgent($userAgent)
    {
        $this->_input->renewCertificate->setUserAgent($userAgent);
        return $this;
    }

    /**
     * Sets a revocation contact email.
     *
     * It is not required to set this but if your certificate needs to be revoked
     * we will contact you using provided email.
     *
     * @param string $revocationContactEmail Contact email used in certificate's revocation process
     * @return PartnerAPIOperationRenewCertificate
     */
    public function setRevocationContactEmail($revocationContactEmail)
    {
        $this->_input->renewCertificate->setRevocationContactEmail($revocationContactEmail);
        return $this;
    }

    /**
     * Sets a shortened validity period.
     *
     * It is not required to set this unless you want your certificate to be valid less days than the product allows.
     * In that case please specify your requested certificate's expiration date within product's allowed validity range.
     *
     * @param string $shortenedValidityPeriod Custom certificate's expiration date
     * @return PartnerAPIOperationQuickOrder
     */
    public function setShortenedValidityPeriod($shortenedValidityPeriod)
    {
        $this->_input->renewCertificate->setShortenedValidityPeriod($shortenedValidityPeriod);
        return $this;
    }

    /**
     * Gets an order ID returned in a response.
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->_output->renewCertificateResponse->orderID;
    }

    /**
     * Returns SANVerification entity containing verification data from a response.
     *
     * If there is no verification in the response a NULL is returned.
     *
     * @return PartnerAPITypeSanVerification
     */
    public function getSANVerification()
    {
        return $this->_output->renewCertificateResponse->SANVerification;
    }
}
