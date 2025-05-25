// check if user is logged in

// IF SO, automatically open the authors page! :))

function hoverl(hex: string): void{
    var hexagon: HTMLImageElement = <HTMLImageElement> document.getElementById(hex);
    var opacity: number = Number(hexagon.style.opacity);

    setInterval(function() {
        if (opacity > 0) {
           opacity -= 0.1;
           hexagon.style.opacity = opacity + "";
        }
    }, 10);
}

function unhoverl(hex: string): void{
    var hexagon: HTMLImageElement = <HTMLImageElement> document.getElementById(hex);
    var opacity: number = Number(hexagon.style.opacity);

    setInterval(function() {
        if (opacity < 1) {
           opacity += 0.1;
           hexagon.style.opacity = opacity + "";
        }
    }, 10);
}

function activel(hex: string): void{
    var hexagon: HTMLImageElement = <HTMLImageElement> document.getElementById(hex);
    var opacity: number = Number(hexagon.style.opacity);

    setInterval(function() {
        if (opacity > 0) {
           opacity -= 0.1;
           hexagon.style.opacity = opacity + "";
        }
    }, 10);
}

function unactivel(hex: string): void{
    var hexagon: HTMLImageElement = <HTMLImageElement> document.getElementById(hex);
    var opacity: number = Number(hexagon.style.opacity);

    setInterval(function() {
        if (opacity < 1) {
           opacity += 0.1;
           hexagon.style.opacity = opacity + "";
        }
    }, 10);
}