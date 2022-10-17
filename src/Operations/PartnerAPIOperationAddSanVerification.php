<?php

namespace Certum\Sdk\Operations;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

use Certum\Sdk\Messages\PartnerAPIMessageAddSanVerification;
use Certum\Sdk\Messages\PartnerAPIMessageAddSanVerificationResponse;
use Certum\Sdk\Types\PartnerAPITypeSanApprover;
use Certum\Sdk\Types\PartnerAPITypeSanVerification;

/*
<operation name="addSanVerification" parameterOrder="addSanVerification">
    <input message="tns:PartnerServicePortType_addSanVerification">
    </input>
    <output message="tns:PartnerServicePortType_addSanVerificationResponse">
    </output>
</operation>
*/

/**
 * This class represents the addSanVerification WSDL operation.
 *
 * It is based on the PartnerAPIOperation class and derives some properties and methods from that class.
 *
 * @method PartnerAPIMessageAddSanVerificationResponse getResponseMessage() A complete response from a service
 *
 * @package operations
 */
class PartnerAPIOperationAddSanVerification extends PartnerAPIOperation
{
    /**
     * @var PartnerAPIMessageAddSanVerification
     */
    protected $_input = null;

    /**
     * @var PartnerAPIMessageAddSanVerificationResponse
     */
    protected $_output = null;

    /**
     * @var string
     */
    protected $_operation = 'addSanVerification';

    /**
     * The constructor.
     *
     * It initializes input and output data.
     */
    public function __construct()
    {
        $this->_input  = new PartnerAPIMessageAddSanVerification();
        $this->_output = new PartnerAPIMessageAddSanVerificationResponse();
    }

    /**
     * Sets an orderID for the request.
     *
     * Setting this value is required.
     *
     * @param string $orderID
     * @return PartnerAPIOperationAddSanVerification
     */
    public function setOrderID($orderID)
    {
        $this->_input->addSanVerification->setOrderID($orderID);
        return $this;
    }

    /**
     * Sets the approverMethod option for SANApprover.
     *
     * This option determines which approve method will be used for domain verification.
     *
     * @param string $approverMethod
     * @return PartnerAPIOperationAddSanVerification
     */
    public function setApproverMethod($approverMethod)
    {
        $approver = $this->_input->addSanVerification->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->addSanVerification->setSANApprover($approver);
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
     * @return PartnerAPIOperationAddSanVerification
     */
    public function setApproverEmail($approverEmail)
    {
        $approver = $this->_input->addSanVerification->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->addSanVerification->setSANApprover($approver);
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
     * @return PartnerAPIOperationAddSanVerification
     */
    public function setApproverEmailPrefix($approverEmailPrefix)
    {
        $approver = $this->_input->addSanVerification->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->addSanVerification->setSANApprover($approver);
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
     * @return PartnerAPIOperationAddSanVerification
     */
    public function setVerificationNotificationEnabled($yes_or_no)
    {
        $approver = $this->_input->addSanVerification->SANApprover;
        if (is_null($approver)) {
            $approver = new PartnerAPITypeSanApprover();
            $this->_input->addSanVerification->setSANApprover($approver);
        }
        $approver->setVerificationNotificationEnabled($yes_or_no);
        return $this;
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
        return $this->_output->addSanVerificationResponse->SANVerification;
    }
}
