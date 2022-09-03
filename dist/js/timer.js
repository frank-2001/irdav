
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

});