<!DOCTYPE html><html lang="en"><head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <title>!!BDTermuxHacker!</title></head><style>
*{ 
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 font-family: "Poppins", sans-serif;
}

*:focus {
    outline: none;
} 

:root { 
 --main-color: #FF0001;
 --shadow-color: rgba(93, 38, 193, 0.4);
}

body { 
 width: 100%;
 height: 100vh;
 background-image: linear-gradient(45deg, var(--main-color) 45%, #ffffff 0%);
 background-repeat: no-repeat; 
}


/* STRUCTURE  */

.wrapper {
 width: 100%;
 min-height: 100%;
 padding: 80px 20px 20px 20px;
}

/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  animation-name: fadeInDown;
  animation-duration: 2s;
  animation-fill-mode: both;
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    transform: none;
  }
}


#formContent {
  border-radius: 10px;
  background: #fff;
  width: 95%;
  max-width: 400px;
  min-height: 350px;
  max-height: 450px;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
}

#navbarId { 
  text-align: center;   
}

img {
  width: 25%;
  margin: 20px auto 5px auto;
  padding-top: 30px;
  display: block;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display: inline-block;
  letter-spacing: 0.4px;
  margin: 5px 8px 20px 8px; 
  color: #636e72;
  border-bottom: 1px solid #636e72;
}


input[type=text],select {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 12px 32px;
  text-align: left;
  text-decoration: none;
  display: block;
  font-size: 14px;
  margin: 5px auto;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid var(--main-color);
}

input[type=text]:placeholder {
  color: #cccccc;
}


/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: var(--main-color);
  border: none;
  color: white;
  letter-spacing: 1px;
  padding: 12px 80px;
  text-align: center;
  text-decoration: none;
  display: block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 var(--shadow-color);
  box-shadow: 0 10px 30px 0 var(--shadow-color);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px auto 35px auto;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  cursor: pointer;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: var(--main-color);
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}


#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  border-radius: 0 0 10px 10px;
}

a {
  color: var(--main-color);
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: var(--main-color);
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}

.small_text_msg {
  margin: 0px 0px 10px 25px;
  color: #636e72;
  font-size: 12px;
  display: block;
  text-align: left;
}

.BoxContent {
  background-color: #f6f6f6;
  width: 85%;
  min-height: 30px;
  padding: 15px;
  margin: 5px auto 20px auto;
  border-radius: 5px;
}

.BoxContent p {
  padding: 10px 0px;
  border-top: thin solid #ffffff;
  text-align: center;
  font-size: 12px;
  color: #636e72;
  font-family: 'Solway', serif;
}

pre {
  font-size: 13px;
}

</style>

</style>
<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <div class="fadeIn first" id="navbarId">
        <img src="https://i.ibb.co/g9Mkh5W/1661608558875.png" alt="Icon">
  
  <h2 class="active"><font color='black'> TEMP<font color='skyblue'>MAIL <font color='Green'>GENE<font color='green'>R<font color='Black'>ATOR</h2><br><center>

