<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716d99605ef0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Rating\Model\Feedback; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\Rating\Traits\CommonTrait; class Rating extends ComponentInitiator { use CommonTrait; const aiucyqocowoqgciy = "\x72\x61\164\151\156\147\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\122\141\164\151\156\x67", PR__MDL__RATING); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\142\x65\146\157\x72\145\x5f\145\156\x71\x75\x65\x75\x65\x5f\146\x72\157\x6e\164\x65\156\144\x5f\141\163\163\x65\164\163", [$this, "\145\156\161\165\145\x75\x65"]); } public function mameiwsayuyquoeq() { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); Hook::symcgieuakksimmu(); if ($owaoeyikmqaeegma->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->syukqeyowauuucwi()) { Frontend::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->awumyiewiaosiyyy()) { Rate::symcgieuakksimmu(); Feedback::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\x73\x74\162\x75\x63\x74\x75\x72\145\x64\x2d\x64\141\164\x61")) { StructuredData::symcgieuakksimmu(); } } public function enqueue() { if ($icwicymcioeyeyek = $this->uiqcwsowwswommka()) { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\146\162\157\x6e\164", $eygsasmqycagyayw->get("\146\x72\157\x6e\164\x2e\x6a\163"))->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm)); $eygsasmqycagyayw->iagmuqogkyysiick([Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy, Constants::squoamkioomemiyi => $icwicymcioeyeyek[Constants::squoamkioomemiyi], Constants::eggygikowgywcayq => $icwicymcioeyeyek[Constants::eggygikowgywcayq], Constants::iysmcyukumkiiuik => $this->weysguygiseoukqw(Setting::emymmsaswkougwqo, 1), Constants::eoskkkieowogacws => ["\x74\162\x79\137\x61\147\141\x69\x6e" => __("\122\x61\164\145\40\x69\x73\x20\x6e\x6f\x74\40\162\145\143\157\162\144\x65\144\x2e\40\160\154\145\141\163\x65\40\x74\162\171\40\141\147\141\151\156\x2e", PR__MDL__RATING)]]); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\x72\x61\164\151\156\147")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\146\x72\157\x6e\x74\x2e\143\163\x73"))); } } }
