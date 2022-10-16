<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:simpleType name="hashAlgorithmEnum">
	<xs:restriction base="xs:string">
		<xs:enumeration value="RSA-SHA1"/>
		<xs:enumeration value="RSA-SHA256"/>
		<xs:enumeration value="ECC-SHA256"/>
	</xs:restriction>
</xs:simpleType>
*/

/**
 * This class represents the hashAlgorithmEnum WSDL type.
 *
 * This is a set of constant values representing enumeration type from WSDL file.
 *
 * @package types
 */
class PartnerAPITypeHashAlgorithmEnum {

    const RSA_SHA1 = "RSA-SHA1";
    const RSA_SHA256 = "RSA-SHA256";
    const ECC_SHA256 = "ECC-SHA256";

    private function __construct() {
    }


}
