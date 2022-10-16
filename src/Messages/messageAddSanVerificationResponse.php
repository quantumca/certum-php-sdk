<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeAddSanVerificationResponse;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_addSanVerificationResponse">
    <part name="addSanVerificationResponse" element="tns:addSanVerificationResponse">
    </part>
</message>
<xs:element name="addSanVerificationResponse" nillable="true" type="tns:addSanVerificationResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_addSanVerificationResponse WSDL message.
 *
 * It has one part 'addSanVerificationResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeAddSanVerificationResponse $addSanVerificationResponse
 * @method PartnerAPITypeAddSanVerificationResponse getAddSanVerificationResponse()
 *
 * @package messages
 */
class PartnerAPIMessageAddSanVerificationResponse extends PartnerAPIMessage
{
    /**
     * This method returns initial data for the message's parts.
     *
     * @return array
     */
    protected function initParts()
    {
        return array(
            'addSanVerificationResponse' => new PartnerAPITypeAddSanVerificationResponse()
        );
    }
}
