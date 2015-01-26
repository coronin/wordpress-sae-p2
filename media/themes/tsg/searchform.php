

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label for="s" class="assistive-text"><?php _e( '', 'tsg2011' ); ?></label>
        <input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search Text Here', 'tsg2011' ); ?>" />
        <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'tsg2011' ); ?>" />
</form>