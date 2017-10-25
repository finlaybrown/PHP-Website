$(document).ready(function () {
    var x = 1;
    /*x = setInterval(changeText(x), 5000);

     */
})

function changeText(x) {

    if (x == 1) {
        $('.change-me').text('About Our Funny Team');
        x = 2;
    }
    else if (x == 2) {
        $('.change-me').text('About Our Clever Team');
        x = 3;
    }
    else if (x == 3) {
        $('.change-me').text('About Our Innovative Team');
        x = 4;
    }
    else if (x == 4) {
        $('.change-me').text('About Our Amazing Team');
        x = 1;
    }
    alert(x);
    return x;
}


