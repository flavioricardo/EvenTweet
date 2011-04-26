<?php echo $this->Form->create('Pages', array('url' => '/')); ?>
<?php echo $this->Form->input('event', array('label' => false)); ?>
<?php echo $this->Form->end(__('Start', true)); ?>