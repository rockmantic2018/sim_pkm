<?php

defined('BASEPATH') or exit('No direct script access allowed');

class My404 extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = '404 - Page Not Found';
        $data['title_small'] = "Oops! You're lost.";
        $this->templates->display('index',$data);
    }

}
