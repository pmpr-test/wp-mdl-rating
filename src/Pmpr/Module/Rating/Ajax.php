<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801067c5bf9c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Rating\Model\Feedback; use Pmpr\Module\Rating\Model\Rate; use Pmpr\Module\Rating\Traits\CommonTrait; class Ajax extends Container { use CommonTrait; const wiysygukkaksueso = 'pr_rating_'; const aqsucegwkuaccoeg = self::wiysygukkaksueso . 'get_html'; const qekcekwoeqcyokec = self::wiysygukkaksueso . 'feedback_action'; const gsyockcciqweocgq = self::wiysygukkaksueso . 'submission_action'; const myikkigscysoykgy = ['get_html' => self::aqsucegwkuaccoeg, 'submit_rate' => self::gsyockcciqweocgq, 'submit_feedback' => self::qekcekwoeqcyokec]; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::aqsucegwkuaccoeg, [$this, 'wgqqgewcmcemoewo'])->iqkqummseggmikgo(self::gsyockcciqweocgq, [$this, 'ocmicsouockoyaww'])->iqkqummseggmikgo(self::qekcekwoeqcyokec, [$this, 'gayogmswqgoiscsa']); parent::wigskegsqequoeks(); } public function wgqqgewcmcemoewo() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $sqeykgyoooqysmca = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::squoamkioomemiyi); $moqewomugocaueis = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::eggygikowgywcayq, 0); if ($sqeykgyoooqysmca && $moqewomugocaueis && $this->uiqcwsowwswommka($moqewomugocaueis, $sqeykgyoooqysmca)) { $eiicaiwgqkgsekce->uaggqsoeugksgooc(Frontend::symcgieuakksimmu()->wgqqgewcmcemoewo($moqewomugocaueis, $sqeykgyoooqysmca, true)); } } public function seyyiqmgwymyumoq() : array { return $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(), [Constants::squoamkioomemiyi => Constants::uouymeyqasaeckso, Constants::iockmgiyoygcswog => '', Constants::ciyoccqkiamemcmm => '', Constants::uqgcmmosieyimiku => '', Constants::eggygikowgywcayq => '']); } public function ocmicsouockoyaww() { $this->aeaqgysgaeowagug(self::gsyockcciqweocgq); } public function gayogmswqgoiscsa() { $this->aeaqgysgaeowagug(self::qekcekwoeqcyokec); } public function aeaqgysgaeowagug(string $aiamqeawckcsuaou) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $kucumcusyyckayas = $yoiguusocukqeayg->mmscegoieayuaguo(); $miowmmgaiagcuyoo = $yoiguusocukqeayg->kuswmimkgmyuymiu($eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::iockmgiyoygcswog)); $sqeykgyoooqysmca = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::squoamkioomemiyi, Constants::uouymeyqasaeckso); $moqewomugocaueis = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::eggygikowgywcayq); $eqgoocgaqwqcimie = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::ciyoccqkiamemcmm); try { $icwicymcioeyeyek = [Constants::ioksewgkgwwikiwo => esc_sql($kucumcusyyckayas), Constants::squoamkioomemiyi => esc_sql($sqeykgyoooqysmca), Constants::iockmgiyoygcswog => esc_sql($miowmmgaiagcuyoo), Constants::eggygikowgywcayq => esc_sql($moqewomugocaueis)]; switch ($aiamqeawckcsuaou) { case self::qekcekwoeqcyokec: $weokemwsqkosacea = Feedback::symcgieuakksimmu(); if ($this->weysguygiseoukqw(Setting::qyusiikocoewiyks)) { $icwicymcioeyeyek[Constants::TEXT] = $eqgoocgaqwqcimie; $sogksuscggsicmac = $weokemwsqkosacea->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (!is_wp_error($sogksuscggsicmac)) { $occymigcemkqucuw = true; $keccaugmemegoimu = $this->weysguygiseoukqw(Setting::mauaqacuqauecioa); } else { $keccaugmemegoimu = __('Something wrong on save your message.', PR__MDL__RATING); } } else { $keccaugmemegoimu = __('Feedback functionality is not enable.', PR__MDL__RATING); } break; case self::gsyockcciqweocgq: default: $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); if (is_numeric($eqgoocgaqwqcimie) && ($eqgoocgaqwqcimie > 0 && $eqgoocgaqwqcimie < 6) && is_numeric($moqewomugocaueis) && is_numeric($miowmmgaiagcuyoo) && in_array($sqeykgyoooqysmca, [Constants::uouymeyqasaeckso, Constants::gmmygyiecgmggaam], true)) { $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; $ceiwsaacewygcsqg = $mcieuoqmagekmouk->kumuygiiqswoyasy(); if ($wiwomgcsgmawegaw = $mcieuoqmagekmouk->gmaiukcusaqugaii($moqewomugocaueis, $sqeykgyoooqysmca, $miowmmgaiagcuyoo, $kucumcusyyckayas)) { $icwicymcioeyeyek[$ceiwsaacewygcsqg] = $wiwomgcsgmawegaw->{$ceiwsaacewygcsqg}; } $sogksuscggsicmac = $mcieuoqmagekmouk->gssiscqyqsacmeca()->gsegsiocqmsoayii($icwicymcioeyeyek); if (!is_wp_error($sogksuscggsicmac)) { $occymigcemkqucuw = true; $keccaugmemegoimu = $this->weysguygiseoukqw(Setting::aiyeuymiomaukaaa); } else { $keccaugmemegoimu = __('Something wrong on save your rate.', PR__MDL__RATING); } } else { $keccaugmemegoimu = __('Request is not valid, please try again.', PR__MDL__RATING); } break; } } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = __('Can not save your posted data. try latter please.', PR__MDL__RATING); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
