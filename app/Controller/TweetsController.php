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

    public function getTweets($sinceId = null) {
        $this->autoRender = false;
        $lastTweets = json_decode(@file_get_contents("http://search.twitter.com/search.json?q={$this->Session->read('Option.event')}&show_user=true&since_id=$sinceId"));
        if (!empty($lastTweets->results)) {
            foreach ($lastTweets->results as $key => $last) {
                $tweets['Tweet'][$key]['id'] = $last->id_str;
                $tweets['Tweet'][$key]['user'] = $last->from_user;
                $tweets['Tweet'][$key]['text'] = $last->text;
                $tweets['Tweet'][$key]['profile_image'] = $last->profile_image_url;
                $tweets['Tweet'][$key]['created_at'] = $this->Tweet->getTweetDateTime($last->created_at);
            }
            $this->Tweet->saveAll($tweets['Tweet']);
            echo json_encode($tweets['Tweet']);
        }
    }

}
