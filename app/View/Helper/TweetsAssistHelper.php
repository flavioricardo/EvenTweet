<?php

class TweetsAssistHelper extends AppHelper {

    public $helpers = array('Html', 'Form', 'Js');

    public function isHome() {
        if ($this->params['controller'] == 'pages' && $this->params['action'] == 'index')
            return true;
        return false;
    }

    public function formatTweetDate($created) {
        date_default_timezone_set('America/Campo_Grande');
        return date('d-m-Y', strtotime($created));
    }

    public function usersTweeting() {
        $this->Tweet = new Tweet();
        $users_images = $this->Tweet->find('all', array('limit' => 26,
            'order' => 'RAND()', 'fields' => array('DISTINCT(user)', 'profile_image')));
        echo $this->Html->tag('h2', __('Quem está tuitando?'));
        foreach ($users_images as $user)
            echo $this->Html->image($user['Tweet']['profile_image'], array('alt' => $user['Tweet']['user'],
                'alt' => $user['Tweet']['user'], 'url' => "http://twitter.com/#!/{$user['Tweet']['user']}", 'id' => 'user_image'));
    }

}

?>