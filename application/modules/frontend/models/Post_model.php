<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require COMMON_PATH . "models/Common_Model.php";
class Post_model extends Common_Model {
    function __construct() {
        parent::__construct();
    }
    public function load_js() 
    {
        $files = array( 
            // ASSETS_PATH . 'js/jquery.js',
            
            ASSETS_PATH . 'js/bs4/jquery-3.1.1.slim.min.js',
            ASSETS_PATH . 'js/bs4/tether.min.js',
            ASSETS_PATH . 'js/bs4/bootstrap.min.js',
            

            // ASSETS_PATH . 'js/select2.js',
            // ASSETS_PATH . 'js/js.js',
        );
        $link = ASSETS_PATH . 'js/7grand.js';
        $footer['script_tag_html'] = min_js($files, $link);
        return $footer;
    }
    public function load_css()
    {
        $files = array( 
            ASSETS_PATH . 'css/bs4/bootstrap.min.css',
            ASSETS_PATH . 'css/aht.css',
            // ASSETS_PATH . 'css/select2.css',

            // ASSETS_PATH . 'css/fontawesome.css',
            // ASSETS_PATH . 'css/style.css',
        );
        $link = ASSETS_PATH . 'css/7grand.css';
        $header['link_tag'] = min_css($files, $link);
        return $header;
    }
}
