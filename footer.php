<footer class="site-footer container">
    <div class="footer-content">
    <?php
        $args = array(
            'theme-location'=>'main-menu',
            'container' => 'nav',
            'container_class' => 'footer-menu'
        );
        wp_nav_menu($args);
    ?>
    <p class="copyright">All right reserved.<?php echo get_bloginfo('name')." ".date('Y'); ?>.</p>
    
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>