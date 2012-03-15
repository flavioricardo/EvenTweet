jQuery(document).ready(function($) {
    
    
    
    
});
function getNewTweet() {
    var tweetId = $("table tbody tr:first-child td a#tweet").attr("href").split("/");
    console.log(tweetId);
    $.getJSON("/tweets/getTweets/" + tweetId[6], function(tweets) {
        if (tweets) {
            for (var i in tweets) {
                var tweet = "<tr>";
                tweet += "<td>";
                tweet += "<img alt=\"" + tweets[i].user + "\" src=\"" + tweets[i].profile_image + "\">";
                tweet += "<a href=\"http://twitter.com/#!/" + tweets[i].user + "\">@" + tweets[i].user + "</a>";
                tweet += " " + tweets[i].text + " ";
                tweet += "<a id=\"tweet\" href=\"http://twitter.com/#!/" + tweets[i].user + "/status/" + tweets[i].id + "\">" + tweets[i].created_at + "</a>";
                tweet += "</td>";
                tweet += "</tr>";
                $("table tbody").prepend(tweet).fadeIn("slow");
            }
        }
    });
}