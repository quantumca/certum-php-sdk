<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeRenewCertificateRequest;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_renewCertificate">
    <part element="tns:renewCertificate" name="renewCertificate">
    </part>
</message>
<xs:element name="renewCertificate" nillable="true" type="tns:renewCertificateRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_renewCertificate WSDL message.
 *
 * It has one part 'renewCertificate' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessageRenewCertificate setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeRenewCertificateRequest $renewCertificate
 * @method PartnerAPITypeRenewCertificateRequest getRenewCertificate()
 *
 * @package messages
 */
class PartnerAPIMessageRenewCertificate extends PartnerAPIMessage
{
    /**
     * Defines the part with credentials data.
     *
     * @var string
     */
    protected $partWithCredentials = 'renewCertificate';

    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'renewCertificate':PartnerAPITypeRenewCertificateRequest}
     */
    protected function initParts()
    {
        return array(
            'renewCertificate' => new PartnerAPITypeRenewCertificateRequest()
        );
    }
}
