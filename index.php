<!DOCTYPE html> 
<html> 
 
<head> 
  <title>Hacked By SecurityWeb </title>
    <meta charset="UTF-8"> 
    <meta name="Author" content="Klaif"/> 
    <meta name="copyright" content="Hacker"/> 
    <meta name="description" content="Website Hacked by KlAiF"/> 
    <link href='http://fonts.googleapis.com/css?family=Iceland:400,700' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Iceland:400,700' rel='stylesheet' type='text/css'> 
    <meta property="og:image" content=""> 
        <style type="text/css"> 
            body { 
                overflow:hidden; 
         
                background-color: #000000; 
                background-repeat:no-repeat; 
                background-size: 100% ; 
                background-position:top center; 
                margin: 0px; 
                cursor:none; 
                font-family: Iceland, sans-serif; 
            } 
            a{ 
                text-decoration: none; 
            } 
            h1{ 
            font-family: Iceland, sans-serif; 
            font-size:90px; 
            color:#fff; 
            margin:0px 0px 0px; 
             
            } 
            h2{ 
            font-family: Iceland, sans-serif; 
            font-size:40px; 
            color:#000; 
            margin: 0px; 
            text-shadow: 0 0 3px #fff; 
             
            } 
            p{ 
            color:#fff; 
            font-size:25px; 
            margin: 0px; 
            text-shadow: 0 0 3px #ff0099; 
 
            } 
            .fot{ 
            font-family: Iceland, sans-serif; 
            font-size:14px; 
            color:#fff; 
            margin: 0px; 
            text-shadow: 0 0 3px #000, 0px 0px 5px #000; 
            } 
             h1{ 
            color:#000; 
            text-shadow: 0 0 5px #fff; 
        } 
        .greets{ 
    font-family: Arial, sans-serif; 
    line-height: 24px; 
    font-size: 11px; 
    width: 50%; 
    background: #000; 
    opacity: 0.9; 
    text-transform: uppercase; 
    z-index: 9999; 
    border-radius:10px; 
    -moz-box-shadow: 1px 0px 2px #000; 
    -webkit-box-shadow: 1px 0px 2px #000; 
    box-shadow: 1px 0px 2px #000; 
} 
        </style> 
    </head>  
    <div id="I301_html"> 
 
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script> 
 
<script type="text/javascript">setTimeout("$('#loading').fadeOut(5000);", 10000);  </script> 
 
<style type="text/css">#loading{position:fixed;top:0;left:0;padding-top:0px;background-color:#000;width:100%;height:100%;color:black;z-index:9000;overflow:hidden;}</style> 
  
<div id="loading"> 
<body onload="document.f.p.focus()" topmargin="0" leftmargin="0" bgcolor="#000000" marginheight="0" marginwidth="0"> 
<table border="0" cellpadding="2" cellspacing="0" width="100%"> 
<tbody><tr>  
 
 
</tr> 
     
<tr> 
 
 
 
</tr> 
</tbody></table>  
<font id="ResponseData" color="#ff99cc"> 
<pre><script type="text/javascript"> 
TypingText = function(element, interval, cursor, finishedCallback) { 
  if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) { 
    this.running = true;    // Never run. 
    return; 
  } 
  this.element = element; 
  this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; }); 
  this.interval = (typeof interval == "undefined" ? 100 : interval); 
  this.origText = this.element.innerHTML; 
  this.unparsedOrigText = this.origText; 
  this.cursor = (cursor ? cursor : ""); 
  this.currentText = ""; 
  this.currentChar =0; 
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
  for(var i = 0; i < TypingText.all.
  length; i++) TypingText.all[i].run(); 
} 
TypingText.prototype.run = function() { 
  if(this.running) return; 
  if(typeof this.origText == "undefined") { 
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);    // We haven't finished loading yet.  Have patience. 
    return; 
  } 
  if(this.currentText == "") this.element.innerHTML = ""; 
//  this.origText = this.origText.replace(/<([^<])*>/, "");     // Strip HTML from text. 
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
<script> 
function disableselect(e){return false} 
 
function reEnable(){return true} 
 
//if IE4+ 
document.onselectstart=new Function ("return false") 
 
//if NS6 
if (window.sidebar){ 
document.onmousedown=disableselect 
document.onclick=reEnable 
} 
</script> 
<script> 
var message=""; 
function clickIE() 
 
{if (document.all) 
{(message);return false;}} 
 
function clickNS(e) { 
if 
(document.layers||(document.getElementById&&!document.all)) 
{ 
if (e.which==2||e.which==3) {(message);return false;}}} 
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.  onmousedown=clickNS;} 
else 
{document.onmouseup=clickNS;document.oncontextmenu  =clickIE;} 
 
document.oncontextmenu=new Function("return false") 
</script> 
 
<table style=" background-repeat: no-repeat;"  align="right" border="0" width="100%" > 
 
<br> 
 
<tbody><tr> 
<td  valign="top"><p id="hack" > 
 
