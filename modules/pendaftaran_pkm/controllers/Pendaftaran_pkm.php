<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran_pkm extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Pendaftaran PKM';
        $this->templates->admin('index',$data);
    }
    
}
