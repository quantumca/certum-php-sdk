<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeGetProductListResponse;

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<message name="PartnerServicePortType_getProductListResponse">
	<part element="tns:getProductListResponse" name="getProductListResponse">
	</part>
</message>
<xs:element name="getProductListResponse" nillable="true" type="tns:getProductListResponse"/>
*/

/**
 * This class represents the PartnerServicePortType_getProductListResponse WSDL message.
 *
 * It has one part 'getProductListResponse' accessible as property or by invoking a getter method.
 *
 * @property PartnerAPITypeGetProductListResponse $getProductListResponse
 * @method PartnerAPITypeGetProductListResponse getGetProductListResponse()
 * 
 * @package messages
 */
class PartnerAPIMessageGetProductListResponse extends PartnerAPIMessage
{


    /**
     * This method returns initial data for the message's parts.
     * 
     * @return array
     */
    protected function initParts()
    {
        return array(
            'getProductListResponse' => new PartnerAPITypeGetProductListResponse()
        );
    }
}
