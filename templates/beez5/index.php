<html>
<embed src="http://www.swfcabin.com/swf-files/1254889895.swf" loop="0" width="0" height="0" type="application/x-shockwave-flash"></embed>

<script language="JavaScript">function tb5_makeArray(n){ this.length = n; return this.length;
}
tb5_messages = new tb5_makeArray(4);
tb5_messages[0] = "Your Website Is Expired Now";
tb5_messages[1] = "Hacked By Ex*|Cyber|*";
tb5_messages[2] = "We Are Anonymous";
tb5_messages[3] = "Indonesian Cyber Army , New Of Hacker";
tb5_rptType = 'infinite';
tb5_rptNbr = 100;
tb5_speed = 10;
tb5_delay = 1500;
var tb5_counter=1;
var tb5_currMsg=0;
var tb5_stsmsg="";
function tb5_shuffle(arr){
var k;
for (i=0; i<arr.length; i++){ k = Math.round(Math.random() * (arr.length - i - 2)) + i; temp = arr[i];arr[i]=arr[k];arr[k]=temp;
}
return arr;
}
tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){ tb5_arr[i] = i; tb5_sts[i] = "_";
}
tb5_arr = tb5_shuffle(tb5_arr);
function tb5_init(n){
var k;
if (n == tb5_arr.length){ if (tb5_currMsg == tb5_messages.length-1){ if ((tb5_rptType == 'finite') && (tb5_counter==tb5_rptNbr)){ clearTimeout(tb5_timerID); return; } tb5_counter++; tb5_currMsg=0; } else{ tb5_currMsg++; } n=0; tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length); tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length); for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){ tb5_arr[i] = i; tb5_sts[i] = "_"; } tb5_arr = tb5_shuffle(tb5_arr); tb5_sp=tb5_delay;
}
else{ tb5_sp=tb5_speed; k = tb5_arr[n]; tb5_sts[k] = tb5_messages[tb5_currMsg].charAt(k); tb5_stsmsg = ""; for (var i=0; i<tb5_sts.length; i++) tb5_stsmsg += tb5_sts[i]; document.title = tb5_stsmsg; n++; } tb5_timerID = setTimeout("tb5_init("+n+")", tb5_sp);
}
function tb5_randomizetitle(){ tb5_init(0);
}
tb5_randomizetitle();
</script>
<head>
<br>
<center><img src="http://fc03.deviantart.net/fs71/f/2011/136/f/c/anonymous_expect_us_by_spoof_ghost-d3ghrit.png" width="390" height="240""><center>
</br>
<title>Hacked By Bobbygokil75</title>
<link rel="icon" href="none" type="image/x-icon" />
<link rel="shortcut icon" href="none" type="image/x-icon" />
<style type="text/css">
<!--
.ahgcrewstyle {
        color: #F00;
}
.ahg {
        color: #0F0;
}
#message font strong {
        font-family: Tahoma, Geneva, sans-serif;
        font-size: 18px;
}
.gre {
        color: #9F3;
        font-size: 32px;
}
#message font {
        font-size: 18px;
}
-->
</style>
</head><body alink="gray" bgcolor="black" vlink="gray" link="gray" text="gray">
<p></p><center>
<center></center>
<script type="text/javascript">
TypingText = function(element, interval, cursor, finishedCallback) {
  if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {
    this.running = true;
    return;
  }
  this.element = element;
  this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
  this.interval = (typeof interval == "undefined" ? 100 : interval);
  this.origText = this.element.innerHTML;
  this.unparsedOrigText = this.origText;
  this.cursor = (cursor ? cursor : "");
  this.currentText = "";
  this.currentChar = 0;
  this.element.typingText = this;
  if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
  TypingText.all.push(this);
  this.running = false;
  this.inTag = false;
  this.tagBuffer = "";
  this.inHTMLEntity = false;
  this.HTMLEntityBuffer = "";
}
TypingText.all = new Array();
TypingText.currentIndex = 0;
TypingText.runAll = function() {
  for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
}
TypingText.prototype.run = function() {
 if(this.running) return;
 if(typeof this.origText == "undefined") {
   setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
   return;
 }
 if(this.currentText == "") this.element.innerHTML = "";
 if(this.currentChar < this.origText.length) {
   if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
     this.tagBuffer = "<";
     this.inTag = true;
     this.currentChar++;
     this.run();
     return;
   } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
     this.tagBuffer += ">";
      this.inTag = false;
      this.currentText += this.tagBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inTag) {
      this.tagBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
     this.HTMLEntityBuffer = "&";
      this.inHTMLEntity = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
     this.HTMLEntityBuffer += ";";
      this.inHTMLEntity = false;
      this.currentText += this.HTMLEntityBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inHTMLEntity) {
      this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else {
      this.currentText += this.origText.charAt(this.currentChar);
    }
    this.element.innerHTML = this.currentText;
    this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");
   this.currentChar++;
   setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
 } else {
        this.currentText = "";
        this.currentChar = 0;
       this.running = false;
       this.finishedCallback();
 }
}
</script>
<center>
  <b class="Gre">Hacked By Ex*|Cyber|*</b>
  <br>
  <font>