<br> 
<br> 
<font style="color:#ffffff;text-shadow:#FF0099 0px 0px 10px"> &nbsp;&nbsp;&nbsp;&nbsp;<b>[+] Am Now In Your System...        </font> <br> 
<font style="color:#ffffff;text-shadow:#FF0099 0px 0px 10px"> &nbsp;&nbsp;&nbsp;&nbsp;<b>[+] #Dear admin your webiste is down  </font><br> 
<font style="color:#ffffff;text-shadow:#FF0099 0px 0px 10px"> &nbsp;&nbsp;&nbsp;&nbsp;<b>[+] Your Security Is So SLow </font><br> 
<font style="color:#ffffff;text-shadow:#FF0099 0px 0px 10px"> &nbsp;&nbsp;&nbsp;&nbsp;<b>[+] <font style="color:red;text-shadow:#000 0px 0px 3px">Telegram </font><font style="color:white;text-shadow:#000 0px 0px 3px">@Securittweb</font>  [+]         </font> <br> 
                     <font color="White">  
     
           
</p></tr> 
</tbody></table>                 </div>  
<br> 
 
<script type="text/javascript">
new TypingText(document.


getElementById("hack"), 50, function(i) { var ar = new Array("_",""); return " " + ar[i.length % ar.length]; }); 
TypingText.runAll(); 
 
</script> 
 
    <style>  
  
      td 
  
      { 
  
        background-color: #000000; 
  
        font-family: Courier New; 
  
        font-size:20px; 
  
        color:#000000; 
  
        border-color: #000000; 
  
        border-width:1pt; 
  
        border-style:solid; 
  
        border-collapse:collapse; 
  
        padding:0pt 3pt; 
  
        vertical-align:top; 
  
      } 
  
      table 
  
      { 
  
        border-color: #88aace; 
  
        border-width:0pt 1pt; 
  
        border-style:dash; 
  
      } 
  
      A:Link, A:Visited 
  
      { 
  
        color: #88aace; 
  
      } 
  
      A.no:Link, A.no:Visited 
  
      { 
  
        color: #88aace; 
  
        text-decoration: none; 
  
      } 
  
      A:Hover, A:Visited:Hover , A.no:Hover, A.no:Visited:Hover 
  
      { 
  
        color: #88aace; 
  
        background-color:#2e2e2e; 
  
        text-decoration: 
  
        overline underline; 
  
      } 
  
      .style1 
  
      { 
  
        color: #88aace 
  
      } 
  
      .style2 
  
      { 
  
        color: 1f1f1f 
  
      } 
  
      body 
  
      { 
  
        color:white; 
          
        background-position:right; 
  
        background-attachment:fixed; 
  
        </div> 
  
      } 
  
    </style> 
         
  
</div> 
 
</div> 
<body oncontextmenu="return false" onkeydown="return false"> 
<center> 
<h2 class="glow"><font style="color:white;text-shadow:#000 0px 0px 3px"></font><font style="color:red;text-shadow:#000 0px 0px 3px"></font><font style="color:white;text-shadow:#000 0px 0px 3px"> Hacked 𝙱𝚢 SecurityWeb</font> 
<font style="color:green;text-shadow:#000 0px 0px 3px"></font></h2> 
<img src="https://1.bp.blogspot.com/-r9z7gno_Kmc/WKzuDapzzkI/AAAAAAAAAfs/iEco8UwEuiMxvovwEGuLcZkO0AN8mfxBQCLcB/s1600/logo%2B5.jpg"width="350"height="350"> 
<h2 class="glow2" ><font style="color:white;text-shadow:#000 0px 0px 3px">.::Pawned By::.</font><br> <span style="color:gray;font-family:Iceland;text-shadow:white 0px 0px 10px">./</span><span style="color:#ffffff;font-family:Iceland;text-shadow:#FF0099 0px 0px 10px">@Securittweb</b></h2> 
<p><b><font style="color:whitw;text-shadow:#000 0px 0px 3px">#Web sitenizde tehlikeli bir güvenlik açığı tespit ettik. Bu açık, sitenizin kontrolünü tamamen kaybetmenize neden olabilir. <br> Kötü niyetli saldırganlar her an harekete geçebilir. Zaman aleyhinize işliyor! </font> 
<br><font style="color:yellow;text-shadow:#000 0px 0px 3px">Telegram İletişim: @Securittweb

            </font> 
            </p> 
        </span> 
<div class="greets"> 
<table align=center border="0"> 
<tr> 
<td width=100% id=greetz> 
<marquee behavior="scroll" direction="left" scrollamount="4" scrolldelay="55" width="100%"> 
<font size="5px" style="font-family: Iceland, sans-serif;color:white;text-shadow: 0 0 3px red, 0px 0px 5px red" > 
<b>Hiç Bir Sistem Güvenli Dğeildir.</font> 
</marquee> 
</td> 
</table></div>  
<div class="fot"> 
Copyrights &copy; HaCkER 
</div> 
</center> 
</body> 
<object data="http://flash-mp3-player.net/medias/player_mp3.swf" width="0" height="0" type="application/x-shockwave-flash"><param value="#ffffff" name="bgcolor"><param value="mp3=http://zizka.free.fr/_muisc/04-kanye_west-amazing_ft._young_jeezy-(HHKingz.net).mp3&amp;loop=1&amp;autoplay=1&amp;volume=125" name="FlashVars"></object>
