<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc57a7cb02             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\Rating\Traits\CommonTrait; class Frontend extends Container { use CommonTrait; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\157\155\155\x65\x6e\164\x5f\146\x6f\x72\x6d\137\x62\x65\146\x6f\162\x65", [$this, "\x72\x65\x6e\144\x65\162"]); $this->waqewsckuayqguos(Rating::aiucyqocowoqgciy . "\162\145\x6e\144\x65\x72", [$this, "\162\x65\156\x64\x65\162"]); } public function render() { if ($icwicymcioeyeyek = $this->uiqcwsowwswommka()) { echo $this->wgqqgewcmcemoewo($icwicymcioeyeyek[Constants::eggygikowgywcayq], $icwicymcioeyeyek[Constants::squoamkioomemiyi]); } } public function wgqqgewcmcemoewo($moqewomugocaueis = null, string $sqeykgyoooqysmca = Constants::uouymeyqasaeckso, bool $egcgeqyisgamuamo = false) : string { $qookweymeqawmcwo = ["\x72\145\163\x75\154\164\x5f\155\x61\x73\153" => __("\122\141\164\x69\156\x67\40\101\x76\x65\162\x61\147\145\40\45\x73\40\x6f\146\40\x25\x73\x20\x7c\x20\122\x61\x74\151\156\x67\40\103\157\x75\156\x74\x3a\40\45\163", PR__MDL__RATING)]; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $qqyuqswckkcomeak = $mcieuoqmagekmouk->qooeaookuemoqecm([], $moqewomugocaueis, $sqeykgyoooqysmca); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, Constants::qiyqwyiiwykeccmo); $wiiqgewkwwkaukyo = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, Constants::yewgggaqoacewaai); $qookweymeqawmcwo["\x72\141\164\x69\x6e\147"] = $qqyuqswckkcomeak; if ($egcgeqyisgamuamo) { $eoiqickgueqaoioi = $mcieuoqmagekmouk->gmaiukcusaqugaii($moqewomugocaueis, $sqeykgyoooqysmca); if (!$eoiqickgueqaoioi) { $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, [Constants::qescuiwgsyuikume => __("\x59\x6f\165\x72\40\x6f\160\x69\156\x69\x6f\156\40\151\x73\x20\x69\x6d\160\157\162\164\x61\x6e\x74\x20\x74\157\40\165\x73", PR__MDL__RATING), "\147\165\151\144\x65\137\164\145\170\x74" => sprintf(__("\122\x61\x74\x65\40\x74\x68\151\x73\x20\x70\x6f\163\164\40\45\x73\40\x74\157\x20\x25\163", PR__MDL__RATING), 1, 5)]); } $qookweymeqawmcwo = $this->ocksiywmkyaqseou(Rating::aiucyqocowoqgciy . "\146\x6f\162\155\137\x72\x65\156\x64\x65\x72\137\x70\141\x72\x61\x6d\145\x74\145\x72\163", $qookweymeqawmcwo, $moqewomugocaueis, $sqeykgyoooqysmca); if ($eoiqickgueqaoioi) { $qookweymeqawmcwo["\165\x73\x65\x72\137\162\x61\x74\x65"] = sprintf(__("\131\x6f\165\40\150\x61\166\x65\40\x61\154\162\x65\141\x64\x79\40\x72\x61\164\x65\40\45\163\x20\x74\157\x20\164\150\x69\x73\x20\160\157\x73\x74\x2e", PR__MDL__RATING), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gkyciwoiiisgywcs->get($eoiqickgueqaoioi, Constants::ciyoccqkiamemcmm, 1))); } } if ($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo) { $qookweymeqawmcwo[Constants::syomkiqgogwyuiyw] = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(sprintf($qookweymeqawmcwo["\x72\x65\x73\x75\154\x74\x5f\x6d\141\163\153"], round($wiiqgewkwwkaukyo, 2), 5, (int) $gaeqamemwmwsyukm)); } $qookweymeqawmcwo["\162\145\156\x64\145\x72"] = $egcgeqyisgamuamo; $qookweymeqawmcwo[Constants::squoamkioomemiyi] = $sqeykgyoooqysmca; $qookweymeqawmcwo[Constants::eggygikowgywcayq] = $moqewomugocaueis; $qookweymeqawmcwo["\x72\x61\x74\x69\x6e\x67\x5f\146\x6f\162\155"] = $this->eyguqsskwskmcgsg(); $qookweymeqawmcwo["\146\145\x65\144\x62\x61\143\x6b\x5f\146\x6f\x72\155"] = $this->sskogmsgywqwocqa(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x66\157\162\155", $qookweymeqawmcwo); return $this->ocksiywmkyaqseou(Rating::aiucyqocowoqgciy . "\146\157\162\x6d\x5f\x68\x74\155\154", $nsmgceoqaqogqmuw, $qookweymeqawmcwo); } public function eyguqsskwskmcgsg() : ?string { return $this->iuygowkemiiwqmiw("\162\141\164\151\156\x67", [Constants::NAME => "\162\141\164\151\156\147", "\163\150\x6f\167\137\x6e\x75\x6d\x62\x65\162" => $this->weysguygiseoukqw(Setting::saygqyuqecqmgykw)]); } public function sskogmsgywqwocqa() : ?string { $nsmgceoqaqogqmuw = ''; if ($this->weysguygiseoukqw(Setting::qyusiikocoewiyks)) { $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->uouyygwcgsmygaee("\162\x61\x74\x69\x6e\147\137\x66\145\145\144\x62\141\x63\x6b")->gswweykyogmsyawy(__("\122\141\164\x69\x6e\147\x20\106\145\x65\x64\x62\141\x63\153", PR__MDL__RATING))->kyiucygqsgequoys(__("\124\x65\x78\x74", PR__MDL__RATING)), $gusoaiguqeaommcc->qoeiescseggagsqs("\x72\141\164\151\156\147\x5f\163\165\142\155\151\164")->gswweykyogmsyawy(__("\123\x75\x62\155\151\x74", PR__MDL__RATING))->ooqqgmyocscgmyae()]; $qookweymeqawmcwo = [Constants::kuygeqomywoykkai => $this->weysguygiseoukqw(Setting::yuauwoaimesgouey), Constants::ymckmcsiymwqucoq => $this->ocksiywmkyaqseou(Rating::aiucyqocowoqgciy . "\x66\x65\145\x64\142\141\143\x6b\x5f\146\157\162\x6d\137\146\x69\145\154\144\x73", $ikgwqyuyckaewsow)]; $qookweymeqawmcwo = $this->ocksiywmkyaqseou(Rating::aiucyqocowoqgciy . "\146\145\145\144\142\x61\x63\153\137\x70\141\162\141\x6d\x65\x74\x65\162\163", $qookweymeqawmcwo); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x66\145\145\144\x62\141\143\x6b", $qookweymeqawmcwo); } return $nsmgceoqaqogqmuw; } }
