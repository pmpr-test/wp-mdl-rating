<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705178ce57e6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\Rating\Traits\CommonTrait; use Pmpr\Module\StructuredData\AbstractStructuredData; use Pmpr\Module\StructuredData\Schema\CreativeWork\CreativeWorkSeries; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; class StructuredData extends AbstractStructuredData { use CommonTrait; public function cquokmemekqqywgi() { if (!($icwicymcioeyeyek = $this->uiqcwsowwswommka())) { goto cggowoquuiwqkyew; } $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $sqeykgyoooqysmca = $icwicymcioeyeyek[Constants::squoamkioomemiyi]; $moqewomugocaueis = $icwicymcioeyeyek[Constants::eggygikowgywcayq]; $qqyuqswckkcomeak = $mcieuoqmagekmouk->yumiigommgsksqsu($moqewomugocaueis, $sqeykgyoooqysmca); if (!isset($qqyuqswckkcomeak[Constants::qiyqwyiiwykeccmo], $qqyuqswckkcomeak[Constants::yewgggaqoacewaai])) { goto uukumskkeggaowck; } $meqocwsecsywiiqs = ''; switch ($sqeykgyoooqysmca) { case Constants::uouymeyqasaeckso: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($moqewomugocaueis); goto sqiciiuwmykocycc; case Constants::gmmygyiecgmggaam: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qcgakseyaikigqco($moqewomugocaueis); goto sqiciiuwmykocycc; } eequksumcoogyoem: sqiciiuwmykocycc: $ksoygooogqsikqmw = (new CreativeWorkSeries())->usuqmwksoeaayaig($meqocwsecsywiiqs)->nsqwikmawcqqyayk((new AggregateRating())->oyigwesguooeqkmo(5)->agumqmayuckgugae(0)->aqgscesisoeawose($qqyuqswckkcomeak[Constants::qiyqwyiiwykeccmo])->squsoiakemiuoouq($qqyuqswckkcomeak[Constants::yewgggaqoacewaai])); $this->yuaukuikuewwqumk($ksoygooogqsikqmw); uukumskkeggaowck: cggowoquuiwqkyew: } }
