<div class="container">
    <div class="controls reload">
		<div class="btn btn-primary" id="getNewTweets" title="<?php echo __('Atualizado a cada 30 segundos!'); ?>">
			<i class="icon-refresh icon-white"></i> <?php echo ('Update'); ?>
		</div>
		<div class="progress progress-striped active" style="display: none; margin-top: 20px">
			<div class="bar"></div>
		</div>
	</div>
	<script type="text/x-jquery-tmpl" id="tweetsTemplate">
		<tr>
			<td><img src="${profile_image_url}" title="${from_user}" alt="${from_user}" longdesc="${from_user_id_str}" /></td>
			<td>${text}</td>
			<td>${created_at}</td>
		</tr>
	</script>
	<table id="tweetsList" class="table table-striped">
		<tbody></tbody>
	</table>
</div>
<?php echo $this->Html->script(array('controllers/tweets/index', 'plugins/jquery-tmpl/jquery.tmpl')); ?>