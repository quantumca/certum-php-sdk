<?php

namespace Certum\Sdk\Operations;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

use Certum\Sdk\Messages\PartnerAPIMessageQuickOrder;
use Certum\Sdk\Messages\PartnerAPIMessageQuickOrderResponse;
use Certum\Sdk\Types\PartnerAPITypeOrganizationInfo;
use Certum\Sdk\Types\PartnerAPITypeSanApprover;
use Certum\Sdk\Types\PartnerAPITypeSanEntries;
use Certum\Sdk\Types\PartnerAPITypeSanEntry;
use Certum\Sdk\Types\PartnerAPITypeSanVerification;

/*
<operation name="quickOrder" parameterOrder="quickOrder">
    <input message="tns:PartnerServicePortType_quickOrder">
    </input>
    <output message="tns:PartnerServicePortType_quickOrderResponse">
    </output>
</operation>
 */

/**
 * This class represents the quickOrder WSDL operation.
 *
 * It is based on the PartnerAPIOperation class and derives some properties and methods from that class.
 *
 * @method PartnerAPIMessageQuickOrderResponse getResponseMessage() A complete response from a service
 *
 * @package operations
 */
class PartnerAPIOperationQuickOrder extends PartnerAPIOperation
{
    /**
     * @var PartnerAPIMessageQuickOrder
     */
    protected $_input = null;

    /**
     * @var PartnerAPIMessageQuickOrderResponse
     */
    protected $_output = null;

    /**
     * @var string
     */
    protected $_operation = 'quickOrder';

    /**
     * The constructor.
     *
     * It initializes input and output data.
     */
    public function __construct()
    {
        $this->_input = new PartnerAPIMessageQuickOrder();
        $this->_output = new PartnerAPIMessageQuickOrderResponse();
    }

    /**
     * Sets a CSR for the request.
     *
     * Setting this value is required.
     *
     * @param string $csr
     * @return PartnerAPIOperationQuickOrder
     */
    public function setCSR($csr)
    {
        $this->_input->quickOrder->orderParameters->setCSR($csr);
        return $this;
    }

    /**
     * Sets a customer name.
     *
     * Setting this value is required.
     *
     * @param string $customer
     * @return PartnerAPIOperationQuickOrder
     */
    public function setCustomer($customer)
    {
        $this->_input->quickOrder->orderParameters->setCustomer($customer);
        return $this;
    }

    /**
     * Sets a language to be used for e-mails.
     *
     * Default is 'pl'. Also acceptable are 'en' and 'ru'.
     *
     * @param string $lang
     * @return PartnerAPIOperationQuickOrder
     */
    public function setLanguage($lang)
    {
        $this->_input->quickOrder->orderParameters->setLanguage($lang);
        return $this;
    }

    /**
     * Sets an order identificator.
     *
     * If not set it will be generated automatically by the system.
     * This identificator have to be unique and it is used to refer to the request.
     *
     * @param string $id
     * @return PartnerAPIOperationQuickOrder
     */
    public function setOrderID($id)
    {
        $this->_input->quickOrder->orderParameters->setOrderID($id);
        return $this;
    }

    /**
     * Sets a three-letter product code.
     *
     * Setting this value is required.
     *
     * @param string $code
     * @return PartnerAPIOperationQuickOrder
     */
    public function setProductCode($code)
    {
        $this->_input->quickOrder->orderParameters->setProductCode($code);
        return $this;
    }

    /**
     * Sets a string identifying web browser and operating system.
     *
     * @param string $userAgent
     * @return PartnerAPIOperationQuickOrder
     */
    public function setUserAgent($userAgent)
    {
        $this->_input->quickOrder->orderParameters->setUserAgent($userAgent);
        return $this;
    }

    /**
     * Sets a hash algorithm for a certificate.
     *
     * @param string $hashAlgorithm
     * @return PartnerAPIOperationQuickOrder
     */
    public function setHashAlgorithm($hashAlgorithm)
    {
        $this->_input->quickOrder->orderParameters->setHashAlgorithm($hashAlgorithm);
        return $this;
    }

    /**
     * Sets an email for a SSL certificate.
     *
     * @param string $email
     * @return PartnerAPIOperationQuickOrder
     */
    public function setEmail($email)
    {
        $this->_input->quickOrder->orderParameters->setEmail($email);
        return $this;
    }

