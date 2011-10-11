<li class="social-accounts-item">
	<input type="hidden" name="social_save_url" value="<?php echo esc_url(admin_url('?social_controller=settings&social_action=save_facebook_pages&account_id='.$account->id())); ?>" />
	<div class="social-<?php echo $key; ?>-icon"><i></i></div>
	<span class="name">
		<?php
			echo $name;

			if ($account->use_pages()) {
				echo '<span> - <a href="'.esc_url(admin_url('?social_controller=settings&social_action=get_facebook_pages&account_id='.$account->id())).'" class="social-manage-facebook-pages">'.__('Manage Pages', Social::$i18n).'</a></span>';
			    echo '<img src="'.esc_url(admin_url('images/wpspin_light.gif')).'" class="social-facebook-pages-spinner" />';
			}
		?>
	</span>
	<span class="disconnect"><?php echo $disconnect; ?></span>
	<?php if ($account->use_pages()): ?>
	<div class="social-facebook-pages"></div>
	<?php endif; ?>
</li>
