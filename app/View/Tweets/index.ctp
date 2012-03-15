<div class="container">
    <div class="span9">
        <h1>EvenTweet <?php echo $this->Html->link("#$event", "http://twitter.com/#!/$event"); ?></h1>
        <div id="users"><?php $this->TweetsAssist->usersTweeting(); ?></div>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <?php foreach ($tweets as $tweet) : ?>
                <tr>
                    <td>
                        <?php echo $this->Html->image($tweet['Tweet']['profile_image'], array('alt' => $tweet['Tweet']['user'])); ?>
                        <?php echo $this->Html->link("@{$tweet['Tweet']['user']}", "http://twitter.com/#!/{$tweet['Tweet']['user']}"); ?>
                        <?php echo $tweet['Tweet']['text']; ?>
                        <?php echo $this->Html->link($this->TweetsAssist->formatTweetDate($tweet['Tweet']['created_at']), "http://twitter.com/#!/{$tweet['Tweet']['user']}/status/{$tweet['Tweet']['id']}", array('id' => 'tweet')); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<?php echo $this->Html->script(array('controllers/tweets/index')); ?>