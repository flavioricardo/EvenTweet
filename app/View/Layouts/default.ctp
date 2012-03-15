<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('EvenTweet'); ?> - <?php echo $title_for_layout; ?>
	</title>
	<?php echo $this->Html->meta('icon'); ?>
	<?php echo $this->Html->css(array('custom', '../bootstrap/css/bootstrap')); ?>
	<?php echo $this->Html->script(array('jquery-1.7.1.min', '../bootstrap/js/bootstrap')); ?>
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand" href="<?php echo $this->Html->url(array('controller' => 'pages',
                    'action' => 'index', true)); ?>">EvenTweet</a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li><a href="#about"><?php echo __('About', true); ?></a></li>
                        <li><a href="#contact"><?php echo __('Contact', true); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li>
                <a href="#">
                    <i class="icon-home"></i> Home
                </a> <?php if (!$this->TweetsAssist->isHome()) : ?><span class="divider">/</span><?php endif; ?>
            </li>
            <?php if (!$this->TweetsAssist->isHome()) : ?>
                <li>
                    <a href="#"><?php echo __(ucwords($this->params['controller']), true); ?></a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
        <hr></hr>
        <div class="footer">
            EvenTweet © 2012
		</div>
	</div>
</body>
</html>