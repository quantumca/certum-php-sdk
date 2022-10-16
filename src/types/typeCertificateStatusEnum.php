<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:simpleType name="certificateStatusEnum">
	<xs:restriction base="xs:string">
		<xs:enumeration value="VALID"/>
		<xs:enumeration value="REVOKING"/>
		<xs:enumeration value="REVOKED"/>
	</xs:restriction>
</xs:simpleType>
*/

/**
 * This class represents the certificateStatusEnum WSDL type.
 *
 * This is a set of constant values representing enumeration type from WSDL file.
 *
 * @package types
 */
class PartnerAPITypeCertificateStatusEnum {
    
    const VALID    = "VALID";
    const REVOKING = "REVOKING";
    const REVOKED  = "REVOKED";
    
    private function __construct() {
    }


}
