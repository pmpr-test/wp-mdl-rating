<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d01b99ae0c1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Widget as BaseClass; use Pmpr\Module\Rating\Model\Rate; class Widget extends BaseClass { public function __construct() { parent::__construct(__('Popular Posts', PR__MDL__RATING), __('Display the most popular posts by rating.', PR__MDL__RATING)); } public function ecwgiiuacoaokqkw() { $kuguwoaesuqsqysu = $this->ocksiywmkyaqseou('metadata_items', []); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__('Title', PR__MDL__RATING)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qiyqwyiiwykeccmo)->gswweykyogmsyawy(__('Count', PR__MDL__RATING))->escqqisecooswqgo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::uouymeyqasaeckso)->gswweykyogmsyawy(__('Post Type', PR__MDL__RATING))->acauweqyyugwisqc($this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs])))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ckcuiukmyisueqeo)->gswweykyogmsyawy(__('Metadata', PR__MDL__RATING))->acauweqyyugwisqc($kuguwoaesuqsqysu)->oikgogcweiiaocka()->wywmmeyauqkeskeq(!empty($kuguwoaesuqsqysu)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::kcgwauqkqcyuwwgs)->gswweykyogmsyawy(__('Render Template', PR__MDL__RATING))->acauweqyyugwisqc([Constants::ugmwekegkosuuwii => __('List', PR__MDL__RATING), Constants::ugsuecoyuqcamsac => __('Table', PR__MDL__RATING), Constants::iouekwycqkqiceea => __('Simple List', PR__MDL__RATING)])); } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $wyoiwuqokyeeuguk = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::qiyqwyiiwykeccmo, 5); $useksmwkuswkwcqg = $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::uouymeyqasaeckso, Constants::mswoacegomcucaik); $yemgmmgogcwccuky = []; if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->cukiusasccucgwqc($useksmwkuswkwcqg)) { $yemgmmgogcwccuky[] = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu(); } Rate::symcgieuakksimmu()->syiwgwgkeyykggsy([Constants::uouymeyqasaeckso => $wyoiwuqokyeeuguk, Constants::ccyeycyyykwuymsy => $yemgmmgogcwccuky, Constants::cgiswgcumueqgcmw => $gaeqamemwmwsyukm]); return [Constants::qwumqqyuasyskkkc => $wyoiwuqokyeeuguk, Constants::qescuiwgsyuikume => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::qescuiwgsyuikume), Constants::ckcuiukmyisueqeo => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::ckcuiukmyisueqeo), Constants::okciuaikiyaecwmy => $gkyciwoiiisgywcs->get($owgumcsyqsamiemg, Constants::kcgwauqkqcyuwwgs, Constants::ugmwekegkosuuwii)]; } }
