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
<message name="PartnerServicePortType_getOrdersByDateRangeResponse">
    <part element="tns:getOrdersByDateRangeResponse" name="getOrdersByDateRangeResponse">
    </part>
</message>
<xs:element name="getOrdersByDateRangeResponse" nillable="true" type="tns:getOrdersResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_getOrdersByDateRangeResponse WSDL message.
 *
 * It has one part 'getOrdersByDateRangeResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeGetOrdersResponse $getOrdersByDateRangeResponse
 * @method PartnerAPITypeGetOrdersResponse getGetOrdersByDateRangeResponse()
 *
 * @package messages
 */
class PartnerAPIMessageGetOrdersByDateRangeResponse extends PartnerAPIMessage
{
    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'getOrdersByDateRangeResponse':PartnerAPITypeGetOrdersResponse}
     */
    protected function initParts()
    {
        return array(
            'getOrdersByDateRangeResponse' => new PartnerAPITypeGetOrdersResponse()
        );
    }
}
