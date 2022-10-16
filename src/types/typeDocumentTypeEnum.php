<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:simpleType name="documentTypeEnum">
    <xs:restriction base="xs:string">
        <xs:enumeration value="AUTHORIZATION"/>
        <xs:enumeration value="VERIFICATION_REPORT"/>
        <xs:enumeration value="VERIFICATION_REPORT_OTF"/>
        <xs:enumeration value="APPLICANT"/>
        <xs:enumeration value="ORGANIZATION"/>
        <xs:enumeration value="ADDITIONAL"/>
	</xs:restriction>
</xs:simpleType>
*/

/**
 * This class represents the documentTypeEnum WSDL type.
 *
 * This is a set of constant values representing enumeration type from WSDL file.
 *
 * @package types
 */
class PartnerAPITypeDocumentTypeEnum
{

    const AUTHORIZATION           = "AUTHORIZATION";
    const VERIFICATION_REPORT     = "VERIFICATION_REPORT";
    const VERIFICATION_REPORT_OTF = "VERIFICATION_REPORT_OTF";
    const APPLICANT               = "APPLICANT";
    const ORGANIZATION            = "ORGANIZATION";
    const ADDITIONAL              = "ADDITIONAL";
    const PASSPORT                = "PASSPORT";

    private function __construct()
    {
    }
}
