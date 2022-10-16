<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeGetEmailVerificationResponse;

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<message name="PartnerServicePortType_getEmailVerificationResponse">
	<part element="tns:getEmailVerificationResponse" name="getEmailVerificationResponse">
	</part>
</message>
<xs:element name="getEmailVerificationResponse" nillable="true" type="tns:getEmailVerificationResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_getEmailVerificationResponse WSDL message.
 *
 * It has one part 'getEmailVerificationResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeGetEmailVerificationResponse $getEmailVerificationResponse
 * @method PartnerAPITypeGetEmailVerificationResponse getGetEmailVerificationResponse()
 * 
 * @package messages
 */
class PartnerAPIMessageGetEmailVerificationResponse extends PartnerAPIMessage
{


    /**
     * This method returns initial data for the message's parts.
     * 
     * @return array
     */
    protected function initParts()
    {
        return array(
            'getEmailVerificationResponse' => new PartnerAPITypeGetEmailVerificationResponse()
        );
    }
}
