<?php
 namespace UmiCms\System\Trade\Offer\Price;use UmiCms\System\Trade\Offer\iPrice;use UmiCms\System\Orm\Entity\Collection as AbstractCollection;class Collection extends AbstractCollection implements iCollection {public function filterByType($vb80bb7740288fda1f201890375a60c8f) {return $this->filter([    iMapper::TYPE_ID => [     self::COMPARE_TYPE_EQUALS => $vb80bb7740288fda1f201890375a60c8f    ]   ]);}public function filterByOffer($vb80bb7740288fda1f201890375a60c8f) {return $this->filter([    iMapper::OFFER_ID => [     self::COMPARE_TYPE_EQUALS => $vb80bb7740288fda1f201890375a60c8f    ]   ]);}public function extractOfferId() {return $this->extractField(iMapper::OFFER_ID);}public function extractUniqueOfferId() {return $this->extractUniqueField(iMapper::OFFER_ID);}public function extractTypeId() {return $this->extractField(iMapper::TYPE_ID);}public function extractUniqueTypeId() {return $this->extractUniqueField(iMapper::TYPE_ID);}public function extractCurrencyId() {return $this->extractField(iMapper::CURRENCY_ID);}public function extractUniqueCurrencyId() {return $this->extractUniqueField(iMapper::CURRENCY_ID);}public function getMain() {return $this->getFirstBy(iMapper::IS_MAIN, true);}}