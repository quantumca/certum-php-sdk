<?php
namespace Certum\Sdk\Types;
/**
 * Partner API Library
 * 
 * @copyright Copyright (c) 2020 Asseco Data Systems SA
 * @license license.txt
 */


/*
<xs:complexType name="document">
	<xs:sequence>
		<xs:element name="description" type="xs:string"/>
		<xs:element name="type" type="tns:documentTypeEnum"/>
		<xs:element name="files" type="tns:files"/>
	</xs:sequence>
</xs:complexType>
*/

/**
 * This class represents the document WSDL type.
 *
 * It is based on the PartnerAPIType class and derives properties and methods from that class.
 * 
 * @method PartnerAPITypeDocument setFiles(PartnerAPITypeFiles $value) Sets the files element.
 * @method PartnerAPITypeFiles getFiles() Gets the files element.
 * @property PartnerAPITypeFiles $files Gets the files element.
 * 
 * @method PartnerAPITypeDocument setDescription(string $value) Sets the description element.
 * @method string getDescription() Gets the description element.
 * @property string $description Gets the description element.
 * 
 * @method PartnerAPITypeDocument setType(string $value) Sets the type element.
 * @method string getType() Gets the type element.
 * @property string $type Gets the type element.
 *
 * @package types
 */
class PartnerAPITypeDocument extends PartnerAPIType {
    
    protected function initData() {
        $n = array(
            'files'       => array('min' => 1, 'max' => 1, 'value' => new PartnerAPITypeFiles(), 'type' => 'PartnerAPITypeFiles', 'nillable' => FALSE),
            'description' => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE),
            'type'        => array('min' => 1, 'max' => 1, 'value' => NULL, 'type' => 'string', 'nillable' => FALSE)
        );
        return $n;
    }


}
