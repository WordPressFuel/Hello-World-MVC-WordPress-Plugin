<?PHP
if(defined('_WP_FUEL_MVC') == false)
{
    if(class_exists('absMVC_Plugin') == false)
    {
        $wpfuel_loader = WP_PLUGIN_DIR . "/wpfuel/load.php";
        
        if ( file_exists($wpfuel_loader) ) 
        {
             require_once $wpfuel_loader;
        }
        else
        {
            wp_die( __('WordPress Fuel: Plugin Hello World requires WordPress Fuel.'));
        }

    }
}
?>