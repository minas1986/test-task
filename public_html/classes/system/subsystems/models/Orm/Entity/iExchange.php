<?php
 namespace UmiCms\System\Orm\Entity;use UmiCms\System\Orm\iEntity;use \iXmlExporter as iBaseExporter;use UmiCms\System\Import\UmiDump\Entity\iBaseImporter;use UmiCms\System\Import\UmiDump\Helper\Entity\iSourceIdBinder;interface iExchange {public function __construct(   iImporter $v1bc49dba86c5074c5266c6d38c301a46, iExporter $ved780287e302ec3b9fd3c5e78771919f, iFacade $v00c169d5e8a598d3908199ef8c64c279,   iBuilder $vc87a8ca60f0891b79d192fa86f019916, iAccessor $v9efcb42ee143be09c45d33ed2fba175b, iDemolisher $v01785e53d949d6df885f78b3939831f2  );public function importOne(array $v6dd047148d685270458ecc44ee128a4d, iBaseImporter $vd7648ce30cce00f43e53cae171ed8d84);public function importMany(array $v3c8f981e1c2c882508f219cdbd2032e4, iBaseImporter $vd7648ce30cce00f43e53cae171ed8d84);public function getInternalIdList(array $ve7143c35e910d05210552bcc5b236bc8, iBaseImporter $vd7648ce30cce00f43e53cae171ed8d84);public function exportOne($vb80bb7740288fda1f201890375a60c8f ,iBaseExporter $va8697596728df0c97f17acab91567f11);public function exportMany(array $v5a2576254d428ddc22a03fac145c8749, iBaseExporter $va8697596728df0c97f17acab91567f11);public function getExternalIdList(array $v689f9b0d90e82b15fbd75db891fc65b5, iBaseExporter $va8697596728df0c97f17acab91567f11);public function getDependenciesForExportOne($vb80bb7740288fda1f201890375a60c8f);public function getDependenciesForExportMany(array $v5a2576254d428ddc22a03fac145c8749);public function demolishByExternalIdList($ve7143c35e910d05210552bcc5b236bc8, iSourceIdBinder $vb508148712cb53958c7e3d25ec86d72a);}