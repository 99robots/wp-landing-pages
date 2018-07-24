<h1>WP Landing Pages - <?php _e('Home', 'wp-landing-pages'); ?></h1><div style="float: right;"><a href="http://www.intensewp.com/wplp-docs-free-link" target="_blank"><img src="<?php echo plugins_url('images/doc-button.png', __FILE__); ?>" /></a><br />
    <a href="http://www.intensewp.com/istore-wplp-free" target="_blank"><img src="<?php echo plugins_url('images/istore-ad.gif', __FILE__); ?>" /></a></div>
<p><?php _e('Thank you for choosing WP Landing Pages plugin. If you have any support query or your feedback, please feel free to send an email to ', 'wp-landing-pages'); ?>
    <a href="mailto:support@intensewp.com">support@intensewp.com</a>.</p>
<h3><?php _e('Quick Tutorial', 'wp-landing-pages'); ?></h3>
<ul style="list-style: disc inside none;">
    <li><?php _e('To create new landing page, go to WPLP > Create Landing Page. Click Use this template button under any template you like', 'wp-landing-pages'); ?></li>
    <li><?php _e('Next page will open. On your left side, enter page name first and submit. This will save the page in your Wordpress site. You can then customize the page', 'wp-landing-pages'); ?></li>
    <li><?php _e('If you wish to edit an existing created template/page. Go to your WP-Admin > Landing Pages. Click on the Edit Template in Design View button under the page title on mouse hover.', 'wp-landing-pages'); ?></li>
    <li><?php _e('Or you can also click on Edit in Design View under landing page title', 'wp-landing-pages'); ?></li>
</ul>
<h3><?php _e('Stay updated and get more customized feature updates directly to your inbox', 'wp-landing-pages'); ?></h3>
<p>
    <!-- Begin MailChimp Signup Form -->
    <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
    #mc_embed_signup{clear:left; font:14px Helvetica,Arial,sans-serif; }
    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
    <form action="http://etechy101.us8.list-manage.com/subscribe/post?u=0feea2b1671b773d914b338e6&amp;id=8ca20a276b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <strong><?php _e('We promise, your email address will not be shared or spammed ever. Leave your email below', 'wp-landing-pages'); ?></strong>
        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="<?php _e('email address', 'wp-landing-pages'); ?>" required>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;"><input type="text" name="b_b8210f8523d1e31f37518d48e_155e3516fe" value=""></div>
        <div class="clear"><input type="submit" value="<?php _e('Join', 'wp-landing-pages'); ?>" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </form>
</div>
<div style="width:50%; float: left;">
    <h3><?php _e('Quick Tutorial - Connect WP Landing Pages with MailChimp Auto Responder', 'wp-landing-pages'); ?></h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/OX7km4x854U" frameborder="0" allowfullscreen></iframe>
</div>
<div style="width:50%; float: left;">
    <h3><?php _e('Quick Tutorial - WP Landing Pages auto responder integration with Aweber ', 'wp-landing-pages'); ?></h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/5AkN_ntr_cs" frameborder="0" allowfullscreen></iframe>
</div>
<div style="clear:both;"></div>

<h1 align="center"><?php _e('Go pro - Upgrade to WP Landing Pages Pro', 'wplp'); ?></h1>
<div><h3 align="center"><?php _e('WP Landing Pages Pro comes with up to 30 fresh and premium landing page designs. Pro version is also updated frequently with new premium landing page designs.', 'wplp'); ?></h3>
    <p align="center">
        <a href="http://intensewp.com/cc_wp-landing-pages" target="_blank"><img src="<?php echo llp_URL; ?>/images/pro-screen-shots.png" /></a>
        <br /><a href="http://intensewp.com/cc_wp-landing-pages" target="_blank"><img src="<?php echo llp_URL; ?>/images/button_upgrade_Now.png" /></a></p></div>
<?php
define("ENCRYPTION_KEY", "!@#$%^&*");
$string = "3109275";
/* echo $encrypted = encrypt($string, ENCRYPTION_KEY);
  echo "<br />";
  echo $decrypted = decrypt($encrypted, ENCRYPTION_KEY);
 */

/**
 * Returns an encrypted & utf8-encoded
 */
function encrypt($pure_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
    return $encrypted_string;
}

/**
 * Returns decrypted original string
 */
function decrypt($encrypted_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
    return $decrypted_string;
}
