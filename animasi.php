<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "login1.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT language='JavaScript'>alert("Selamat Datang di blog Star Voice.com, Jangan lupa tinggalkan komentar anda di blog saya serta like facebook dan follow twitter saya ! thanks :)");</SCRIPT>
<link rel="stylesheet" type="text/css" href="head.css">
	  <script src="jquery-1.8.0.min.js"></script>
	  <script src="headline.js"></script>
    <script type="text/javascript"> 
      $(document).ready(function(){
	  		// untuk permulaan, tampilkan content nomor 1 '#slideAwal'
	  		bukaContent($('#slideAwal'),'div1');			
	    });
	  </script>	
<meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0, maximum-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>

#backtop{cursor:pointer;position:fixed!important;position:absolute;bottom:-70px;z-index:99;background-color:red;border:2px solid #333;-webkit-box-shadow:inset 0 0 25px rgba(0,0,0,0.3),0px 1px 5px #333;-moz-box-shadow:inset 0 0 25px rgba(0,0,0,0.3),0px 1px 5px #333;box-shadow:inset 0 0 25px rgba(0,0,0,0.3),0px 1px 5px #333;width:45px;height:45px;overflow:hidden;text-indent:-999px;-webkit-border-top-left-radius: 30px;

-moz-border-radius-topleft: 30px;

border-top-left-radius: 30px;}

#backtop::after{content:&quot;&quot;;position:absolute;top:-4px;left:15px;width:0;height:0;border-width:18px 7px;border-style:solid;border-color:transparent transparent #f7f7f7 transparent;}

</style> 

    <style type='text/css'>
    #outerCircleText {
    font-style: italic;
    font-weight: bold;
    font-family: ALGERIAN;
    color: #ff840a;

    position: absolute;top: 0;left: 0;z-index: 3000;cursor: default;}
    #outerCircleText div {position: relative;}
    #outerCircleText div div {position: absolute;top: 0;left: 0;text-align: center;}

    </style>
    
<script src='js1/snowstorm.js' type='text/javascript'></script>
<style type="text/css">
body {
cursor: url('images/cur.cur'), default;
}
</style>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<link href='logo toko online1.png' rel='shortcut icon' />
<script type='text/javascript'>
//<![CDATA[

msg = " -- WELCOME to ";
msg = " TokoSuperKeren " + msg;pos = 0;
function scrollMSG() {
document.title = msg.substring(pos, msg.length) + msg.substring(0, pos); pos++;
if (pos > msg.length) pos = 0
window.setTimeout("scrollMSG()",200);
}
scrollMSG();
//]]>
</script>

<body>
	<font face="Verdana, Arial, Helvetica, sans-serif" size="3" color="#FF0000">
	<?php
	echo 'welcome : '.$_SESSION['myuser'];
?>

