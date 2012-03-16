<?php

App::uses('AppController', 'Controller');

class TweetsController extends AppController {

	public $helpers = array('TweetsAssist');

	public function index() {
		if (!empty($this->request->data['Pages']['event'])) {
			$event = $this->request->data['Pages']['event'];
			$tweets = $this->Tweet->find('all', array('order' => 'created_at DESC',
						'limit' => 1, 'conditions' => array('Tweet.hashtag' => $event)));
		} else {
			$this->Session->setFlash(__('Please, select a event to start tracking!', true),
					'default', array('class' => 'alert alert-error'));
			$this->redirect(array('controller' => 'pages', 'action' => 'index', 'home'));
		}
		$this->set(compact('event', 'tweets', 'title_for_layout'));
	}

}
