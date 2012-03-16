jQuery(document).ready(function($) {
    $("#questionsModal").modal("hide");
    $(".modal-footer a").click(function() {
        console.log($(this).parent().parent().modal("hide"));
    });
});