    /**
     * Sets all the contact data of a requestor.
     *
     * All arguments are required apart from the last which can be NULL.
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $phone
     * @return PartnerAPIOperationQuickOrder
     */
    public function setRequestorInfo($firstName, $lastName, $email, $phone)
    {
        $ri = $this->_input->quickOrder->requestorInfo;
        $ri->setFirstName($firstName)->setLastName($lastName)
                ->setEmail($email)->setPhone($phone);
        return $this;
    }

    /**
     * Sets an organization information.
     *
     * It is not required to set organization information but if you need or have to set it
     * all the arguments are required.
     *
     * @param string $taxNumber The tax identification number
     * @return PartnerAPIOperationQuickOrder
     */
    public function setOrganizationInfo($taxNumber)
    {
        $oi = new PartnerAPITypeOrganizationInfo();
        $oi->setTaxIdentificationNumber($taxNumber);
        $this->_input->quickOrder->setOrganizationInfo($oi);
        return $this;
    }

    /**
     * Sets an overrided CSR commonName.
     *
     * It is not required to set this but if you need to override a commonName from CSR
     * then you have to change this as same as SAN entries and approvers.
     *
     * @param string $commonName The commonName to override CN given in CSR
     * @return PartnerAPIOperationQuickOrder
     */
    public function setCommonName($commonName)
    {
        $this->_input->quickOrder->orderParameters->setCommonName($commonName);
        return $this;
    }

    /**
     * Sets an overrided CSR organization.
     *
     * It is not required to set this but if you need to override a organization from CSR
     * use this method.
     *
     * @param string $organization The organization to override O given in CSR
     * @return PartnerAPIOperationQuickOrder
     */
    public function setOrganization($organization)
    {
        $this->_input->quickOrder->orderParameters->setOrganization($organization);
        return $this;
    }

    /**
     * Sets an overrided CSR organizational unit.
     *
     * It is not required to set this but if you need to override a organizational unit from CSR
     * use this method.
     *
     * @param string $organizationalUnit The Organizational Unit to override OU given in CSR
     * @return PartnerAPIOperationQuickOrder
     */
    public function setOrganizationalUnit($organizationalUnit)
    {
        $this->_input->quickOrder->orderParameters->setOrganizationalUnit($organizationalUnit);
        return $this;
    }

    /**
     * Sets an overrided CSR locality.
     *
     * It is not required to set this but if you need to override a locality from CSR
     * use this method.
     *
     * @param string $locality The locality to override L given in CSR
     * @return PartnerAPIOperationQuickOrder
     */
    public function setLocality($locality)
    {
        $this->_input->quickOrder->orderParameters->setLocality($locality);
        return $this;
    }

    /**
     * Sets an overrided CSR country.
     *
     * It is not required to set this but if you need to override a country from CSR
     * use this method.
     *
     * @param string $country The country to override C given in CSR
     * @return PartnerAPIOperationQuickOrder
     */
    public function setCountry($country)
    {
        $this->_input->quickOrder->orderParameters->setCountry($country);
        return $this;
    }

    /**
     * Sets an overrided CSR state.
     *
     * It is not required to set this but if you need to override a state from CSR
     * use this method.
     *
     * @param string $state The state to override state given in CSR
     * @return PartnerAPIOperationQuickOrder
     */
    public function setState($state)
    {
        $this->_input->quickOrder->orderParameters->setState($state);
        return $this;
    }

    /**
     * Sets an overrided CSR serialNumber.
     *
     * It is not required to set this but if you need to override a serialNumber from CSR
     * use this method.
     *
     * @param string $serialNumber The serialNumber to override serialNumber given in CSR
     * @return PartnerAPIOperationQuickOrder
     */
    public function setSerialNumber($serialNumber)
    {
        $this->_input->quickOrder->orderParameters->setSerialNumber($serialNumber);
        return $this;
    }

    /**
     * Sets an overrided CSR businessCategory.
     *
     * It is not required to set this but if you need to override a businessCategory from CSR
     * use this method.
     *
     * @param string $businessCategory The businessCategory to override businessCategory given in CSR
     * @return PartnerAPIOperationQuickOrder
     */
    public function setBusinessCategory($businessCategory)
    {
        $this->_input->quickOrder->orderParameters->setBusinessCategory($businessCategory);
        return $this;
    }

