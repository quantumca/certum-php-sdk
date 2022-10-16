<?php
namespace Certum\Sdk\Operations;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


use Certum\Sdk\Messages\PartnerAPIMessageValidateOrderParameters;
use Certum\Sdk\Messages\PartnerAPIMessageValidateOrderParametersResponse;
use Certum\Sdk\Types\PartnerAPITypeOrganizationInfo;
use Certum\Sdk\Types\PartnerAPITypeSanApprover;
use Certum\Sdk\Types\PartnerAPITypeSanEntries;
use Certum\Sdk\Types\PartnerAPITypeSanEntry;

/*
<operation name="validateOrderParameters" parameterOrder="validateOrderParameters">
	<input message="tns:PartnerServicePortType_validateOrderParameters">
	</input>
	<output message="tns:PartnerServicePortType_validateOrderParametersResponse">
	</output>
</operation>
*/

/**
 * This class represents the validateOrderParameters WSDL operation.
 *
 * It is based on the PartnerAPIOperation class and derives some properties and methods from that class.
 *
 * @method PartnerAPIMessageValidateOrderParametersResponse getResponseMessage() A complete response from a service
 * 
 * @package operations
 */
class PartnerAPIOperationValidateOrderParameters extends PartnerAPIOperation {

    /**
     * @var PartnerAPIMessageValidateOrderParameters
     */
    protected $_input = NULL;

    /**
     * @var PartnerAPIMessageValidateOrderParametersResponse
     */
    protected $_output = NULL;

    /**
     * @var string
     */
    protected $_operation = 'validateOrderParameters';

    /**
     * The constructor.
     *
     * It initializes input and output data.
     */
    public function __construct() {
        $this->_input  = new PartnerAPIMessageValidateOrderParameters();
        $this->_output = new PartnerAPIMessageValidateOrderParametersResponse();
    }

    /**
     * Sets a CSR for the request.
     *
     * Setting this value is required.
     *
     * @param string $csr
     * @return static
     */
    public function setCSR($csr) {
        $this->_input->validateOrderParameters->orderParameters->setCSR($csr);
        return $this;
    }

    /**
     * Sets a customer name.
     *
     * Setting this value is required.
     *
     * @param string $customer
     * @return static
     */
    public function setCustomer($customer) {
        $this->_input->validateOrderParameters->orderParameters->setCustomer($customer);
        return $this;
    }

    /**
     * Sets a language to be used for e-mails.
     *
     * Default is 'pl'. Also acceptable are 'en' and 'ru'.
     *
     * @param string $lang
     * @return static
     */
    public function setLanguage($lang) {
        $this->_input->validateOrderParameters->orderParameters->setLanguage($lang);
        return $this;
    }

    /**
     * Sets an order identificator.
     *
     * If not set it will be generated automatically by the system.
     * This identificator have to be unique and it is used to refer to the request.
     *
     * @param string $id
     * @return static
     */
    public function setOrderID($id) {
        $this->_input->validateOrderParameters->orderParameters->setOrderID($id);
        return $this;
    }

    /**
     * Sets a three-letter product code.
     *
     * Setting this value is required.
     *
     * @param string $code
     * @return static
     */
    public function setProductCode($code) {
        $this->_input->validateOrderParameters->orderParameters->setProductCode($code);
        return $this;
    }

    /**
     * Sets a string identifying web browser and operating system.
     *
     * @param string $userAgent
     * @return static
     */
    public function setUserAgent($userAgent) {
        $this->_input->validateOrderParameters->orderParameters->setUserAgent($userAgent);
        return $this;
    }

    /**
     * Sets a hash algorithm for a certificate.
     *
     * @param string $hashAlgorithm
     * @return static
     */
    public function setHashAlgorithm($hashAlgorithm) {
        $this->_input->validateOrderParameters->orderParameters->setHashAlgorithm($hashAlgorithm);
        return $this;
    }

