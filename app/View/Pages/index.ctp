<div class="container">
    <div class="hero-unit">
        <h1><?php echo __('Hello, twitters!'); ?></h1>
        <p><?php echo __('Show the latest tweets about your event from a hashtag so elegant and funny!'); ?></p>
		<?php echo $this->Form->create('Pages', array('url' => array('controller' => 'tweets',
				'action' => 'index'))); ?>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend input-append">
                    <div class="add-on">#</div><?php echo $this->Form->input('event', array('label' => false,
						'id' => 'prependedInput', 'div' => false, 'class' => 'span6', 'style' => 'margin-bottom: 0')); ?><?php echo $this->Form->button(__('Go!', true), array('class' => 'btn btn-primary')); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details »</a></p>
        </div>
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details »</a></p>
        </div>
        <div class="span4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn" href="#">View details »</a></p>
        </div>
    </div>
</div>
<?php echo $this->Html->script('controllers/pages/index'); ?>