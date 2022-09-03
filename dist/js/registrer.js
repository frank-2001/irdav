const elements = ["#group1", "#group2", "#group3", "#submit"];
var position = 0;
$(document).ready(function () {

    getNow(position, elements);
    $("#prev").hide();

})
$("#next").click(function () {
    position += 1;
    getNow(position, elements);

    if (position > 0) {
        $("#prev").show();
    }
    if (position >= elements.length - 2) {
        $("#next").hide();
        $("#submit").show();

    }
})
$("#prev").click(function () {
    position -= 1;
    if (position == 0) {
        $("#prev").hide();
    }
    if (position < elements.length - 1) {
        $("#next").show();
    }

    getNow(position, elements);
})
const getNow = function (pos, elements) {
    for (var i = 0; i < elements.length; i++) {
        $(elements[i]).hide();
    }
    $(elements[pos]).show();
}