<?php ${"GLOBALS"}["tfumft"]="s";${"GLOBALS"}["qtmbryvo"]="e";${"GLOBALS"}["caysocr"]="i42";${"GLOBALS"}["trkiarldn"]="time1";${"GLOBALS"}["dheobomqe"]="a";${"GLOBALS"}["vcguek"]="id1";${"GLOBALS"}["vgsieaie"]="z";${"GLOBALS"}["ybgbkijsrne"]="c";${"GLOBALS"}["wbxygtp"]="time";${"GLOBALS"}["gdsuokhwsd"]="imo";${"GLOBALS"}["pskfdesmq"]="b";${"GLOBALS"}["utldbuozzl"]="imei";${"GLOBALS"}["ybkmzuwyfj"]="i30";${"GLOBALS"}["saofbzvbaju"]="i8";${"GLOBALS"}["giyjjuhih"]="mid";${"GLOBALS"}["cdanniq"]="json";${"GLOBALS"}["rdwheustvxmx"]="sub";${"GLOBALS"}["cfyapnfvlm"]="id";${"GLOBALS"}["yliktsfsris"]="one";${"GLOBALS"}["qxctqnfg"]="ch";${"GLOBALS"}["bilydmrdwkh"]="headers";${"GLOBALS"}["wgyqiq"]="url1";${"GLOBALS"}["yvucgzqti"]="hh";${"GLOBALS"}["qihusxc"]="no";${"GLOBALS"}["kbuohuec"]="fname";${"GLOBALS"}["gaqivywn"]="name";${"GLOBALS"}["ihiwvnbfdgt"]="charactersLength";${"GLOBALS"}["ydgihgu"]="characters";${"GLOBALS"}["etxesvuhbg"]="l";${"GLOBALS"}["okpbzyxpxx"]="lname";${"GLOBALS"}["rldsmyqoi"]="i";${"GLOBALS"}["rwoubbegu"]="str";${"GLOBALS"}["qblhidx"]="f";echo "<html>

    
";$bzkboijs="f";$zalnsz="no";error_reporting(0);${"GLOBALS"}["spmfcrggxmif"]="fname";function RandomNumber($length){${"GLOBALS"}["gishyvuf"]="length";${${"GLOBALS"}["rwoubbegu"]}="";${"GLOBALS"}["hpjjxjfy"]="i";for(${${"GLOBALS"}["rldsmyqoi"]}=0;${${"GLOBALS"}["hpjjxjfy"]}<${${"GLOBALS"}["gishyvuf"]};${${"GLOBALS"}["rldsmyqoi"]}++){${${"GLOBALS"}["rwoubbegu"]}.=mt_rand(0,9);}return${${"GLOBALS"}["rwoubbegu"]};}$fnyaddmlqkoc="l";${$bzkboijs}=array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");${${"GLOBALS"}["spmfcrggxmif"]}=${${"GLOBALS"}["qblhidx"]}[mt_rand(0,50)];${$fnyaddmlqkoc}=array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");${${"GLOBALS"}["okpbzyxpxx"]}=${${"GLOBALS"}["etxesvuhbg"]}[mt_rand(0,50)];${$zalnsz}=rand(1,999);function rando($length){$kpzilexyir="length";$tdqrgho="i";$ixsxtjrgaw="randomString";${"GLOBALS"}["rnblpdwqse"]="charactersLength";${${"GLOBALS"}["ydgihgu"]}="1234567890abcdefghijklmnopqrstuvwxyz";${"GLOBALS"}["hoshkdpedky"]="i";$blqghmgvta="randomString";$ochlrssv="characters";${${"GLOBALS"}["rnblpdwqse"]}=strlen(${$ochlrssv});${$ixsxtjrgaw}="";for(${${"GLOBALS"}["rldsmyqoi"]}=0;${$tdqrgho}<${$kpzilexyir};${${"GLOBALS"}["hoshkdpedky"]}++){${"GLOBALS"}["uwqrtypwvlit"]="randomString";${${"GLOBALS"}["uwqrtypwvlit"]}.=${${"GLOBALS"}["ydgihgu"]}[rand(0,${${"GLOBALS"}["ihiwvnbfdgt"]}-1)];}return${$blqghmgvta};}${${"GLOBALS"}["gaqivywn"]}="".${${"GLOBALS"}["kbuohuec"]}."".${${"GLOBALS"}["okpbzyxpxx"]}."".${${"GLOBALS"}["qihusxc"]}."";if(isset($_REQUEST["mid"])){$gtkhdwifr="ch";$nkuanapowp="data1";$hijrjsgu="one";$mzdxxczbelg="json";$qsgtvyr="mid";$jscvpftzqs="ch";${"GLOBALS"}["jyavev"]="time";${${"GLOBALS"}["yvucgzqti"]}=$_POST["hh"];$aomsjjpwn="json";$pgsjayfmk="url1";${$qsgtvyr}=$_POST["mid"];${${"GLOBALS"}["wgyqiq"]}="https://10minutemail.net//mail.api.php?mailid=$mid&sessionid=$hh";$chqtaukww="ch";${${"GLOBALS"}["bilydmrdwkh"]}=["Content-Type:application/x-www-form-urlencoded","Content-Length: ".strlen(${$nkuanapowp})."","Host: 10minutemail.net","Connection: Keep-Alive","Accept-Encoding: gzip","User-Agent: okhttp/3.12.1"];${${"GLOBALS"}["qxctqnfg"]}=curl_init();curl_setopt(${$gtkhdwifr},CURLOPT_URL,${$pgsjayfmk});curl_setopt(${$jscvpftzqs},CURLOPT_HEADER,0);$xjiaqnltosd="c";curl_setopt(${$chqtaukww},CURLOPT_HTTPHEADER,${${"GLOBALS"}["bilydmrdwkh"]});${"GLOBALS"}["nqghgfbj"]="ch";curl_setopt(${${"GLOBALS"}["qxctqnfg"]},CURLOPT_SSL_VERIFYHOST,0);$dcnnawttftew="json";curl_setopt(${${"GLOBALS"}["qxctqnfg"]},CURLOPT_SSL_VERIFYPEER,0);curl_setopt(${${"GLOBALS"}["nqghgfbj"]},CURLOPT_ENCODING,"gzip");${"GLOBALS"}["zixkvkvjcgi"]="ch";curl_setopt(${${"GLOBALS"}["qxctqnfg"]},CURLOPT_RETURNTRANSFER,TRUE);curl_setopt(${${"GLOBALS"}["qxctqnfg"]},CURLOPT_FOLLOWLOCATION,1);${${"GLOBALS"}["yliktsfsris"]}=curl_exec(${${"GLOBALS"}["zixkvkvjcgi"]});${"GLOBALS"}["dqbpctjkkpl"]="e";curl_close(${${"GLOBALS"}["qxctqnfg"]});${$dcnnawttftew}=json_decode(${$hijrjsgu},true);${${"GLOBALS"}["dqbpctjkkpl"]}=${$mzdxxczbelg}["body"][0]["body"];${${"GLOBALS"}["cfyapnfvlm"]}=${$aomsjjpwn}["from"];${${"GLOBALS"}["rdwheustvxmx"]}=${${"GLOBALS"}["cdanniq"]}["suect"];${${"GLOBALS"}["jyavev"]}=${${"GLOBALS"}["cdanniq"]}["datetime2"];${$xjiaqnltosd}=${${"GLOBALS"}["cdanniq"]}["mail_list"];${${"GLOBALS"}["giyjjuhih"]}=${${"GLOBALS"}["cdanniq"]}["mail_id"];echo"<Div Class='success'>
from: $id <Hr>
subject: $sub<Hr>
datetime2: $time<Hr>
Message: $e</div>";}elseif(isset($_POST["hh"])){$sltlbmichrj="no";${"GLOBALS"}["ibqiiqzfuoe"]="fname";${"GLOBALS"}["nudoajz"]="id";${"GLOBALS"}["qvlfuquehid"]="name";$brwiij="lname";${"GLOBALS"}["dehbizogt"]="l";${${"GLOBALS"}["qvlfuquehid"]}="".${${"GLOBALS"}["ibqiiqzfuoe"]}."".${$brwiij}."".${$sltlbmichrj}."";$gliutmmyjxo="device";$yivpzskjibv="url1";$ioasreityfy="headers";$jfgesjt="i42";${${"GLOBALS"}["saofbzvbaju"]}=RandomNumber(8);${"GLOBALS"}["bqlwkeywe"]="ch";${"GLOBALS"}["muggcqs"]="ch";${$gliutmmyjxo}=RandomNumber(16);${${"GLOBALS"}["ybkmzuwyfj"]}=RandomNumber(30);${${"GLOBALS"}["utldbuozzl"]}=rando(16);${"GLOBALS"}["jsideiwwck"]="ch";${"GLOBALS"}["jcarpxuod"]="headers";${${"GLOBALS"}["pskfdesmq"]}=RandomNumber(9);${$jfgesjt}=RandomNumber(42);${"GLOBALS"}["lokolnw"]="ch";${${"GLOBALS"}["gdsuokhwsd"]}=RandomNumber(15);${${"GLOBALS"}["dehbizogt"]}=time();$ibfuwvg="ch";$mpoyvjlqcmh="ch";${${"GLOBALS"}["yvucgzqti"]}=$_POST["hh"];$jndtpq="e";${$yivpzskjibv}="https://10minutemail.net/address.api.php?sessionid=$hh&_=1582440128496";$dnmdnohi="one";${${"GLOBALS"}["jcarpxuod"]}=["Content-Type:application/x-www-form-urlencoded","Host: 10minutemail.net","Connection: Keep-Alive","Accept-Encoding: gzip","User-Agent: okhttp/3.12.1"];${"GLOBALS"}["zcbkbjc"]="json";${$mpoyvjlqcmh}=curl_init();curl_setopt(${${"GLOBALS"}["lokolnw"]},CURLOPT_URL,${${"GLOBALS"}["wgyqiq"]});curl_setopt(${${"GLOBALS"}["bqlwkeywe"]},CURLOPT_HEADER,0);curl_setopt(${${"GLOBALS"}["qxctqnfg"]},CURLOPT_HTTPHEADER,${$ioasreityfy});curl_setopt(${${"GLOBALS"}["qxctqnfg"]},CURLOPT_SSL_VERIFYHOST,0);curl_setopt(${${"GLOBALS"}["qxctqnfg"]},CURLOPT_SSL_VERIFYPEER,0);${"GLOBALS"}["llcdimkbjye"]="c";curl_setopt(${${"GLOBALS"}["jsideiwwck"]},CURLOPT_ENCODING,"gzip");curl_setopt(${$ibfuwvg},CURLOPT_RETURNTRANSFER,TRUE);curl_setopt(${${"GLOBALS"}["muggcqs"]},CURLOPT_FOLLOWLOCATION,1);${${"GLOBALS"}["yliktsfsris"]}=curl_exec(${${"GLOBALS"}["qxctqnfg"]});curl_close(${${"GLOBALS"}["qxctqnfg"]});${${"GLOBALS"}["cdanniq"]}=json_decode(${$dnmdnohi},true);${$jndtpq}=${${"GLOBALS"}["cdanniq"]}["mail_get_mail"];${${"GLOBALS"}["nudoajz"]}=${${"GLOBALS"}["cdanniq"]}["mail_list"][0]["from"];${"GLOBALS"}["lhsqzltjdi"]="json";${${"GLOBALS"}["rdwheustvxmx"]}=${${"GLOBALS"}["lhsqzltjdi"]}["mail_list"][0]["subject"];${${"GLOBALS"}["wbxygtp"]}=${${"GLOBALS"}["zcbkbjc"]}["mail_list"][0]["datetime2"];${${"GLOBALS"}["ybgbkijsrne"]}=${${"GLOBALS"}["cdanniq"]}["mail_list"];${${"GLOBALS"}["vgsieaie"]}=count(${${"GLOBALS"}["llcdimkbjye"]});echo"<Div >$e</div>";if(${${"GLOBALS"}["vgsieaie"]}=="1"){echo"<div class='BoxContent fadeIn second'>
<p>No Mails Recived!</p> </div>";}else{${"GLOBALS"}["dsotzjhdse"]="a";${"GLOBALS"}["rssilrhktvw"]="a";${${"GLOBALS"}["dsotzjhdse"]}=0;while(${${"GLOBALS"}["vgsieaie"]}>${${"GLOBALS"}["rssilrhktvw"]}){$euvusmmfewi="a";${"GLOBALS"}["bkwmlq"]="sub1";$crvudem="json";$lsyqqssyhmf="a";${"GLOBALS"}["simqodlvy"]="a";${${"GLOBALS"}["vcguek"]}=${${"GLOBALS"}["cdanniq"]}["mail_list"][${${"GLOBALS"}["dheobomqe"]}]["from"];${${"GLOBALS"}["bkwmlq"]}=${${"GLOBALS"}["cdanniq"]}["mail_list"][${$euvusmmfewi}]["subject"];${${"GLOBALS"}["trkiarldn"]}=${${"GLOBALS"}["cdanniq"]}["mail_list"][${${"GLOBALS"}["simqodlvy"]}]["datetime2"];${"GLOBALS"}["joqfkdelqs"]="a";${${"GLOBALS"}["giyjjuhih"]}=${$crvudem}["mail_list"][${${"GLOBALS"}["joqfkdelqs"]}]["mail_id"];echo"<div Class='Success'>
From: $id1<Hr>
<div class='BoxContent fadeIn second'>
<p>OTP!</p> $sub1<Hr >
Time: $time1</div>";echo"</div><center>

