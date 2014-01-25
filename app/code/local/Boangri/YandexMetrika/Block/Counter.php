<?php

/**
 * Description of Counter
 *
 * @author Boris.Gribovskiy
 */
class Boangri_YandexMetrika_Block_Counter extends Mage_Core_Block_Template
{
    protected $_counterBody;
    
    public function __construct()
    {
        $this->_counterBody = <<<EOT
<!-- Yandex.Metrika informer -->
<a href="http://metrika.yandex.ru/stat/?id=23733337&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/23733337/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:23733337,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter23733337 = new Ya.Metrika({id:23733337,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/23733337" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->                
EOT;
    
    }
                
    public function getDate()
    {
        $date = date('Y-m-d');
        return urlencode($date);
    }
}
