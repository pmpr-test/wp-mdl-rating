<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d0048595cc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\Data\Meta; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Rating\Model\Rate; class Hook extends Container { public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\155\145\164\141\x64\141\x74\x61\137\141\x6c\x6c\137\151\x74\x65\x6d\163", [$this, "\x79\x61\x73\153\171\167\x75\x6b\x61\163\x6b\x73\x6b\x6b\143\x75"])->aqaqisyssqeomwom("\x6d\x65\164\141\x64\x61\x74\141\x5f\163\164\x61\x74\137\147\x65\x74\x5f\x61\154\154\137\x69\164\x65\155\x73", [$this, "\171\x61\x73\153\x79\x77\x75\x6b\141\x73\153\x73\153\153\x63\x75"], 20)->aqaqisyssqeomwom("\x6d\x65\164\141\x64\x61\x74\141\137\165\x70\144\141\164\145\137\162\141\x74\151\156\147", [$this, "\147\163\161\x6f\x73\147\x6d\x79\153\167\147\x63\x71\x67\x79\143"], 10, 2)->aqaqisyssqeomwom("\155\x65\164\x61\x64\141\x74\x61\137\x73\164\x61\x74\x5f\165\x70\144\x61\164\145\x5f\x72\x61\x74\151\x6e\147", [$this, "\163\x6b\165\157\143\x79\x79\171\153\x6f\151\163\167\163\x63\x79"], 10, 2)->aqaqisyssqeomwom(Rating::aiucyqocowoqgciy . "\x67\145\x74\x5f\160\x6f\x73\x74\x73\x5f\142\x79\x5f\x72\141\x74\145", [$this, "\155\x6b\165\157\x75\x6f\157\157\141\x63\x67\171\147\143\x6f\x67"], 10, 2)->aqaqisyssqeomwom(Rating::aiucyqocowoqgciy . "\147\x65\x74\x5f\160\x6f\160\x75\x6c\141\x72\x5f\x70\157\x73\164\x73", [$this, "\155\153\165\x6f\x75\157\157\x6f\x61\x63\x67\x79\x67\143\157\147"], 10, 2); } public function yaskywukaskskkcu($ooiewiwkegguusum = []) : array { $ooiewiwkegguusum["\162\x61\164\x69\156\x67"] = __("\122\x61\164\x69\x6e\x67", PR__MDL__RATING); return $ooiewiwkegguusum; } public function gsqosgmykwgcqgyc($ugugimquukqwogge, $post) { if ($ugugimquukqwogge instanceof Metadata) { $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qqyuqswckkcomeak = $mcieuoqmagekmouk->qooeaookuemoqecm([], $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, Constants::qiyqwyiiwykeccmo); $wiiqgewkwwkaukyo = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, Constants::yewgggaqoacewaai); if ($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo) { $qqyuqswckkcomeak = sprintf(__("\45\x73\40\157\x66\40\x25\163\40\x25\163", PR__MDL__RATING), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($wiiqgewkwwkaukyo), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(5), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei("\x28{$this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm)}\51", ["\143\154\x61\x73\163" => "\155\162\55\x31"])); $ugugimquukqwogge->jyumyyugiwwiqomk(999)->iygyugseyaqwywyg($qqyuqswckkcomeak)->saemoowcasogykak(IconInterface::asaomwmaicuoeekg); } } return $ugugimquukqwogge; } public function skuocyyykoiswscy($awmkgwkewqigsgsg, $useksmwkuswkwcqg = Constants::mswoacegomcucaik) { if ($awmkgwkewqigsgsg instanceof Meta) { $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qqyuqswckkcomeak = $mcieuoqmagekmouk->wmuimigkswkqsgmi($useksmwkuswkwcqg); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, Constants::qiyqwyiiwykeccmo); $wiiqgewkwwkaukyo = $gkyciwoiiisgywcs->get($qqyuqswckkcomeak, Constants::yewgggaqoacewaai); if ($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo) { $awmkgwkewqigsgsg->saemoowcasogykak(IconInterface::wieeamqomamwgucs)->iygyugseyaqwywyg(round($wiiqgewkwwkaukyo, 1))->jyumyyugiwwiqomk(999); } } return $awmkgwkewqigsgsg; } public function mkuouoooacgygcog(array $wyoiwuqokyeeuguk = [], array $ywmkwiwkosakssii = []) : array { return Rate::symcgieuakksimmu()->syiwgwgkeyykggsy($ywmkwiwkosakssii); } }
