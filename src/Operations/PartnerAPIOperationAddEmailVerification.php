<?php

namespace Certum\Sdk\Operations;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

use Certum\Sdk\Messages\PartnerAPIMessageAddEmailVerification;
use Certum\Sdk\Messages\PartnerAPIMessageAddEmailVerificationResponse;

/*
<operation name="addEmailVerification" parameterOrder="addEmailVerification">
    <input message="tns:PartnerServicePortType_addEmailVerification">
    </input>
    <output message="tns:PartnerServicePortType_addEmailVerificationResponse">
    </output>
</operation>
*/

/**
 * This class represents the addEmailVerification WSDL operation.
 *
 * It is based on the PartnerAPIOperation class and derives some properties and methods from that class.
 *
 * @method PartnerAPIMessageAddEmailVerificationResponse getResponseMessage() A complete response from a service
 *
 * @package operations
 */
class PartnerAPIOperationAddEmailVerification extends PartnerAPIOperation
{
    /**
     * @var PartnerAPIMessageAddEmailVerification
     */
    protected $_input = null;

    /**
     * @var PartnerAPIMessageAddEmailVerificationResponse
     */
    protected $_output = null;

    /**
     * @var string
     */
    protected $_operation = 'addEmailVerification';

    /**
     * The constructor.
     *
     * It initializes input and output data.
     */
    public function __construct()
    {
        $this->_input  = new PartnerAPIMessageAddEmailVerification();
        $this->_output = new PartnerAPIMessageAddEmailVerificationResponse();
    }

    /**
     * Sets an orderID for the request.
     *
     * Setting this value is required.
     *
     * @param string $orderID
     * @return PartnerAPIOperationAddEmailVerification
     */
    public function setOrderID($orderID)
    {
        $this->_input->addEmailVerification->setOrderID($orderID);
        return $this;
    }
}
