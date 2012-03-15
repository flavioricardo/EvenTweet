<div class="span3">
    <div class="well sidebar-nav">
        <ul class="nav nav-list">
            <li class="nav-header"><?php echo __('EvenTweet', true); ?></li>
            <li class="active">
                <a href="#"><?php echo __('Home', true); ?></a>
            </li>
            <li>
                <a href="#"><?php echo __('About', true); ?></a>
            </li>
            <li>
                <a href="#"><?php echo __('Contact', true); ?></a>
            </li>
            <li>
                <a href="#"><?php echo __('Plans and Pricing', true); ?></a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <i class="icon-flag"></i>
                    <?php echo __('Questions?', true); ?>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="span9">
    <div class="hero-unit">
        <h1><?php echo __('Hello, twitters!'); ?></h1>
        <p><?php echo __('Show the latest tweets about your event from a hashtag so elegant and funny!'); ?></p>
        <?php echo $this->Form->create('Pages', array('url' => '/')); ?>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend input-append">
                    <div class="add-on">#</div><?php echo $this->Form->input('event', array('label' => false,
                        'id' => 'prependedInput', 'div' => false, 'class' => 'span6', 'style' => 'margin-bottom: 0')); ?><?php echo $this->Form->button(__('Go!', true), array('class' => 'btn btn-primary')); ?>
                </div>
            </div>
        </div>
    </div>
</div>