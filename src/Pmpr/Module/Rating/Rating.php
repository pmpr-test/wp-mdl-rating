<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67705da89262b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Rating\Model\Feedback; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\Rating\Traits\CommonTrait; class Rating extends ComponentInitiator { use CommonTrait; const aiucyqocowoqgciy = "\x72\141\164\151\156\x67\x5f"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\122\x61\164\x69\156\147", PR__MDL__RATING); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\145\x66\157\162\145\137\x65\156\x71\165\145\165\145\x5f\146\x72\x6f\156\x74\145\x6e\144\x5f\141\163\163\145\x74\163", [$this, "\145\x6e\161\x75\145\165\145"]); } public function mameiwsayuyquoeq() { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); Hook::symcgieuakksimmu(); if ($owaoeyikmqaeegma->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->syukqeyowauuucwi()) { Frontend::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->awumyiewiaosiyyy()) { Rate::symcgieuakksimmu(); Feedback::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\x73\x74\162\x75\143\x74\x75\x72\x65\x64\55\x64\x61\164\x61")) { StructuredData::symcgieuakksimmu(); } } public function enqueue() { if ($icwicymcioeyeyek = $this->uiqcwsowwswommka()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, "\x66\162\157\156\164", "\146\162\157\x6e\x74\56\152\163")->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm)); $meakksicouekcgoe->qgkgieacuwasgiuy($this, [Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy, Constants::squoamkioomemiyi => $icwicymcioeyeyek[Constants::squoamkioomemiyi], Constants::eggygikowgywcayq => $icwicymcioeyeyek[Constants::eggygikowgywcayq], Constants::iysmcyukumkiiuik => $this->weysguygiseoukqw(Setting::emymmsaswkougwqo, 1), Constants::eoskkkieowogacws => ["\x74\162\x79\137\x61\x67\x61\x69\156" => __("\x52\141\164\145\40\x69\x73\x20\x6e\157\x74\40\162\x65\143\x6f\162\x64\145\x64\56\40\160\154\145\141\163\145\x20\164\x72\171\40\x61\147\x61\151\156\x2e", PR__MDL__RATING)]]); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->awgyqswkqywwmkye($this, "\x72\x61\164\151\156\147")->awagieqcmmwkgwgs($meakksicouekcgoe->souwykwwmyygqyqi($this, "\146\x72\x6f\x6e\x74\56\x63\x73\x73"))); } } }