    /**
     * Sets an overrided CSR streetAddress.
     *
     * It is not required to set this but if you need to override a streetAddress from CSR
     * use this method.
     *
     * @param string $streetAddress The streetAddress to override streetAddress given in CSR
     * @return PartnerAPIOperationQuickOrder
     */
    public function setStreetAddress($streetAddress)
    {
        $this->_input->quickOrder->orderParameters->setStreetAddress($streetAddress);
        return $this;
    }

    /**
     * Sets an overrided CSR postalCode.
     *
     * It is not required to set this but if you need to override a postalCode from CSR
     * use this method.
     *
     * @param string $postalCode The postalCode to override postalCode given in CSR
     * @return PartnerAPIOperationQuickOrder
     */
    public function setPostalCode($postalCode)
    {
        $this->_input->quickOrder->orderParameters->setPostalCode($postalCode);
        return $this;
    }

    /**
     * Sets an overrided CSR joiln.
     *
     * It is not required to set this but if you need to override a joiln from CSR
     * use this method.
     *
     * @param string $joiln The joiln to override joiln given in CSR
     * @return PartnerAPIOperationQuickOrder
     */
    public function setJoiln($joiln)
    {
        $this->_input->quickOrder->orderParameters->setJoiln($joiln);
        return $this;
    }

    /**
     * Sets an overrided CSR joisopn.
     *
     * It is not required to set this but if you need to override a joisopn from CSR
     * use this method.
     *
     * @param string $joisopn The joisopn to override joisopn given in CSR
     * @return PartnerAPIOperationQuickOrder
     */
    public function setJoisopn($joisopn)
    {
        $this->_input->quickOrder->orderParameters->setJoisopn($joisopn);
        return $this;
    }

    /**
     * Sets an overrided CSR joisocn.
     *
     * It is not required to set this but if you need to override a joisocn from CSR
     * use this method.
     *
     * @param string $joisocn The joisocn to override joisocn given in CSR
     * @return PartnerAPIOperationQuickOrder
     */
    public function setJoisocn($joisocn)
    {
        $this->_input->quickOrder->orderParameters->setJoisocn($joisocn);
        return $this;
    }

    /**
     * Sets a revocation contact email.
     *
     * It is not required to set this but if your certificate needs to be revoked
     * we will contact you using provided email.
     *
     * @param string $revocationContactEmail Contact email used in certificate's revocation process
     * @return PartnerAPIOperationQuickOrder
     */
    public function setRevocationContactEmail($revocationContactEmail)
    {
        $this->_input->quickOrder->orderParameters->setRevocationContactEmail($revocationContactEmail);
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
        $this->_input->quickOrder->orderParameters->setShortenedValidityPeriod($shortenedValidityPeriod);
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
     * @return PartnerAPIOperationQuickOrder
     */
    public function addSANEntry($domain)
    {
        if (!is_array($domain)) {
            $domain = array($domain);
        }
        $SANEntries = $this->_input->quickOrder->SANEntries;
        if (is_null($SANEntries)) {
            $SANEntries = new PartnerAPITypeSanEntries();
            $this->_input->quickOrder->setSANEntries($SANEntries);
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
     * @return PartnerAPIOperationQuickOrder
     */
    public function setApproverMethod($approverMethod)
    {
        $approver = $this->_input->quickOrder->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->quickOrder->setSANApprover($approver);
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
        $approver = $this->_input->quickOrder->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->quickOrder->setSANApprover($approver);
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
        $approver = $this->_input->quickOrder->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->quickOrder->setSANApprover($approver);
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
        $approver = $this->_input->quickOrder->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->quickOrder->setSANApprover($approver);
        }
        $approver->setVerificationNotificationEnabled($yes_or_no);
        return $this;
    }

    /**
     * Gets an order ID returned in a response.
     *
     * Notice: this method returns the order ID returned in a response, not the order ID
     * set for the request. If an order ID has been set, it will be returned
     * in a response, but if it was not set, a new generated order ID will be returned.
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->_output->quickOrderResponse->orderID;
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
        return $this->_output->quickOrderResponse->SANVerification;
    }
}
