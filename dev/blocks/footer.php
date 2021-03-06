<?php include($root."blocks/callback.php"); ?>

<footer style="margin-top:15px">
  <div class="container">
  <div class="row">
    <div class="logo-bottom"><img src="/img/logo2.jpg" alt="Ключ 585"></div>
    <div class="footer-content">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <span class="zag">Строительство</span>
        <ul>
          <li><a href="/dachnyie-domiki/">Дачные домики</a></li>
          <li><a href="/bani/">Бани</a></li>
          <li><a href="/sruby/">Срубы</a></li>
          <li><a href="/fundament/">Фундамент</a></li>
          <li><a href="/bytovki/">Бытовки</a></li>
          <li><a href="/sadovyie-postroyki/">Садовые постройки</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <span class="zag">Пиломатериалы</span>
        <ul>
          <li><a href="#">Брус</a></li>
          <li><a href="#">Доска обрезная</a></li>
          <li><a href="#">Рейка</a></li>
          <li><a href="#">Вагонка</a></li>
          <li><a href="/polovaya-doska/">Доска пола</a></li>
          <li><a href="#">Блок-хаус</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <span class="zag">О компании</span>
        <ul>
          <li><a href="/aktsii/">Акции</a></li>
          <li><a href="/uslugi/">Услуги</a></li>
          <li><a href="/otzyivyi-pokupateley/">Отзывы</a></li>
          <li><a href="/fotogallery/">Фотогалерея</a></li>
          <li><a href="/prays-list/">Прайс-лист</a></li>
          <li><a href="/contacts/">Контакты</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" itemscope itemtype="http://schema.org/LocalBusiness"> <span class="zag">Контакты</span>
        <ul style="padding-bottom:5px; margin-bottom:0px">
          <li><span itemprop="name">«Ключ 585»</span></li>
        <?php
        // 7411ca86eb4fbafe8cfda550e6865cfe //
        require_once(dirname(__FILE__) . '/../refer/functions.php');
        $phone = getPhone();
        $phoneSystem = getPhoneSystem($phone);
        $phoneCode = getPhoneCode($phone);
        $phoneNumber = getPhoneNumber($phone);
        //var_dump($phone);
        //var_dump($phoneSystem);
        //var_dump($phoneCode);
        //var_dump($phoneNumber);
        ?>
          <li><span itemprop="telephone">+7(<?php echo $phoneCode; ?>)<?php echo $phoneNumber; ?></span></li>
          <li><span itemprop="email">info@kluch585.ru</span></li>
          <li><a href="https://plus.google.com/b/110824236111847007584" rel="publisher">Мы в Google+</a></li>
        </ul>
        <span class="zag">Адрес офиса продаж</span>
        <ul style="padding-top:5px; margin-bottom:0px" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <li><span itemprop="postalCode">600014</span>, г. <span itemprop="addressRegion">Владимир</span>, <span itemprop="streetAddress">ул. Лакина, д.4</span></li>

          <li>Часы работы: пн-пт: 8:00-18:00, сб.9:00-15:00, вс.- выходной</li>
        </ul>

      </div>
    </div>
  </div>
  <!--container-->

  <div>
    <div class="container content-bottom">
      <div class="row"> © 2007–2015  ЗАО «Агро-Оптим» ОГРН: 1023301953344 ИНН/КПП 3315007157/331501001 <a style="margin-left:15px; color:#333333; text-decoration:underline" href="http://www.creative-seo.ru/" target="_blank" rel="nofollow">Создание и продвижение сайта</a> <img src="/img/logo-creative.png" alt="Создание и продвижение сайта" width="120">
      <!-- Yandex.Metrika informer --><a href="https://metrika.yandex.ru/stat/?id=21486487&amp;from=informer" target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/21486487/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:21486487,lang:'ru'});return false}catch(e){}"/></a><!-- /Yandex.Metrika informer --><!-- Yandex.Metrika counter --><noscript><div><img src="//mc.yandex.ru/watch/21486487" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
      </div>
    </div>
    <!--container-->
  </div>
  <!--content-bottom-->
 </div>
</footer>

<a href="#" class="scrollUpButton"><i class="fa fa-chevron-up fa-2x"></i></a>
<script>
(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter21486487 = new Ya.Metrika({id:21486487, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");
</script>

<script>
var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="http://fonts.googleapis.com/css?family=Open+Sans:300&subset=latin,cyrillic";document.getElementsByTagName("head")[0].appendChild(ms);
var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/css/bootstrap.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/css/font-awesome.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/css/jquery.fancybox.css";document.getElementsByTagName("head")[0].appendChild(ms);
var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/css/jquery.fancybox-thumbs.css";document.getElementsByTagName("head")[0].appendChild(ms);
var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/css/style.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>

<script>
var scr = {"scripts":[{"src" : "/js/jquery-2.1.1.min.js", "async" : false},
{"src" : "/js/jquery.mobile.custom.min.js", "async" : false},
{"src" : "/js/jquery.fancybox.pack.js", "async" : false},
{"src" : "/js/jquery.fancybox-thumbs.js", "async" : false},
{"src" : "/js/blocksit.min.js", "async" : false},
{"src" : "/js/main.js", "async" : false},
{"src" : "/js/bootstrap.min.js", "async" : false},
{"src" : "/js/callback.js", "async" : false},
{"src" : "/js/jquery.maskedinput.min.js", "async" : false},
{"src" : "/js/jquery.stickyheader.js", "async" : false},
{"src" : "/js/jquery.ba-throttle-debounce.min.js", "async" : false},
{"src" : "/js/common.js", "async" : false},]};
!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);</script>

 <script>   
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-58917038-1', 'auto');ga('send', 'pageview');
</script>
 <!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'cigYeBitsb';var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();
</script>
<!-- {/literal} END JIVOSITE CODE -->
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css" media="print" id="print"></style>

</body>
</html>