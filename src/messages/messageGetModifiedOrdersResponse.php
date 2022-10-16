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
<message name="PartnerServicePortType_getModifiedOrdersResponse">
	<part element="tns:getModifiedOrdersResponse" name="getModifiedOrdersResponse">
	</part>
</message>
<xs:element name="getModifiedOrdersResponse" nillable="true" type="tns:getOrdersResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_getModifiedOrdersResponse WSDL message.
 *
 * It has one part 'getModifiedOrdersResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeGetOrdersResponse $getModifiedOrdersResponse
 * @method PartnerAPITypeGetOrdersResponse getGetModifiedOrdersResponse()
 * 
 * @package messages
 */
class PartnerAPIMessageGetModifiedOrdersResponse extends PartnerAPIMessage
{


    /**
     * This method returns initial data for the message's parts.
     * 
     * @return array
     */
    protected function initParts()
    {
        return array(
            'getModifiedOrdersResponse' => new PartnerAPITypeGetOrdersResponse()
        );
    }
}
