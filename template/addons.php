<?php
$media_files_addon_installed = file_exists( WP_PLUGIN_DIR . '/wp-migrate-db-pro-media-files/wp-migrate-db-pro-media-files.php' );
$media_files_addon_activated_msg = '';
if ( $media_files_addon_installed ) {
	$media_files_addon_activated_msg = is_plugin_active( 'wp-migrate-db-pro-media-files/wp-migrate-db-pro-media-files.php' ) ? ' & Activated' : ' - Not Activated';
}

$multi_site_addon_installed = file_exists( WP_PLUGIN_DIR . '/wp-migrate-db-pro-multisite-tools/wp-migrate-db-pro-multisite-tools.php' );
$multi_site_addon_activated_msg = '';
if ( $multi_site_addon_installed ) {
	$multi_site_addon_activated_msg = is_plugin_active( 'wp-migrate-db-pro-multisite-tools/wp-migrate-db-pro-multisite-tools.php' ) ? ' & Activated' : ' - Not Activated';
}

$cli_addon_installed = file_exists( WP_PLUGIN_DIR . '/wp-migrate-db-pro-cli/wp-migrate-db-pro-cli.php' );
$cli_addon_activated_msg = '';
if ( $cli_addon_installed ) {
	$cli_addon_activated_msg = is_plugin_active( 'wp-migrate-db-pro-cli/wp-migrate-db-pro-cli.php' ) ? ' & Activated' : ' - Not Activated';
}
?>
<div class="addons-tab content-tab">
	<div class="addons-content">
		<article class="addon wp-migrate-db-pro-media-files">
			<div class="desc">
				<div class="actions"><span class="status"><?php echo $media_files_addon_installed ? 'Installed' . ' ' . $media_files_addon_activated_msg : 'Not installed'; ?></span></div>
				<h1>Media Files</h1>
				<p>Allows you to push and pull your files in the Media Library between two WordPress installs. It can compare both libraries and only migrate those missing or updated, or it can do a complete copy of one siteu2019s library to another.</p>
			</div>
		</article>
		<article class="addon wp-migrate-db-pro-multisite-tools">
			<div class="desc">
				<div class="actions"><span class="status"><?php echo $multi_site_addon_installed ? 'Installed' . ' ' . $multi_site_addon_activated_msg : 'Not installed'; ?></span></div>
				<h1>Multisite Tools</h1>
				<p>Export a subsite as an SQL file that can then be imported as a single site install.</p>
			</div>
		</article>
		<article class="addon wp-migrate-db-pro-cli">
			<div class="desc">
				<div class="actions"><span class="status"><?php echo $cli_addon_installed ? 'Installed' . ' ' . $cli_addon_activated_msg : 'Not installed'; ?></span></div>
				<h1>CLI</h1>
				<p>Integrates WP Migrate DB Pro with WP-CLI allowing you to run migrations from the command line: <code>wp migratedb &lt;push|pull&gt; &lt;url&gt; &lt;secret-key&gt;</code> <code>[--find=&lt;strings&gt;] [--replace=&lt;strings&gt;] ...</code></p>
			</div>
		</article>
	</div>
</div>