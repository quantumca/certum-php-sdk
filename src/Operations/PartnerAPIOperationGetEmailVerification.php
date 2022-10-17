<?php

namespace Certum\Sdk\Operations;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

use Certum\Sdk\Messages\PartnerAPIMessageGetEmailVerification;
use Certum\Sdk\Messages\PartnerAPIMessageGetEmailVerificationResponse;
use Certum\Sdk\Types\PartnerAPITypeEmailVerification;

/*
<operation name="getEmailVerification" parameterOrder="getEmailVerification">
    <input message="tns:PartnerServicePortType_getEmailVerification">
    </input>
    <output message="tns:PartnerServicePortType_getEmailVerificationResponse">
    </output>
</operation>
*/

/**
 * This class represents the getEmailVerification WSDL operation.
 *
 * It is based on the PartnerAPIOperation class and derives some properties and methods from that class.
 *
 * @method PartnerAPIMessageGetEmailVerificationResponse getResponseMessage() A complete response from a service
 *
 * @package operations
 */
class PartnerAPIOperationGetEmailVerification extends PartnerAPIOperation
{
    /**
     * @var PartnerAPIMessageGetEmailVerification
     */
    protected $_input = null;

    /**
     * @var PartnerAPIMessageGetEmailVerificationResponse
     */
    protected $_output = null;

    /**
     * @var string
     */
    protected $_operation = 'getEmailVerification';

    /**
     * The constructor.
     *
     * It initializes input and output data.
     */
    public function __construct()
    {
        $this->_input  = new PartnerAPIMessageGetEmailVerification();
        $this->_output = new PartnerAPIMessageGetEmailVerificationResponse();
    }

    /**
     * Sets an order ID for the request.
     *
     * Setting this value is required.
     *
     * @param string $orderID
     * @return PartnerAPIOperationGetEmailVerification
     */
    public function setOrderID($orderID)
    {
        $this->_input->getEmailVerification->setOrderID($orderID);
        return $this;
    }

    /**
     * Returns email verification contained in a response.
     *
     * @return PartnerAPITypeEmailVerification
     */
    public function getEmailVerification()
    {
        return $this->_output->getEmailVerificationResponse->emailVerification;
    }
}
