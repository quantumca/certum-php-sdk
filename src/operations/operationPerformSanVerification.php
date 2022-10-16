<?php
namespace Certum\Sdk\Operations;
/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


use Certum\Sdk\Messages\PartnerAPIMessagePerformSanVerification;
use Certum\Sdk\Messages\PartnerAPIMessagePerformSanVerificationResponse;

/*
<operation name="performSanVerification" parameterOrder="performSanVerification">
    <input message="tns:PartnerServicePortType_performSanVerification">
    </input>
    <output message="tns:PartnerServicePortType_performSanVerificationResponse">
    </output>
</operation>
*/

/**
 * This class represents the performSanVerification WSDL operation.
 *
 * It is based on the PartnerAPIOperation class and derives some properties and methods from that class.
 *
 * @method PartnerAPIMessagePerformSanVerificationResponse getResponseMessage() A complete response from a service
 *
 * @package operations
 */
class PartnerAPIOperationPerformSanVerification extends PartnerAPIOperation {

    /**
     * @var PartnerAPIMessagePerformSanVerification
     */
    protected $_input = NULL;

    /**
     * @var PartnerAPIMessagePerformSanVerificationResponse
     */
    protected $_output = NULL;

    /**
     * @var string
     */
    protected $_operation = 'performSanVerification';

    /**
     * The constructor.
     *
     * It initializes input and output data.
     */
    public function __construct() {
        $this->_input  = new PartnerAPIMessagePerformSanVerification();
        $this->_output = new PartnerAPIMessagePerformSanVerificationResponse();
    }

    /**
     * Sets a code for the request.
     *
     * Setting this value is required.
     *
     * @param string $code
     * @return PartnerAPIOperationPerformSanVerification
     */
    public function setCode($code) {
        $this->_input->performSanVerification->setCode($code);
        return $this;
    }

}
