<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeGetOrdersByDateRangeRequest;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<message name="PartnerServicePortType_getOrdersByDateRange">
    <part element="tns:getOrdersByDateRange" name="getOrdersByDateRange">
    </part>
</message>
<xs:element name="getOrdersByDateRange" nillable="true" type="tns:getOrdersByDateRangeRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_getOrdersByDateRange WSDL message.
 *
 * It has one part 'getOrdersByDateRange' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessageGetOrdersByDateRange setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeGetOrdersByDateRangeRequest $getOrdersByDateRange
 * @method PartnerAPITypeGetOrdersByDateRangeRequest getGetOrdersByDateRange()
 *
 * @package messages
 */
class PartnerAPIMessageGetOrdersByDateRange extends PartnerAPIMessage
{
    /**
     * Defines the part with credentials data.
     *
     * @var string
     */
    protected $partWithCredentials = 'getOrdersByDateRange';

    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'getOrdersByDateRange':PartnerAPITypeGetOrdersByDateRangeRequest}
     */
    protected function initParts()
    {
        return array(
            'getOrdersByDateRange' => new PartnerAPITypeGetOrdersByDateRangeRequest()
        );
    }
}
