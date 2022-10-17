<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeModifySNICertificateResponse;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<message name="PartnerServicePortType_modifySNICertificateResponse">
    <part element="tns:modifySNICertificateResponse" name="modifySNICertificateResponse">
    </part>
</message>
<xs:element name="modifySNICertificateResponse" nillable="true" type="tns:modifySNICertificateResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_modifySNICertificateResponse WSDL message.
 *
 * It has one part 'modifySNICertificateResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeModifySNICertificateResponse $modifySNICertificateResponse
 * @method PartnerAPITypeModifySNICertificateResponse getModifySNICertificateResponse()
 *
 * @package messages
 */
class PartnerAPIMessageModifySNICertificateResponse extends PartnerAPIMessage
{
    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'modifySNICertificateResponse':PartnerAPITypeModifySNICertificateResponse}
     */
    protected function initParts()
    {
        return array(
            'modifySNICertificateResponse' => new PartnerAPITypeModifySNICertificateResponse()
        );
    }
}
