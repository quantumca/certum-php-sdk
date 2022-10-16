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
        <xs:enumeration value="DNS_TXT"/>
        <xs:enumeration value="DNS_TXT_PREFIX"/>
        <xs:enumeration value="DNS_CNAME"/>
        <xs:enumeration value="DNS_CNAME_PREFIX"/>
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
class PartnerAPITypeVerificationMethodType
{

    const DNS               = "DNS";
    const DNS_TXT           = "DNS_TXT";
    const DNS_TXT_PREFIX    = "DNS_TXT_PREFIX";
    const DNS_CNAME         = "DNS_CNAME";
    const DNS_CNAME_PREFIX  = "DNS_CNAME_PREFIX";
    const FILE              = "FILE";
    const ADMIN             = "ADMIN";

    private function __construct()
    {
    }
}
