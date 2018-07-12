<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>Demo: Explicit render of a Classroom share button</title>
    <link href="http://www.example.com" />
    <script>
      window.___gcfg = {
        parsetags: 'explicit'
      };
      function renderWidget() {
        gapi.sharetoclassroom.render("widget-div",
            {"url": "http://www.google.com"} );
      }
    </script>
    <script src="https://apis.google.com/js/platform.js">
    </script>
  </head>
  <body>
    <a href="#" onClick="renderWidget();">Render the Classroom share button</a>
    <div id="widget-div"></div>
  </body>
</html>