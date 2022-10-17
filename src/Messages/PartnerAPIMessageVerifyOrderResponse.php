<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeVerifyOrderResponse;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_verifyOrderResponse">
    <part element="tns:verifyOrderResponse" name="verifyOrderResponse">
    </part>
</message>
<xs:element name="verifyOrderResponse" nillable="true" type="tns:verifyOrderResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_verifyOrderResponse WSDL message.
 *
 * It has one part 'verifyOrderResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeVerifyOrderResponse $verifyOrderResponse
 * @method PartnerAPITypeVerifyOrderResponse getVerifyOrderResponse()
 *
 * @package messages
 */
class PartnerAPIMessageVerifyOrderResponse extends PartnerAPIMessage
{
    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'verifyOrderResponse':PartnerAPITypeVerifyOrderResponse}
     */
    protected function initParts()
    {
        return array(
            'verifyOrderResponse' => new PartnerAPITypeVerifyOrderResponse()
        );
    }
}
