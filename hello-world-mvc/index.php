<?PHP
/* 
Plugin Name: Hello World using WordPress Fuel 
Description: Sample Hello World Plugin using WordPress Fuel that displays a user friendly welcome message.
Author: Muneeb
Version: 1.0 
*/
require_once "mvc/init.php";
        
if(class_exists('WPFuel_HelloWorld_Plugin') == false)
{
    /**
     * This is the Plugin Class. Its better to suffix class name to avoid name conflict which are common mistakes.
     * Sets the plugin slug - Slug will be used as suffix token to namespace controllers and other classes.
     * Implements protected method _init() body
     * 
     *@see http://www.wordpressfuel.com/docs/hello-world-plugin
     */
    class WPFuel_HelloWorld_Plugin extends absMVC_Plugin
    {
        /*
            * Unique Slug for every plugin
            * Must be one word without any special characters
        */
        protected $_plugin_slug = 'helloworld';

        protected function _init()
        {
            //nothing to init
        }

        public function registerAdminMenu()
        {
            add_menu_page('Hello World', 'Hello World','administrator', $this->_getAdminPageSlug('home'), array($this , 'handleAdminMenu')); 
        }
    }
}

new WPFuel_HelloWorld_Plugin(__FILE__);
?>