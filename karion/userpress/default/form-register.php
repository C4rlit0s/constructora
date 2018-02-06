<?php
/**
 * The template for displaying register form.
 *
 * Override this template by copying it to yourtheme/userpress/layoutname/form-register.php
 *
 * @author 		UserPress
 * @package 	UserPress/Templates
 * @version     1.0.0
 */
if (! defined('ABSPATH')) {
    exit(); // Exit if accessed directly
}
?>

<div class="user-press-register text-left">
	<div class="register-form">
		<div class="fields-content">
			<div class="field-group">
				<input id="res_user" type="text" class="input" placeholder="<?php esc_html_e('Name', 'construct'); ?>" data-validate="<?php esc_html_e('Required Field', 'construct'); ?>" data-user-length="<?php esc_html_e('Username too short. At least 4 characters is required.', 'construct'); ?>" data-special-char="<?php esc_html_e("The value of text field can't contain any of the following characters: \ / : * ? \" < > space", 'construct'); ?>">
			</div>
			<div class="field-group">
				<input id="res_pass1" type="password" class="input" data-type="password" placeholder="<?php esc_html_e('Password', 'construct'); ?>" data-validate="<?php esc_html_e('Required Field', 'construct'); ?>" data-pass-length="<?php esc_html_e( 'Password length must be greater than 5.', 'construct' ); ?>">
			</div>
			<div class="field-group">
				<input id="res_pass2" type="password" class="input" data-type="password" placeholder="<?php esc_html_e('Confirm Password', 'construct'); ?>" data-validate="<?php esc_html_e('Required Field', 'construct'); ?>" data-pass-confirm="<?php esc_html_e('Your password and confirmation password do not match.', 'construct'); ?>">
			</div>
			<div class="field-group">
				<input id="res_email" type="text" class="input" placeholder="<?php esc_html_e('Email', 'construct'); ?>" data-validate="<?php esc_html_e('Required Field', 'construct'); ?>"  data-email-format="<?php esc_html_e('The Email address is incorrect!', 'construct'); ?>">
			</div>
			<div class="field-group clearfix">
				<div class="cms-field-checkbox field-terms">
					<input id="check1" type="checkbox" class="check" checked>
					<span class="icon-check"></span>
					<label for="check1"><?php esc_html_e('I agree to the terms & conditions', 'construct');?></label>
				</div>
			</div>
		</div>
		<div class="fields-footer">
			<div class="field-group">
				<button type="button" class="button button-login btn-block btn btn-primary btn-circle"><?php esc_html_e('Sign Up', 'construct');?></button>
			</div>
		</div>
	</div>
</div>