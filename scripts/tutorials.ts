function hovert(hex: string): void{
    var hexagon: HTMLImageElement = <HTMLImageElement> document.getElementById(hex);
    var opacity: number = Number(hexagon.style.opacity);

    setInterval(function() {
        if (opacity > 0) {
           opacity -= 0.1;
           hexagon.style.opacity = opacity + "";
        }
    }, 10);
}

function unhovert(hex: string): void{
    var hexagon: HTMLImageElement = <HTMLImageElement> document.getElementById(hex);
    var opacity: number = Number(hexagon.style.opacity);

    setInterval(function() {
        if (opacity < 1) {
           opacity += 0.1;
           hexagon.style.opacity = opacity + "";
        }
    }, 10);
}

function activet(hex: string): void{
    var hexagon: HTMLImageElement = <HTMLImageElement> document.getElementById(hex);
    var opacity: number = Number(hexagon.style.opacity);

    setInterval(function() {
        if (opacity > 0) {
           opacity -= 0.1;
           hexagon.style.opacity = opacity + "";
        }
    }, 10);
}

function unactivet(hex: string): void{
    var hexagon: HTMLImageElement = <HTMLImageElement> document.getElementById(hex);
    var opacity: number = Number(hexagon.style.opacity);

    setInterval(function() {
        if (opacity < 1) {
           opacity += 0.1;
           hexagon.style.opacity = opacity + "";
        }
    }, 10);
}

function hexclick(hex: string, block: string): void {
    
    //obsolete(?), moved to tutorials.php
    console.log("I work")
    if(hex = "idl"){ 
        // @/backend, work on this :]], limit tutorials to info n data lit (and any other categories alr selected)
    } else if(hex = "cmc"){
        // @/backend, work on this :]], limit tutorials to comm n collab (and any other categories alr selected)
    } else if(hex = "dcc"){
        // @/backend, work on this :]], limit tutorials to digi content create (and any other categories alr selected)
    } else if(hex = "sft"){
        // @/backend, work on this :]], limit tutorials to safety (and any other categories alr selected)
    } else if(hex = "psl"){
        // @/backend, work on this :]], limit tutorials to prob sol (and any other categories alr selected)
    }  

    blockhext(block);
}

function blockhext(block: string): void {
    var blocker: HTMLElement = <HTMLElement> document.getElementById(block);
    var idl: HTMLImageElement = <HTMLImageElement> document.getElementById("idl");
    var cmc: HTMLImageElement = <HTMLImageElement> document.getElementById("cmc");
    var dcc: HTMLImageElement = <HTMLImageElement> document.getElementById("dcc");
    var sft: HTMLImageElement = <HTMLImageElement> document.getElementById("sft");
    var psl: HTMLImageElement = <HTMLImageElement> document.getElementById("psl");

    var idlb: HTMLElement = <HTMLElement> document.getElementById("idlblocker");
    var cmcb: HTMLElement = <HTMLElement> document.getElementById("cmcblocker");
    var dccb: HTMLElement = <HTMLElement> document.getElementById("dccblocker");
    var sftb: HTMLElement = <HTMLElement> document.getElementById("sftblocker");
    var pslb: HTMLElement = <HTMLElement> document.getElementById("pslblocker");

    blocker.style.setProperty("display","block");

    if(block != "idlblocker"){
        idl.style.setProperty("opacity","1");
        idlb.style.setProperty("display","none");
    }
    if(block != "cmcblocker"){
        cmc.style.setProperty("opacity","1");
        cmcb.style.setProperty("display","none");
    }
    if(block != "dccblocker"){
        dcc.style.setProperty("opacity","1");
        dccb.style.setProperty("display","none");
    }
    if(block != "sftblocker"){
        sft.style.setProperty("opacity","1");
        sftb.style.setProperty("display","none");
    }
    if(block != "pslblocker"){
        psl.style.setProperty("opacity","1");
        pslb.style.setProperty("display","none");
    }
    
}

function hexreclick(hex: string, block: string): void {
    
    if(hex = "idl"){
        // @/backend, work on this :]], un-limit tutorials to info n data lit (but not any other categories alr selected)
    } else if(hex = "cmc"){
        // @/backend, work on this :]], un-limit tutorials to comm n collab (but not any other categories alr selected)
    } else if(hex = "dcc"){
        // @/backend, work on this :]], un-limit tutorials to digi content create (but not any other categories alr selected)
    } else if(hex = "sft"){
        // @/backend, work on this :]], un-limit tutorials to safety (but not any other categories alr selected)
    } else if(hex = "psl"){
        // @/backend, work on this :]], un-limit tutorials to prob sol (but not any other categories alr selected)
    }  

    unblockhext(block);
}

function unblockhext(block: string): void {
    var blocker: HTMLElement = <HTMLElement> document.getElementById(block);

    blocker.style.setProperty("display","none");
}