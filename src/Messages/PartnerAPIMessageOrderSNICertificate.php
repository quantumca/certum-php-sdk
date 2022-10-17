<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeOrderSNICertificateRequest;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_orderSNICertificate">
    <part element="tns:orderSNICertificate" name="orderSNICertificate">
    </part>
</message>
<xs:element name="orderSNICertificate" nillable="true" type="tns:orderSNICertificateRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_orderSNICertificate WSDL message.
 *
 * It has one part 'orderSNICertificate' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessageOrderSNICertificate setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeOrderSNICertificateRequest $orderSNICertificate
 * @method PartnerAPITypeOrderSNICertificateRequest getOrderSNICertificate()
 *
 * @package messages
 */
class PartnerAPIMessageOrderSNICertificate extends PartnerAPIMessage
{
    /**
     * Defines the part with credentials data.
     *
     * @var string
     */
    protected $partWithCredentials = 'orderSNICertificate';

    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'orderSNICertificate':PartnerAPITypeOrderSNICertificateRequest}
     */
    protected function initParts()
    {
        return array(
            'orderSNICertificate' => new PartnerAPITypeOrderSNICertificateRequest()
        );
    }
}
