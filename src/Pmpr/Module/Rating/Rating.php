<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b7499d0e1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Rating\Model\Feedback; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\Rating\Traits\CommonTrait; class Rating extends ComponentInitiator { use CommonTrait; const aiucyqocowoqgciy = "\x72\x61\164\151\156\147\x5f"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\122\141\x74\x69\x6e\147", PR__MDL__RATING); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x62\145\146\157\x72\x65\x5f\145\156\161\x75\145\x75\x65\137\x66\162\x6f\156\x74\x65\156\x64\x5f\x61\163\163\x65\164\163", [$this, "\x65\x6e\161\x75\x65\x75\x65"]); } public function mameiwsayuyquoeq() { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); Hook::symcgieuakksimmu(); if ($owaoeyikmqaeegma->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->syukqeyowauuucwi()) { Frontend::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->awumyiewiaosiyyy()) { Rate::symcgieuakksimmu(); Feedback::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\163\x74\162\x75\143\x74\x75\162\x65\144\x2d\x64\141\164\141")) { StructuredData::symcgieuakksimmu(); } } public function enqueue() { if ($icwicymcioeyeyek = $this->uiqcwsowwswommka()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, "\146\162\x6f\x6e\x74", "\x66\x72\x6f\x6e\164\x2e\x6a\x73")->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm)); $meakksicouekcgoe->qgkgieacuwasgiuy($this, [Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy, Constants::squoamkioomemiyi => $icwicymcioeyeyek[Constants::squoamkioomemiyi], Constants::eggygikowgywcayq => $icwicymcioeyeyek[Constants::eggygikowgywcayq], Constants::iysmcyukumkiiuik => $this->weysguygiseoukqw(Setting::emymmsaswkougwqo, 1), Constants::eoskkkieowogacws => ["\x74\x72\x79\x5f\141\x67\x61\151\156" => __("\x52\141\164\x65\x20\151\x73\40\x6e\x6f\164\40\162\145\x63\x6f\162\144\x65\144\56\x20\x70\154\145\x61\163\x65\40\164\x72\x79\x20\141\x67\141\x69\156\56", PR__MDL__RATING)]]); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->awgyqswkqywwmkye($this, "\162\141\164\151\156\x67")->awagieqcmmwkgwgs($meakksicouekcgoe->souwykwwmyygqyqi($this, "\146\162\157\156\x74\56\143\x73\163"))); } } }
