<?php

class FunctionsHelper extends AppHelper {

	var $helpers = array('Html', 'Form', 'Javascript');

	public function formatTweetDate($created) {
		date_default_timezone_set('America/Campo_Grande');
		return date('d-m-Y', strtotime($created));
	}

	public function recentUsersTweeting() {
		$this->Tweet = new Tweet();
		$users_images = $this->Tweet->find('all', array('fields' => array('DISTINCT(user)', 'profile_image')));
		foreach ($users_images as $user)
			echo $this->Html->image($user['Tweet']['profile_image'], array('alt' => $user['Tweet']['user'],
				'title' => $user['Tweet']['user'], 'url' => "http://twitter.com/#!/{$user['Tweet']['user']}", 'id' => 'user_image'));
	}

}

?>