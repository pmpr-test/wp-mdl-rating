<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801067c5bf9c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\Rating\Traits\CommonTrait; use Pmpr\Module\StructuredData\AbstractStructuredData; use Pmpr\Module\StructuredData\Schema\CreativeWork\CreativeWorkSeries; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\AggregateRating; class StructuredData extends AbstractStructuredData { use CommonTrait; public function cquokmemekqqywgi() { if ($icwicymcioeyeyek = $this->uiqcwsowwswommka()) { $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $sqeykgyoooqysmca = $icwicymcioeyeyek[Constants::squoamkioomemiyi]; $moqewomugocaueis = $icwicymcioeyeyek[Constants::eggygikowgywcayq]; $qqyuqswckkcomeak = $mcieuoqmagekmouk->yumiigommgsksqsu($moqewomugocaueis, $sqeykgyoooqysmca); if (isset($qqyuqswckkcomeak[Constants::qiyqwyiiwykeccmo], $qqyuqswckkcomeak[Constants::yewgggaqoacewaai]) && $qqyuqswckkcomeak[Constants::qiyqwyiiwykeccmo] > 0) { $meqocwsecsywiiqs = ''; switch ($sqeykgyoooqysmca) { case Constants::uouymeyqasaeckso: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($moqewomugocaueis); break; case Constants::gmmygyiecgmggaam: $meqocwsecsywiiqs = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qcgakseyaikigqco($moqewomugocaueis); break; } $gioqymmeummmwgkc = $this->qukwsgoewmiomios(); $aaqqkgyougeiueyq = new CreativeWorkSeries(); $wswgiksuuywiiaac = new AggregateRating(); $aaqqkgyougeiueyq->usuqmwksoeaayaig($meqocwsecsywiiqs)->nsqwikmawcqqyayk($wswgiksuuywiiaac->aqgscesisoeawose($qqyuqswckkcomeak[Constants::qiyqwyiiwykeccmo])->squsoiakemiuoouq($qqyuqswckkcomeak[Constants::yewgggaqoacewaai])->xauiwawimomcgksy($gioqymmeummmwgkc->cmkamqgimsaseogs($wswgiksuuywiiaac, $sqeykgyoooqysmca, $moqewomugocaueis)))->xauiwawimomcgksy($gioqymmeummmwgkc->cmkamqgimsaseogs($aaqqkgyougeiueyq, $sqeykgyoooqysmca, $moqewomugocaueis)); $this->yuaukuikuewwqumk($aaqqkgyougeiueyq); } } } }
