<?php
 class umiTypesHelper implements iSingleton {private static $instance;private $fieldsByObjectTypes = [];private $objectTypeIdsByHierarchyTypeId = [];private $hierarchyTypeIdsByName = [];private $guidsByObjectTypes = [];private $umiObjectTypesCollection;private $umiHierarchyTypesCollection;private $fieldsIdsToFieldTypeId = [];public static function getInstance($v6f66e878c62db60568a3487869695820 = null) {if (self::$instance === null) {self::$instance = new umiTypesHelper();}return self::$instance;}public function getFieldsByHierarchyTypeName($vb068931cc450442b63f5b3d276ea4297, $vabf77184f55403d75b9d51d79162a7ca) {if ($vb068931cc450442b63f5b3d276ea4297 == 'content' && $vabf77184f55403d75b9d51d79162a7ca == 'page') {$vabf77184f55403d75b9d51d79162a7ca = '';}if (isset($this->hierarchyTypeIdsByName[$vb068931cc450442b63f5b3d276ea4297][$vabf77184f55403d75b9d51d79162a7ca])) {return $this->getFieldsByHierarchyTypeId($this->hierarchyTypeIdsByName[$vb068931cc450442b63f5b3d276ea4297][$vabf77184f55403d75b9d51d79162a7ca]);}$vb068931cc450442b63f5b3d276ea4297 = umiObjectProperty::filterInputString($vb068931cc450442b63f5b3d276ea4297);$vabf77184f55403d75b9d51d79162a7ca = umiObjectProperty::filterInputString($vabf77184f55403d75b9d51d79162a7ca);$v4717d53ebfdfea8477f780ec66151dcb = ConnectionPool::getInstance()->getConnection();$vac5c74b64b4b8352ef2f181affb5ac2a = <<<SQL
SELECT
  cms3_object_fields.id            AS field_id,
  cms3_object_fields.name          AS field_guid,
  cms3_object_fields.field_type_id AS field_type_id,
  cms3_object_types.id             AS object_type_id,
  cms3_hierarchy_types.id          AS hierarchy_type_id
FROM
  cms3_object_fields
  LEFT JOIN cms3_fields_controller ON cms3_object_fields.id = cms3_fields_controller.field_id
  LEFT JOIN cms3_object_field_groups ON cms3_fields_controller.group_id = cms3_object_field_groups.id
  LEFT JOIN cms3_object_types ON cms3_object_field_groups.type_id = cms3_object_types.id
  LEFT JOIN cms3_hierarchy_types ON cms3_object_types.hierarchy_type_id = cms3_hierarchy_types.id
WHERE
  cms3_hierarchy_types.name = '$vb068931cc450442b63f5b3d276ea4297' AND cms3_hierarchy_types.ext = '$vabf77184f55403d75b9d51d79162a7ca';
SQL;
SELECT
  cms3_object_fields.id            AS field_id,
  cms3_object_fields.name          AS field_guid,
  cms3_object_fields.field_type_id AS field_type_id,
  cms3_object_types.id             AS object_type_id,
  cms3_hierarchy_types.name        AS hierarchy_type_name,
  cms3_hierarchy_types.ext         AS hierarchy_type_ext,
  cms3_hierarchy_types.id          AS hierarchy_type_id
FROM
  cms3_object_fields
  LEFT JOIN cms3_fields_controller ON cms3_object_fields.id = cms3_fields_controller.field_id
  LEFT JOIN cms3_object_field_groups ON cms3_fields_controller.group_id = cms3_object_field_groups.id
  LEFT JOIN cms3_object_types ON cms3_object_field_groups.type_id = cms3_object_types.id
  LEFT JOIN cms3_hierarchy_types ON cms3_object_types.hierarchy_type_id = cms3_hierarchy_types.id
WHERE
  $v4df9f730fe999a37f7c55cb07fb2afd0;
SQL;
SELECT
  cms3_object_fields.id               AS field_id,
  cms3_object_fields.name             AS field_guid,
  cms3_object_fields.field_type_id    AS field_type_id,
  cms3_object_types.id                AS object_type_id,
  cms3_object_types.hierarchy_type_id AS hierarchy_type_id
FROM
  cms3_object_fields
  LEFT JOIN cms3_fields_controller ON cms3_object_fields.id = cms3_fields_controller.field_id
  LEFT JOIN cms3_object_field_groups ON cms3_fields_controller.group_id = cms3_object_field_groups.id
  LEFT JOIN cms3_object_types ON cms3_object_field_groups.type_id = cms3_object_types.id
WHERE
  $v4df9f730fe999a37f7c55cb07fb2afd0;
SQL;
SELECT
  cms3_object_fields.id            AS field_id,
  cms3_object_fields.name          AS field_guid,
  cms3_object_fields.field_type_id AS field_type_id,
  cms3_object_types.id             AS object_type_id,
  cms3_object_types.guid           AS guid
FROM
  cms3_object_fields
  LEFT JOIN cms3_fields_controller ON cms3_object_fields.id = cms3_fields_controller.field_id
  LEFT JOIN cms3_object_field_groups ON cms3_fields_controller.group_id = cms3_object_field_groups.id
  LEFT JOIN cms3_object_types ON cms3_object_field_groups.type_id = cms3_object_types.id
WHERE
  $v4df9f730fe999a37f7c55cb07fb2afd0;
SQL;