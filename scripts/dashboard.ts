// solve the weird hover thing with the pics

function hoverd(hex: string, rect: string): void{
    var hexagon: HTMLImageElement = <HTMLImageElement> document.getElementById(hex);
    var rectangle: HTMLElement = <HTMLElement> document.getElementById(rect);
    var opacity: number = Number(hexagon.style.opacity);

    setInterval(function() {
        if (opacity > 0) {
           opacity -= 0.1;
           hexagon.style.opacity = opacity + "";
        }
    }, 20);

    rectangle.style.setProperty("background-color","#0044a0");
}

function unhoverd(hex: string, rect: string): void{
    var hexagon: HTMLImageElement = <HTMLImageElement> document.getElementById(hex);
    var rectangle: HTMLElement = <HTMLElement> document.getElementById(rect);
    var opacity: number = Number(hexagon.style.opacity);

    setInterval(function() {
        if (opacity < 1) {
           opacity += 0.1;
           hexagon.style.opacity = opacity + "";
        }
    }, 20);

    rectangle.style.setProperty("background-color","#0051be");
}

function actived(hex: string, rect: string): void{
    var hexagon: HTMLImageElement = <HTMLImageElement> document.getElementById(hex);
    var rectangle: HTMLElement = <HTMLElement> document.getElementById(rect);
    var opacity: number = Number(hexagon.style.opacity);

    setInterval(function() {
        if (opacity > 0) {
           opacity -= 0.1;
           hexagon.style.opacity = opacity + "";
        }
    }, 20);

    rectangle.style.setProperty("background-color","#2370d7");
}

function unactived(hex: string, rect: string): void{
    var hexagon: HTMLImageElement = <HTMLImageElement> document.getElementById(hex);
    var rectangle: HTMLElement = <HTMLElement> document.getElementById(rect);
    var opacity: number = Number(hexagon.style.opacity);

    setInterval(function() {
        if (opacity < 1) {
           opacity += 0.1;
           hexagon.style.opacity = opacity + "";
        }
    }, 20);

    rectangle.style.setProperty("background-color","#0044a0");
}