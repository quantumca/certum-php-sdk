<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeGetSanVerificationStateResponse;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<message name="PartnerServicePortType_getSanVerificationStateResponse">
    <part name="getSanVerificationStateResponse" element="tns:getSanVerificationStateResponse">
    </part>
</message>
<xs:element name="getSanVerificationStateResponse" nillable="true" type="tns:getSanVerificationStateResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_getSanVerificationStateResponse WSDL message.
 *
 * It has one part 'getSanVerificationStateResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeGetSanVerificationStateResponse $getSanVerificationStateResponse
 * @method PartnerAPITypeGetSanVerificationStateResponse getGetSanVerificationStateResponse()
 *
 * @package messages
 */
class PartnerAPIMessageGetSanVerificationStateResponse extends PartnerAPIMessage
{
    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'getSanVerificationStateResponse':PartnerAPITypeGetSanVerificationStateResponse}
     */
    protected function initParts()
    {
        return array(
            'getSanVerificationStateResponse' => new PartnerAPITypeGetSanVerificationStateResponse()
        );
    }
}
