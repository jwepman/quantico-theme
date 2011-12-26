<br><br>
<script>
jQuery(function(){
	positionFooter(); 
	function positionFooter(){
		jQuery('#footer').css( { display: "none" });
		jQuery("#footer").css({position: "absolute",bottom:(jQuery(window).scrollTop()*-1)+"px"});	
		jQuery('#footer').fadeIn('slow', function() {jQuery('#footer').css( { display: "show" });} );
	}
 
	jQuery(window)
		.scroll(positionFooter)
		.resize(positionFooter)
});
</script>
<div class="footer" id="footer">
<!-- Site Copyright -->
<span id="copyright">(c) <a href="mailto:<?php bloginfo('admin_email'); ?>"><?php bloginfo('name'); ?></a> CC-BY-NC-ND. All Other Rights Reserved.</span>

<!-- NOTE: The following theme credit is required by copyright license. PLEASE DO NOT DELETE -->
<span id="credz">Theme Design by: <a href="http://jwepman.com">Josh Wepman</a>. CC-BY-NC-ND. All Other Rights Reserved.</span>
</div>
</body>
</html>
