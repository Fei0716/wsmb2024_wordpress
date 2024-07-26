<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">Copyright &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> - All rights reserved

<?php 
    $link1 =  get_field('twitter');
    if($link1 == null){
        $link1 = "https://twitter.com";
    }

?>
    <a href="<?= $link1?>" title="Click To Visit Our Twitter Page">Twitter</a>


    <?php $link2 =  get_field('facebook');     
        if($link2 == null){
            $link2 = "https://facebook.com";
        } 
    ?>

    <a href="<?= $link2?>" title="Click To Visit Our Facebook Page">Facebook</a>

    <?php $link3 =  get_field('instagram');     
        if($link3 == null){
            $link3 = "https://instagram.com";
        } 
    ?>
    <a href="<?= $link3?>" title="Click To Visit Our Instagram Page">Instagram</a>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>