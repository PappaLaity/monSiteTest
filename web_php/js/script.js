/*alert("bonjour laity");
$portfolio = document.getElementById('joinfooter');
$portfolio.style.visibility = 'hidden';*/


/*$(".nav li").on("click", function() {
    $(".nav li").removeClass("active");
    $(this).addClass("active");
});*/
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}