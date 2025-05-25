function hovert(hex) {
    var hexagon = document.getElementById(hex);
    var opacity = Number(hexagon.style.opacity);
    setInterval(function () {
        if (opacity > 0) {
            opacity -= 0.1;
            hexagon.style.opacity = opacity + "";
        }
    }, 10);
}
function unhovert(hex) {
    var hexagon = document.getElementById(hex);
    var opacity = Number(hexagon.style.opacity);
    setInterval(function () {
        if (opacity < 1) {
            opacity += 0.1;
            hexagon.style.opacity = opacity + "";
        }
    }, 10);
}
function activet(hex) {
    var hexagon = document.getElementById(hex);
    var opacity = Number(hexagon.style.opacity);
    setInterval(function () {
        if (opacity > 0) {
            opacity -= 0.1;
            hexagon.style.opacity = opacity + "";
        }
    }, 10);
}
function unactivet(hex) {
    var hexagon = document.getElementById(hex);
    var opacity = Number(hexagon.style.opacity);
    setInterval(function () {
        if (opacity < 1) {
            opacity += 0.1;
            hexagon.style.opacity = opacity + "";
        }
    }, 10);
}
function hexclick(hex, block) {
    //obsolete(?), moved to tutorials.php
    console.log("I work");
    if (hex = "idl") {
        // @/backend, work on this :]], limit tutorials to info n data lit (and any other categories alr selected)
    }
    else if (hex = "cmc") {
        // @/backend, work on this :]], limit tutorials to comm n collab (and any other categories alr selected)
    }
    else if (hex = "dcc") {
        // @/backend, work on this :]], limit tutorials to digi content create (and any other categories alr selected)
    }
    else if (hex = "sft") {
        // @/backend, work on this :]], limit tutorials to safety (and any other categories alr selected)
    }
    else if (hex = "psl") {
        // @/backend, work on this :]], limit tutorials to prob sol (and any other categories alr selected)
    }
    blockhext(block);
}
function blockhext(block) {
    var blocker = document.getElementById(block);
    var idl = document.getElementById("idl");
    var cmc = document.getElementById("cmc");
    var dcc = document.getElementById("dcc");
    var sft = document.getElementById("sft");
    var psl = document.getElementById("psl");
    var idlb = document.getElementById("idlblocker");
    var cmcb = document.getElementById("cmcblocker");
    var dccb = document.getElementById("dccblocker");
    var sftb = document.getElementById("sftblocker");
    var pslb = document.getElementById("pslblocker");
    blocker.style.setProperty("display", "block");
    if (block != "idlblocker") {
        idl.style.setProperty("opacity", "1");
        idlb.style.setProperty("display", "none");
    }
    if (block != "cmcblocker") {
        cmc.style.setProperty("opacity", "1");
        cmcb.style.setProperty("display", "none");
    }
    if (block != "dccblocker") {
        dcc.style.setProperty("opacity", "1");
        dccb.style.setProperty("display", "none");
    }
    if (block != "sftblocker") {
        sft.style.setProperty("opacity", "1");
        sftb.style.setProperty("display", "none");
    }
    if (block != "pslblocker") {
        psl.style.setProperty("opacity", "1");
        pslb.style.setProperty("display", "none");
    }
}
function hexreclick(hex, block) {
    if (hex = "idl") {
        // @/backend, work on this :]], un-limit tutorials to info n data lit (but not any other categories alr selected)
    }
    else if (hex = "cmc") {
        // @/backend, work on this :]], un-limit tutorials to comm n collab (but not any other categories alr selected)
    }
    else if (hex = "dcc") {
        // @/backend, work on this :]], un-limit tutorials to digi content create (but not any other categories alr selected)
    }
    else if (hex = "sft") {
        // @/backend, work on this :]], un-limit tutorials to safety (but not any other categories alr selected)
    }
    else if (hex = "psl") {
        // @/backend, work on this :]], un-limit tutorials to prob sol (but not any other categories alr selected)
    }
    unblockhext(block);
}
function unblockhext(block) {
    var blocker = document.getElementById(block);
    blocker.style.setProperty("display", "none");
}
