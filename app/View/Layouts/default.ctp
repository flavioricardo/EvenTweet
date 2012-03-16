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
                                <a href="#questionsModal" data-toggle="modal">
                                    <i class="icon-user icon-white"></i> <?php echo __('About'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="#questionsModal" data-toggle="modal">
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
            <hr></hr>
            <div class="footer">

            </div>
        </div>
    </body>
</html>