<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:simpleType name="verificationMethodType">
	<xs:restriction base="xs:string">
		<xs:enumeration value="DNS"/>
		<xs:enumeration value="FILE"/>
		<xs:enumeration value="ADMIN"/>
	</xs:restriction>
</xs:simpleType>
*/

/**
 * This class represents the verificationMethodType WSDL type.
 *
 * This is a set of constant values representing enumeration type from WSDL file.
 *
 * @package types
 */
class PartnerAPITypeVerificationMethodType {
    
    const DNS   = "DNS";
    const FILE  = "FILE";
    const ADMIN  = "ADMIN";

    private function __construct() {
    }


}
