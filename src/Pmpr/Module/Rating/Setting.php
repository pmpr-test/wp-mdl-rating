<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d0191765411             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Rating; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Setting extends BaseClass { const aiyeuymiomaukaaa = 'thanks_message'; const emymmsaswkougwqo = 'worse_threshold'; const qyusiikocoewiyks = Constants::iccwcygaeqmomooo . '_feedback'; const mauaqacuqauecioa = 'feedback_message'; const yuauwoaimesgouey = 'feedback_question'; const saygqyuqecqmgykw = 'show_number_in_star'; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->igiywquyccyiaucw(Constants::qoquaeuooeycomks, $this->mwikyscisascoeea()); } public function wyyuauosmqoeucmg() { $this->title = __('Rating Setting', PR__MDL__RATING); $this->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, __('Setting', PR__MDL__RATING)); } public function ykwqaukkycogooii() { $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg('rate')->gswweykyogmsyawy(__('Rate', PR__MDL__RATING))->saemoowcasogykak(IconInterface::wikauwmckmkcemco)->gucwmccyimoagwcm(__('Rate Configuration', PR__MDL__RATING))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam('configuration')->saemoowcasogykak(IconInterface::isscgcamsuaqwwkc)->gswweykyogmsyawy(__('Configuration', PR__MDL__RATING))->mkksewyosgeumwsa($this->mccagaqeagiikkec(Constants::miemwgakuokqyoqo)->gswweykyogmsyawy(__('Target Post Types', PR__MDL__RATING))->acauweqyyugwisqc($this->caokeucsksukesyo()->gscioiumssogceuc()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]))->oikgogcweiiaocka())->mkksewyosgeumwsa($this->mccagaqeagiikkec(Constants::isocsewwmygicgqs)->gswweykyogmsyawy(__('Target Taxonomies', PR__MDL__RATING))->acauweqyyugwisqc($this->caokeucsksukesyo()->yyoeeseewqmmyaee()->ciugwooasaqcywas([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]))->oikgogcweiiaocka())->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::saygqyuqecqmgykw)->gswweykyogmsyawy(__('Show Number in Stars', PR__MDL__RATING))->gucwmccyimoagwcm(__('Check this option if you want show number of rate in rating stars.', PR__MDL__RATING)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::aiyeuymiomaukaaa)->qsecygiycssgacqs(3)->gsomueooycksswcy()->gswweykyogmsyawy(__('Thanks Message', PR__MDL__RATING))->eyygsasuqmommkua(__('Thanks for your rating.', PR__MDL__RATING)))))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg('feedback')->gswweykyogmsyawy(__('Feedback', PR__MDL__RATING))->saemoowcasogykak(IconInterface::qmowyycmkagomiiy)->gucwmccyimoagwcm(__('Feedback Configuration', PR__MDL__RATING))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam('configuration')->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__('Configuration', PR__MDL__RATING))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::qyusiikocoewiyks)->gswweykyogmsyawy(__('Enable Feedback', PR__MDL__RATING))->agywyaaquwawwuiy([self::emymmsaswkougwqo, self::mauaqacuqauecioa, self::yuauwoaimesgouey]))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::emymmsaswkougwqo)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Worse Threshold', PR__MDL__RATING))->eyygsasuqmommkua(1)->acauweqyyugwisqc($this->caokeucsksukesyo()->iyowqkwcwiuccgag()->ywqgcuymeiswqyqc(1, 5))->gucwmccyimoagwcm(__('Ask a feedback question, if user rate less than threshold.', PR__MDL__RATING)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::yuauwoaimesgouey)->qsecygiycssgacqs(3)->gsomueooycksswcy()->gswweykyogmsyawy(__('Feedback Question', PR__MDL__RATING))->eyygsasuqmommkua(__('Share the reason behind this submission with us.', PR__MDL__RATING)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::mauaqacuqauecioa)->qsecygiycssgacqs(3)->gsomueooycksswcy()->gswweykyogmsyawy(__('Feedback Message', PR__MDL__RATING))->eyygsasuqmommkua(__('Thanks for your feedback.', PR__MDL__RATING))))); parent::ykwqaukkycogooii(); } }
