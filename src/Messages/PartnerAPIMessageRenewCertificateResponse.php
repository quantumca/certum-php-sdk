<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeRenewCertificateResponse;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_renewCertificateResponse">
    <part element="tns:renewCertificateResponse" name="renewCertificateResponse">
    </part>
</message>
<xs:element name="renewCertificateResponse" nillable="true" type="tns:renewCertificateResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_renewCertificateResponse WSDL message.
 *
 * It has one part 'renewCertificateResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeRenewCertificateResponse $renewCertificateResponse
 * @method PartnerAPITypeRenewCertificateResponse getRenewCertificateResponse()
 *
 * @package messages
 */
class PartnerAPIMessageRenewCertificateResponse extends PartnerAPIMessage
{
    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'renewCertificateResponse':PartnerAPITypeRenewCertificateResponse}
     */
    protected function initParts()
    {
        return array(
            'renewCertificateResponse' => new PartnerAPITypeRenewCertificateResponse()
        );
    }
}
