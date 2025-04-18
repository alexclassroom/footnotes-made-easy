<?php
/**
* General Options Page
*
* Screen for specifying general options for the plugin
*
* @package	footnotes-made-easy
* @since	1.0
*/
?>

<div class="wrap">

<h1><?php esc_html_e( 'Footnotes Made Easy', 'footnotes-made-easy' ); ?></h1>

<div class="db-ad">
            <h3><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 68 68"><defs/><rect width="100%" height="100%" fill="none"/><g class="currentLayer"><path fill="#313457" d="M34.76 33C22.85 21.1 20.1 13.33 28.23 5.2 36.37-2.95 46.74.01 50.53 3.8c3.8 3.8 5.14 17.94-5.04 28.12-2.95 2.95-5.97 5.84-5.97 5.84L34.76 33"/><path fill="#313457" d="M43.98 42.21c5.54 5.55 14.59 11.06 20.35 5.3 5.76-5.77 3.67-13.1.98-15.79-2.68-2.68-10.87-5.25-18.07 1.96-2.95 2.95-5.96 5.84-5.96 5.84l2.7 2.7m-1.76 1.75c5.55 5.54 11.06 14.59 5.3 20.35-5.77 5.76-13.1 3.67-15.79.98-2.69-2.68-5.25-10.87 1.95-18.07 2.85-2.84 5.84-5.96 5.84-5.96l2.7 2.7"/><path fill="#313457" d="M33 34.75c-11.9-11.9-19.67-14.67-27.8-6.52-8.15 8.14-5.2 18.5-1.4 22.3 3.8 3.79 17.95 5.13 28.13-5.05 3.1-3.11 5.84-5.97 5.84-5.97L33 34.75"/></g></svg> <?php esc_html_e( 'Thank you for using Footnotes Made Easy!', 'footnotes-made-easy' ); ?></h3>
            <p><?php printf(esc_html__( 'If you enjoy this plugin, do not forget to %1$srate it%2$s! We work hard to update it, fix bugs, add new features and make it compatible with the latest web technologies.', 'footnotes-made-easy' ),'<a href="https://wordpress.org/support/plugin/footnotes-made-easy/reviews/?filter=5" rel="external">','</a>'); ?></p>
            <p></p>
            <p style="font-size:14px">
                <b><?php esc_html_e( 'Featured Plugins:', 'footnotes-made-easy' ); ?></b>&#32;
                <?php printf(esc_html__( '🔥 %1$sQuick Event Calendar%2$s and 🚀 %3$sSearch Engines Blocked in Header%2$s.', 'footnotes-made-easy' ),'<a href="https://wordpress.org/plugins/quick-event-calendar/" target="_blank" rel="external noopener">','</a>','<a href="https://wordpress.org/plugins/search-engines-blocked-in-header/" target="_blank" rel="external noopener">'); ?>
			</p>
			<p><?php printf(esc_html__( 'To learn how to use this plugin, please refer to %1$sthe documentation%2$s.', 'footnotes-made-easy' ),'<a href="https://divibanks.io/wordpress-plugins/footnotes-made-easy/" rel="external" target="_blank">','</a>'); ?></p>
			<p><?php printf(esc_html__( 'If you find this plugin helpful and enjoy using it, consider %1$ssupporting our work with a donation%2$s.', 'footnotes-made-easy' ),'<a href="https://divibanks.io/sponsor/" rel="external" target="_blank">','</a>'); ?></p>
			<p style="font-size:14px">
			<?php printf(esc_html__( 'For WordPress and Divi related content, check out %1$sDivi Banks\' Blog%2$s.', 'footnotes-made-easy' ),'<a href="https://divibanks.io/blog/" target="_blank">','</a>'); ?>
            </p>
        </div>

