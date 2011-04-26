<?php

class TweetsController extends AppController {

    public $name = 'Tweets';
    public $helpers = array('Html', 'Form', 'Javascript', 'TweetsAssist');

    public function index($event = null) {
        if (empty($event))
            $event = $this->Session->read('Option.event');
        $tweets = $this->Tweet->find('all', array('order' => 'created_at DESC', 'limit' => 15));
        $this->set(compact('event', 'tweets'));
    }

    public function getTweets($sinceId = null) {
        $this->autoRender = false;
        $lastTweets = json_decode(@file_get_contents("http://search.twitter.com/search.json?q=flisol+cg&show_user=true&since_id=$sinceId"));
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

?>