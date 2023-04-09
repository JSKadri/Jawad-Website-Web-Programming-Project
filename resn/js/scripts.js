/* Display the dropdown when the nav bar is clicked in mobile view */
$(document).ready(function(){
    $(' .menu-toggle').on('click', function() {
        $('.nav').toggleClass('showing');       // Everything in the NAV should appear on click
        $('.nav ul').toggleClass('showing');    // NAV + UL should appear on click
    });
});


/* Digital Clock */
function startTime(){
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s;
    setTimeout(startTime, 1000);
}

function checkTime(i){
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
