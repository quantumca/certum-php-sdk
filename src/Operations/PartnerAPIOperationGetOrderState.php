<?php

namespace Certum\Sdk\Operations;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

use Certum\Sdk\Messages\PartnerAPIMessageGetOrderState;
use Certum\Sdk\Messages\PartnerAPIMessageGetOrderStateResponse;
use Certum\Sdk\Types\PartnerAPITypeOrderVerification;

/*
<operation name="getOrderState" parameterOrder="getOrderState">
    <input message="tns:PartnerServicePortType_getOrderState">
    </input>
    <output message="tns:PartnerServicePortType_getOrderStateResponse">
    </output>
</operation>
*/

/**
 * This class represents the getOrderState WSDL operation.
 *
 * It is based on the PartnerAPIOperation class and derives some properties and methods from that class.
 *
 * @method PartnerAPIMessageGetOrderStateResponse getResponseMessage() A complete response from a service
 *
 * @package operations
 */
class PartnerAPIOperationGetOrderState extends PartnerAPIOperation
{
    /**
     * @var PartnerAPIMessageGetOrderState
     */
    protected $_input = null;

    /**
     * @var PartnerAPIMessageGetOrderStateResponse
     */
    protected $_output = null;

    /**
     * @var string
     */
    protected $_operation = 'getOrderState';

    /**
     * The constructor.
     *
     * It initializes input and output data.
     */
    public function __construct()
    {
        $this->_input  = new PartnerAPIMessageGetOrderState();
        $this->_output = new PartnerAPIMessageGetOrderStateResponse();
    }

    /**
     * Sets an order ID for the request.
     *
     * Setting this value is required.
     *
     * @param string $orderID
     * @return PartnerAPIOperationGetOrderState
     */
    public function setOrderID($orderID)
    {
        $this->_input->getOrderState->setOrderID($orderID);
        return $this;
    }

    /**
     * Gets an order status returned in a response.
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->_output->getOrderStateResponse->orderStatus;
    }

    /**
     * Gets last update date returned in a response.
     *
     * @return string
     */
    public function getLastUpdateDate()
    {
        return $this->_output->getOrderStateResponse->lastUpdateDate;
    }

    /**
     * Returns orderVerifications contained in a response.
     *
     * This method always returns an array.
     * If there is no order in the response an empty array is returned.
     * Otherwise, an array with one or more orders is returned.
     *
     * @return array<int,PartnerAPITypeOrderVerification>
     */
    public function getOrderVerifications()
    {
        $orderVerificationsList = array();
        $orderVerifications = $this->_output->getOrderStateResponse->verifications;
        if (is_null($orderVerifications)) {
            return $orderVerificationsList;
        }
        $verification = $orderVerifications->verification;
        if (is_array($verification)) {
            foreach ($verification as $o) {
                $orderVerificationsList[] = $o;
            }
        } else {
            $orderVerificationsList[] = $verification;
        }
        return $orderVerificationsList;
    }
}
