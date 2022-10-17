<?php

namespace Certum\Sdk\Operations;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

use Certum\Sdk\Messages\PartnerAPIMessageCancelOrder;
use Certum\Sdk\Messages\PartnerAPIMessageCancelOrderResponse;

/*
<operation name="cancelOrder" parameterOrder="cancelOrder">
    <input message="tns:PartnerServicePortType_cancelOrder">
    </input>
    <output message="tns:PartnerServicePortType_cancelOrderResponse">
    </output>
</operation>
*/

/**
 * This class represents the cancelOrder WSDL operation.
 *
 * It is based on the PartnerAPIOperation class and derives some properties and methods from that class.
 *
 * @method PartnerAPIMessageCancelOrderResponse getResponseMessage() A complete response from a service
 *
 * @package operations
 */
class PartnerAPIOperationCancelOrder extends PartnerAPIOperation
{
    /**
     * @var PartnerAPIMessageCancelOrder
     */
    protected $_input = null;

    /**
     * @var PartnerAPIMessageCancelOrderResponse
     */
    protected $_output = null;

    /**
     * @var string
     */
    protected $_operation = 'cancelOrder';

    /**
     * The constructor.
     *
     * It initializes input and output data.
     */
    public function __construct()
    {
        $this->_input  = new PartnerAPIMessageCancelOrder();
        $this->_output = new PartnerAPIMessageCancelOrderResponse();
    }

    /**
     * Sets an order ID for the request.
     *
     * Setting this value is required.
     *
     * @param string $orderID
     * @return PartnerAPIOperationCancelOrder
     */
    public function setOrderID($orderID)
    {
        $this->_input->cancelOrder->cancelParameters->setOrderID($orderID);
        return $this;
    }

    /**
     * Sets a note for the request.
     *
     * Setting this value is optional.
     *
     * @param string $note
     * @return PartnerAPIOperationCancelOrder
     */
    public function setNote($note)
    {
        $this->_input->cancelOrder->cancelParameters->setNote($note);
        return $this;
    }
}