<a href="<?php echo $logoutAction ?>">Log out</a></font>


    <script type="text/javascript" >

    var scrolltotop={
        setting: {startline:100, scrollto: 0, scrollduration:1000, fadeduration:[500, 200]},
        controlHTML: '<img width="150px" hight="150px" src="logo toko online.png" />',
        controlattrs: {offsetx:5, offsety:5},
        anchorkeyword: '#top',
        state: {isvisible:false, shouldvisible:false},
        scrollup:function(){
            if (!this.cssfixedsupport)
                this.$control.css({opacity:0})
            var dest=isNaN(this.setting.scrollto)? this.setting.scrollto : parseInt(this.setting.scrollto)
            if (typeof dest=="string" && jQuery('#'+dest).length==1)
                dest=jQuery('#'+dest).offset().top
            else
                dest=0
            this.$body.animate({scrollTop: dest}, this.setting.scrollduration);
        },
        keepfixed:function(){
            var $window=jQuery(window)
            var controlx=$window.scrollLeft() + $window.width() - this.$control.width() - this.controlattrs.offsetx
            var controly=$window.scrollTop() + $window.height() - this.$control.height() - this.controlattrs.offsety
            this.$control.css({left:controlx+'px', top:controly+'px'})
        },
        togglecontrol:function(){
            var scrolltop=jQuery(window).scrollTop()
            if (!this.cssfixedsupport)
                this.keepfixed()
            this.state.shouldvisible=(scrolltop>=this.setting.startline)? true : false
            if (this.state.shouldvisible && !this.state.isvisible){
                this.$control.stop().animate({opacity:1}, this.setting.fadeduration[0])
                this.state.isvisible=true
            }
            else if (this.state.shouldvisible==false && this.state.isvisible){
                this.$control.stop().animate({opacity:0}, this.setting.fadeduration[1])
                this.state.isvisible=false
            }
        },
      
        init:function(){
            jQuery(document).ready(function($){
                var mainobj=scrolltotop
                var iebrws=document.all
                mainobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest
                mainobj.$body=(window.opera)? (document.compatMode=="CSS1Compat"? $('html') : $('body')) : $('html,body')
                mainobj.$control=$('<div id="topcontrol">'+mainobj.controlHTML+'</div>')
                    .css({position:mainobj.cssfixedsupport? 'fixed' : 'absolute', bottom:mainobj.controlattrs.offsety, right:mainobj.controlattrs.offsetx, opacity:0, cursor:'pointer'})
                    .attr({title:'Scroll Back to Top'})
                    .click(function(){mainobj.scrollup(); return false})
                    .appendTo('body')
                if (document.all && !window.XMLHttpRequest && mainobj.$control.text()!='')
                    mainobj.$control.css({width:mainobj.$control.width()})
                mainobj.togglecontrol()
                $('a[href="' + mainobj.anchorkeyword +'"]').click(function(){
                    mainobj.scrollup()
                    return false
                })
                $(window).bind('scroll resize', function(e){
                    mainobj.togglecontrol()
                })
            })
        }
    }
    scrolltotop.init()
    </script>


<div id="pembungkus">
  <div id="header"><br />
  <img src="logo.png" width="534" height="250"/><font face="tahoma" size="4"></font></div>
<div id="menubar">
  <ul class="menubarmenu">
    <li><a href="index.php">Home</a></li>
    <li><a href="tampil.php">Tampilkan baju</a></li>
    <li><a href="cari.php">Cari Baju</a></li>
    <li><a href="pemesanan.php">Pemesanan</a></li>
    <li><a href="login1.php">Login</a></li>
  </ul>   
  </div>
  
  <div id="sidebarkiri">
  <h1 class="title">Jenis - jenis baju</h1>
  <ul class="workshop">
  	<li><a href="#">JAS PRIA</a></li>
    <li><a href="#">JAS WANITA</a></li>                       
    <li><a href="#">COUPLE</a></li>
    <li><a href="#">PAKAIAN ANAK LAKI - LAKI</a></li>
    <li><a href="#">PAKAIAN ANAK PEREMPUAN</a></li>
    <li><a href="#">PAKAIAN REMAJA PRIA</a></li>
    <li><a href="#">PAKAIAN REMAJA WANITA</a></li>
    <li><a href="#">TOPI &amp; TAS</a></li>
    <li><a href="#">JACKET</a></li>
    <div style="background-color: #FFFFFF;border: 2px solid Lime;font-family: Garamond;font-size: 24px;color: black;padding: 3px;width: 210px;text-align: center;">
