var Categories;
(function (Categories) {
    Categories["InfoDataLi"] = "Information and Data Literacy";
    Categories["CommAndCollab"] = "Communication and Collaboration";
    Categories["DigContentCrea"] = "Digital Content Creation";
    Categories["Safety"] = "Safety";
    Categories["ProbSol"] = "Problem Solving";
})(Categories || (Categories = {}));
var Types;
(function (Types) {
    Types[Types["Textual"] = 0] = "Textual";
    Types[Types["Video"] = 1] = "Video";
})(Types || (Types = {}));
var Apps;
(function (Apps) {
    Apps["MicrosoftWord"] = "Microsoft Word";
})(Apps || (Apps = {}));
// class 
var Tutorial = /** @class */ (function () {
    // + IMAGE THUMBNAIL
    function Tutorial(c, t, a, ttl, kyw) {
        this.category = c;
        this.type = t;
        this.app = a;
        this.title = ttl;
        this.keywords = kyw;
    }
    Tutorial.prototype.getCategory = function () {
        return this.category;
    };
    Tutorial.prototype.setCategory = function (c) {
        this.category = c;
    };
    Tutorial.prototype.getType = function () {
        return this.type;
    };
    Tutorial.prototype.setType = function (t) {
        this.type = t;
    };
    Tutorial.prototype.getApp = function () {
        return this.app;
    };
    Tutorial.prototype.setApp = function (a) {
        this.app = a;
    };
    Tutorial.prototype.getTitle = function () {
        return this.title;
    };
    Tutorial.prototype.setTitle = function (t) {
        this.title = t;
    };
    Tutorial.prototype.getKeywords = function () {
        return this.keywords;
    };
    Tutorial.prototype.setKeywords = function (k) {
        this.keywords = k;
    };
    return Tutorial;
}());
var Account = /** @class */ (function () {
    function Account(u, p) {
        this.username = u;
        this.password = p;
        this.tutorials = [];
    }
    Account.prototype.getUsername = function () {
        return this.username;
    };
    Account.prototype.setUsername = function (u) {
        this.username = u;
    };
    Account.prototype.getPassword = function () {
        return this.password;
    };
    Account.prototype.setPassword = function (p) {
        this.password = p;
    };
    Account.prototype.getTutorials = function () {
        return this.tutorials;
    };
    Account.prototype.tutorialAdd = function (t) {
        this.tutorials.push(t);
    };
    return Account;
}());
function checkInput(input, reminder, pass, confirm, conrem) {
    console.log("Hello!");
    var inp = document.getElementById(input);
    var inptext = inp.value;
    var rem = document.getElementById(reminder);
    // @/backend, work here :]]. add an if condition in the if else to check if there is an existing account that matches the username entered. if so, make the border color the same shade of red, and put a message in rem.innerHTML. return false.
    if (pass != null && confirm != null && conrem != null) {
        passwordMatch(pass, confirm, conrem);
    }
    if (inptext == "") /* checks if input box is empty */ {
        inp.style.setProperty("border", "2.5px solid #c82f2b"); /* makes border red */
        rem.innerHTML = "Please fill this in."; /* adds a reminder */
        rem.style.setProperty("color", "#c82f2b");
        return false;
    }
    else {
        inp.style.setProperty("border", "2.5px solid #396646"); /* reverts border */
        rem.innerHTML = ""; /* removes reminder */
        rem.style.setProperty("color", "#396646");
        return true;
    }
    // ALSO CHECK IF IT MATCHES AN EXISTING USERNAME! BUT CHECK FIRST KUNG LOGIN KASI KUNG LOGIN IT ACTUALLY SHOULD MATCH AN EXISTING NAME LMAO!
}
function passwordMatch(pass, confirm, conrem) {
    console.log("Hello!");
    var pw = document.getElementById(pass);
    var pwtext = pw.value;
    var con = document.getElementById(confirm);
    var context = con.value;
    var rem = document.getElementById(conrem);
    if (pwtext != context) {
        con.style.setProperty("border", "2.5px solid #c82f2b"); /* makes border red */
        rem.innerHTML = "Confirmation Password does not match with Password"; /* adds a reminder */
        rem.style.setProperty("color", "#c82f2b");
        return false;
    }
    else {
        con.style.setProperty("border", "2.5px solid #396646"); /* reverts border */
        rem.innerHTML = ""; /* removes reminder */
        rem.style.setProperty("color", "#396646");
        return true;
    }
    return true;
}
function presubmitSignUp(user, userrem, pass, passrem, confirm, conrem, fset, conf) {
    var a = checkInput(user, userrem, pass, confirm, conrem);
    var b = checkInput(pass, passrem, pass, confirm, conrem);
    var c = passwordMatch(pass, confirm, conrem);
    if ((a && b) && c) {
        var d = submitPress(fset, conf);
        return d;
    }
    return false;
}
function submitPress(fset, conf) {
    var field = document.getElementById(fset);
    field.disabled = true;
    var confirm = document.getElementById(conf);
    confirm.style.setProperty("display", "block");
    return false;
}
function submitSignUp(user, pass) {
    var un = document.getElementById(user);
    var username = un.value;
    var pw = document.getElementById(pass);
    var password = pw.value;
    var g = new Account(username, password);
    // @/backend, work here :]], this should save the signup data as an account. then reload the page to show the account and its info!
    // ALSO, make this reset 
}
function presubmitLogIn(user, pass, userrem, passrem, nmrem) {
    var a = checkInput(user, userrem);
    var b = checkInput(pass, passrem);
    if (a && b) {
        submitLogIn(user, pass, nmrem);
        return true;
    }
    return false;
}
function submitLogIn(user, pass, nmrem) {
    var un = document.getElementById(user);
    var username = un.value;
    var pw = document.getElementById(pass);
    var password = pw.value;
    // @/backend, work here :]], this should check if there's an existing account with the entered info. if not, run a function that puts an error message in the div with id "nmnoteLI" and turns it red.
    // ALSO, make this reset 
}
function closeConfirm(fset, conf) {
    var field = document.getElementById(fset);
    field.disabled = false;
    var confirm = document.getElementById(conf);
    confirm.style.setProperty("display", "none");
    return false;
}
function clearInputsLogPage(user, pass, fset, conf, confirm) {
    var un = document.getElementById(user);
    un.value = "";
    var pw = document.getElementById(pass);
    pw.value = "";
    if (confirm != null) {
        var cf = document.getElementById(confirm);
        cf.value = "";
    }
    closeConfirm(fset, conf);
    return false;
}
function openForm(open, close) {
    var newform = document.getElementById(open);
    if (newform.style.display == "block") {
        newform.style.setProperty("display", "none");
    }
    else {
        newform.style.setProperty("display", "block");
    }
    var oldform = document.getElementById(close);
    oldform.style.setProperty("display", "none");
}
function toggleNavigation() {
    console.log("test");
    var navi = document.getElementById('navi');
    if (navi.style.display == "none") {
        navi.style.setProperty("display", "flex");
    }
    else {
        navi.style.setProperty("display", "none");
    }
}
function presubmitContribute(cat, catrem, typ, typrem, cre, crerem, app, apprem, ttl, ttlrem, fset, conf) {
    var a = checkDropdownInput(cat, catrem); // make this different since dropdown sya
    var b = checkDropdownInput(typ, typrem); // make this different since radio sya
    var c = checkDropdownInput(cre, crerem);
    var d = checkInput(app, apprem);
    var e = checkInput(ttl, ttlrem);
    if ((a && b) && (c && d) && e) {
        var f = submitPress(fset, conf);
        return f;
    }
    return false;
}
function clearInputsContribute(cat, typ, app, ttl, keyw, fset, conf) {
    var category = document.getElementById(cat);
    category.value = ""; // see if need to make different since dropdown
    var types = document.getElementsByName(typ);
    for (var i = 0, t; t = types[i]; ++i) {
        var u = t;
        u.checked = false;
    }
    // make type different since radio button
    var application = document.getElementById(app);
    application.value = "";
    var title = document.getElementById(ttl);
    title.value = "";
    var keywords = document.getElementById(keyw);
    keywords.value = "";
    closeConfirm(fset, conf);
    return false;
}
function submitContribute(cat, typ, app, ttl, keyw) {
    var ctg = document.getElementById(cat);
    var catstring = ctg.value;
    var category;
    switch (catstring) {
        case 'Information and Data Literacy':
            category = Categories.InfoDataLi;
            break;
        case 'Communication and Collaboration':
            category = Categories.CommAndCollab;
            break;
        case 'Digital Content Creation':
            category = Categories.DigContentCrea;
            break;
        case 'Safety':
            category = Categories.Safety;
            break;
        default:
            category = Categories.ProbSol;
            break;
    }
    var types = document.getElementsByName(typ);
    var typetext = types[0];
    var type;
    if (typetext.checked) {
        type = Types.Textual;
        // the type is text
    }
    else {
        type = Types.Video;
        // the type is video
    }
    var ap = document.getElementById(app);
    var application = ap.value;
    var tl = document.getElementById(ttl);
    var title = tl.value;
    var kyw = document.getElementById(keyw);
    var keywordstring = kyw.value;
    var keywords = keywordstring.split(",");
    // separate this by commas into a string array
    var tutorial = new Tutorial(category, type, application, title, keywords);
    // @/backend, work here :]], this should save the inputted data as a tutorial. then go to contribute2!
}
function checkRadioInput(input, rem) {
    var radio = document.getElementsByName(input);
    var reminder = document.getElementById(rem);
    var c = false;
    for (var i = 0, b; b = radio[i]; ++i) {
        var d = b;
        if (d.checked) {
            c = true;
        }
    }
    if (!c) {
        reminder.innerHTML = "Please choose one.";
    }
    return c;
}
function toggleRevealHexagons() {
    var hexlist = document.getElementsByClassName('hexdescriptor');
    for (var i = 0, k; k = hexlist[i]; ++i) {
        var j = k;
        if (j.style.display == "none") {
            j.style.display = "block";
        }
        else {
            j.style.display = "none";
        }
    }
}
function checkDropdownInput(input, reminder) {
    console.log("Hello!");
    var inp = document.getElementById(input);
    var inptext = inp.value;
    var rem = document.getElementById(reminder);
    if (inptext == "") /* checks if input box is empty */ {
        inp.style.setProperty("border", "2.5px solid #c82f2b"); /* makes border red */
        rem.innerHTML = "Please select one option."; /* adds a reminder */
        rem.style.setProperty("color", "#c82f2b");
        return false;
    }
    else {
        inp.style.setProperty("border", "2.5px solid #396646"); /* reverts border */
        rem.innerHTML = ""; /* removes reminder */
        rem.style.setProperty("color", "#396646");
        return true;
    }
    // ALSO CHECK IF IT MATCHES AN EXISTING USERNAME! BUT CHECK FIRST KUNG LOGIN KASI KUNG LOGIN IT ACTUALLY SHOULD MATCH AN EXISTING NAME LMAO!
}
function presubmitContributeTwo(ntrem, conf) {
    console.log("Hello!!!");
    var a = checkEditorInput(ntrem);
    if (a) {
        var b = submitPressC2(conf);
        return b;
    }
    return false;
}
function checkEditorInput(/*input: string, */ reminder) {
    console.log("Hello!");
    // var inp: HTMLTextAreaElement = <HTMLTextAreaElement> document.getElementById(input);
    // var inptext: string = inp.value;
    var inptext = tinymce.activeEditor.getContent();
    console.log(inptext);
    var rem = document.getElementById(reminder);
    // @/backend, work here :]]. add an if condition in the if else to check if there is an existing account that matches the username entered. if so, make the border color the same shade of red, and put a message in rem.innerHTML. return false.
    if (inptext == "") /* checks if input box is empty (IDT THIS WORKS YET LOL) */ {
        rem.innerHTML = "Please fill this in."; /* adds a reminder */
        rem.style.setProperty("color", "#c82f2b");
        return false;
    }
    else {
        rem.innerHTML = ""; /* removes reminder */
        rem.style.setProperty("color", "#396646");
        return true;
    }
    // ALSO CHECK IF IT MATCHES AN EXISTING USERNAME! BUT CHECK FIRST KUNG LOGIN KASI KUNG LOGIN IT ACTUALLY SHOULD MATCH AN EXISTING NAME LMAO!
}
function closeConfirmC2(conf) {
    tinymce.activeEditor.getBody().setAttribute('contenteditable', true);
    var confirm = document.getElementById(conf);
    confirm.style.setProperty("display", "none");
    return false;
}
function submitPressC2(conf) {
    tinymce.activeEditor.getBody().setAttribute('contenteditable', false);
    var confirm = document.getElementById(conf);
    confirm.style.setProperty("display", "block");
    return false;
}
function showPassword(pass) {
    var pw = document.getElementById(pass);
    if (pw.type === "password") {
        pw.type = "text";
    }
    else {
        pw.type = "password";
    }
}
