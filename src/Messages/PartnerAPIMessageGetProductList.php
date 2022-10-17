<?php

namespace Certum\Sdk\Messages;

use Certum\Sdk\Types\PartnerAPITypeGetProductListRequest;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<message name="PartnerServicePortType_getProductList">
    <part element="tns:getProductList" name="getProductList">
    </part>
</message>
<xs:element name="getProductList" nillable="true" type="tns:getProductListRequest"/>
*/

/**
 * This class represents the PartnerServicePortType_getProductList WSDL message.
 *
 * It has one part 'getProductList' accessible as property or by invoking a getter method.
 *
 * @method PartnerAPIMessageGetProductList setCredentials(string $userName, string $password) Overriden method. Read documentation for PartnerAPIMessage class
 * @property PartnerAPITypeGetProductListRequest $getProductList
 * @method PartnerAPITypeGetProductListRequest getGetProductList()
 *
 * @package messages
 */
class PartnerAPIMessageGetProductList extends PartnerAPIMessage
{
    /**
     * Defines the part with credentials data.
     *
     * @var string
     */
    protected $partWithCredentials = 'getProductList';

    /**
     * This method returns initial data for the message's parts.
     *
     * @return array{'getProductList':PartnerAPITypeGetProductListRequest}
     */
    protected function initParts()
    {
        return array(
            'getProductList' => new PartnerAPITypeGetProductListRequest()
        );
    }
}
