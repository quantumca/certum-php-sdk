<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeValidateOrderParametersRequest;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_validateOrderParameters">
    <part element="tns:validateOrderParameters" name="validateOrderParameters">
    </part>
</message>
<xs:element name="validateOrderParameters" nillable="true" type="tns:validateOrderParametersRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_validateOrderParameters WSDL message.
 *
 * It has one part 'validateOrderParameters' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessageValidateOrderParameters setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeValidateOrderParametersRequest $validateOrderParameters
 * @method PartnerAPITypeValidateOrderParametersRequest getValidateOrderParameters()
 *
 * @package messages
 */
class PartnerAPIMessageValidateOrderParameters extends PartnerAPIMessage
{
    /**
     * Defines the part with credentials data.
     *
     * @var string
     */
    protected $partWithCredentials = 'validateOrderParameters';

    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'validateOrderParameters':PartnerAPITypeValidateOrderParametersRequest}
     */
    protected function initParts()
    {
        return array(
            'validateOrderParameters' => new PartnerAPITypeValidateOrderParametersRequest()
        );
    }
}
