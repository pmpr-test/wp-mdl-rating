<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4b41c3e94             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\Rating\Traits\CommonTrait; class Frontend extends Container { use CommonTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\x6f\155\155\145\156\x74\x5f\x66\157\x72\155\137\x62\145\x66\x6f\162\x65", [$this, "\162\x65\x6e\x64\x65\x72"]); $this->waqewsckuayqguos(Rating::aiucyqocowoqgciy . "\162\x65\156\144\x65\x72", [$this, "\162\145\x6e\144\145\162"]); } public function render() { if ($icwicymcioeyeyek = $this->uiqcwsowwswommka()) { echo $this->wgqqgewcmcemoewo($icwicymcioeyeyek[Constants::eggygikowgywcayq], $icwicymcioeyeyek[Constants::squoamkioomemiyi]); } } public function wgqqgewcmcemoewo($moqewomugocaueis = null, string $sqeykgyoooqysmca = Constants::uouymeyqasaeckso, bool $egcgeqyisgamuamo = false) : string { $qookweymeqawmcwo = ["\x72\145\163\x75\x6c\x74\x5f\x6d\x61\x73\153" => __("\x52\x61\x74\x69\156\147\40\x41\166\x65\x72\141\147\x65\40\x25\163\x20\x6f\x66\40\45\163\40\174\x20\122\141\164\x69\x6e\x67\x20\103\x6f\165\x6e\164\x3a\x20\45\x73", PR__MDL__RATING)]; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $qqyuqswckkcomeak = $mcieuoqmagekmouk->qooeaookuemoqecm([], $moqewomugocaueis, $sqeykgyoooqysmca); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, Constants::qiyqwyiiwykeccmo); $wiiqgewkwwkaukyo = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, Constants::yewgggaqoacewaai); $qookweymeqawmcwo["\x72\141\164\x69\x6e\x67"] = $qqyuqswckkcomeak; if ($egcgeqyisgamuamo) { $eoiqickgueqaoioi = $mcieuoqmagekmouk->gmaiukcusaqugaii($moqewomugocaueis, $sqeykgyoooqysmca); if (!$eoiqickgueqaoioi) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, [Constants::qescuiwgsyuikume => __("\x59\x6f\165\162\40\157\x70\151\156\151\x6f\156\40\151\163\40\x69\x6d\x70\x6f\x72\x74\141\156\x74\x20\164\x6f\x20\x75\x73", PR__MDL__RATING), "\147\165\x69\x64\145\x5f\x74\145\x78\164" => sprintf(__("\122\141\x74\x65\x20\164\x68\x69\x73\40\160\x6f\x73\164\x20\x25\163\x20\x74\157\x20\45\x73", PR__MDL__RATING), 1, 5)]); } $qookweymeqawmcwo = $this->ocksiywmkyaqseou(Rating::aiucyqocowoqgciy . "\x66\157\162\155\x5f\162\x65\x6e\144\145\x72\137\x70\x61\162\141\155\145\x74\x65\162\163", $qookweymeqawmcwo, $moqewomugocaueis, $sqeykgyoooqysmca); if ($eoiqickgueqaoioi) { $qookweymeqawmcwo["\x75\163\145\x72\137\x72\141\164\x65"] = sprintf(__("\x59\157\165\40\150\x61\x76\145\x20\141\154\x72\145\141\144\x79\40\162\x61\x74\145\40\45\163\x20\x74\157\40\x74\150\151\x73\40\160\x6f\x73\164\x2e", PR__MDL__RATING), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gkyciwoiiisgywcs->get($eoiqickgueqaoioi, Constants::ciyoccqkiamemcmm, 1))); } } if ($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo) { $qookweymeqawmcwo[Constants::syomkiqgogwyuiyw] = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(sprintf($qookweymeqawmcwo["\x72\145\x73\165\x6c\164\137\155\141\163\153"], round($wiiqgewkwwkaukyo, 2), 5, (int) $gaeqamemwmwsyukm)); } $qookweymeqawmcwo["\162\x65\x6e\x64\145\x72"] = $egcgeqyisgamuamo; $qookweymeqawmcwo[Constants::squoamkioomemiyi] = $sqeykgyoooqysmca; $qookweymeqawmcwo[Constants::eggygikowgywcayq] = $moqewomugocaueis; $qookweymeqawmcwo["\x72\x61\164\151\156\147\x5f\x66\x6f\162\155"] = $this->eyguqsskwskmcgsg(); $qookweymeqawmcwo["\146\145\x65\x64\x62\141\143\153\137\x66\157\162\155"] = $this->sskogmsgywqwocqa(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\146\157\x72\155", $qookweymeqawmcwo); return $this->ocksiywmkyaqseou(Rating::aiucyqocowoqgciy . "\x66\157\x72\x6d\x5f\150\x74\155\x6c", $nsmgceoqaqogqmuw, $qookweymeqawmcwo); } public function eyguqsskwskmcgsg() : ?string { return $this->iuygowkemiiwqmiw("\162\141\x74\151\x6e\x67", [Constants::NAME => "\x72\141\164\151\x6e\x67", "\x73\x68\157\x77\137\x6e\x75\155\x62\145\x72" => $this->weysguygiseoukqw(Setting::saygqyuqecqmgykw)]); } public function sskogmsgywqwocqa() : ?string { $nsmgceoqaqogqmuw = ''; if ($this->weysguygiseoukqw(Setting::qyusiikocoewiyks)) { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->uouyygwcgsmygaee("\x72\x61\x74\x69\156\147\137\146\x65\145\x64\x62\141\143\153")->gswweykyogmsyawy(__("\122\x61\164\x69\156\x67\40\x46\145\145\144\x62\x61\143\153", PR__MDL__RATING))->kyiucygqsgequoys(__("\x54\145\170\164", PR__MDL__RATING)), $gusoaiguqeaommcc->qoeiescseggagsqs("\x72\141\x74\151\156\147\137\163\x75\142\x6d\151\164")->gswweykyogmsyawy(__("\123\x75\142\x6d\151\x74", PR__MDL__RATING))->ooqqgmyocscgmyae()]; $qookweymeqawmcwo = [Constants::kuygeqomywoykkai => $this->weysguygiseoukqw(Setting::yuauwoaimesgouey), Constants::ymckmcsiymwqucoq => $this->ocksiywmkyaqseou(Rating::aiucyqocowoqgciy . "\146\x65\145\x64\142\x61\143\153\x5f\146\157\x72\x6d\x5f\146\151\145\x6c\144\163", $ikgwqyuyckaewsow)]; $qookweymeqawmcwo = $this->ocksiywmkyaqseou(Rating::aiucyqocowoqgciy . "\x66\x65\145\144\x62\x61\143\x6b\137\160\141\x72\x61\x6d\145\164\145\x72\x73", $qookweymeqawmcwo); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x66\x65\x65\144\142\x61\143\153", $qookweymeqawmcwo); } return $nsmgceoqaqogqmuw; } }
