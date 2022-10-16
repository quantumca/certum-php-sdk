<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="cancelOrderReponse">
	<xs:complexContent>
		<xs:extension base="tns:response">
			<xs:sequence/>
		</xs:extension>
	</xs:complexContent>
</xs:complexType>
*/

/**
 * This class represents the cancelOrderReponse WSDL type.
 *
 * It is an extension to the PartnerAPITypeResponse class.
 * 
 * @package types
 */
class PartnerAPITypeCancelOrderReponse extends PartnerAPITypeResponse {
    
    protected function initData() {
        $p = parent::initData();
        $n = array(
        );
        $n = array_merge($p, $n);
        return $n;
    }


}