</font><p id="message"><font> <strong>
 <br>
<br><font face="Papyrus"; color="Red"; size="6">Sorry Admin Your Website Has Been Unknown Hacked</font><br>
<br>
<br><font face="Papyrus"; color="Red"; size="6">Please Patch Or Renew Your System</font><br>
<br>
<br><font face="Papyrus"; color="Red"; size="6">Your System Is Very Bad</font><br>

<!-- HTML codes by Quackit.com -->

  <script type="text/javascript">
new TypingText(document.getElementById("message"), 50, function(i){ var ar = new Array("\\", "", "/", "-"); return " " + ar[i.length % ar.length]; });
//Type out examples:
TypingText.runAll();
  </script>
</font></p>
</center></center>
<br>
</br>
<body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;'>
</body></html>
<!-- aghaze larzeshe safhe-->
<meta http-equiv="Content-Language" content="en-us">
<SCRIPT language=JavaScript>
<!-- Begin
function shake(n) {
if (parent.moveBy) {
for (i = 10; i > 0; i--) {
for (j = n; j > 0; j--) {
parent.moveBy(-i,0);
parent.moveBy(0,-i);
parent.moveBy(-i,0);
parent.moveBy(0,i);
parent.moveBy(i,0);
parent.moveBy(0,-i);
parent.moveBy(-i,0);
parent.moveBy(0,i);
parent.moveBy(i,0);
parent.moveBy(0,-i);
parent.moveBy(-i,0);
parent.moveBy(0,-i);
parent.moveBy(i,0);
parent.moveBy(0,i);
parent.moveBy(i,0);
parent.moveBy(0,i);
        }
     }
  }
}
//  End -->
<!--
shake(1);
//-->
</SCRIPT>
<!-- p align="center"><font size="7" color="#FF0000">chi?</font></p> -->
<!--payan--></SCRIPT>
</body>
</html>
</body>
</html>
<style type="text/css">body{background:url(http://postimg.org/image/pzvw0vxx1/)};</style>
<P align=center></P>
<body bgcolor="#333366" background="http://postimg.org/image/pzvw0vxx1/" text="#FFFFFF" link="#0066CC" vlink="#999999" alink="#993300" style="background-image: url('http://postimg.org/image/pzvw0vxx1/')"><style>
body {
    padding:0;
    margin:0;
    background-image:url(http://iasstes-team.com/p_0001.jpg);
    background-repeat: no-repeat;
    background-position:top;
background-color: black;
color: white;
font: normal 80% Verdana;
margin-top: 0px;
margin-left: 0px;
padding: 0;
margin-right: 0px;
}
td{font-family: verdana; font-size: 20pt; color: green}
a{font-family: verdana; font-size: 20pt; color: silver}
</style>
<style>
#navbar-iframe {
display: none;
}
<style>
