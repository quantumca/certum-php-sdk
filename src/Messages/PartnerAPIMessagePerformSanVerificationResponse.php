<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypePerformSanVerificationResponse;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_performSanVerificationResponse">
    <part name="performSanVerificationResponse" element="tns:performSanVerificationResponse">
    </part>
</message>
<xs:element name="performSanVerificationResponse" nillable="true" type="tns:performSanVerificationResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_performSanVerificationResponse WSDL message.
 *
 * It has one part 'performSanVerificationResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypePerformSanVerificationResponse $performSanVerificationResponse
 * @method PartnerAPITypePerformSanVerificationResponse getPerformSanVerificationResponse()
 *
 * @package messages
 */
class PartnerAPIMessagePerformSanVerificationResponse extends PartnerAPIMessage
{
    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'performSanVerificationResponse': PartnerAPITypePerformSanVerificationResponse}
     */
    protected function initParts()
    {
        return array(
            'performSanVerificationResponse' => new PartnerAPITypePerformSanVerificationResponse()
        );
    }
}
