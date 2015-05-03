<?php
/*
  Theme's Search Form
 */
?>

<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div>
  <input type="text" class="field" name="s" placeholder="<?php esc_attr_e( 'Search Text Here', 'tsi' ); ?>" />
  <input type="submit" class="submit" name="submit" value="<?php esc_attr_e( 'Search', 'tsi' ); ?>" />
</div>
</form>