<?php
 interface iUmiFieldType extends iUmiEntinty {public static function getDataTypes();public static function getDataTypeDB($v870b60148237c1452dfb337fdd19c314);public static function isValidDataType($v870b60148237c1452dfb337fdd19c314);public function getName();public function getIsMultiple();public function getIsUnsigned();public function getDataType();public function setName($vb068931cc450442b63f5b3d276ea4297);public function setIsMultiple($v09ec737a9ab66d1d796304239d3f8a86);public function setIsUnsigned($va4e397efa082dcccc62563f1f2d9513b);public function setDataType($v870b60148237c1452dfb337fdd19c314);public function isNumber();}