<?php
 class umiFieldsCollection extends singleton implements iUmiFieldsCollection {private $loadedFieldList = [];public static function getInstance($v6f66e878c62db60568a3487869695820 = null) {return parent::getInstance(__CLASS__);}public function add($vb068931cc450442b63f5b3d276ea4297, $vd5d3db1765287eef77d7927cc956f50a, $ve2aeb4e882d60b1eb4b7c8cd97986a28) {$vb80bb7740288fda1f201890375a60c8f = $this->addField($vb068931cc450442b63f5b3d276ea4297, $vd5d3db1765287eef77d7927cc956f50a, $ve2aeb4e882d60b1eb4b7c8cd97986a28);return $this->getLoadedField($vb80bb7740288fda1f201890375a60c8f);}public function getById($vb80bb7740288fda1f201890375a60c8f) {return $this->getField($vb80bb7740288fda1f201890375a60c8f);}public function delById($vb80bb7740288fda1f201890375a60c8f) {return $this->delField($vb80bb7740288fda1f201890375a60c8f);}public function isExists($vb80bb7740288fda1f201890375a60c8f) {$vb80bb7740288fda1f201890375a60c8f = (int) $vb80bb7740288fda1f201890375a60c8f;if ($vb80bb7740288fda1f201890375a60c8f === 0) {return false;}$v1b1cc7f086b3f074da452bc3129981eb = <<<SQL
SELECT `id` FROM `cms3_object_fields` WHERE `id` = $vb80bb7740288fda1f201890375a60c8f LIMIT 0, 1;
SQL;
SELECT `id` FROM `cms3_object_fields` WHERE `field_type_id` = $ve2aeb4e882d60b1eb4b7c8cd97986a28;
SQL;
SELECT `id`, `name`, `title`, `is_locked`, `is_inheritable`, `is_visible`, `field_type_id`, `guide_id`, `in_search`, 
`in_filter`, `tip`, `is_required`, `sortable`, `is_system`, `restriction_id`, `is_important` 
FROM `cms3_object_fields`
WHERE `id` IN ($v5a2576254d428ddc22a03fac145c8749)
LIMIT 0, $vaa9f73eea60a006820d0f8768bc8a3fc
SQL;