    /**
     * Sets an email for a SSL certificate.
     *
     * @param string $email
     * @return static
     */
    public function setEmail($email) {
        $this->_input->validateOrderParameters->orderParameters->setEmail($email);
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
     * @return static
     */
    public function setRequestorInfo($firstName, $lastName, $email, $phone) {
        $ri = $this->_input->validateOrderParameters->requestorInfo;
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
     * @return static
     */
    public function setOrganizationInfo($name, $taxNumber) {
        $oi = new PartnerAPITypeOrganizationInfo();
        $oi->setTaxIdentificationNumber($taxNumber);
        $this->_input->validateOrderParameters->setOrganizationInfo($oi);
        return $this;
    }
	

    /**
     * Sets an overrided CSR commonName.
     *
     * It is not required to set this but if you need to override a commonName from CSR
     * then you have to change this as same as SAN entries and approvers.
     *
     * @param string $commonName The commonName to override CN given in CSR 
     * @return static
     */
    public function setCommonName($commonName) {
        $this->_input->validateOrderParameters->orderParameters->setCommonName($commonName);
        return $this;
    }
	
	/**
     * Sets an overrided CSR organization.
     *
     * It is not required to set this but if you need to override a organization from CSR
	 * use this method.
     *
     * @param string $organization The organization to override O given in CSR 
     * @return static
     */
    public function setOrganization($organization) {
        $this->_input->validateOrderParameters->orderParameters->setOrganization($organization);
        return $this;
    }
	
	/**
     * Sets an overrided CSR organizational unit.
     *
     * It is not required to set this but if you need to override a organizational unit from CSR
	 * use this method.
     *
     * @param string $organizationalUnit The Organizational Unit to override OU given in CSR 
     * @return static
     */
    public function setOrganizationalUnit($organizationalUnit) {
        $this->_input->validateOrderParameters->orderParameters->setOrganizationalUnit($organizationalUnit);
        return $this;
    }
	
	/**
     * Sets an overrided CSR locality.
     *
     * It is not required to set this but if you need to override a locality from CSR
	 * use this method.
     *
     * @param string $locality The locality to override L given in CSR 
     * @return static
     */
    public function setLocality($locality) {
        $this->_input->validateOrderParameters->orderParameters->setLocality($locality);
        return $this;
    }
	
	/**
     * Sets an overrided CSR country.
     *
     * It is not required to set this but if you need to override a country from CSR
	 * use this method.
     *
     * @param string $country The country to override C given in CSR 
     * @return static
     */
    public function setCountry($country) {
        $this->_input->validateOrderParameters->orderParameters->setCountry($country);
        return $this;
    }
	
	/**
     * Sets an overrided CSR state.
     *
     * It is not required to set this but if you need to override a state from CSR
	 * use this method.
     *
     * @param string $state The state to override state given in CSR 
     * @return static
     */
    public function setState($state) {
        $this->_input->validateOrderParameters->orderParameters->setState($state);
        return $this;
    }

	/**
     * Sets an overrided CSR serialNumber.
     *
     * It is not required to set this but if you need to override a serialNumber from CSR
     * use this method.
     *
     * @param string $serialNumber The serialNumber to override serialNumber given in CSR
     * @return static
     */
    public function setSerialNumber($serialNumber) {
        $this->_input->validateOrderParameters->orderParameters->setSerialNumber($serialNumber);
        return $this;
    }

    /**
     * Sets an overrided CSR businessCategory.
     *
     * It is not required to set this but if you need to override a businessCategory from CSR
     * use this method.
     *
     * @param string $businessCategory The businessCategory to override businessCategory given in CSR
     * @return static
     */
    public function setBusinessCategory($businessCategory) {
        $this->_input->validateOrderParameters->orderParameters->setBusinessCategory($businessCategory);
        return $this;
    }

    /**
     * Sets an overrided CSR streetAddress.
     *
     * It is not required to set this but if you need to override a streetAddress from CSR
     * use this method.
     *
     * @param string $streetAddress The streetAddress to override streetAddress given in CSR
     * @return static
     */
    public function setStreetAddress($streetAddress) {
        $this->_input->validateOrderParameters->orderParameters->setStreetAddress($streetAddress);
        return $this;
    }

    /**
     * Sets an overrided CSR postalCode.
     *
     * It is not required to set this but if you need to override a postalCode from CSR
     * use this method.
     *
     * @param string $postalCode The postalCode to override postalCode given in CSR
     * @return static
     */
    public function setPostalCode($postalCode) {
        $this->_input->validateOrderParameters->orderParameters->setPostalCode($postalCode);
        return $this;
    }

    /**
     * Sets an overrided CSR joiln.
     *
     * It is not required to set this but if you need to override a joiln from CSR
     * use this method.
     *
     * @param string $joiln The joiln to override joiln given in CSR
     * @return static
     */
    public function setJoiln($joiln) {
        $this->_input->validateOrderParameters->orderParameters->setJoiln($joiln);
        return $this;
    }

    /**
     * Sets an overrided CSR joisopn.
     *
     * It is not required to set this but if you need to override a joisopn from CSR
     * use this method.
     *
     * @param string $joisopn The joisopn to override joisopn given in CSR
     * @return static
     */
    public function setJoisopn($joisopn) {
        $this->_input->validateOrderParameters->orderParameters->setJoisopn($joisopn);
        return $this;
    }

    /**
     * Sets an overrided CSR joisocn.
     *
     * It is not required to set this but if you need to override a joisocn from CSR
     * use this method.
     *
     * @param string $joisocn The joisocn to override joisocn given in CSR
     * @return static
     */
    public function setJoisocn($joisocn) {
        $this->_input->validateOrderParameters->orderParameters->setJoisocn($joisocn);
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
     * @return static
     */
    public function addSANEntry($domain) {
        if (! is_array($domain))
            $domain = array($domain);
        $SANEntries = $this->_input->validateOrderParameters->SANEntries;
        if (is_null($SANEntries)) {
            $SANEntries = new PartnerAPITypeSanEntries();
            $this->_input->validateOrderParameters->setSANEntries($SANEntries);
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
     * @return static
     */
    public function setApproverMethod($approverMethod) {
        $approver = $this->_input->validateOrderParameters->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->validateOrderParameters->setSANApprover($approver);
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
     * @return static
     */
    public function setApproverEmail($approverEmail) {
        $approver = $this->_input->validateOrderParameters->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->validateOrderParameters->setSANApprover($approver);
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
     * @return static
     */
    public function setApproverEmailPrefix($approverEmailPrefix) {
        $approver = $this->_input->validateOrderParameters->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->validateOrderParameters->setSANApprover($approver);
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
     * @return static
     */
    public function setVerificationNotificationEnabled($yes_or_no) {
        $approver = $this->_input->validateOrderParameters->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->validateOrderParameters->setSANApprover($approver);
        }
        $approver->setVerificationNotificationEnabled($yes_or_no);
        return $this;
    }

    /**
     * Gets parsed CSR returned as a response.
     *
     * The returned value can be an object of PartnerAPITypeParsedCsr class
     * or null.
     *
     * @return PartnerAPITypeParsedCsr
     */
    public function getParsedCSR() {
        return $this->_output->validateOrderParametersResponse->ParsedCSR;
    }

    /**
     * Prepares an object representing the quick order operation.
     *
     * This method is intended to improve coding and to avoid passing the same data twice.
     * A new object of type PartnerAPIOperationQuickOrder is created
     * and set up with the data set for validation in
     * the PartnerAPIOperationValidateOrderParameters object.
     * It means, all the data which have been set are copied to a new
     * quick order object.
     *
     * @return PartnerAPIOperationQuickOrder
     */
    public function prepareQuickOrderOperation() {
                $op = new PartnerAPIOperationQuickOrder();
        $op->setService($this->_service);
        $p = $this->_input->validateOrderParameters->orderParameters;
        $op->setCSR($p->CSR)->setCustomer($p->customer)->setLanguage($p->language)
           ->setOrderID($p->orderID)->setUserAgent($p->userAgent)->setProductCode($p->productCode);
        $r = $this->_input->validateOrderParameters->requestorInfo;
        $op->setRequestorInfo($r->firstName, $r->lastName, $r->email, $r->phone);
        $o = $this->_input->validateOrderParameters->organizationInfo;
        if (! is_null($o))
            $op->setOrganizationInfo($o->taxIdentificationNumber);
        $a = $this->_input->validateOrderParameters->SANApprover;
        if (!is_null($a)) {
            $op->setApproverMethod($a->approverMethod);
            $op->setApproverEmail($a->approverEmail);
            $op->setApproverEmailPrefix($a->approverEmailPrefix);
            $op->setVerificationNotificationEnabled($a->verificationNotificationEnabled);
        }
        $s = $this->_input->validateOrderParameters->SANEntries;
        if (! is_null($s)) {
            if (is_array($s->SANEntry))
                foreach ($s->SANEntry as $san)
                    $op->addSANEntry($san->DNSName);
            else
                $op->addSANEntry($s->SANEntry->DNSName);
        }
        return $op;
    }
}
