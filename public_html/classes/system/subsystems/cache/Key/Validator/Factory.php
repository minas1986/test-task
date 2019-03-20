<?php
 namespace UmiCms\System\Cache\Key\Validator;use UmiCms\System\Cache\Key\iValidator;class Factory implements iFactory {private $configuration;public function __construct(\iConfiguration $vccd1066343c95877b75b79d47c36bebe) {$this->configuration = $vccd1066343c95877b75b79d47c36bebe;}public function create($vb068931cc450442b63f5b3d276ea4297 = null) {if ($vb068931cc450442b63f5b3d276ea4297 === null) {$vb068931cc450442b63f5b3d276ea4297 = $this->getDefaultKeyValidatorName();}try {$v7123a699d77db6479a1d8ece2c4f1c16 = $this->createByName($vb068931cc450442b63f5b3d276ea4297);}catch (\coreException $v42552b1f133f9f8eb406d4f306ea9fd1) {\umiExceptionHandler::report($v42552b1f133f9f8eb406d4f306ea9fd1);$v7123a699d77db6479a1d8ece2c4f1c16 = $this->createByName();}return $v7123a699d77db6479a1d8ece2c4f1c16;}protected function getDefaultKeyValidatorName() {return (string) $this->getConfiguration()    ->get('cache', 'key-validator');}protected function getConfiguration() {return $this->configuration;}private function createByName($vb068931cc450442b63f5b3d276ea4297 = 'WhiteList') {$v6f66e878c62db60568a3487869695820 = $this->buildClassName($vb068931cc450442b63f5b3d276ea4297);if (!class_exists($v6f66e878c62db60568a3487869695820)) {throw new \coreException(sprintf('Cache key validator "%s" not found', $v6f66e878c62db60568a3487869695820));}$v8d6c391e7cb39133c91b73281a24f21f = new $v6f66e878c62db60568a3487869695820($this->getConfiguration());if (!$v8d6c391e7cb39133c91b73281a24f21f instanceof iValidator) {throw new \coreException(sprintf('Class "%s" is not cache key validator', $v6f66e878c62db60568a3487869695820));}return $v8d6c391e7cb39133c91b73281a24f21f;}private function buildClassName($va2f2ed4f8ebc2cbb4c21a29dc40ab61d) {return sprintf('UmiCms\System\Cache\Key\Validator\%s', $va2f2ed4f8ebc2cbb4c21a29dc40ab61d);}}