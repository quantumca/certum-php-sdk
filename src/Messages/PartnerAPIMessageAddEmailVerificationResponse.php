<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeAddEmailVerificationResponse;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_addEmailVerificationResponse">
    <part name="addEmailVerificationResponse" element="tns:addEmailVerificationResponse">
    </part>
</message>
<xs:element name="addEmailVerificationResponse" nillable="true" type="tns:addEmailVerificationResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_addEmailVerificationResponse WSDL message.
 *
 * It has one part 'addEmailVerificationResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeAddEmailVerificationResponse $addEmailVerificationResponse
 * @method PartnerAPITypeAddEmailVerificationResponse getAddEmailVerificationResponse()
 *
 * @package messages
 */
class PartnerAPIMessageAddEmailVerificationResponse extends PartnerAPIMessage
{
    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'addEmailVerificationResponse':PartnerAPITypeAddEmailVerificationResponse}
     */
    protected function initParts()
    {
        return array(
            'addEmailVerificationResponse' => new PartnerAPITypeAddEmailVerificationResponse()
        );
    }
}
