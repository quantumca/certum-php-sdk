<?php

namespace Certum\Sdk\Operations;

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


use Certum\Sdk\Messages\PartnerAPIMessageVerifyOrder;
use Certum\Sdk\Messages\PartnerAPIMessageVerifyOrderResponse;
use Certum\Sdk\Types\PartnerAPITypeDocument;
use Certum\Sdk\Types\PartnerAPITypeDocuments;
use Certum\Sdk\Types\PartnerAPITypeFile;

/*
<operation name="verifyOrder" parameterOrder="verifyOrder">
	<input message="tns:PartnerServicePortType_verifyOrder">
	</input>
	<output message="tns:PartnerServicePortType_verifyOrderResponse">
	</output>
</operation>
*/

/**
 * This class represents the verifyOrder WSDL operation.
 *
 * It is based on the PartnerAPIOperation class and derives some properties and methods from that class.
 *
 * @method PartnerAPIMessageVerifyOrderResponse getResponseMessage() A complete response from a service
 * 
 * @package operations
 */
class PartnerAPIOperationVerifyOrder extends PartnerAPIOperation
{

    /**
     * @var PartnerAPIMessageVerifyOrder
     */
    protected $_input = NULL;

    /**
     * @var PartnerAPIMessageVerifyOrderResponse
     */
    protected $_output = NULL;

    /**
     * @var string
     */
    protected $_operation = 'verifyOrder';

    /**
     * The constructor.
     * 
     * It initializes input and output data.
     */
    public function __construct()
    {
        $this->_input  = new PartnerAPIMessageVerifyOrder();
        $this->_output = new PartnerAPIMessageVerifyOrderResponse();
    }

    /**
     * Sets an order ID for the request.
     *
     * It is required to set this parameter.
     *
     * @param string $orderID
     * @return PartnerAPIOperationVerifyOrder
     */
    public function setOrderID($orderID)
    {
        $this->_input->verifyOrder->verifyOrderParameters->setOrderID($orderID);
        return $this;
    }

    /**
     * Sets a note for the request.
     *
     * It is required to set this parameter.
     *
     * @param string $note
     * @return PartnerAPIOperationVerifyOrder
     */
    public function setNote($note)
    {
        $this->_input->verifyOrder->verifyOrderParameters->setNote($note);
        return $this;
    }

    /**
     * Adds a document to the request.
     *
     * Adding a document is optional.
     * When adding, the third parameter $files have to be an associative
     * array where keys are file names and values are file contents.
     * array('fileName' => 'fileContents')
     *
     * @param string $type
     * @param string $description
     * @param array $files An array of file names and file contents
     * @return PartnerAPIOperationVerifyOrder
     */
    public function addDocument($type, $description, $files)
    {
        $docs = $this->_input->verifyOrder->verifyOrderParameters->documents;
        if (is_null($docs)) {
            $docs = new PartnerAPITypeDocuments();
            $this->_input->verifyOrder->verifyOrderParameters->setDocuments($docs);
        }
        $doc = new PartnerAPITypeDocument();
        $doc->setType($type)->setDescription($description);
        foreach ($files as $fileName => $fileContents) {
            $file = new PartnerAPITypeFile();
            $file->setFileName($fileName)->setContent($fileContents);
            $doc->files->addFile($file);
        }
        $docs->addDocument($doc);
        return $this;
    }
}
