<li class="pull-list">
	<label for="pull">
		<input id="pull" type="radio" value="pull" name="action"<?php echo ( $loaded_profile['action'] == 'pull' ) ? ' checked="checked"' : ''; ?> />
		<?php _ex( 'Pull', 'Import data from remote database', 'wp-migrate-db' ); ?><span class="option-description"><?php _e( 'Replace this site\'s db with remote db', 'wp-migrate-db' ); ?></span>
	</label>
	<ul>
		<li></li>
	</ul>
</li>
<li class="push-list">
	<label for="push">
		<input id="push" type="radio" value="push" name="action"<?php echo ( $loaded_profile['action'] == 'push' ) ? ' checked="checked"' : ''; ?> />
		<?php _ex( 'Push', 'Export data to remote database', 'wp-migrate-db' ); ?><span class="option-description"><?php _e( 'Replace remote db with this site\'s db', 'wp-migrate-db' ); ?></span>
	</label>
	<ul>
		<li></li>
	</ul>
</li>