<?php if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>
<div class="wrap-license" id="<?php echo esc_attr( 'wrap_license_' . $license_reference ); ?>" data-nonce="<?php echo esc_attr( wp_create_nonce( 'license_nonce' ) ); ?>">
	<p class="license-message<?php echo ( ! $show_license ) ? esc_attr( ' hidden' ) : ''; ?>"><?php // @codingStandardsIgnoreLine ?>
		<span class="current-license-error hidden"></span> <span class="current-license-label">Current license:</span> <span class="current-license"><?php echo esc_html( $license ); ?></span>
	</p>
	<p>
		<label>Apply changes to License Key:</label> <input class="regular-text license" type="text" id="<?php echo esc_attr( 'license_key_' . $license_reference ); ?>" value="" >
		<input type="button" value="Activate" class="button-primary activate-license" />
		<input type="button" value="Deactivate" class="button deactivate-license" />
	</p>
</div>
