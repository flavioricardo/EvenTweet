<?php

class Tweet extends AppModel {

	public $name = 'Tweet';
	public $displayField = 'id';

	public function getTweetDateTime($date) {
		$created = explode(' ', $date);
		return "$created[3]-{$this->getMonthByShortForm($created[2])}-$created[1] $created[4]";
	}

	public function getMonthByShortForm($desc) {
		$months = array('Jan' => '01', 'Feb' => '02', 'Mar' => '03', 'Apr' => '04', 'May' => '05',
			'Jun' => '06', 'Jul' => '07', 'Aug' => '08', 'Sep' => '09', 'Oct' => '10', 'Nov' => '11', 'Dec' => '12');
		return $months[$desc];
	}

}

?>