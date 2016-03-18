<?php session_start();
$site_url = 'http://autoslon.com/';
if (array_key_exists('utm_source', $_GET)) {
  if (strpos($site_url, $_GET['utm_source'])===false) {
    $_SESSION['sourse'] = $_GET['utm_source'];
  }
  if (strpos($site_url, $_GET['utm_term'])===false) {
    $_SESSION['term'] = $_GET['utm_term'];
  }
  if (strpos($site_url, $_GET['utm_campaign'])===false) {
    $_SESSION['campaign'] = $_GET['utm_campaign'];
  }
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Авто Слон</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=1100">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="js/libs/jquery-ui/jquery-ui.min.css">
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/owl.carousel.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="js/libs/slick/slick.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="js/libs/slick/slick-theme.css" media="screen" title="no title" charset="utf-8">
  <script src="js/libs/jquery.min.js"></script>
  <script src="js/libs/jquery-ui/jquery-ui.min.js"></script>
  <script src="js/libs/maskedinput.min.js"></script>
  <script src="js/libs/validate/jquery.validate.min.js"></script>
  <script src="js/libs/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/tabs.js"></script>
  <script src="js/libs/owl.carousel.js"></script>
  <script src="js/libs/slick/slick.min.js"></script>
</head>

<body>
<!-- Google Tag Manager -->
<script>dataLayer = [];</script>
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W8SWJB"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-W8SWJB');</script>
<!-- End Google Tag Manager -->
  <section class="wrapper header__wrapper">
    <header class="inner header">
      <span class="header__phone">
        Работаем без выходных
        <a class="header__link" href="tel:+380504778070">+3 8(050) 477-80-70 </a>
        <a class="header__link" href="tel:+380675757275">+3 8(067) 57-57-275 </a>
      </span>
      <div class="header__buttonbox" tabindex="1">
        <div class="header__buttonbox__button" data-input="Хедер-заказать звонок"  data-init="modal" data-modal="#callback-modal">
          Заказать звонок
        </div>
        Доставка по Украине 2 дня
      </div>
      <div class="header__logo">
        <img src="img/logo.png" alt="El Auto">
        <p>Авточехлы для любых авто</p>
      </div>
    </header>
  </section>

  <section class="wrapper scr-i__wrapper">
    <div class="inner scr-i">
      <span class="scr-i__title">
        Выберите авточехлы<br> для своей марки авто<br> за 5 минут
      </span>
      <span class="scr-i__subtitle">
        и уже завтра мы их вам доставим<br>
        <p>БЕСПЛАТНО</p>
        в любую точку Украины
      </span>
      <div class="scr-i__form-wrapper">
        <div class="scr-i__form-content">
          <span class="scr-i__form-title">
            Подбор авточехлов в 1 клик
          </span>
          <div class="scr-i__form">
            <form  action="sendmessage.php" id="form-1" method="POST">
              <div class="scr-i__input-wrapper">
                <input type="text" class="scr-i__input" placeholder="Введите марку авто" name="auto">
              </div>
              <div class="scr-i__input-wrapper">
                <input type="text" class="scr-i__input" placeholder="Введите телефон" name="phone">
              </div>
              <div class="scr-i__input-wrapper">
                <button class="scr-i__button" type="submit" data-content="Подобрать"></button>
              </div>
              <input type="hidden" value="/podbor-v-odin-klik.html" name="htmlData">
              <div class="scr-i__descr">
                предложим до 7 вариантов по цене и материалу
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="scr-i__fichesBox">
        <div class="item">
          <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 489.883 489.883" style="enable-background:new 0 0 489.883 489.883;" xml:space="preserve">
<g>
	<path d="M486.808,363.353l-73.415-73.418c3.164-8.944,2.168-18.749,1.257-27.57c-0.7-6.777-1.361-13.179-0.118-17.832
		c1.15-4.303,4.813-9.333,8.691-14.658c6.342-8.707,13.53-18.576,13.53-30.783c0-12.208-7.188-22.076-13.53-30.783
		c-3.878-5.325-7.542-10.354-8.691-14.658c-1.244-4.652-0.582-11.055,0.118-17.833c1.088-10.529,2.321-22.463-3.578-32.658
		c-5.98-10.337-17.025-15.248-26.769-19.581c-6.146-2.733-11.952-5.315-15.243-8.606c-3.292-3.292-5.873-9.097-8.606-15.244
		c-4.332-9.744-9.244-20.788-19.581-26.768c-5.299-3.067-11.426-4.495-19.28-4.495c-4.508,0-9.017,0.466-13.377,0.917
		c-4.04,0.417-7.855,0.812-11.339,0.812c-2.624,0-4.748-0.227-6.494-0.694c-4.304-1.15-9.333-4.813-14.658-8.691
		c-8.707-6.341-18.576-13.529-30.783-13.529c-12.207,0-22.076,7.188-30.783,13.529c-5.325,3.878-10.354,7.542-14.659,8.691
		c-1.746,0.467-3.87,0.694-6.493,0.694c-3.485,0-7.3-0.395-11.34-0.812c-4.36-0.451-8.869-0.917-13.378-0.917
		c-7.854,0-13.98,1.428-19.278,4.494c-10.338,5.98-15.249,17.025-19.582,26.77c-2.733,6.146-5.315,11.951-8.605,15.243
		c-3.292,3.292-9.098,5.873-15.244,8.607c-9.744,4.332-20.788,9.243-26.77,19.581c-5.898,10.194-4.665,22.128-3.578,32.657
		c0.7,6.778,1.362,13.181,0.118,17.833c-1.15,4.304-4.813,9.333-8.691,14.658c-6.341,8.707-13.529,18.575-13.529,30.783
		c0,12.208,7.188,22.076,13.529,30.783c3.878,5.325,7.541,10.355,8.691,14.659c1.244,4.652,0.582,11.054-0.118,17.832
		c-0.912,8.821-1.908,18.625,1.256,27.57L3.075,363.353c-2.829,2.829-3.804,7.02-2.516,10.807c1.289,3.787,4.618,6.513,8.585,7.029
		l81.642,10.625l10.624,81.641c0.516,3.967,3.242,7.297,7.03,8.585c1.107,0.376,2.248,0.56,3.38,0.56
		c2.741,0,5.425-1.074,7.427-3.077l99.108-99.131c7.671,5.402,16.296,10.51,26.585,10.51c10.289,0,18.914-5.108,26.585-10.51
		l99.108,99.131c2.002,2.002,4.686,3.077,7.427,3.077c1.132,0,2.273-0.184,3.38-0.56c3.788-1.289,6.514-4.618,7.03-8.585
		l10.624-81.641l81.642-10.625c3.967-0.516,7.296-3.242,8.585-7.03C490.612,370.373,489.636,366.182,486.808,363.353z
		 M110.569,381.091c-0.615-4.724-4.333-8.442-9.057-9.057l-68.503-8.915l56.747-56.749c4.996,3.409,10.595,5.91,15.825,8.236
		c6.146,2.733,11.952,5.314,15.243,8.605c3.292,3.292,5.873,9.097,8.606,15.243c4.333,9.745,9.244,20.789,19.581,26.769
		c5.299,3.067,11.425,4.495,19.279,4.495c4.508,0,9.017-0.466,13.377-0.917c4.04-0.417,7.854-0.811,11.339-0.811
		c2.623,0,4.748,0.227,6.495,0.694c0.22,0.059,0.444,0.128,0.668,0.2l-80.686,80.705L110.569,381.091z M226.522,360.4
		c-6.645-4.84-13.517-9.844-21.598-12.004c-3.54-0.946-7.438-1.407-11.918-1.407c-4.566,0-9.107,0.469-13.497,0.923
		c-4.008,0.414-7.793,0.805-11.219,0.805c-3.952,0-6.818-0.547-8.762-1.672c-4.436-2.566-7.727-9.967-10.909-17.124
		c-3.391-7.627-6.898-15.512-12.945-21.56c-6.048-6.047-13.934-9.554-21.56-12.945c-7.157-3.182-14.559-6.473-17.125-10.91
		c-2.486-4.296-1.662-12.27-0.866-19.981c0.865-8.371,1.759-17.026-0.482-25.413c-2.161-8.083-7.165-14.954-12.004-21.599
		c-4.887-6.711-9.504-13.05-9.504-18.42c0-5.371,4.616-11.709,9.504-18.419c4.839-6.645,9.844-13.517,12.004-21.599
		c2.242-8.388,1.348-17.043,0.482-25.414c-0.796-7.711-1.62-15.685,0.865-19.981c2.567-4.436,9.968-7.727,17.126-10.91
		c7.627-3.391,15.513-6.898,21.562-12.946c6.046-6.048,9.553-13.934,12.944-21.56c3.183-7.157,6.473-14.558,10.911-17.125
		c1.943-1.125,4.809-1.671,8.761-1.671c3.426,0,7.212,0.391,11.219,0.805c4.391,0.454,8.931,0.923,13.498,0.923
		c4.48,0,8.378-0.46,11.916-1.406c8.083-2.16,14.954-7.164,21.6-12.004c6.711-4.887,13.049-9.504,18.42-9.504
		c5.37,0,11.709,4.617,18.42,9.504c6.645,4.84,13.517,9.844,21.599,12.004c3.539,0.946,7.437,1.406,11.916,1.406
		c4.566,0,9.106-0.469,13.497-0.923c4.008-0.414,7.793-0.805,11.22-0.805c3.953,0,6.819,0.547,8.763,1.671
		c4.436,2.567,7.727,9.967,10.909,17.124c3.391,7.626,6.898,15.512,12.945,21.56c6.047,6.048,13.934,9.555,21.56,12.946
		c7.157,3.183,14.558,6.473,17.124,10.91c2.486,4.297,1.663,12.271,0.866,19.983c-0.865,8.37-1.759,17.025,0.482,25.412
		c2.16,8.083,7.165,14.954,12.005,21.599c4.888,6.711,9.504,13.049,9.504,18.42c0,5.371-4.617,11.709-9.504,18.42
		c-4.84,6.645-9.845,13.516-12.005,21.599c-2.241,8.387-1.347,17.042-0.483,25.411c0.797,7.712,1.621,15.687-0.867,19.985
		c-2.566,4.436-9.966,7.726-17.124,10.908c-7.626,3.391-15.513,6.897-21.561,12.946c-6.046,6.047-9.552,13.933-12.943,21.559
		c-3.183,7.158-6.473,14.559-10.911,17.126c-1.942,1.124-4.809,1.671-8.762,1.671c-3.426,0-7.211-0.391-11.219-0.805
		c-4.391-0.454-8.93-0.923-13.497-0.923c-4.48,0-8.379,0.46-11.917,1.406c-8.082,2.16-14.954,7.165-21.599,12.004
		c-6.711,4.887-13.05,9.504-18.42,9.504C239.572,369.904,233.233,365.287,226.522,360.4z M388.372,372.033
		c-4.724,0.615-8.442,4.333-9.057,9.057l-8.914,68.499l-80.686-80.705c0.225-0.072,0.449-0.142,0.669-0.201
		c1.746-0.467,3.87-0.694,6.494-0.694c3.484,0,7.299,0.395,11.338,0.811c4.361,0.451,8.87,0.917,13.377,0.917
		c7.854,0,13.981-1.429,19.278-4.494c10.339-5.98,15.25-17.026,19.583-26.771c2.732-6.146,5.314-11.951,8.604-15.242
		c3.292-3.291,9.097-5.873,15.244-8.605c5.231-2.326,10.831-4.827,15.826-8.236l56.748,56.75L388.372,372.033z"/>
	<path d="M312.846,302.583c3.287-2.388,4.901-6.457,4.145-10.449l-12.034-63.513l47.066-44.308c2.958-2.785,4.044-7.026,2.789-10.89
		c-1.256-3.864-4.627-6.657-8.658-7.171l-64.122-8.181l-27.595-58.458c-1.734-3.674-5.432-6.018-9.495-6.018
		c-4.062,0-7.761,2.344-9.495,6.018l-27.596,58.458l-64.121,8.181c-4.03,0.514-7.402,3.307-8.658,7.171
		c-1.255,3.864-0.169,8.105,2.789,10.89l47.066,44.308l-12.035,63.513c-0.756,3.992,0.858,8.061,4.145,10.449
		c1.831,1.33,3.997,2.005,6.173,2.005c1.73,0,3.468-0.427,5.046-1.292l56.686-31.071l56.685,31.071
		C305.19,305.249,309.56,304.972,312.846,302.583z M249.989,251.043c-1.572-0.862-3.31-1.292-5.047-1.292
		c-1.737,0-3.475,0.431-5.047,1.292l-42.229,23.147l8.965-47.314c0.667-3.522-0.509-7.142-3.119-9.6l-35.062-33.007l47.767-6.094
		c3.556-0.454,6.636-2.691,8.166-5.933l20.558-43.548l20.557,43.548c1.53,3.242,4.61,5.479,8.166,5.933l47.769,6.094l-35.062,33.007
		c-2.61,2.457-3.787,6.077-3.119,9.6l8.965,47.314L249.989,251.043z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
          <div>
            Гарантия
            <br>
            качества
          </div>
        </div>
        <div class="item">
          <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
 viewBox="0 0 387.375 387.375" style="enable-background:new 0 0 387.375 387.375;"
	 xml:space="preserve">
<g>
	<g>
		<path d="M339.645,91.529c6.318-5.554,6.93-15.183,1.382-21.493c-2.706-3.079-5.53-6.097-8.491-9.034c0-0.007,0-0.007,0-0.007
			c0-0.008-0.014-0.008-0.014-0.008c0-0.008,0-0.008,0-0.008v-0.007C297.057,25.517,249.907,5.986,199.754,5.986
			c-45.038,0-87.638,15.798-121.541,44.704L52.415,24.9c-3.852-3.852-9.456-5.339-14.706-3.941
			c-5.264,1.406-9.367,5.51-10.766,10.766l-26.42,98.612c-1.414,5.257,0.088,10.862,3.939,14.706
			c2.883,2.899,6.779,4.461,10.766,4.461c1.307,0,2.631-0.171,3.939-0.521l98.613-26.423c5.247-1.404,9.351-5.509,10.764-10.765
			c1.412-5.257-0.09-10.862-3.94-14.706L99.802,72.28c28.088-23.204,63.045-35.843,99.951-35.843
			c42.021,0,81.526,16.371,111.252,46.087c0,0,0,0,0,0.008c0.015,0,0.015,0,0.015,0.007c2.48,2.477,4.847,5.019,7.138,7.606
			c3.004,3.427,7.211,5.174,11.435,5.174C333.16,95.32,336.76,94.071,339.645,91.529z"/>
		<path d="M157.912,345.48c-6.794-1.874-13.528-4.224-19.999-6.98c-7.731-3.286-16.684,0.305-19.984,8.035
			c-3.299,7.74,0.298,16.685,8.047,19.979c7.717,3.293,15.746,6.097,23.863,8.327c1.354,0.371,2.705,0.549,4.044,0.549
			c6.677,0,12.817-4.438,14.677-11.195C170.79,356.089,166.015,347.703,157.912,345.48z"/>
		<path d="M227.916,348.588c-6.928,1.248-14.006,2.052-21.038,2.362c-8.401,0.373-14.9,7.488-14.527,15.89
			c0.357,8.17,7.091,14.549,15.195,14.549c0.224,0,0.461-0.007,0.686-0.016c8.401-0.379,16.846-1.329,25.113-2.824
			c8.281-1.502,13.77-9.42,12.268-17.694C244.125,352.58,236.154,347.057,227.916,348.588z"/>
		<path d="M344.416,131.793c2.767,6.462,5.115,13.182,7.005,19.985c1.858,6.75,7.985,11.174,14.661,11.174
			c1.339,0,2.705-0.179,4.06-0.55c8.104-2.238,12.863-10.624,10.631-18.729c-2.244-8.11-5.055-16.14-8.354-23.857
			c-3.316-7.731-12.255-11.315-19.984-8.015C344.699,115.111,341.115,124.063,344.416,131.793z"/>
		<path d="M292.301,321.05c-5.711,4.163-11.732,7.956-17.902,11.286c-7.406,3.991-10.172,13.226-6.187,20.631
			c2.751,5.1,8.001,8,13.429,8c2.438,0,4.905-0.588,7.209-1.822c7.376-3.984,14.572-8.52,21.396-13.486
			c6.794-4.959,8.282-14.481,3.33-21.276C308.625,317.593,299.094,316.091,292.301,321.05z"/>
		<path d="M359.02,262.071c-7.438-3.985-16.641-1.204-20.624,6.2c-3.333,6.186-7.124,12.215-11.257,17.91
			c-4.951,6.803-3.449,16.326,3.346,21.27c2.707,1.972,5.842,2.915,8.951,2.915c4.699,0,9.339-2.178,12.328-6.273
			c4.949-6.804,9.471-14.007,13.455-21.396C369.189,275.283,366.424,266.056,359.02,262.071z"/>
		<path d="M372.816,186.187c-0.223-0.008-0.447-0.016-0.685-0.016c-8.087,0-14.823,6.387-15.196,14.558
			c-0.312,7.062-1.1,14.146-2.35,21.055c-1.484,8.281,4.016,16.192,12.299,17.688c0.905,0.162,1.813,0.244,2.705,0.244
			c7.227,0,13.65-5.166,14.973-12.534c1.487-8.244,2.424-16.688,2.797-25.104C387.732,193.672,381.219,186.559,372.816,186.187z"/>
		<path d="M88.504,305.035c-5.949-5.946-15.583-5.946-21.531,0c-5.949,5.94-5.949,15.584,0,21.531
			c2.942,2.943,5.977,5.776,9.055,8.482c2.885,2.543,6.468,3.785,10.037,3.785c4.236,0,8.445-1.748,11.449-5.177
			c5.547-6.317,4.922-15.938-1.398-21.492C93.528,309.891,90.986,307.512,88.504,305.035z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
          <div>Возврат<br>
            в течении<br>
            10 дней</div>
        </div>
        <div class="item">
          <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 325.266 325.266" style="enable-background:new 0 0 325.266 325.266;" xml:space="preserve">
<path d="M234.544,126.74h18.221c39.977,0,72.5-32.523,72.5-72.5c0-4.143-3.357-7.5-7.5-7.5h-52.273
	c1.643-11.026,2.487-22.399,2.487-33.959c0-4.143-3.357-7.5-7.5-7.5s-7.5,3.357-7.5,7.5c0,38.059-9.707,73.738-27.333,100.465
	c-16.991,25.764-39.265,39.953-62.718,39.953s-45.728-14.189-62.719-39.953C83.747,88.282,74.192,55.509,73.003,20.281h134.081
	c4.143,0,7.5-3.357,7.5-7.5s-3.357-7.5-7.5-7.5H65.377c-4.143,0-7.5,3.357-7.5,7.5c0,11.56,0.844,22.933,2.487,33.959H7.5
	c-4.143,0-7.5,3.357-7.5,7.5c0,30.601,19.359,58.054,48.172,68.315c0.832,0.296,1.681,0.437,2.517,0.437
	c3.082,0,5.972-1.916,7.065-4.985c1.39-3.902-0.647-8.192-4.549-9.582c-20.468-7.289-34.921-25.52-37.713-46.685h47.65
	c4.936,22.227,13.247,42.631,24.545,59.764c13.87,21.03,31.088,35.451,49.975,42.243v83.737h-7.938
	c-17.36,0-31.887,12.365-35.235,28.75H76.201c-4.143,0-7.5,3.357-7.5,7.5v28.75c0,4.143,3.357,7.5,7.5,7.5h173.454
	c4.143,0,7.5-3.357,7.5-7.5v-28.75c0-4.143-3.357-7.5-7.5-7.5h-18.288c-3.349-16.385-17.875-28.75-35.234-28.75h-7.938v-83.737
	C205.469,157.535,221.347,144.939,234.544,126.74z M309.778,61.74c-3.686,28.176-27.848,50-57.013,50h-8.685
	c8.319-14.928,14.604-31.854,18.633-50H309.778z M242.155,304.984H83.701v-13.75h17.561h123.333h17.561V304.984z M215.816,276.234
	H110.04c2.947-8.016,10.659-13.75,19.685-13.75h15.438h35.532h15.438C205.158,262.484,212.869,268.219,215.816,276.234z
	 M173.194,247.484h-20.532v-80.008c3.389,0.476,6.813,0.723,10.267,0.723c3.453,0,6.877-0.247,10.266-0.723V247.484z"/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
          <div>Крупнейший<br>
            дилер<br>
            в Украине</div>
        </div>
      </div>
    </div>
  </section>


  <section class="scr-iii__wrapper wrapper">
    <div class="scr-iii__inner inner">
      <span class="scr-iii__title">
        Авточехлы для 470 моделей авто
      </span>
      <div id="tabs" class="tabs">
        <div class="tabs-nav">
          <ul>
            <li class="tabs-nav__item" data-content="Тканевые">Тканевые</li>
            <li class="tabs-nav__item" data-content="Комбинированные">Комбинированные</li>
            <li class="tabs-nav__item" data-content="Экокожа">Экокожа</li>
          </ul>
        </div>
        <div class="tabs-content">
          <ul>
            <li class="tabs-content__item tab">
              <!--photo-carousel-->
              <div class="photo-carousel active">
                <!--owl-carousel-->
                <div class="owl-img owl-carousel">
                  <!--<div class="item">-->
                    <!--<img class="lazyOwl" data-src="img/ch1.jpg" alt="">-->
                  <!--</div>-->
                  <div class="item">
                    <img src="img/textile/1_daewoo_lanos.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/textile/1_Ford_fiesta.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/textile/1_kia_ceed.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/textile/1_mitsubishi_lanser_x.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/textile/1_shkoda_fabia.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/textile/1_toyota-corolla.jpg" alt="">
                  </div>
                </div>
                <!--end owl-carousel-->

                <div class="owl-img-preview owl-carousel with-border">
                  <div  class="prev item">
                    <img src="img/logo/daewoo.png" alt="">
                    <p>Daewoo Lanos</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/ford.png" alt="">
                    <p>Ford Fiesta</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/kia.png" alt="">
                    <p>Kia Ceed</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/mitsub.png" alt="">
                    <p>Mitsubishi Lanser X</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/skoda.png" alt="">
                    <p>Skoda fabia</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/toyota.png" alt="">
                    <p>Toyota Corolla</p>
                  </div>
                </div>
              </div>
              <!--photo-carousel-->
            </li>
            <li class="tabs-content__item tab">
              <!--photo-carousel-->
              <div class="photo-carousel active">
                <!--owl-carousel-->
                <div class="owl-img owl-carousel">
                  <!--<div class="item">-->
                  <!--<img class="lazyOwl" data-src="img/ch1.jpg" alt="">-->
                  <!--</div>-->
                  <div class="item">
                    <img src="img/kombi/1_bmw_5_series.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/kombi/1_chevrolet_cruze.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/kombi/1_lada_priora.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/kombi/1_Mitsubishi_outlander.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/kombi/1_nissan_xtrail.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/kombi/1_subaru_xv.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/kombi/1toyota_corolla.jpg" alt="">
                  </div>
                </div>
                <!--end owl-carousel-->

                <div class="owl-img-preview owl-carousel with-border">
                  <div  class="prev item">
                    <img src="img/logo/bmw.png" alt="">
                    <p>BMW 5series</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/chevrolet.png" alt="">
                    <p>Chevrolet Cruze</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/Lada.png" alt="">
                    <p>Lada Priora</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/mitsub.png" alt="">
                    <p>Mitsubishi Outlander</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/nissan.png" alt="">
                    <p>Nissan X-Trail</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/subary.png" alt="">
                    <p>Subaru XV</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/toyota.png" alt="">
                    <p>Toyota Corolla</p>
                  </div>
                </div>
              </div>
              <!--photo-carousel-->
            </li>
            <li class="tabs-content__item tab">
              <!--photo-carousel-->
              <div class="photo-carousel active">
                <!--owl-carousel-->
                <div class="owl-img owl-carousel">
                  <!--<div class="item">-->
                  <!--<img class="lazyOwl" data-src="img/ch1.jpg" alt="">-->
                  <!--</div>-->
                  <div class="item">
                    <img src="img/lether/1_chevrolet_captiva.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/lether/1_ford_focus.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/lether/1_hyundai_accent.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/lether/1_mazda_3_series.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/lether/1_nissan_qashqai.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/lether/1_shkoda_yetti.jpg" alt="">
                  </div>
                  <div class="item">
                    <img src="img/lether/1_vw_golf.jpg" alt="">
                  </div>
                </div>
                <!--end owl-carousel-->

                <div class="owl-img-preview owl-carousel with-border">
                  <div class="prev">
                    <img src="img/logo/chevrolet.png" alt="">
                    <p>Chevrolet Captiva</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/ford.png" alt="">
                    <p>Ford Focus</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/hyindai.png" alt="">
                    <p>Hyundai Accent</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/mazda.png" alt="">
                    <p>Mazda 3</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/nissan.png" alt="">
                    <p>Nissan Qashqai</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/skoda.png" alt="">
                    <p>Skoda Yeti</p>
                  </div>
                  <div class="prev">
                    <img src="img/logo/vw.png" alt="">
                    <p>VW Golf</p>
                  </div>
                </div>
              </div>
              <!--photo-carousel-->
            </li>
          </ul>
        </div>
        <form class="scr-iii__form" action="sendmessage.php" id="form-2" method="POST">
          <div class="scr-iii__titleform">
            Подобрать для<br>Вашей марки авто?
          </div>
          <div class="scr-iii__input-wrapper">
            <input type="text" class="scr-iii__input" placeholder="Введите марку авто" name="auto">
          </div>
          <div class="scr-iii__input-wrapper">
            <input type="text" class="scr-iii__input" placeholder="Введите телефон" name="phone">
          </div>
          <div class="scr-iii__input-wrapper">
            <button class="scr-iii__button" type="submit" data-content="Подобрать"></button>
          </div>
          <input type="hidden" value="/podbor-vasha-marka.html" name="htmlData">
          <div class="scr-iii__descr">
            <span></span>есть в наличии
          </div>
        </form>
        <div class="scr-iii__moreButton" data-init="modal" data-modal="#callback-modal2"  data-input="Кнопка-Еще 395 моделей">
          Еще 395 моделей
        </div>
      </div>
    </div>
  </section>

  <section class="scr-vi__wrapper wrapper">
    <div class="scr-vi__rotate">
      <div class="scr-vi__inner inner">
        <p class="scr-vi__title">
          Подробный видео обзор нашей продукции
        </p>
        <iframe class="scr-vi__videoframe" width="850" height="450" src="https://www.youtube.com/embed/TVuI2C340JY" frameborder="0"
                allowfullscreen></iframe>
      </div>
    </div>
  </section>


  <section class="scr-now__wrapper wrapper">
    <div class="scr-now__inner inner">
      <p class="scr-now__title">
        Закажите авточехлы сейчас
      </p>
      <p class="scr-now__subtitle">
        и избавьтесь от проблем с салоном на годы вперед
      </p>
      <div class="scr-now__box">
        <div class="col">
          <div class="scr-now__item">
            <div class="scr-now__container-item">
              <p>Защитите сидения от пятен</p>
              <span>Даже через 10 лет использования салон<br> будет выглядеть как новый</span>
            </div>
          </div>
          <div class="scr-now__item">
            <div class="scr-now__container-item">
              <p>Перевозите домашних животных</p>
              <span>Забудьте о следах грязных лап на<br> сидениях</span>
            </div>
          </div>
          <div class="scr-now__item">
            <div class="scr-now__container-item">
              <p>Выезды в лес и на рыбалку</p>
              <span>Обеспечьте чистоту салона даже в тех<br> ситуациях, когда загрязнение неизбежно</span>
            </div>
          </div>
        </div>
        <div class="col2">
          <div class="scr-now__item">
            <div class="scr-now__container-item">
              <p>Экономьте на химчистке</p>
              <span>Чехлы легко снимаются и стираются в<br> стиральной машине</span>
            </div>
          </div>
          <div class="scr-now__item">
            <div class="scr-now__container-item">
              <p>Добавьте индивидуальности</p>
              <span>Яркие цвета и комбинированная отдела<br> добавят красок салону ваше</span>
            </div>
          </div>
          <div class="scr-now__item">
            <div class="scr-now__container-item">
              <p>Подходят для вашего авто</p>
              <span>Чехлы изготавливаются с учетом<br> особенностей каждой модели авто</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="scr-take-price__wrapper wrapper">
    <div class="scr-take-price__inner inner">
      <p class="scr-take-price__title">
        Узнайте стоимость чехла для вашего авто
      </p>
      <form class="scr-take-price__form" action="sendmessage.php" id="form-3" method="POST">
        <div class="scr-take-price__input-wrapper">
          <input type="text" class="scr-take-price__input" placeholder="Введите марку и модель авто" name="auto">
        </div>
        <div class="scr-take-price__input-wrapper">
          <input type="text" class="scr-take-price__input" placeholder="Введите телефон" name="phone">
        </div>
        <input type="hidden" value="/stoimost-4ehla-dlya-avto.html" name="htmlData">
        <div class="scr-take-price__input-wrapper">
          <button class="scr-take-price__button" type="submit" data-content="Узнать"></button>
        </div>
      </form>
    </div>
  </section>

  <section class="scr-photo__wrapper wrapper">
    <div class="scr-photo__inner inner">
      <p class="scr-photo__title">
        Фотографии наших чехлов
      </p>
      <div class="slider_synch_big">
        <img src="img/Photo/1.jpg" alt="">
        <img src="img/Photo/2.jpg" alt="">
        <img src="img/Photo/3.jpg" alt="">
        <img src="img/Photo/4.jpg" alt="">
        <img src="img/Photo/5.jpg" alt="">
        <img src="img/Photo/6.jpg" alt="">
        <img src="img/Photo/7.jpg" alt="">
      </div>
      <div class="slider_synch_small">
        <img src="img/Photo/1.jpg" alt="">
        <img src="img/Photo/2.jpg" alt="">
        <img src="img/Photo/3.jpg" alt="">
        <img src="img/Photo/4.jpg" alt="">
        <img src="img/Photo/5.jpg" alt="">
        <img src="img/Photo/6.jpg" alt="">
        <img src="img/Photo/7.jpg" alt="">
      </div>
    </div>
  </section>

<!--  <section class="scr-take-photo__wrapper wrapper">-->
<!--    <div class="scr-take-photo__inner inner">-->
<!--      <p class="scr-take-photo__title">-->
<!--        Получите фото чехла для вашего авто-->
<!--      </p>-->
<!--      <form class="scr-take-photo__form" action="sendmessage.php" id="form-5" method="POST">-->
<!--        <div class="scr-take-photo__input-wrapper">-->
<!--          <input type="text" class="scr-take-photo__input" placeholder="Введите марку и модель авто" name="auto">-->
<!--        </div>-->
<!--        <div class="scr-take-photo__input-wrapper">-->
<!--          <input type="text" class="scr-take-photo__input" placeholder="Введите телефон" name="phone">-->
<!--        </div>-->
<!--        <div class="scr-take-photo__input-wrapper">-->
<!--          <input type="text" class="scr-take-photo__input" placeholder="Введите e-mail или skype" name="mail_skype">-->
<!--        </div>-->
<!--        <input type="hidden" value="/foto-4ehla.html" name="htmlData">-->
<!--        <div class="scr-take-photo__input-wrapper">-->
<!--          <button class="scr-take-photo__button" type="submit" data-content="Получить фото"></button>-->
<!--        </div>-->
<!--      </form>-->
<!--    </div>-->
<!--  </section>-->

  <section class="scr-how-to__wrapper wrapper">
    <div class="scr-how-to__inner inner">
    <p class="scr-how-to__title">
      Как заказать
    </p>
    <img src="img/shema.png" class="scr-how-to__img-post" alt="">
      <div class="scr-how-to__box">
        <div class="scr-how-to__item">
          Оставить заявку<br> на сайте
        </div>
        <div class="scr-how-to__item">
          Мы перезвоним<br> и поможем с выбором
        </div>
        <div class="scr-how-to__item">
          Доставляем<br> в течении 2 дней
        </div>
        <div class="scr-how-to__item">
          Оплачиваете<br> при получении<br> и наслаждаетесь<br> комфортом
        </div>
      </div>
  </div>
  </section>


  <section class="scr-new-post__wrapper wrapper">
    <div class="scr-new-post__rotate">
      <div class="scr-new-post__inner inner">
        <p class="scr-new-post__title">
          Доставляем по всей Украине <span>за 2 дня</span>
        </p>
        <img src="img/new-post.png" class="scr-new-post__img-post" alt="">
      </div>
    </div>
  </section>



  <section class="scr-reviews__wrapper wrapper">
    <div class="scr-reviews__inner inner">
      <p class="scr-reviews__title">
        Отзывы наших покупателей
      </p>
      <div class="slider_reviews">
        <div class="item">
          <div class="col1">
            <img src="img/otziv.png" alt="">
          </div>
          <div class="col2">
            <p class="name">Горбачев Сергей Миронович</p>
            <p class="auto">Авто ВАЗ 21099</p>
            <p class="review">Для своего автомобиля я купил комбинированные чехлы, что позволило сделать интерьер моего автомобиля более свежим и привлекательным. Качества материалов чехлов значительно превышает качество обивки родных сидений. Новые чехлы отлично показали себя в холодную и грязную погоду, прекрасно поддаваясь чистке. Имею полную уверенность в том, что чехлы прослужат верой и правдой не один год.</p>
          </div>
        </div>
        <div class="item">
          <div class="col1">
            <img src="img/otziv.png" alt="">
          </div>
          <div class="col2">
            <p class="name">Горбачева Клавдия Маркияновна</p>
            <p class="auto">Авто ВАЗ 21099</p>
            <p class="review">Для своего автомобиля я купил комбинированные чехлы, что позволило сделать интерьер моего автомобиля более свежим и привлекательным. Качества материалов чехлов значительно превышает качество обивки родных сидений. Новые чехлы отлично показали себя в холодную и грязную погоду, прекрасно поддаваясь чистке. Имею полную уверенность в том, что чехлы прослужат верой и правдой не один год.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="scr-last__wrapper wrapper">
    <div class="scr-last__inner inner">
      <p class="scr-last__title">
        Появились вопросы?
      </p>
      <form  action="sendmessage.php" id="form-4" method="POST">
        <div class="scr-last__form-title">
          Задайте вопросы нашему специалисту
        </div>
        <div class="scr-last__input-wrapper">
          <input type="text" class="scr-last__input" placeholder="Введите телефон" name="phone">
        </div>
        <input type="hidden" value="/voprosi.html" name="htmlData">
        <div class="scr-last__input-wrapper">
          <button class="scr-last__button" type="submit" data-content="Получить консультацию"></button>
        </div>
        <div class="scr-last__descr">
          Перезвоним в течении 5 минут
        </div>
      </form>
    </div>
  </section>

  <div class="modal callback-modal" id="callback-modal" data-type="modal">
    <div class="modal__wrapper modal-wrapper">
      <span class="modal__close modal-close">&times;</span>
      <div class="modal__inner">
      <span class="modal__title">
        ЗАКАЗАТЬ<br>
        БЕСПЛАТНЫЙ<br>
        ЗВОНОК
      </span>
        <form action="sendmessage.php" method="POST">
          <div class="modal__input-wrapper">
            <label class="modal__label" for="callback-modal-text-1">Введите номер телефона</label>
            <input type="text" id="callback-modal-text-1" class="modal__input" name="phone" placeholder="+38 (0__) ___-__-__">
          </div>
          <input type="hidden" value="" name="order" class="order">
          <input type="hidden" value="/header-call-back.html" name="htmlData">
          <div class="modal__input-wrapper">
            <button type="submit" class="modal__button" data-content="Заказать"></button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal callback-modal" id="callback-modal2" data-type="modal">
    <div class="modal__wrapper modal-wrapper">
      <span class="modal__close modal-close">&times;</span>
      <div class="modal__inner">
      <span class="modal__title">
        Получите все варианты<br>чехлов для вашего авто
      </span>
        <form action="sendmessage.php" method="POST">
          <div class="modal__input-wrapper">
            <label class="modal__label" for="callback-modal-text-1">Введите ваши данные</label>
            <input type="text" id="callback-modal-text-1" class="modal__input" name="auto" placeholder="Марка и модель авто">
          </div>
          <div class="modal__input-wrapper">
            <input type="text" id="callback-modal-text-1" class="modal__input" name="phone" placeholder="Телефон">
          </div>
          <input type="hidden" value="" name="order" class="order">
          <input type="hidden" value="/395-modeley.html" name="htmlData">
          <div class="modal__input-wrapper">
            <button type="submit" class="modal__button" data-content="Получить варианты"></button>
            <p>Вышлем в течении часа</p>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal response-modal" data-type="modal" id="response-modal">
    <div class="modal__wrapper">
      <span class="modal__close">&times;</span>
      <div class="modal__inner">
      <span class="modal__title">
        Сообщение отправлено!<br>
        Мы свяжемся с Вами в ближайшее время.
      </span>
      </div>
    </div>
  </div>

  <script src="js/common.js"></script>
</body>

</html>
