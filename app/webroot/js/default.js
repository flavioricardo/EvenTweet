jQuery(document).ready(function($) {
    if ($.find(".alert-error"))
        $(".alert").append("<a class=\"close\" data-dismiss=\"alert\">×</a>");
});