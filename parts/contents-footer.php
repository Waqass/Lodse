<?php
/**
 * The default template for displaying footer content. Used for both single and index/archive/search.
 *
 */

$titan = TitanFramework::getInstance('lodse');
$footer = $titan->getOption ('textfooter');
$imageID = $titan->getOption('logofooter');
$powerlodse = $titan->getOption('footertext1');
$powerwp = $titan->getOption('footertext2');
$facebook = $titan->getOption('fb');
$twitter = $titan->getOption('twitter');
$google = $titan->getOption('google');
if (is_numeric($imageID)){
    $img = wp_get_attachment_image_src($imageID);
    $image = $img[0];
}
?>
    <div class="bottom">
        <div class="row">
            <div class="large-8 medium-8 columns">
                <?php if (isset($image))
                 {
                ?>
                <a href="#" class="logo"><img style="height:40px" alt="logo" src="<?php echo $image;?>"/></a>
                <?php
                 }
                 ?>
                <div class="hidden-for-small">
                    <?php foundationPress_menu_footer(); ?>
                </div>
                <p class="copyright"><?php echo $footer;?> 
                <?php if ($powerlodse == '1')
                 {
                ?>
                Theme by <a href="http://lodse.com">Lodse.com</a>
                <?php
                 }
                 ?>
                </p>
            </div>
            <div class="large-4 medium-4 columns hidden-for-small-only">
                <ul class="inline-list">
                    <li><a href="<?php echo $facebook;?>" class="social"><i class="fi-social-facebook"></i></a></li>
                    <li><a href="<?php echo $twitter;?>" class="social"><i class="fi-social-twitter"></i></a></li>
                    <li><a href="<?php echo $google;?>" class="social"><i class="fi-social-google-plus"></i></a></li>
                </ul>
                <?php if ($powerwp == '1')
                 {
                ?>
                <p class="copyright">Powered by <a href="https://wordpress.org/">WordPress</a></p>
                <?php
                 }
                 ?>
            </div>
        </div>
    </div>