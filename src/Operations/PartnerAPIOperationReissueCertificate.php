<?php

namespace Certum\Sdk\Operations;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

use Certum\Sdk\Messages\PartnerAPIMessageReissueCertificate;
use Certum\Sdk\Messages\PartnerAPIMessageReissueCertificateResponse;
use Certum\Sdk\Types\PartnerAPITypeSanApprover;
use Certum\Sdk\Types\PartnerAPITypeSanEntries;
use Certum\Sdk\Types\PartnerAPITypeSanEntry;
use Certum\Sdk\Types\PartnerAPITypeSanVerification;

/*
<operation name="reissueCertificate" parameterOrder="reissueCertificate">
    <input message="tns:PartnerServicePortType_reissueCertificate">
    </input>
    <output message="tns:PartnerServicePortType_reissueCertificateResponse">
    </output>
</operation>
*/

/**
 * This class represents the reissueCertificate WSDL operation.
 *
 * It is based on the PartnerAPIOperation class and derives some properties and methods from that class.
 *
 * @method PartnerAPIMessageReissueCertificateResponse getResponseMessage() A complete response from a service
 *
 * @package operations
 */
class PartnerAPIOperationReissueCertificate extends PartnerAPIOperation
{
    /**
     * @var PartnerAPIMessageReissueCertificate
     */
    protected $_input = null;

    /**
     * @var PartnerAPIMessageReissueCertificateResponse
     */
    protected $_output = null;

    /**
     * @var string
     */
    protected $_operation = 'reissueCertificate';

    /**
     * The constructor.
     *
     * It initializes input and output data.
     */
    public function __construct()
    {
        $this->_input  = new PartnerAPIMessageReissueCertificate();
        $this->_output = new PartnerAPIMessageReissueCertificateResponse();
    }

    /**
     * Sets a serial number for the request.
     *
     * Setting this value is optional. However, either a serial number or a certificate in PEM format has to be set.
     *
     * @param string $serialNumber
     * @return PartnerAPIOperationReissueCertificate
     */
    public function setSerialNumber($serialNumber)
    {
        $this->_input->reissueCertificate->setSerialNumber($serialNumber);
        return $this;
    }

    /**
     * Sets a certificate in PEM format for the request.
     *
     * Setting this value is optional. However, either a serial number or a certificate in PEM format has to be set.
     *
     * @param string $X509Cert
     * @return PartnerAPIOperationReissueCertificate
     */
    public function setX509Cert($X509Cert)
    {
        $this->_input->reissueCertificate->setX509Cert($X509Cert);
        return $this;
    }

    /**
     * Sets a hash algorithm for the request.
     *
     * Setting this value is optional.
     *
     * @param string $hashAlgorithm
     * @return PartnerAPIOperationReissueCertificate
     */
    public function setHashAlgorithm($hashAlgorithm)
    {
        $this->_input->reissueCertificate->setHashAlgorithm($hashAlgorithm);
        return $this;
    }

    /**
     * Sets a CSR for the request.
     *
     * Setting this value is optional.
     *
     * @param string $CSR
     * @return PartnerAPIOperationReissueCertificate
     */
    public function setCSR($CSR)
    {
        $this->_input->reissueCertificate->setCSR($CSR);
        return $this;
    }

    /**
     * Adds a domain name as a SAN entry in a certificate.
     *
     * SAN entries are optional.
     * If given, the $domain argument must be a correct domain name or an array
     * of such domain names.
     *
     * @param string|string[] $domain
     * @return PartnerAPIOperationReissueCertificate
     */
    public function addSANEntry($domain)
    {
        if (!is_array($domain)) {
            $domain = array($domain);
        }
        $SANEntries = $this->_input->reissueCertificate->SANEntries;
        if (is_null($SANEntries)) {
            $SANEntries = new PartnerAPITypeSanEntries();
            $this->_input->reissueCertificate->setSANEntries($SANEntries);
        }
        foreach ($domain as $d) {
            $san = new PartnerAPITypeSanEntry();
            $san->setDNSName($d);
            $SANEntries->addSANEntry($san);
        }
        return $this;
    }

    /**
     * Sets the approverMethod option for SANApprover.
     *
     * This option determines which approve method will be used for domain verification.
     *
     * @param string $approverMethod
     * @return PartnerAPIOperationReissueCertificate
     */
    public function setApproverMethod($approverMethod)
    {
        $approver = $this->_input->reissueCertificate->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->reissueCertificate->setSANApprover($approver);
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
     * @return PartnerAPIOperationReissueCertificate
     */
    public function setApproverEmail($approverEmail)
    {
        $approver = $this->_input->reissueCertificate->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->reissueCertificate->setSANApprover($approver);
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
     * @return PartnerAPIOperationReissueCertificate
     */
    public function setApproverEmailPrefix($approverEmailPrefix)
    {
        $approver = $this->_input->reissueCertificate->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->reissueCertificate->setSANApprover($approver);
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
     * @return PartnerAPIOperationReissueCertificate
     */
    public function setVerificationNotificationEnabled($yes_or_no)
    {
        $approver = $this->_input->reissueCertificate->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->reissueCertificate->setSANApprover($approver);
        }
        $approver->setVerificationNotificationEnabled($yes_or_no);
        return $this;
    }

    /**
     * Sets the userAgent for the request
     *
     * @param string $userAgent
     * @return PartnerAPIOperationReissueCertificate
     */
    public function setUserAgent($userAgent)
    {
        $this->_input->reissueCertificate->setUserAgent($userAgent);
        return $this;
    }

    /**
     * Returns an order ID contained in a response.
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->_output->reissueCertificateResponse->orderID;
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
        return $this->_output->reissueCertificateResponse->SANVerification;
    }
}
