<?php

class TweetsHelper extends AppHelper {

	var $helpers = array('Html', 'Form', 'Javascript');

	public function calculateDateDifference($created) {
		$now = new DateTime('now');
		$interval = date_diff($created, $now);
		return $interval->format('%R%a days');
	}

}

?>