<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('EvenTweet', true); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php echo $this->Html->meta('icon'); ?>
	<?php echo $this->Html->css(array('cake.generic', 'style')); ?>
	<?php echo $this->Javascript->link(array('jquery-1.5.2.min', 'jquery.qtip-1.0.0-rc3.min')); ?>
	<link href='http://fonts.googleapis.com/css?family=Neucha' rel='stylesheet' type='text/css'></link>
	<link href='http://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'></link>
</head>
<body>
	<div id="container">
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">
            
		</div>
	</div>
	<a href="https://github.com/flavioricardo/EvenTweet"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://d3nwyuy0nl342s.cloudfront.net/img/7afbc8b248c68eb468279e8c17986ad46549fb71/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" /></a>
</body>
</html>