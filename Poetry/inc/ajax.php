<?php
/**
 * Created by PhpStorm.
 * User: Tony
 * Date: 23/01/2018
 * Time: 11:25
 */
function pluginname_ajaxurl()
{
    ?>
    <script type="text/javascript">
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
    <?php
}

add_action('wp_head', 'pluginname_ajaxurl');