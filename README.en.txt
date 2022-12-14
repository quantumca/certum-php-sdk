
Certum Partner API Library
Programming library for Certum web services
===========================================

Version 1.24.0 (December 17, 2017)


Introduction
------------

The library can be used to communicate with a web service that provides
procedures for handling e-mail and SSL certificates.
The purpose of the library is to facilitate and simplify the use of the service.


License
-------

The library is a proprietary software. Full text of the license is
in the file "LICENSE.txt".


Requirements
------------

The library requires:
- PHP 5.1.0 (or later)
- Compiled in libxml extension for PHP
- Enabled support for SOAP in PHP


Installation
------------

The library must be installed (copied) to a directory accessible to
PHP by the statement include(). Thus, the library catalog
'certumPartnerAPI' must be included in one of the directories defined by
the 'include_path' option in your PHP configuration.


Configuration
-------------

The library does not require any additional configuration.
Various configuration setting, for example:
- soap.wsdl_cache_enabled
- soap.wsdl_cache_ttl
are up to the end user and can be adjusted according to the needs.


Documentation
-------------

The directory 'doc' is a class library documentation in HTML format.
The library is documented in the PHPDoc Standard and the documentation
was generated by ApiGen software. Documentation can be read
also directly in the library source code.


How to use
----------

The library is designed to be easy to use and at the same time to allow
the use of all capabilities of the service.
The directory 'examples' contains example files that cover all
service operations.
We recommend to start their analysis of the file 'start.php'.
Other files can be read in any order, and each of them presents
how to use one of the available operations.


Bugs
----

Problems with the use of the library and noticed bugs please report on
info@certum.pl email address.
