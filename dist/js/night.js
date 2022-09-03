
$(document).ready(function () {
    if ($.cookie("night") == undefined) {
        $(this).addClass("fa-moon").removeClass("fa-sun");
    } else {
        $("body").addClass($.cookie("night"));
        $(this).addClass("fa-sun").removeClass("fa-moon");

    }
});
// sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed
$("#dark_activer").click(function (e) {
    if ($.cookie("night") == undefined) {
        $(this).addClass("fa-sun").removeClass("fa-moon");
        $.cookie("night", "dark-mode ");
        $("body").addClass($.cookie("night"));
    } else {
        $("body").removeClass($.cookie("night"));
        $(this).addClass("fa-moon").removeClass("fa-sun");
        $.removeCookie("night");
    }
});
