// check if user is logged in
// IF SO, automatically open the authors page! :))
function hoverl(hex) {
    var hexagon = document.getElementById(hex);
    var opacity = Number(hexagon.style.opacity);
    setInterval(function () {
        if (opacity > 0) {
            opacity -= 0.1;
            hexagon.style.opacity = opacity + "";
        }
    }, 10);
}
function unhoverl(hex) {
    var hexagon = document.getElementById(hex);
    var opacity = Number(hexagon.style.opacity);
    setInterval(function () {
        if (opacity < 1) {
            opacity += 0.1;
            hexagon.style.opacity = opacity + "";
        }
    }, 10);
}
function activel(hex) {
    var hexagon = document.getElementById(hex);
    var opacity = Number(hexagon.style.opacity);
    setInterval(function () {
        if (opacity > 0) {
            opacity -= 0.1;
            hexagon.style.opacity = opacity + "";
        }
    }, 10);
}
function unactivel(hex) {
    var hexagon = document.getElementById(hex);
    var opacity = Number(hexagon.style.opacity);
    setInterval(function () {
        if (opacity < 1) {
            opacity += 0.1;
            hexagon.style.opacity = opacity + "";
        }
    }, 10);
}
