enum Categories {
    InfoDataLi = "Information and Data Literacy",
    CommAndCollab = "Communication and Collaboration",
    DigContentCrea = "Digital Content Creation",
    Safety = "Safety",
    ProbSol = "Problem Solving" 
}

enum Types {
    Textual,
    Video
}

enum Apps {
    MicrosoftWord = "Microsoft Word"
}

// class 

class Tutorial {
    private category: Categories;
    private type: Types;
    private app: string; // this or string
    private title: string;
    private keywords: string[];
    // + IMAGE THUMBNAIL

    public constructor(c: Categories, t: Types, a: string, ttl: string, kyw: string[]){
        this.category = c;
        this.type = t;
        this.app = a;
        this.title = ttl;
        this.keywords = kyw;
    }

    public getCategory(): Categories {
        return this.category;
    }

    public setCategory(c: Categories) {
        this.category = c;
    }

    public getType(): Types {
        return this.type;
    }

    public setType(t: Types){
        this.type = t;
    }

    public getApp(): string {
        return this.app;
    }

    public setApp(a: string) {
        this.app = a;
    }

    public getTitle(): string {
        return this.title;
    }

    public setTitle(t: string) {
        this.title = t;
    }

    public getKeywords(): string[] {
        return this.keywords;
    }

    public setKeywords(k: string[]) {
        this.keywords = k;
    }
}

class Account {
    private username: string;
    private password: string;
    // join date
    private tutorials: Tutorial[];

    public constructor(u: string, p: string){
        this.username = u;
        this.password = p;
        this.tutorials = [];
    }
    
    public getUsername(): string {
        return this.username;
    }

    public setUsername(u: string) {
        this.username = u;
    }

    public getPassword(): string {
        return this.password;
    }

    public setPassword(p: string) {
        this.password = p;
    }

    public getTutorials(): Tutorial[] {
        return this.tutorials;
    }

    public tutorialAdd(t: Tutorial) {
        this.tutorials.push(t);
    }

}

