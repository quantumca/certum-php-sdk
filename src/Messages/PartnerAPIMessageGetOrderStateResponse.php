<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeGetOrderStateResponse;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<message name="PartnerServicePortType_getOrderStateResponse">
    <part element="tns:getOrderStateResponse" name="getOrderStateResponse">
    </part>
</message>
<xs:element name="getOrderStateResponse" nillable="true" type="tns:getOrderStateResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_getOrderStateResponse WSDL message.
 *
 * It has one part 'getOrderStateResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeGetOrderStateResponse $getOrderStateResponse
 * @method PartnerAPITypeGetOrderStateResponse getGetOrderStateResponse()
 *
 * @package messages
 */
class PartnerAPIMessageGetOrderStateResponse extends PartnerAPIMessage
{
    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'getOrderStateResponse':PartnerAPITypeGetOrderStateResponse}
     */
    protected function initParts()
    {
        return array(
            'getOrderStateResponse' => new PartnerAPITypeGetOrderStateResponse()
        );
    }
}
