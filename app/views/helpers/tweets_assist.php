<?php

class TweetsAssistHelper extends AppHelper {

    var $helpers = array('Html', 'Form', 'Javascript');

    public function formatTweetDate($created) {
        date_default_timezone_set('America/Campo_Grande');
        return date('d-m-Y', strtotime($created));
    }

    public function usersTweeting() {
        $this->Tweet = new Tweet();
        $users_images = $this->Tweet->find('all', array('limit' => 26,
                    'order' => 'RAND()', 'fields' => array('DISTINCT(user)', 'profile_image')));
        echo $this->Html->tag('h2', __('Quem está tuitando?', true));
        foreach ($users_images as $user)
            echo $this->Html->image($user['Tweet']['profile_image'], array('alt' => $user['Tweet']['user'],
                'alt' => $user['Tweet']['user'], 'url' => "http://twitter.com/#!/{$user['Tweet']['user']}", 'id' => 'user_image'));
    }

}

?>