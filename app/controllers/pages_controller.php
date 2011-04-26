<?php

class PagesController extends AppController {

    public $name = 'Pages';
    public $helpers = array('Html', 'Form', 'Javascript', 'TweetsAssist');

    public function index() {
        if (!empty($this->data['Pages']['event'])) {
            $this->Session->write('Option.event', $this->data['Pages']['event']);
            $this->redirect(array('controller' => 'tweets', $this->data['Pages']['event']));
        }
    }

    public function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid page', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('page', $this->Page->read(null, $id));
    }

    public function add() {
        if (!empty($this->data)) {
            $this->Page->create();
            if ($this->Page->save($this->data)) {
                $this->Session->setFlash(__('The page has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
            }
        }
    }

    public function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid page', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Page->save($this->data)) {
                $this->Session->setFlash(__('The page has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The page could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Page->read(null, $id);
        }
    }

    public function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for page', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Page->delete($id)) {
            $this->Session->setFlash(__('Page deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Page was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}

?>