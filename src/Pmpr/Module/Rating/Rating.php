<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d0191765411             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Rating\Model\Feedback; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\Rating\Traits\CommonTrait; class Rating extends ComponentInitiator { use CommonTrait; const aiucyqocowoqgciy = 'rating_'; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Rating', PR__MDL__RATING); }, Constants::sguyaymiiiiewame => Setting::class]); } public function wigskegsqequoeks() { $this->waqewsckuayqguos('before_enqueue_frontend_assets', [$this, 'enqueue']); } public function mameiwsayuyquoeq() { $owaoeyikmqaeegma = $this->caokeucsksukesyo()->owicscwgeuqcqaig(); Hook::symcgieuakksimmu(); if ($owaoeyikmqaeegma->mcgoysmkqsqooceq(Ajax::wiysygukkaksueso)) { Ajax::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->syukqeyowauuucwi()) { Frontend::symcgieuakksimmu(); } if ($owaoeyikmqaeegma->awumyiewiaosiyyy()) { Rate::symcgieuakksimmu(); Feedback::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk('structured-data')) { StructuredData::symcgieuakksimmu(); } } public function enqueue() { if ($icwicymcioeyeyek = $this->uiqcwsowwswommka()) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'front', 'front.js')->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm)); $meakksicouekcgoe->qgkgieacuwasgiuy($this, [Constants::wyucqaeuuqkesque => Ajax::myikkigscysoykgy, Constants::squoamkioomemiyi => $icwicymcioeyeyek[Constants::squoamkioomemiyi], Constants::eggygikowgywcayq => $icwicymcioeyeyek[Constants::eggygikowgywcayq], Constants::iysmcyukumkiiuik => $this->weysguygiseoukqw(Setting::emymmsaswkougwqo, 1), Constants::eoskkkieowogacws => ['try_again' => __('Rate is not recorded. please try again.', PR__MDL__RATING)]]); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->awgyqswkqywwmkye($this, 'rating')->awagieqcmmwkgwgs($meakksicouekcgoe->souwykwwmyygqyqi($this, 'front.css'))); } } }
