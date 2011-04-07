<?php echo $html->css(array('style')); ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <?php foreach ($tweets as $tweet) : ?>
        <tr>
            <td>
                <?php echo $this->Html->image("{$tweet['Tweet']['profile_image']}"); ?>
                <?php echo $this->Html->link("@{$tweet['Tweet']['user']}", "http://twitter.com/#!/{$tweet['Tweet']['user']}"); ?>
                <?php echo $tweet['Tweet']['text']; ?>
                <?php echo $this->Html->link($tweet['Tweet']['created_at'],
                        "http://twitter.com/#!/{$tweet['Tweet']['user']}/status/{$tweet['Tweet']['id']}", array('id' => 'tweet')); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->Javascript->link(array('jquery-1.5.2.min')); ?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('div#header h1').remove();
        setInterval('getNewTweet()', 10000);
    });
    function getNewTweet() {
        var tweetId = jQuery('table tbody tr:first-child td a#tweet').attr('href').split('/');
        jQuery.getJSON('<?php echo $this->Html->url(array('action' => 'getTweets')); ?>/' + tweetId[6], function(tweets) {
            if (tweets) {
                for (var i in tweets) {
					var tweet = '<tr>';
						tweet += '<td>';
						tweet += '<img alt="" src="' + tweets[i].profile_image + '">';
						tweet += '<a href="http://twitter.com/#!/' + tweets[i].user + '">@' + tweets[i].user + '</a>';
						tweet += ' ' + tweets[i].text + ' ';
						tweet += '<a id="tweet" href="http://twitter.com/#!/' + tweets[i].user + '/status/' + tweets[i].id + '">' + tweets[i].created_at + '</a>';
						tweet += '</td>';
						tweet += '</tr>';
						jQuery('table tbody').prepend(tweet).fadeIn(4000);
				}
            }
        });
    }
</script>