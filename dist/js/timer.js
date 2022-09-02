
$(document).ready(function () {
    setInterval(function () {
        var sec = parseInt($('#sec').html());
        if (sec > 0) {
            $('#sec').html(sec - 1);
        } else {
            $('#sec').html(sec + 60);
            // clearInterval(timer);
        }
    }, 1000);
    setInterval(function () {
        var min = parseInt($('#min').html());
        if (min > 0) {
            $('#min').html(min - 1);
        } else {
            $('#min').html(min - 60);
            // clearInterval(timer);
        }
    }, 1000 * 60);
    setInterval(function () {
        var hour = parseInt($('#hour').html());
        if (hour > 0) {
            $('#hour').html(hour - 1);
        } else {
            $('#hour').html(hour - 24);
            // clearInterval(timer);
        }
    }, 1000 * 60 * 60);
    setInterval(function () {
        var day = parseInt($('#day').html());
        if (day > 0) {
            $('#day').html(day - 1);
        } else {
            // $('#day').html(day - 1);
            sec = 24;
            // clearInterval(timer);
        }
    }, 1000 * 60 * 60 * 24);
});