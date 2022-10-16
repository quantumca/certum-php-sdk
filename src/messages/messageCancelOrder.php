<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeCancelOrderRequest;

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_cancelOrder">
	<part element="tns:cancelOrder" name="cancelOrder">
	</part>
</message>
<xs:element name="cancelOrder" nillable="true" type="tns:cancelOrderRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_cancelOrder WSDL message.
 *
 * It has one part 'cancelOrder' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessageCancelOrder setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeCancelOrderRequest $cancelOrder
 * @method PartnerAPITypeCancelOrderRequest getCancelOrder()
 * 
 * @package messages
 */
class PartnerAPIMessageCancelOrder extends PartnerAPIMessage
{

    /**
     * Defines the part with credentials data.
     * 
     * @var string
     */
    protected $partWithCredentials = 'cancelOrder';

    /**
     * This method returns initial data for the message's parts.
     * 
     * @return array
     */
    protected function initParts()
    {
        return array(
            'cancelOrder' => new PartnerAPITypeCancelOrderRequest()
        );
    }
}
