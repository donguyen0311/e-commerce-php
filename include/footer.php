<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'f45eba9e-888b-4d5b-9bc6-5d78e18825d6', f: true }); done = true; } }; })();</script>	
<!-- footer -->
<div class="footer">
	<div class="container">
		<?php  
			include("footer_left.php");
			include("footer_right.php");
			include("footer_clearfix.php");
			include("footer_copyright.php");
		?>
	</div>
</div>
<!-- //footer -->