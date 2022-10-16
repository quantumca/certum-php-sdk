<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeVerifyOrderRequest;

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_verifyOrder">
	<part element="tns:verifyOrder" name="verifyOrder">
	</part>
</message>
<xs:element name="verifyOrder" nillable="true" type="tns:verifyOrderRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_verifyOrder WSDL message.
 *
 * It has one part 'verifyOrder' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessageVerifyOrder setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeVerifyOrderRequest $verifyOrder
 * @method PartnerAPITypeVerifyOrderRequest getVerifyOrder()
 * 
 * @package messages
 */
class PartnerAPIMessageVerifyOrder extends PartnerAPIMessage
{

    /**
     * Defines the part with credentials data.
     * 
     * @var string
     */
    protected $partWithCredentials = 'verifyOrder';

    /**
     * This method returns initial data for the message's parts.
     * 
     * @return array
     */
    protected function initParts()
    {
        return array(
            'verifyOrder' => new PartnerAPITypeVerifyOrderRequest()
        );
    }
}
