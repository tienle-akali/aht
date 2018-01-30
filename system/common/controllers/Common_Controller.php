<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Common_Controller extends MX_Controller{

    function __construct() {
        parent::__construct();
        $this->output->set_header ('Content-Type: text/html; charset=UTF-8');
    }
    protected $header = array();
    protected $footer = array();
    protected $data = array();
    protected $result = array();

    // --------------------------------------------------------------------

    /**
     * Load the defined template
     *
     * @param array $header
     * @param array $content
     * @param array $footer
     */
    protected function load_template($header,$content,$footer) {
        // load header
        $template['header'] = $this->load->ext_view('header', $header, TRUE);

        // load contain
        if (isset($content['view'])) {
            $template['content'] = $this->load->view($content['view'], $content, TRUE);
        }
        // load footer
        $template['footer'] = $this->load->ext_view('footer', $footer, TRUE);

        // load temmplate
        $this->load->ext_view('main', $template);
    }

}
