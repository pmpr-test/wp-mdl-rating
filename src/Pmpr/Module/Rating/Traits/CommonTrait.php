<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d0048595cc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\Rating\Rating; use Pmpr\Module\Rating\Setting; use WP_Post; use WP_Term; trait CommonTrait { public function uiqcwsowwswommka($moqewomugocaueis = null, string $sqeykgyoooqysmca = Constants::uouymeyqasaeckso) { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if (!$moqewomugocaueis) { $mksyucucyswaukig = $mumyimcwkaemyyue->imgymusqgccqsqqq(); $moqewomugocaueis = $mumyimcwkaemyyue->mwyqswsaeeewsosm(); if ($moqewomugocaueis && $mksyucucyswaukig) { if ($mksyucucyswaukig instanceof WP_Post) { $sqeykgyoooqysmca = Constants::uouymeyqasaeckso; } else { if ($mksyucucyswaukig instanceof WP_Term) { $sqeykgyoooqysmca = Constants::gmmygyiecgmggaam; } } } } $cuakwceieagskoaa = false; switch ($sqeykgyoooqysmca) { case Constants::uouymeyqasaeckso: $cuakwceieagskoaa = in_array($seumokooiykcomco->gueasuouwqysmomu($moqewomugocaueis), Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::miemwgakuokqyoqo, []), true); break; case Constants::gmmygyiecgmggaam: $cuakwceieagskoaa = in_array($aoskwucuugeuaeus->yyoeeseewqmmyaee($moqewomugocaueis), Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::isocsewwmygicgqs, []), true); break; } if ($cuakwceieagskoaa) { $cuakwceieagskoaa = [Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::eggygikowgywcayq => $moqewomugocaueis]; } return $this->ocksiywmkyaqseou(Rating::aiucyqocowoqgciy . "\x61\x6c\154\x6f\x77\137\162\145\x6e\x64\x65\x72", $cuakwceieagskoaa, $moqewomugocaueis, $sqeykgyoooqysmca); } }
