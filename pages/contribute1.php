<!DOCTYPE html>
<html lang="en" class="notranslate" translate="no">

    <script>
        category_val = "";
        type_val = "";
        creator_val = "";
        app_list_val = "";
        title_val = "";
        keywords_val = ""; 

        function closeConfirm(fset, conf) {
            var field = document.getElementById(fset);
            field.disabled = false;
            var confirm = document.getElementById(conf);
            confirm.style.setProperty("display", "none");
            return false;
        }

        function clearInputsContribute(cat, typ, cre, app, ttl, keyw, fset, conf) {
            var category = document.getElementById(cat);
            category.value = ""; // see if need to make different since dropdown
            var types = document.getElementsById(typ);
            /*for (var i = 0, t; t = types[i]; ++i) {
                var u = t;
                u.checked = false;
            }*/
            types.value = "";
            var creator = document.getElementsById(cre);
            /*for (var i = 0, t; t = types[i]; ++i) {
                var u = t;
                u.checked = false;
            }*/
            creator.value = "";
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

        function clearSetup(a, b, c, d, e, f, g, h) { // TEST IF THIS WORKS
            category_val = "";
            type_val = "";
            creator_val = "";
            app_list_val = "";
            title_val = "";
            keywords_val = ""; 

            return clearInputsContribute(a, b, c, d, e, f, g, h);
        }

    </script>

    <head>
        <meta name="google" content="notranslate" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
        <link rel="stylesheet" type="text/css" href="../styles/css/common.css" />
        <link rel="stylesheet" type="text/css" href="../styles/css/fonts.css" />
        <link rel="stylesheet" type="text/css" href="../styles/css/contribute1.css" />
        <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript" src="https://unpkg.com/sticky-js@1.3.0/dist/sticky.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
        <script type="text/javascript" src="../scripts/common.js"></script>
        <script type="text/javascript" src="../scripts/contribute1.js"></script>
    
        <title>Contribute | DigiSkillet</title>
        <link rel="icon" type="image/x-icon" href="../styles/assets/favicon.png">
    
    </head>
    
    <body class="flex-column">
        <div class="contribute1 root">
            <div class="content_box">
                <img class="image clickable" src="../styles/assets/digiskilletlogo.png" alt="alt text" onclick="return toggleNavigation()"/>                
                <a href="login.php" class="no_underline" id="toprightblink">
                    <div class="medium_title" id="toprightcontent">Log In</div>
                </a>
            </div>
            <div class="rect2"></div>
            <div class="box">
                <h4 class="highlight">Camacho, Del Rosario, Mortera 2024</h4>
            </div>
            <form class="form" id="contribute" autocomplete="off" onsubmit="" onreset=""> <!--for on submit, add a verifier for inputs; for on reset, add a confirmer if want to clear-->
                <fieldset form="contribute" id="contributeF">
                    <div class="formtitle">Contribute</div>

                    <label class="biglab" for="category">Category:</label><br> <!--make this a dropdown lol-->
                    <!-- <input class="formdropdowninput" list="categoriesC" id="categoryC" name="categoryC"
                        onblur="return checkInput('categoryC','catnoteC')"
                        onfocus="return checkInput('categoryC','catnoteC')" /> for onblur and onfocus, add mini verifiers for content that edit the reminder below-->
                    <select id="categoriesC" onchange="return checkDropdownInput('categoriesC','catnoteC')">
                        <option value=""></option>
                        <option value="Information and Data Literacy">Information and Data Literacy</option>
                        <option value="Communication and Collaboration">Communication and Collaboration</option>
                        <option value="Digital Content Creation">Digital Content Creation</option>
                        <option value="Safety">Safety</option>
                        <option value="Problem Solving">Problem Solving</option>
                    </select>
                    <div id="catnoteC" class="formnote">Please choose the category where your tutorial applies.</div><br>

                    <label class="biglab" for="type">Type:</label><br> <!--make this a radio button lol-->
                    <select id="typesC" onchange="return checkDropdownInput('typesC','typenoteC')">
                        <option value=""></option>
                        <option value="Textual">Textual</option>
                        <option value="Video">Video</option>
                    </select>
                    <div id="typenoteC" class="formnote">Please choose whether your tutorial is textual or a video.</div><br>

                    <label class="biglab" for="creator">Creator:</label><br> <!--make this a radio button lol-->
                    <select id="creatorsC" onchange="return checkDropdownInput('creatorsC','creatornoteC')">
                        <option value=""></option>
                        <option value="Textual">Crowdsourced</option>
                        <option value="Video">Developer-Made</option>
                    </select>
                    <div id="creatornoteC" class="formnote">Please choose whether your tutorial is crowdsourced or developer-made.</div><br>

                    <label class="biglab" for="app">Application:</label><br> <!--LOOK INTO making this a search dropdown kinda thing-->
                    <input class="formtextinput" type="text" id="appC" name="appC"
                        onblur="return checkInput('appC','appnoteC')"
                        onfocus="return checkInput('appC','appnoteC')" /> <!-- for onblur and onfocus, add mini verifiers for content that edit the reminder below-->
                    <div id="appnoteC" class="formnote">Please input the application your tutorial is for.</div><br> <!--multipurpose this as formreminder-->

                    <label class="biglab" for="titletut">Title:</label><br>
                    <input class="formtextinput" type="text" id="titleC" name="titleC"
                        onblur="return checkInput('titleC','ttlnoteC')"
                        onfocus="return checkInput('titleC','ttlnoteC')" /> <!-- for onblur and onfocus, add mini verifiers for content that edit the reminder below-->
                    <div id="ttlnoteC" class="formnote">Please input the title of your tutorial.</div><br>

                    <label class="biglab" for="keywords">Keywords:</label><br>
                    <input class="formtextinput" type="text" id="keywordsC" name="keywordsC"
                        onblur=""
                        onfocus="" /> <!-- for onblur and onfocus, add mini verifiers for content that edit the reminder below-->
                    <div id="kwdnoteC" class="formnote">Please input the keywords (comma-separated) of your tutorial. (Recommended)</div><br><br>

                    <div id="bignoteC" class="formnote">Please do not disclose any of your personal information on this application.</div>

                    <span class="centerFormButtons">  <!--configure the goBack() onclick here but for the login/signup clicks-->
                        <input class="formButton" type="submit" value="Create Tutorial"
                        onclick="return presubmitContribute('categoriesC','catnoteC','typesC','typenoteC','creatorsC','creatornoteC','appC','appnoteC','titleC','ttlnoteC','contributeF','confirmsubC')">
                        <input class="formButton" type="reset" value="Clear Inputs"
                        onclick="return submitPress('contributeF', 'confirmclrC')">
                    </span>
                </fieldset>
            </form>
            <!-- SKYE NOTE: CONFIGURE THE TWO CONFIRM THINGIES HERE!!-->
            <form class="formconfirm" id="confirmsubC" action="contribute2.php" autocomplete="off" onsubmit="submitDataFromFirstForm(); return false;">
                <fieldset form="confirmsubC" id="confirmsubCF">
                    <input type="hidden" id="category" name="category">
                    <input type="hidden" id="type" name="type">
                    <input type="hidden" id="creator" name="creator">
                    <input type="hidden" id="application" name="application">
                    <input type="hidden" id="title" name="title">
                    <input type="hidden" id="keywords" name="keywords">

                    <div class="formconfirmtext">
                        <div class="formconfirmtitle">Confirm</div>
                        <div class="formconfirmmessage">Create a tutorial?</div>
                    </div>

                    <span class="centerFormButtons">
                        <button class="formButton clickable" id="backbutton" onclick="return closeConfirm('contributeF', 'confirmsubC')">Back</button>
                        <button class="formButton clickable" id="submitbutton">Create</button>
                    </span>
                </fieldset>
            </form>

            <form class="formconfirm" id="confirmclrC" autocomplete="off" onsubmit="">
                <fieldset form="confirmclrC" id="confirmclrCF">
                    <div class="formconfirmtext">
                        <div class="formconfirmtitle">Confirm</div>
                        <div class="formconfirmmessage">Are you sure you want to clear information?</div>
                    </div>

                    <span class="centerFormButtons"> <!--configure the goBack() onclick here but for the login/signup clicks-->
                        <button class="formButton clickable" id="backbutton" 
                        onclick="return closeConfirm('contributeF', 'confirmclrC')">Back</button> <!-- go back on onclick-->
                        <button class="formButton clickable" id="clearbutton" 
                        onclick="return clearSetup('categoryC', 'typesC', 'creatorC', 'appC', 'titleC', 'keywordsC', 'contributeF', 'confirmclrC')">Clear</button> <!-- clear on onclick-->
                        <!--<input class="formButton" id="clearbutton" type="submit" value="Clear"> // either input or submit for clear. but confirm which one to use for the submit -->
                    </span>
                </fieldset>
                <!-- are you sure you want to clear??-->
            </form>
            <div class="navigation" id="navi" style="display: none;"> <!-- ADD IMAGES BEFORE ADDING TO OTHER PAGES !! -->
                <a href="http://digiskillet.com/" class="no_underline">
                    <div class="navcell">
                        <img class="navicon" src="../styles/assets/home.png" alt="home icon"/>
                        <div class="navname">Home</div>
                    </div>
                </a>
                <a href="tutorials.php" class="no_underline">
                    <div class="navcell">
                        <img class="navicon" src="../styles/assets/tutorials.png" alt="tutorials icon"/>
                        <div class="navname">Tutorials</div>
                    </div>
                </a>
                <a href="contribute1.php" class="no_underline">
                    <div class="navcell">
                        <img class="navicon" src="../styles/assets/contribute.png" alt="contribute icon"/>
                        <div class="navname">Contribute</div>
                    </div>
                </a>
                <a href="authors.php" class="no_underline">
                    <div class="navcell">
                        <img class="navicon" src="../styles/assets/profile.png" alt="profile icon"/>
                        <div class="navname">Profile</div> <!-- dont forget to add a "signed in?" checker for these -->
                    </div>
                </a>
                <a href="about.php" class="no_underline">
                    <div class="navcell">
                        <img class="navicon" src="../styles/assets/about.png" alt="about us icon"/>
                        <div class="navname">About Us</div>
                    </div>
                </a>
                <a class="no_underline" onclick="return toggleNavigation()">
                    <div class="navcell clickable">
                        <img class="navicon" src="../styles/assets/back.png" alt="back icon"/>
                        <div class="navname">Close Menu</div> <!--closes the thing-->
                    </div>
                </a>
                
            </div>
        </div>

        <script>
        document.getElementById('submitbutton').addEventListener('click', function(event) {
            event.preventDefault();
            submitDataFromFirstForm();
        });

        function submitDataFromFirstForm() {
            var category = document.getElementById('categoriesC').value;
            var type = document.getElementById('typesC').value;
            var creator = document.getElementById('creatorsC').value;
            var application = document.getElementById('appC').value;
            var title = document.getElementById('titleC').value;
            var keywords = document.getElementById('keywordsC').value;

            var selectedCreatorOption = document.getElementById('creatorsC').options[document.getElementById('creatorsC').selectedIndex];
            var creatorText = selectedCreatorOption.text; 

            if (creatorText === "Crowdsourced") {
                creator = "co";
            } else if (creatorText === "Developer-Made") {
                creator = "dm";
            }

            document.getElementById('category').value = category;
            document.getElementById('type').value = type;
            document.getElementById('creator').value = creator;
            document.getElementById('application').value = application;
            document.getElementById('title').value = title;
            document.getElementById('keywords').value = keywords;

            document.getElementById("confirmsubC").submit();
        }
    </script>

        <script type="text/javascript">
            AOS.init();
            new Sticky('.sticky-effect');
        </script>

        <script>
            function getCookie(cookie_var) {
                let name = cookie_var + "=";
                let decodedCookie = decodeURIComponent(document.cookie);
                let ca = decodedCookie.split(';');
                for(let i = 0; i <ca.length; i++) {
                    let c = ca[i];
                    while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                    }
                }
                return "";
            }

            var username = getCookie("stored_username");

            function usernameDisplay(b_username) {
                var loginlink = document.getElementById("toprightblink");
                var loginbox = document.getElementById("toprightcontent");
                if(b_username != ""){

                    loginlink.setAttribute('href', 'authors.php');

                    loginbox.style.setProperty('background-color','#0066ef');
                    loginbox.style.setProperty('justify-content','right');
                    loginbox.style.setProperty('padding-right', '10px');
                    loginbox.style.setProperty('font-size', 'medium');
                    loginbox.style.setProperty('color', '#ffffff');
                    loginbox.style.setProperty('padding-left', '10px');
                    
                    var w = window.innerWidth;
                    
                    if(w < 450){
                        loginbox.style.setProperty('width', '100px');
                        var l = b_username.length;
                        if (l >= 7){
                            loginbox.innerHTML = b_username.slice(0,6) + "...";
                        } else {
                            loginbox.innerHTML = b_username;
                        }
                    } else {
                        loginbox.style.setProperty('width', '200px');
                        var l = b_username.length;
                        if (l >= 13){
                            loginbox.innerHTML = b_username.slice(0,12) + "...";
                        } else {
                            loginbox.innerHTML = b_username;
                        }
                    }
                    

                    /* iffy abt the lower four, remove if want
                    loginbox.setAttribute('onmouseover','return toprighthover()');
                    loginbox.setAttribute('onmouseout','return toprightunhover()');
                    loginbox.setAttribute('onmousedown','return toprightactive()');
                    loginbox.setAttribute('onmouseup','return toprightunactive()'); */
                }
                else {
                    loginbox.style.setProperty('background-color','#bdd6f8');
                    loginbox.style.setProperty('justify-content','center');
                    loginbox.style.setProperty('text-align','center');
                    loginbox.style.setProperty('padding', '11px 30.5px 10px 30.5px');
                    loginbox.style.setProperty('font-size', '24px');
                    loginbox.style.setProperty('color', '#396646');
                    loginbox.style.setProperty('width', '131px');
                    loginbox.innerHTML = "Log In";
                }
            }

            function sendToLogin(b_username) {
                console.log("hello");
                if(b_username == ""){
                    location.replace("login.php");
                }
            }

            usernameDisplay(username);
            sendToLogin(username);

        </script>
    </body>
</html>

<!-- BACKEND COMMENTS 2024/04/07: CANT WORK ON YET
Requirements:
    HTML-ify content, then send to database for storing
-->