<script type="text/javascript">
tday  =new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
tmonth=new Array("January","February","Maret","April","Mei","Juni","July","Agustus","September","Oktober","November","Desember");
function GetClock(){
d = new Date();
nday   = d.getDay();
nmonth = d.getMonth();
ndate  = d.getDate();
nyear = d.getYear();
nhour  = d.getHours();
nmin   = d.getMinutes();
nsec   = d.getSeconds();
if(nyear<1000) nyear=nyear+1900;
if(nhour ==  0) {ap = " AM";nhour = 12;} 
else if(nhour <= 11) {ap = " AM";} 
else if(nhour == 12) {ap = " PM";} 
else if(nhour >= 13) {ap = " PM";nhour -= 12;}if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}
document.getElementById('clockbox').innerHTML=" "+tday[nday]+" "+ndate+" "+tmonth[nmonth]+" "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
setTimeout("GetClock()", 1000);}window.onload=GetClock;</script><div id="clockbox">
</div>
</div>
</ul>
  <h1 class="title">Pakaian Menarik</h1>
  <ul class="workshop">                       
    <div id="divTrigger">
      <a href="javascript:;" onClick="bukaContent(this,'div1')" id="slideAwal">1</a>
      <a href="javascript:;" onClick="bukaContent(this,'div2')">2</a>
      <a href="javascript:;" onClick="bukaContent(this,'div3')">3</a>
      <a href="javascript:;" onClick="bukaContent(this,'div4')">4</a>
    </div>

    <div id="divContent">
      <div id="div1">
 	     <span class="title"></span>
 	     <img src="gambar/Contoh-Desain-Baju-Kaos-Distro-Keren-Lengan-Panjang-Untuk-Pria-Masa-Kini-2015.jpg" width="188" height="224" align="left" />      </div>
<div id="div2">
 	     <span class="title"></span>
 	     <img src="gambar/images.jpg" height="225" align="left" />      </div>
   <div id="div3">
 	     <span class="title"></span>
 	     <img src="gambar/baju-resmi-anak-model-korea-dengan-fake-rompi-keren-umur-2-7-tahun.jpg" width="211" height="224" align="left" />      </div>
<div id="div4">
 	     <span class="title"></span>
 	     <img src="gambar/Kaos-Couple-Papa-Mama.jpg" width="160" height="220" align="left" />      </div>
</div>
  </div>
  
  <div id="content">
    <div class="contentkelas">
       
   <img src="_Leo_Maroon_AK__Kemeja_Pria_Slim_Fit.jpg" width="90%" height="488" />  </div>
  <div class="contentkelas">
    <p><b><u>Selamat Datang di Toko Fashion keren kami</u></b></p>
    <p>&nbsp; Tujuan Pembuatan Web ini adalah untuk memudahkan orang yang hobby membuat suatu buku hasil karya mereka untuk diposting secara Online agar orang lain dapat membeli hasil karya para pembuat buku ini dan mereka dapat selalu berkarya baik di Pasar Offline maupun Pasar Online.</p>
    <p>Sekian dan Terima Kasih atas Kunjungan Anda di Perpustakaan Gramedia Medan</p>
  </div>      
  </div>
  
  <div id="sidebarkanan">
 

  <h1 class="title">Future</h1>
    <video controls autoplay height="120px" width="270px">
  <source src="Garuda Indonesia - Official Global Airline Partner of Liverpool FC - YouTube.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

  <h1 class="title">PROMO FASHION</h1>
  	<img src="68089_116c30e2-f31e-11e3-a00a-f4632523fab8.jpg" width="100" height="70" align="right" /></a>
    <center><p><b>Up to : <u>50%</u></b></p></center>
    <a href="www.facebook.com"> <img src="facebook_icon.gif" width="69%" height="118" align="left" /></a><a href="www.twitter.com"> <img src="follow.gif" width="95" align="left" /></a></div>
</div>

  <div id="footer">
  <h5>TOKO SUPER KEREN HARGA OK</h5>
  </div>

  <script type="text/javascript">
function showHideGB(){
var gb = document.getElementById("gb");
var w = gb.offsetWidth;
gb.opened ? moveGB(0, 30-w) : moveGB(20-w, 0);
gb.opened = !gb.opened;
}
function moveGB(x0, xf){
var gb = document.getElementById("gb");
var dx = Math.abs(x0-xf) > 10 ? 5 : 1;
var dir = xf>x0 ? 1 : -1;
var x = x0 + dx * dir;
gb.style.right = x.toString() + "px";
if(x0!=xf){setTimeout("moveGB("+x+", "+xf+")", 10);}
}
</script>
</body>
</html>
