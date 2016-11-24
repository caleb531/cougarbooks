<?php

// Retrieves the URL to the registration page (redirecting to the current page
// after submitting the form)
function cb_get_register_url() {
	return 'register.php?redirect=' . urlencode( $_SERVER['REQUEST_URI'] );
}

// Retrieves the URL to the sign-in page (redirecting to the current page
// after submitting the form)
function cb_get_signin_url() {
	return 'sign-in.php?redirect=' . urlencode( $_SERVER['REQUEST_URI'] );
}

// Redirect to a different page
function cb_redirect( $redirect_path ) {
	header( "Location: $redirect_path");
}

// Redirects a user after sign-in to the page they were on previously (also
// applies to new users after registration)
function cb_redirect_user_signin( $redirect_path ) {
	if ( ! empty( $redirect_path ) ) {
		// redirect to page that the user was on before signing in
		cb_redirect( urldecode( $redirect_path ) );
	} else {
		// redirect to My Ads page if explicit redirect URL is not provided
		cb_redirect( '../../my-ads.php' );
	}
}

// Output a hidden form field containing a redirect path (to be used in Sign In
// and Registration forms)
function cb_embed_redirect_field() {
	?>
	<?php if ( ! empty( $_GET['redirect'] ) ): ?>
		<input type="hidden" name="redirect_path" value="<?php echo $_GET['redirect']; ?>" />
	<?php endif; ?>
	<?php
}

?>