<?php
if ( !empty( $_POST[ 'save_options' ] ) && ( check_admin_referer( 'footnotes-nonce', 'footnotes_nonce' ) ) ) {
	$message = __( 'Options saved.', 'footnotes-made-easy' );
} else {
	$message = '';
}
?>
	<?php if ( $message !== '' ) { ?>
	<div class="updated"><p><strong><?php echo $message; ?></strong></p></div>
	<?php } ?>

	<form method="post">

		<table class="form-table">

			<tr>
			<th scope="row"><label for="pre_identifier"><?php echo(ucwords(esc_html__( 'identifier', 'footnotes-made-easy' ))); ?></label></th>
			<td>
			<input type="text" size="3" name="pre_identifier" value="<?php echo esc_attr(  $this->current_options[ 'pre_identifier' ] ); ?>" />
			<input type="text" size="3" name="inner_pre_identifier" value="<?php echo esc_attr(  $this->current_options[ 'inner_pre_identifier' ] ); ?>" />
			<select name="list_style_type">
				<?php foreach ( $this->styles as $key => $val ): ?>
				<option value="<?php echo $key; ?>" <?php if ( $this->current_options[ 'list_style_type' ] === $key ) echo 'selected="selected"'; ?> ><?php echo esc_attr( $val ); ?></option>
				<?php endforeach; ?>
			</select>
			<input type="text" size="3" name="inner_post_identifier" value="<?php echo esc_attr(  $this->current_options[ 'inner_post_identifier' ] ); ?>" />
			<input type="text" size="3" name="post_identifier" value="<?php echo esc_attr( $this->current_options[ 'post_identifier' ] ); ?>" />
			<p class="description"><?php esc_html_e( 'This defines how the link to the footnote will be displayed. The outer text will not be linked to.', 'footnotes-made-easy' ); ?></p></td>
			</tr>

			<tr>
			<th scope="row"><label for="list_style_symbol"><?php echo(ucwords(esc_html__( 'symbol', 'footnotes-made-easy' ))); ?></label></th>
			<td><input type="text" size="8" name="list_style_symbol" value="<?php echo $this->current_options[ 'list_style_symbol' ]; ?>" /> <?php esc_html_e( 'If you have chosen a symbol as your list style.', 'footnotes-made-easy' ); ?>
			<p class="description"><?php esc_html_e( 'It\'s not usually a good idea to choose this type unless you never have more than a couple of footnotes per post', 'footnotes-made-easy' ); ?></p></td>
			</tr>

			<tr>
			<th scope="row"><label for="superscript"><?php echo(ucwords(esc_html__( 'superscript', 'footnotes-made-easy' ))); ?></label></th>
			<td><input type="checkbox" name="superscript" <?php checked( $this->current_options[ 'superscript' ], true ); ?> /><?php esc_html_e( 'Show identifier as superscript', 'footnotes-made-easy' ); ?></td>
			</tr>

			<tr>
			<th scope="row"><label for="pre_backlink"><?php echo(ucwords(esc_html__( 'back-link', 'footnotes-made-easy' ))); ?></label></th>
			<td>
			<input type="text" size="3" name="pre_backlink" value="<?php echo esc_attr( $this->current_options[ 'pre_backlink' ] ); ?>" />
			<input type="text" size="10" name="backlink" value="<?php echo $this->current_options[ 'backlink' ]; ?>" />
			<input type="text" size="3" name="post_backlink" value="<?php echo esc_attr( $this->current_options[ 'post_backlink' ] ); ?>" />
			<p class="description"><?php printf(esc_html__( 'These affect how the back-links after each footnote look. A good back-link character is %s. If you want to remove the back-links all together, you can effectively do so by making all these settings blank.', 'footnotes-made-easy' ),'<code>&amp;#8617;</code> (↩)'); ?></p></td>
			</tr>

			<tr>
			<th scope="row"><label for="pre_footnotes"><?php echo(ucwords(esc_html__( 'Footnotes header', 'footnotes-made-easy' ))); ?></label></th>
			<td><textarea name="pre_footnotes" rows="3" cols="60" class="large-text code"><?php echo $this->current_options[ 'pre_footnotes' ]; ?></textarea>
			<p class="description"><?php esc_html_e( 'Anything to be displayed before the footnotes at the bottom of the post can go here.', 'footnotes-made-easy' ); ?></p></td>
			</tr>

			<tr>
			<th scope="row"><label for="post_footnotes"><?php echo(ucwords(esc_html__( 'Footnotes footer', 'footnotes-made-easy' ))); ?></label></th>
			<td><textarea name="post_footnotes" rows="3" cols="60" class="large-text code"><?php echo $this->current_options[ 'post_footnotes' ]; ?></textarea>
			<p class="description"><?php esc_html_e( 'Anything to be displayed after the footnotes at the bottom of the post can go here.', 'footnotes-made-easy' ); ?></p></td>
			</tr>

			<tr>
			<th scope="row"><?php echo(ucwords(esc_html__( 'pretty tooltips', 'footnotes-made-easy' ))); ?></th>
			<td><label for="pretty_tooltips"><input type="checkbox" name="pretty_tooltips" id="pretty_tooltips" <?php checked( $this->current_options[ 'pretty_tooltips' ], true ); ?>/>
			<?php esc_html_e( 'Uses jQuery UI to show pretty tooltips', 'footnotes-made-easy' ); ?></label></td>
			</tr>

			<tr>
			<th scope="row"><?php echo(ucwords(esc_html__( 'combine notes', 'footnotes-made-easy' ))); ?></th>
			<td><label for="combine_identical_notes"><input type="checkbox" name="combine_identical_notes" id="combine_identical_notes" <?php checked( $this->current_options[ 'combine_identical_notes' ], true ); ?>/>
			<?php esc_html_e( 'Combine identical footnotes', 'footnotes-made-easy' ); ?></label></td>
			</tr>

			<tr>
			<th scope="row"><label for="priority"><?php echo(ucwords(esc_html__( 'priority', 'footnotes-made-easy' ))); ?></label></th>
			<td><input type="text" size="3" name="priority" id="priority" value="<?php echo esc_attr( $this->current_options[ 'priority' ] ); ?>" />
			<?php esc_html_e( 'The default is 11', 'footnotes-made-easy' ); ?><p class="description"><?php esc_html_e( 'This setting controls the order in which this plugin executes in relation to others. Modifying this setting may therefore affect the behavior of other plugins.', 'footnotes-made-easy' ); ?></p></td>
			</tr>

			<tr>
			<th scope="row"><?php echo(ucwords(esc_html__( 'suppress Footnotes', 'footnotes-made-easy' ))); ?></th>
			<td>
			<label for="no_display_home"><input type="checkbox" name="no_display_home" id="no_display_home" <?php checked( $this->current_options[ 'no_display_home' ], true ); ?> />&nbsp;<?php echo(ucwords(esc_html__( 'on the home page', 'footnotes-made-easy' ))); ?></label></br>
			<label for="no_display_preview"><input type="checkbox" name="no_display_preview" id="no_display_preview" <?php checked( $this->current_options[ 'no_display_preview' ], true ); ?> />&nbsp;<?php echo(ucwords(esc_html__( 'when displaying a preview', 'footnotes-made-easy' ))); ?></label></br>
			<label for="no_display_search"><input type="checkbox" name="no_display_search" id="no_display_search" <?php checked( $this->current_options[ 'no_display_search' ], true ); ?> />&nbsp;<?php echo(ucwords(esc_html__( 'in search results', 'footnotes-made-easy' ))); ?></label></br>
			<label for="no_display_feed"><input type="checkbox" name="no_display_feed" id="no_display_feed" <?php checked( $this->current_options[ 'no_display_feed' ], true ); ?> />&nbsp;<?php esc_html_e( 'In the feed (RSS, Atom, etc.)', 'footnotes-made-easy' ); ?></label></br>
			<label for="no_display_archive"><input type="checkbox" name="no_display_archive" id="no_display_archive" <?php checked( $this->current_options[ 'no_display_archive' ], true ); ?> />&nbsp;<?php echo(ucwords(esc_html__( 'in any kind of archive', 'footnotes-made-easy' ))); ?></label></br>
			<label for="no_display_category"><input type="checkbox" name="no_display_category" id="no_display_category" <?php checked( $this->current_options[ 'no_display_category' ], true ); ?> />&nbsp;<?php echo(ucwords(esc_html__( 'in category archives', 'footnotes-made-easy' ))); ?></label></br>
			<label for="no_display_date"><input type="checkbox" name="no_display_date" id="no_display_date" <?php checked( $this->current_options[ 'no_display_date' ], true ); ?> />&nbsp;<?php echo(ucwords(esc_html__( 'in date-based archives', 'footnotes-made-easy' ))); ?></label></br>

			</td></tr>

		</table>

		<p><?php esc_html_e( 'Changing the following settings will change functionality in a way which may stop footnotes from displaying correctly. For footnotes to work as expected after updating these settings, you will need to manually update all existing posts with footnotes.', 'footnotes-made-easy' ); ?></p>

		<table class="form-table">

			<tr>
			<th scope="row"><label for="footnotes_open"><?php echo(ucwords(esc_html__( 'begin a footnote', 'footnotes-made-easy' ))); ?></label></th>
			<td><input type="text" size="3" name="footnotes_open" id="footnotes_open" value="<?php echo esc_attr( $this->current_options[ 'footnotes_open' ] ); ?>" /></td>
			</tr>

			<tr>
			<th scope="row"><label for="footnotes_close"><?php echo(ucwords(esc_html__( 'end a Footnote', 'footnotes-made-easy' ))); ?></label></th>
			<td><input type="text" size="3" name="footnotes_close" id="footnotes_close" value="<?php echo esc_attr( $this->current_options[ 'footnotes_close' ] ); ?>" /></td> 
			</tr>

		</table>

		<?php wp_nonce_field( 'footnotes-nonce','footnotes_nonce' ); ?>

		<p class="submit"><input type="submit" name="save_options" value="<?php echo(ucwords(esc_attr__( 'save changes', 'footnotes-made-easy' ))); ?>" class="button-primary" /></p>
		<input type="hidden" name="save_footnotes_made_easy_options" value="1" />

	</form>

	<div class="db-ad">
            <div class="inside">
                <p><?php printf(esc_html__( 'For support, feature requests and bug reporting, please open an issue on %1$sGitHub%2$s.', 'footnotes-made-easy' ),'<a href="https://github.com/divibanks/footnotes-made-easy/issues/" rel="external" target="_blank">','</a>'); ?></p>
                <p>&copy;<?php echo gmdate( 'Y' ); ?> <?php printf(esc_html__( '%1$sDivi Banks%2$s &middot; Building tools that make the lives of WordPress users easy.', 'footnotes-made-easy' ),'<a href="https://divibanks.io" rel="external" target="_blank"><strong>','</strong></a>'); ?></p>
            </div>

</div>