function checkInput(input: string, reminder: string, pass?: string, confirm?: string, conrem?: string): boolean {
    console.log("Hello!");

    var inp: HTMLInputElement = <HTMLInputElement> document.getElementById(input);
    var inptext: string = inp.value;

    var rem: HTMLElement = <HTMLElement> document.getElementById(reminder);

    // @/backend, work here :]]. add an if condition in the if else to check if there is an existing account that matches the username entered. if so, make the border color the same shade of red, and put a message in rem.innerHTML. return false.

    if(pass != null && confirm != null && conrem != null){
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

function passwordMatch(pass: string, confirm: string, conrem: string): boolean{
    console.log("Hello!");

    var pw: HTMLInputElement = <HTMLInputElement> document.getElementById(pass);
    var pwtext: string = pw.value;

    var con: HTMLInputElement = <HTMLInputElement> document.getElementById(confirm);
    var context: string = con.value;

    var rem: HTMLElement = <HTMLElement> document.getElementById(conrem)!;

    if(pwtext != context) {
        con.style.setProperty("border", "2.5px solid #c82f2b"); /* makes border red */
        rem.innerHTML = "Confirmation Password does not match with Password"; /* adds a reminder */
        rem.style.setProperty("color", "#c82f2b");
        return false;
    } else {
        con.style.setProperty("border", "2.5px solid #396646"); /* reverts border */
        rem.innerHTML = ""; /* removes reminder */
        rem.style.setProperty("color", "#396646");
        return true;
    }

    return true;
}

function presubmitSignUp(user: string, userrem: string, pass: string, passrem: string, confirm: string, conrem: string, fset: string, conf: string): boolean{
    var a: boolean = checkInput(user, userrem, pass, confirm, conrem);
    var b: boolean = checkInput(pass, passrem, pass, confirm, conrem);
    var c: boolean = passwordMatch(pass, confirm, conrem);

    if((a && b) && c){
        var d: boolean = submitPress(fset, conf);
        return d;
    }
    
    return false;
}

function submitPress(fset: string, conf: string): boolean{
    var field = <HTMLFieldSetElement> document.getElementById(fset);
    field.disabled = true;

    var confirm = <HTMLFormElement> document.getElementById(conf);
    confirm.style.setProperty("display", "block");

    return false;

}

function submitSignUp(user: string, pass: string): void{
    var un: HTMLInputElement = <HTMLInputElement> document.getElementById(user);
    var username: string = un.value;

    var pw: HTMLInputElement = <HTMLInputElement> document.getElementById(pass);
    var password: string = pw.value;

    let g: Account = new Account(username, password);
    // @/backend, work here :]], this should save the signup data as an account. then reload the page to show the account and its info!
    // ALSO, make this reset 
}

function presubmitLogIn(user: string, pass: string, userrem: string, passrem: string, nmrem: string): boolean {
    var a: boolean = checkInput(user, userrem);
    var b: boolean = checkInput(pass, passrem);

    if(a && b){
        submitLogIn(user, pass, nmrem);
        return true;
    }

    return false;
}

function submitLogIn(user: string, pass: string, nmrem: string): void{
    var un: HTMLInputElement = <HTMLInputElement> document.getElementById(user);
    var username: string = un.value;

    var pw: HTMLInputElement = <HTMLInputElement> document.getElementById(pass);
    var password: string = pw.value;

    // @/backend, work here :]], this should check if there's an existing account with the entered info. if not, run a function that puts an error message in the div with id "nmnoteLI" and turns it red.
    // ALSO, make this reset 
}

function closeConfirm(fset: string, conf: string): boolean {
    var field = <HTMLFieldSetElement> document.getElementById(fset);
    field.disabled = false;

    var confirm = <HTMLFormElement> document.getElementById(conf);
    confirm.style.setProperty("display", "none");

    return false;
}

function clearInputsLogPage(user: string, pass: string, fset: string, conf: string, confirm?: string){
    var un: HTMLInputElement = <HTMLInputElement> document.getElementById(user);
    un.value = "";

    var pw: HTMLInputElement = <HTMLInputElement> document.getElementById(pass);
    pw.value = "";


    if (confirm != null) {
        var cf: HTMLInputElement = <HTMLInputElement> document.getElementById(confirm);
        cf.value = "";
    }

    closeConfirm(fset, conf);

    return false;
}

function openForm(open: string, close: string): void {
    var newform: HTMLFormElement = <HTMLFormElement> document.getElementById(open);

    if (newform.style.display == "block"){
        newform.style.setProperty("display", "none");
    } 
    else {
        newform.style.setProperty("display", "block");
    }
    
    var oldform: HTMLFormElement = <HTMLFormElement> document.getElementById(close);
    oldform.style.setProperty("display", "none");
}

function toggleNavigation(): void{
    console.log("test");
    var navi = <HTMLElement> document.getElementById('navi');
    if(navi.style.display == "none"){
        navi.style.setProperty("display", "flex");
    } else {
        navi.style.setProperty("display", "none");
    }
}

function presubmitContribute(cat: string, catrem: string, typ: string, typrem: string, cre: string, crerem: string, app: string, apprem: string, ttl: string, ttlrem: string, fset: string, conf: string): boolean{
    var a: boolean = checkDropdownInput(cat, catrem); // make this different since dropdown sya
    var b: boolean = checkDropdownInput(typ, typrem); // make this different since radio sya
    var c: boolean = checkDropdownInput(cre, crerem);
    var d: boolean = checkInput(app, apprem);
    var e: boolean = checkInput(ttl, ttlrem);

    if((a && b) && (c && d) && e){
        var f: boolean = submitPress(fset, conf);
        return f;
    }
    
    return false;
}

function clearInputsContribute(cat: string, typ: string, app: string, ttl: string, keyw: string, fset: string, conf: string): boolean{
    var category: HTMLInputElement = <HTMLInputElement> document.getElementById(cat);
    category.value = ""; // see if need to make different since dropdown

    var types: NodeListOf<HTMLElement> = document.getElementsByName(typ);

    for(var i = 0, t; t = types[i]; ++i){
        var u = <HTMLInputElement> t;
        u.checked = false;
    }
    
    // make type different since radio button

    var application: HTMLInputElement = <HTMLInputElement> document.getElementById(app);
    application.value = "";

    var title: HTMLInputElement = <HTMLInputElement> document.getElementById(ttl);
    title.value = "";

    var keywords: HTMLInputElement = <HTMLInputElement> document.getElementById(keyw);
    keywords.value = "";

    closeConfirm(fset, conf);

    return false;
}

function submitContribute(cat: string, typ: string, app: string, ttl: string, keyw: string): void {
    var ctg: HTMLInputElement = <HTMLInputElement> document.getElementById(cat);
    var catstring: string = ctg.value;
    var category: Categories;

    switch(catstring){
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

    var types: NodeListOf<HTMLElement> = document.getElementsByName(typ);
    var typetext: HTMLInputElement = <HTMLInputElement> types[0];
    var type: Types;
    if(typetext.checked){
        type = Types.Textual;
        // the type is text
    } else {
        type = Types.Video;
        // the type is video
    }

    var ap: HTMLInputElement = <HTMLInputElement> document.getElementById(app);
    var application: string = ap.value;

    var tl: HTMLInputElement = <HTMLInputElement> document.getElementById(ttl);
    var title: string = tl.value;

    var kyw: HTMLInputElement = <HTMLInputElement> document.getElementById(keyw);
    var keywordstring: string = kyw.value; 
    var keywords: string[] = keywordstring.split(",");
    // separate this by commas into a string array

    var tutorial: Tutorial = new Tutorial(category, type, application, title, keywords);

    // @/backend, work here :]], this should save the inputted data as a tutorial. then go to contribute2!
}

function checkRadioInput(input: string, rem: string): boolean {
    var radio: NodeListOf<HTMLElement> = document.getElementsByName(input);
    var reminder: HTMLElement = <HTMLElement> document.getElementById(rem);

    var c = false;
    for(var i = 0, b; b = radio[i]; ++i){
        var d = <HTMLInputElement> b;
        if(d.checked){
            c = true;
        }
    }

    if(!c){
        reminder.innerHTML = "Please choose one.";
    }

    return c;
}

function toggleRevealHexagons(): void {
    var hexlist: HTMLCollectionOf<Element> = document.getElementsByClassName('hexdescriptor');

    for(var i = 0, k; k = hexlist[i]; ++i){
        var j = <HTMLElement> k;
        if(j.style.display == "none"){
            j.style.display = "block";
        } else {
            j.style.display = "none";
        }
    }
}

function checkDropdownInput(input: string, reminder: string): boolean {
    console.log("Hello!");

    var inp: HTMLInputElement = <HTMLInputElement> document.getElementById(input);
    var inptext: string = inp.value;

    var rem: HTMLElement = <HTMLElement> document.getElementById(reminder);

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

function presubmitContributeTwo(ntrem: string, conf: string): boolean{
    console.log("Hello!!!")
    var a: boolean = checkEditorInput(ntrem);

    if(a){
        var b: boolean = submitPressC2(conf);
        return b;
    }
    
    return false;
}

function checkEditorInput(/*input: string, */reminder: string): boolean {
    console.log("Hello!");

    // var inp: HTMLTextAreaElement = <HTMLTextAreaElement> document.getElementById(input);
    // var inptext: string = inp.value;

    const inptext = tinymce.activeEditor.getContent();
    console.log(inptext);

    var rem: HTMLElement = <HTMLElement> document.getElementById(reminder);

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

function closeConfirmC2(conf: string): boolean {
    tinymce.activeEditor.getBody().setAttribute('contenteditable', true);

    var confirm: HTMLFormElement = <HTMLFormElement> document.getElementById(conf);
    confirm.style.setProperty("display", "none");

    return false;
}

function submitPressC2(conf: string): boolean{
    tinymce.activeEditor.getBody().setAttribute('contenteditable', false);

    var confirm: HTMLFormElement = <HTMLFormElement> document.getElementById(conf);
    confirm.style.setProperty("display", "block");

    return false;
}

function showPassword(pass: string): void {
    var pw: HTMLInputElement = <HTMLInputElement> document.getElementById(pass);
    if(pw.type === "password"){
        pw.type = "text";
    } else {
        pw.type = "password";
    }
}