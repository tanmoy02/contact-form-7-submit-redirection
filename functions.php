<?php

// Contact Form 7 submit redirection
add_action( 'wp_footer', 'adi_redirect_cf7' );
 
function adi_redirect_cf7() {
?>
	<script>
		document.addEventListener( 'wpcf7mailsent', function( event ) {
			var lang = document.querySelector('head link');

			if (lang.hreflang === 'th') {
				location = 'https://domain.name/th/thank-you/';
			} else if (lang.hreflang === 'en') {
				location = 'https://domain.name/thank-you/';
			}
		}, false );
	</script>
<?php
}
?>
