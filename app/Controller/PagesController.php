<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

    public function index() {
        if (!empty($this->request->data['Pages']['event'])) {
            $this->Session->write('Option.event', $this->request->data['Pages']['event']);
            $this->redirect(array('controller' => 'tweets', $this->request->data['Pages']['event']));
        }
        $this->set('title_for_layout', __('Home', true));
    }

}

?>