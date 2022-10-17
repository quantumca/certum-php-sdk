<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeValidateOrderParametersResponse;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_validateOrderParametersResponse">
    <part element="tns:validateOrderParametersResponse" name="validateOrderParametersResponse">
    </part>
</message>
<xs:element name="validateOrderParametersResponse" nillable="true" type="tns:validateOrderParametersResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_validateOrderParametersResponse WSDL message.
 *
 * It has one part 'validateOrderParametersResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeValidateOrderParametersResponse $validateOrderParametersResponse
 * @method PartnerAPITypeValidateOrderParametersResponse getValidateOrderParametersResponse()
 *
 * @package messages
 */
class PartnerAPIMessageValidateOrderParametersResponse extends PartnerAPIMessage
{
    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'validateOrderParametersResponse':PartnerAPITypeValidateOrderParametersResponse}
     */
    protected function initParts()
    {
        return array(
            'validateOrderParametersResponse' => new PartnerAPITypeValidateOrderParametersResponse()
        );
    }
}
