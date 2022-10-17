<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeGetOrderStateRequest;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<message name="PartnerServicePortType_getOrderState">
    <part element="tns:getOrderState" name="getOrderState">
    </part>
</message>
<xs:element name="getOrderState" nillable="true" type="tns:getOrderStateRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_getOrderState WSDL message.
 *
 * It has one part 'getOrderState' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessageGetOrderState setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeGetOrderStateRequest $getOrderState
 * @method PartnerAPITypeGetOrderStateRequest getGetOrderState()
 *
 * @package messages
 */
class PartnerAPIMessageGetOrderState extends PartnerAPIMessage
{
    /**
     * Defines the part with credentials data.
     *
     * @var string
     */
    protected $partWithCredentials = 'getOrderState';

    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'getOrderState':PartnerAPITypeGetOrderStateRequest}
     */
    protected function initParts()
    {
        return array(
            'getOrderState' => new PartnerAPITypeGetOrderStateRequest()
        );
    }
}
