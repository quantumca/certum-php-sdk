<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeGetOrdersResponse;

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<message name="PartnerServicePortType_getOrderByOrderIDResponse">
	<part element="tns:getOrderByOrderIDResponse" name="getOrderByOrderIDResponse">
	</part>
</message>
<xs:element name="getOrderByOrderIDResponse" nillable="true" type="tns:getOrdersResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_getOrderByOrderIDResponse WSDL message.
 *
 * It has one part 'getOrderByOrderIDResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeGetOrdersResponse $getOrderByOrderIDResponse
 * @method PartnerAPITypeGetOrdersResponse getGetOrderByOrderIDResponse()
 * 
 * @package messages
 */
class PartnerAPIMessageGetOrderByOrderIDResponse extends PartnerAPIMessage
{


    /**
     * This method returns initial data for the message's parts.
     * 
     * @return array
     */
    protected function initParts()
    {
        return array(
            'getOrderByOrderIDResponse' => new PartnerAPITypeGetOrdersResponse()
        );
    }
}
