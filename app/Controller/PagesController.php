<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {
    
    public function display() {
        
    }

    public function index() {
        $this->set('title_for_layout', __('Home', true));
    }

}

?>