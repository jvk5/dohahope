<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GoodHope</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" type="text/css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="css/owl.carousel.min.css" type="text/css" rel="stylesheet" />
    <link href="css/owl.theme.default.min.css" type="text/css" rel="stylesheet" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
  
   <?php include "header.php";?>

    <div class="contact-us-page">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Contact Us</h2>
          </div>
          <div class="col-12">
            <div class="contact-us-location-wrapper" style="background-image: url(images/bg-contact-us-location.png);">
              <div class="row">
                <div class="col-md-6 col-4">
                  <div class="contact-location-map"></div>
                <img src="images/Untitled-1.jpg" style="width:100%;height:auto">
                </div>
                <div class="col-md-6 col-12">
                  <h3>GOOD HOPE TRADING AND CONTRACTING W.L.L</h3>
                  <p>New Al Wakra, Doha - Qatar<br>
Po.Box : 203316<br>
MOB :+974 66142443<br>
MOB :+974 70792572<br>
Email: info@goodhopeqatar.com</p>
                </div>
              </div>
              
    <iframe
      id="JotFormIFrame-220025429665050"
      title="Form"
      onload="window.parent.scrollTo(0,0)"
      allowtransparency="true"
      allowfullscreen="true"
      allow="geolocation; microphone; camera"
      src="https://form.jotform.com/220025429665050"
      frameborder="0"
      style="
      min-width: 100%;
      height:539px;
      border:none;"
      scrolling="no"
    >
    </iframe>
    <script type="text/javascript">
      var ifr = document.getElementById("JotFormIFrame-220025429665050");
      if (ifr) {
        var src = ifr.src;
        var iframeParams = [];
        if (window.location.href && window.location.href.indexOf("?") > -1) {
          iframeParams = iframeParams.concat(window.location.href.substr(window.location.href.indexOf("?") + 1).split('&'));
        }
        if (src && src.indexOf("?") > -1) {
          iframeParams = iframeParams.concat(src.substr(src.indexOf("?") + 1).split("&"));
          src = src.substr(0, src.indexOf("?"))
        }
        iframeParams.push("isIframeEmbed=1");
        ifr.src = src + "?" + iframeParams.join('&');
      }
      window.handleIFrameMessage = function(e) {
        if (typeof e.data === 'object') { return; }
        var args = e.data.split(":");
        if (args.length > 2) { iframe = document.getElementById("JotFormIFrame-" + args[(args.length - 1)]); } else { iframe = document.getElementById("JotFormIFrame"); }
        if (!iframe) { return; }
        switch (args[0]) {
          case "scrollIntoView":
            iframe.scrollIntoView();
            break;
          case "setHeight":
            iframe.style.height = args[1] + "px";
            break;
          case "collapseErrorPage":
            if (iframe.clientHeight > window.innerHeight) {
              iframe.style.height = window.innerHeight + "px";
            }
            break;
          case "reloadPage":
            window.location.reload();
            break;
          case "loadScript":
            if( !window.isPermitted(e.origin, ['jotform.com', 'jotform.pro']) ) { break; }
            var src = args[1];
            if (args.length > 3) {
                src = args[1] + ':' + args[2];
            }
            var script = document.createElement('script');
            script.src = src;
            script.type = 'text/javascript';
            document.body.appendChild(script);
            break;
          case "exitFullscreen":
            if      (window.document.exitFullscreen)        window.document.exitFullscreen();
            else if (window.document.mozCancelFullScreen)   window.document.mozCancelFullScreen();
            else if (window.document.mozCancelFullscreen)   window.document.mozCancelFullScreen();
            else if (window.document.webkitExitFullscreen)  window.document.webkitExitFullscreen();
            else if (window.document.msExitFullscreen)      window.document.msExitFullscreen();
            break;
        }
        var isJotForm = (e.origin.indexOf("jotform") > -1) ? true : false;
        if(isJotForm && "contentWindow" in iframe && "postMessage" in iframe.contentWindow) {
          var urls = {"docurl":encodeURIComponent(document.URL),"referrer":encodeURIComponent(document.referrer)};
          iframe.contentWindow.postMessage(JSON.stringify({"type":"urls","value":urls}), "*");
        }
      };
      window.isPermitted = function(originUrl, whitelisted_domains) {
        var url = document.createElement('a');
        url.href = originUrl;
        var hostname = url.hostname;
        var result = false;
        if( typeof hostname !== 'undefined' ) {
          whitelisted_domains.forEach(function(element) {
              if( hostname.slice((-1 * element.length - 1)) === '.'.concat(element) ||  hostname === element ) {
                  result = true;
              }
          });
          return result;
        }
      };
      if (window.addEventListener) {
        window.addEventListener("message", handleIFrameMessage, false);
      } else if (window.attachEvent) {
        window.attachEvent("onmessage", handleIFrameMessage);
      }
      </script>
            </div>
          </div>
          <div class="col-12">
            <div class="contact-connect-us">
              <h3>Connect Us On</h3>
              <ul class="social-link">
                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

      <?php include "footer.php";?>


    <script src="js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>

  </body>
</html>
