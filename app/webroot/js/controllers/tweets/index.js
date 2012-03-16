jQuery(document).ready(function($) {
    var sinceId;
    $("#getNewTweet").popover({
        title : "Dicas...",
        content : "Atualização automatica a cada 30 segundos."
    });
    $("#getNewTweet").click(function() {
        var query = "phpms";
        $.getJSON("http://search.twitter.com/search.json?q=" + query + "&since_id=" + sinceId + "&callback=?", function(response) {
            $.each(response.results, function(i, result) {
                $("table.table-striped tbody").prepend(
                    "<tr>\
                         <td>" + result.profile_image_url + "</td>\n\
                         <td>" + result.from_user + "</td>\n\
                         <td>" + result.text + "</td>\n\
                         <td>" + result.created_at + "</td>\n\
                     </tr>"
                    );
            });
            sinceId = response.max_id_str;
        });
    });
});