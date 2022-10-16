<?php

namespace Certum\Sdk\Operations;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


use Certum\Sdk\Messages\PartnerAPIMessageGetSanVerificationState;
use Certum\Sdk\Messages\PartnerAPIMessageGetSanVerificationStateResponse;

/*
<operation name="getSanVerificationState" parameterOrder="getSanVerificationState">
    <input message="tns:PartnerServicePortType_getSanVerificationState">
    </input>
    <output message="tns:PartnerServicePortType_getSanVerificationStateResponse">
    </output>
</operation>
*/

/**
 * This class represents the getSanVerificationState WSDL operation.
 *
 * It is based on the PartnerAPIOperation class and derives some properties and methods from that class.
 *
 * @method PartnerAPIMessageGetSanVerificationStateResponse getResponseMessage() A complete response from a service
 *
 * @package operations
 */
class PartnerAPIOperationGetSanVerificationState extends PartnerAPIOperation
{

    /**
     * @var PartnerAPIMessageGetSanVerificationState
     */
    protected $_input = NULL;

    /**
     * @var PartnerAPIMessageGetSanVerificationStateResponse
     */
    protected $_output = NULL;

    /**
     * @var string
     */
    protected $_operation = 'getSanVerificationState';

    /**
     * The constructor.
     *
     * It initializes input and output data.
     */
    public function __construct()
    {
        $this->_input  = new PartnerAPIMessageGetSanVerificationState();
        $this->_output = new PartnerAPIMessageGetSanVerificationStateResponse();
    }

    /**
     * Sets an order ID for the request.
     *
     * Setting this value is required.
     *
     * @param string $orderID
     * @return PartnerAPIOperationGetSanVerificationState
     */
    public function setOrderID($orderID)
    {
        $this->_input->getSanVerificationState->setOrderID($orderID);
        return $this;
    }

    /**
     * Returns sanVerifications contained in a response.
     *
     * This method always returns an array.
     * If there is no sanVerifications in the response an empty array is returned.
     * Otherwise, an array with one or more sanVerifications is returned.
     *
     * @return PartnerAPITypeSanVerificationState[]
     */
    public function getSanVerifications()
    {
        $stateList = array();
        $states = $this->_output->getSanVerificationStateResponse->sanVerifications;
        if (is_null($states))
            return $stateList;
        $state = $states->sanVerification;
        if (is_array($state))
            foreach ($state as $s)
                $stateList[] = $s;
        else
            $stateList[] = $state;
        return $stateList;
    }
}
