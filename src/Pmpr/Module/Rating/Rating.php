<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670531a813b00             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Rating\Model\Feedback; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\Rating\Traits\CommonTrait; class Rating extends ComponentInitiator { use CommonTrait; const aiucyqocowoqgciy = "\162\x61\164\151\x6e\x67\137"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x52\x61\164\x69\x6e\147", PR__MDL__RATING); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\x62\x65\x66\x6f\x72\145\137\x65\x6e\161\165\145\x75\145\x5f\x66\162\x6f\x6e\x74\x65\x6e\x64\137\141\163\163\145\164\x73", [$this, "\x65\156\x71\x75\x65\165\x65"]); } public function mameiwsayuyquoeq() { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); Hook::symcgieuakksimmu(); if ($owaoeyikmqaeegma->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->eewqyocggsagyuis()) { Frontend::symcgieuakksimmu(); } if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { Rate::symcgieuakksimmu(); Feedback::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk("\163\164\162\165\143\x74\165\162\145\144\55\x64\x61\x74\141")) { StructuredData::symcgieuakksimmu(); } } public function enqueue() { if ($icwicymcioeyeyek = $this->uiqcwsowwswommka()) { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x66\162\x6f\156\x74", $eygsasmqycagyayw->get("\x66\162\157\156\x74\x2e\152\x73"))->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm)); $eygsasmqycagyayw->iagmuqogkyysiick([Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy, Constants::squoamkioomemiyi => $icwicymcioeyeyek[Constants::squoamkioomemiyi], Constants::eggygikowgywcayq => $icwicymcioeyeyek[Constants::eggygikowgywcayq], Constants::iysmcyukumkiiuik => $this->weysguygiseoukqw(Setting::emymmsaswkougwqo, 1), Constants::eoskkkieowogacws => ["\164\x72\x79\x5f\141\x67\141\151\156" => __("\122\x61\164\145\40\x69\163\x20\x6e\x6f\x74\x20\x72\145\143\157\162\144\x65\144\56\40\x70\154\145\x61\163\145\40\164\162\171\40\x61\147\141\151\x6e\x2e", PR__MDL__RATING)]]); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->awgyqswkqywwmkye("\162\x61\164\x69\x6e\x67")->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x66\162\157\156\x74\56\x63\163\x73"))); } } }
