<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo __('EvenTweet'); ?> - <?php echo $title_for_layout; ?>
        </title>
        <?php echo $this->Html->meta('icon'); ?>
        <?php echo $this->Html->css(array('custom', '../bootstrap/css/bootstrap')); ?>
        <?php echo $this->Html->script(array('jquery', '../bootstrap/js/bootstrap', 'default')); ?>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="brand" href="<?php echo $this->Html->url(array('controller' => 'pages',
                        'action' => 'index', true)); ?>">EvenTweet</a>
                    <div class="nav-collapse">
                        <ul class="nav pull-right">
                            <li>
                                <a href="#aboutModal" data-toggle="modal">
                                    <i class="icon-user icon-white"></i> <?php echo __('About'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="#giftModal" data-toggle="modal">
                                    <i class="icon-gift icon-white"></i> <?php echo __('Gift Me'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="#questionsModal" data-toggle="modal">
                                    <i class="icon-question-sign icon-white"></i> <?php echo __('Questions?'); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <?php echo $this->Session->flash(); ?>
            <ul class="breadcrumb">
                <li>
                    <a href="<?php echo $this->Html->url(array('controller' => 'pages',
                        'action' => 'index', true)); ?>">
                        <i class="icon-home"></i> Home
                    </a> <?php if (!$this->TweetsAssist->isHome()) : ?><span class="divider">/</span><?php endif; ?>
                </li>
                <?php if (!$this->TweetsAssist->isHome()) : ?>
                    <li>
                        <a href="<?php echo $this->Html->url(array('controller' => $this->params['controller'],
                        'action' => 'index')); ?>"><?php echo __(ucwords($this->params['controller']), true); ?></a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php echo $content_for_layout; ?>
            </div>
            <hr />
            <div class="footer">

            </div>
        </div>
		<div class="modal fade" id="aboutModal">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3><?php echo __('About'); ?></h3>
			</div>
			<div class="modal-body">
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn"><?php echo __('Close'); ?></a>
			</div>
		</div>
		<div class="modal fade" id="giftModal">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3><?php echo __('Donate, buy me a Gift!'); ?></h3>
			</div>
			<div class="modal-body">
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn"><?php echo __('Close'); ?></a>
			</div>
		</div>
		<div class="modal fade" id="questionsModal">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3><?php echo __('Questions'); ?></h3>
			</div>
			<div class="modal-body">
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn"><?php echo __('Close'); ?></a>
			</div>
		</div>
    </body>
</html>