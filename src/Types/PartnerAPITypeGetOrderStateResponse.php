<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 *
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="getOrderStateResponse">
        <xs:complexContent>
                <xs:extension base="tns:response">
                        <xs:sequence>
                                <xs:element name="verifications" type="tns:orderVerifications"/>
                                <xs:element name="lastUpdateDate" type="xs:dateTime"/>
                                <xs:element name="orderStatus" type="tns:certificationRequestStateTypeEnum"/>
                        </xs:sequence>
                </xs:extension>
        </xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the getOrderStateResponse WSDL type.
 *
 * It is an extension to the PartnerAPITypeResponse class.
 *
 * @method PartnerAPITypeGetOrderStateResponse setVerifications(PartnerAPITypeOrderVerifications $value) Sets the verifications element.
 * @method PartnerAPITypeOrderVerifications getVerifications() Gets the verifications element or NULL.
 * @property PartnerAPITypeOrderVerifications $verifications Gets the verifications element or NULL.
 *
 * @method PartnerAPITypeGetOrderStateResponse setLastUpdateDate(string $value) Sets the lastUpdateDate element.
 * @method string getLastUpdateDate() Gets the lastUpdateDate element or NULL.
 * @property string $lastUpdateDate Gets the lastUpdateDate element or NULL.
 *
 * @method PartnerAPITypeGetOrderStateResponse setOrderStatus(string $value) Sets the orderStatus element.
 * @method string getOrderStatus() Gets the orderStatus element or NULL.
 * @property string $orderStatus Gets the orderStatus element or NULL.
 *
 * @package types
 */
class PartnerAPITypeGetOrderStateResponse extends PartnerAPITypeResponse
{
    protected function initData()
    {
        $p = parent::initData();
        $n = array(
            'verifications'  => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'PartnerAPITypeOrderVerifications', 'nillable' => false),
            'lastUpdateDate' => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false),
            'orderStatus'    => array('min' => 1, 'max' => 1, 'value' => null, 'type' => 'string', 'nillable' => false)
        );
        $n = array_merge($p, $n);
        return $n;
    }
}
