<?php

namespace Certum\Sdk\Types;

/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */

/*
<xs:simpleType name="approverEmailPrefixType">
    <xs:restriction base="xs:string">
        <xs:enumeration value="ADMIN"/>
        <xs:enumeration value="ADMINISTRATOR"/>
        <xs:enumeration value="POSTMASTER"/>
        <xs:enumeration value="HOSTMASTER"/>
        <xs:enumeration value="WEBMASTER"/>
    </xs:restriction>
</xs:simpleType>
*/

/**
 * This class represents the approverEmailPrefixType WSDL type.
 *
 * This is a set of constant values representing enumeration type from WSDL file.
 *
 * @package types
 */
class PartnerAPITypeApproverEmailPrefixType
{

    const ADMIN         = "ADMIN";
    const ADMINISTRATOR = "ADMINISTRATOR";
    const POSTMASTER    = "POSTMASTER";
    const HOSTMASTER    = "HOSTMASTER";
    const WEBMASTER     = "WEBMASTER";

    private function __construct()
    {
    }
}
