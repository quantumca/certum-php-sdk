<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeQuickOrderResponse;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_quickOrderResponse">
    <part element="tns:quickOrderResponse" name="quickOrderResponse">
    </part>
</message>
<xs:element name="quickOrderResponse" nillable="true" type="tns:quickOrderResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_quickOrderResponse WSDL message.
 *
 * It has one part 'quickOrderResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeQuickOrderResponse $quickOrderResponse
 * @method PartnerAPITypeQuickOrderResponse getQuickOrderResponse()
 *
 * @package messages
 */
class PartnerAPIMessageQuickOrderResponse extends PartnerAPIMessage
{
    /**
     * This method returns initial data for the message's parts.
     *
     * @return array
     */
    protected function initParts()
    {
        return array(
            'quickOrderResponse' => new PartnerAPITypeQuickOrderResponse()
        );
    }
}
