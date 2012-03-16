<div class="container">
    <div class="span2">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header"><?php echo __('EvenTweet'); ?></li>
                <li class="active">
                    <a href="#">
                        <i class="icon-home"></i>
                        <?php echo __('Home'); ?>
                    </a>
                </li>
                <li>
                    <a href="#"><?php echo __('About'); ?></a>
                </li>
                <li>
                    <a href="#"><?php echo __('Contact'); ?></a>
                </li>
                <li>
                    <a href="#"><?php echo __('Plans and Pricing'); ?></a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#questionsModal" data-toggle="modal">
                        <i class="icon-flag"></i>
                        <?php echo __('Questions?'); ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="controls" style="margin-bottom: 20px">
        <div class="offset2">
            <a href="#" class="btn btn-primary" id="getNewTweet">
                <i class="icon-refresh icon-white"></i> <?php echo ('Update'); ?>
            </a>
        </div>
    </div>
    <div class="span9">
        <table class="table table-striped">
            <?php foreach ($tweets as $tweet) : ?>
                <tr>
                    <td><?php echo $this->Html->image($tweet['Tweet']['profile_image'], array('alt' => $tweet['Tweet']['user'])); ?></td>
                    <td><?php echo $this->Html->link("@{$tweet['Tweet']['user']}", "http://twitter.com/#!/{$tweet['Tweet']['user']}"); ?></td>
                    <td><?php echo $tweet['Tweet']['text']; ?></td>
                    <td><?php echo $this->Time->format('d/M/Y', $tweet['Tweet']['created_at']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<?php echo $this->Html->script(array('controllers/tweets/index')); ?>