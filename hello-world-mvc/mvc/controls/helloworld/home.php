<?php defined('_WP_FUEL_MVC') or die('Silence is golden.');

/**
 * Hello World Plugin - Home Controller
 * 
 * Controller class name  is  helloworld_home_controller
 * Suffix helloworld_ is the plugin slug
 * home is the controller
 * _controller is the postfix
 * 
 * @author Muneeb
 * @see http://www.wordpressfuel.com/docs/mvc-controllers
 * @uses absController
 */
class helloworld_home_controller extends absController
{
    public function index()
    {
        $this->View('home/index');
    }
}
?>