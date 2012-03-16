jQuery(document).ready(function($) {
	var QUERY = "phpms";
	var API_USER = "";
	var SINCE_ID = "";
	var API_SEARCH = "";
	$("#getNewTweets").click(function() {
		$("div.progress").fadeIn("slow");
		API_SEARCH = "http://search.twitter.com/search.json?q=" + QUERY + "&include_entities=true&result_type=recent&since_id=" + SINCE_ID + "&callback=?";
		$.getJSON(API_SEARCH, function(response) {
			if (response.results["0"]) {
				$.each(response.results, function(i, result) {
					$("#tweetsTemplate").tmpl(result).prependTo("#tweetsList").fadeIn("slow");
				});
				SINCE_ID = response.results["0"].id_str;
			}
		}).complete(function() {
			$("div.progress div.bar").css("width", "100%")
			$("div.progress").fadeOut("slow");
		});
	});
	$("table.table-striped tbody tr td img").live("mouseover", function() {
		var image = $(this);
		API_USER = "https://api.twitter.com/1/users/show.json?user_id=" + $(this).attr("longdesc") + "&callback=?";
		$.getJSON(API_USER, function(response) {
			image.popover({
				title: "@" + isNull(response.screen_name),
				content: "<strong>" + isNull(response.name) + "</strong><br /><i>" + isNull(response.description) + "</i><br />" + isNull(response.location) + "<br />" + isNull(response.url)
			});
		});
	});
	$("#getNewTweets").tooltip();
});

function isNull(result) {
	if (result == null)
		return "";
	return result;
}