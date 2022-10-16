<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeGetExpiringCertificatesRequest;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<message name="PartnerServicePortType_getExpiringCertificates">
    <part element="tns:getExpiringCertificates" name="getExpiringCertificates">
    </part>
</message>
<xs:element name="getExpiringCertificates" nillable="true" type="tns:getExpiringCertificatesRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_getExpiringCertificates WSDL message.
 *
 * It has one part 'getExpiringCertificates' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessageGetExpiringCertificates setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeGetExpiringCertificatesRequest $getExpiringCertificates
 * @method PartnerAPITypeGetExpiringCertificatesRequest getGetExpiringCertificates()
 *
 * @package messages
 */
class PartnerAPIMessageGetExpiringCertificates extends PartnerAPIMessage
{
    /**
     * Defines the part with credentials data.
     *
     * @var string
     */
    protected $partWithCredentials = 'getExpiringCertificates';

    /**
     * This method returns initial data for the message's parts.
     *
     * @return array
     */
    protected function initParts()
    {
        return array(
            'getExpiringCertificates' => new PartnerAPITypeGetExpiringCertificatesRequest()
        );
    }
}
