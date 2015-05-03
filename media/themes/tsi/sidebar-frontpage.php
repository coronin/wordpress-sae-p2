<?php
/*
  Theme's Front Page Right Sidebar Area
 */
?>

<div id="right-sidebar"><!-- from sidebar-frontpage.php -->
<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>

                <aside class="widget">
                    <h3 class="widget-title">Archives</h3>
                    <ul>
                        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                    </ul>
                </aside>

                <aside id="meta" class="widget">
                    <h3 class="widget-title">Meta</h3>
                    <ul>
                        <?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li>
                        <?php wp_meta(); ?>
                    </ul>
                </aside>

<?php endif; ?>
</div>