<form method='post' action=''><font color='yellow'><b></b></font> <label></label>
    
 
</form></div></fieldset>";${$lsyqqssyhmf}++;${${"GLOBALS"}["vgsieaie"]}--;}}}else{${"GLOBALS"}["isdywedxid"]="l";${"GLOBALS"}["dusbsqaq"]="headers";${"GLOBALS"}["jkkqfweby"]="one";${"GLOBALS"}["atirxjaaer"]="device";${"GLOBALS"}["mbfhjjyv"]="ch";${${"GLOBALS"}["saofbzvbaju"]}=RandomNumber(8);$hequkmrf="ch";${${"GLOBALS"}["atirxjaaer"]}=RandomNumber(16);${"GLOBALS"}["bdihfhrwkmb"]="ch";${${"GLOBALS"}["ybkmzuwyfj"]}=RandomNumber(30);${${"GLOBALS"}["utldbuozzl"]}=rando(16);$xyroclopae="headers";$twjiyibhxdy="imo";${${"GLOBALS"}["pskfdesmq"]}=RandomNumber(3);$yhrkdgwdcru="url1";${${"GLOBALS"}["caysocr"]}=RandomNumber(42);${$twjiyibhxdy}=RandomNumber(15);${${"GLOBALS"}["isdywedxid"]}=time();${${"GLOBALS"}["yvucgzqti"]}="21b6e$imei$i8$b";$znfompvgnx="one";${${"GLOBALS"}["wgyqiq"]}="https://10minutemail.net/address.api.php?new=1&sessionid=$hh&_=$l";${"GLOBALS"}["btljyqoqm"]="ch";${$xyroclopae}=["Content-Type:application/x-www-form-urlencoded","Host: 10minutemail.net","Connection: Keep-Alive","Accept-Encoding: gzip","User-Agent: okhttp/3.12.1"];${${"GLOBALS"}["qxctqnfg"]}=curl_init();${"GLOBALS"}["ocwcijz"]="json";curl_setopt(${${"GLOBALS"}["mbfhjjyv"]},CURLOPT_URL,${$yhrkdgwdcru});curl_setopt(${${"GLOBALS"}["bdihfhrwkmb"]},CURLOPT_HEADER,0);curl_setopt(${${"GLOBALS"}["btljyqoqm"]},CURLOPT_HTTPHEADER,${${"GLOBALS"}["dusbsqaq"]});curl_setopt(${$hequkmrf},CURLOPT_SSL_VERIFYHOST,0);curl_setopt(${${"GLOBALS"}["qxctqnfg"]},CURLOPT_SSL_VERIFYPEER,0);curl_setopt(${${"GLOBALS"}["qxctqnfg"]},CURLOPT_ENCODING,"gzip");curl_setopt(${${"GLOBALS"}["qxctqnfg"]},CURLOPT_RETURNTRANSFER,TRUE);curl_setopt(${${"GLOBALS"}["qxctqnfg"]},CURLOPT_FOLLOWLOCATION,1);${$znfompvgnx}=curl_exec(${${"GLOBALS"}["qxctqnfg"]});curl_close(${${"GLOBALS"}["qxctqnfg"]});${${"GLOBALS"}["ocwcijz"]}=json_decode(${${"GLOBALS"}["jkkqfweby"]},true);${${"GLOBALS"}["qtmbryvo"]}=${${"GLOBALS"}["cdanniq"]}["mail_get_mail"];${${"GLOBALS"}["tfumft"]}=${${"GLOBALS"}["cdanniq"]}["session_id"];if(${${"GLOBALS"}["qtmbryvo"]}==true){echo"<script>      
function scripterarmy() 
{
  var copyText = document.getElementById(\"myInput\");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand(\"copy\");
  alert(\"Copied the Mail Id: \" + copyText.value);
}
</script>";echo"<div>
<div class='second'>
<p></p></div>
<input type='text' class='input' value='$e' id='myInput' >
<div class='telegram' 	 <input type='submit' 
<button onclick='scripterarmy()'><div class='BoxContent fadeIn second'>
 <p>Copy Mail!</p>
</div>
<form method='POST' action=''> </div>
   <input type='hidden'  value='$hh' name='hh'>
  
	 <input type='submit' class= 'submit' name='submit' value='Show Mails'></div>";}else{Echo"<Div Class='Error'>
    Please Wait While Generation New Temp-Mail Id </div> <meta http-equiv=refresh content=0.5>";}}

    




?>


<div id="formFooter">
        <a class="underlineHover" href="https://t.me/abirs_house">𝐽𝑂𝐼𝑁 𝑂𝑈𝑅 𝑇𝐸𝐿𝐸𝐺𝑅𝐴𝑀 𝐶𝐻𝐴𝑁𝑁𝐸𝐿?</a>
      </div>
       
       
       
  <div id="formFooter">
      <a class="underlineHover" >Free Mal - ꧁ Grandpa JoKER ꧂</a>
  </div>
    
    </html>
