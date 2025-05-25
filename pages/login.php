<!DOCTYPE html>
<html lang="en" class="notranslate" translate="no">
    <script>
        var user_val = "";
        var password_val = "";
        var mode_val = ""; //sign_up, log_in

        
        // Cookie getter
        document.addEventListener("DOMContentLoaded", function() {
            var storedUsername = getCookie("stored_username");
            if (storedUsername) {
                // Use the storedUsername variable as needed
                console.log("Stored username:", storedUsername);
            }
        });

        function getCookie(name) {
            var value = "; " + document.cookie;
            var parts = value.split("; " + name + "=");
            if (parts.length == 2) return parts.pop().split(";").shift();
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

        function clearSetup(a, b, c, d, e) {
            console.log("Theres no sun 1")
            user_val = "";
            password_val = "";

            if(e != null){ // TEST IF THIS WORKS
                return clearInputsLogPage(a,b,c,d,e);
            } else {
                return clearInputsLogPage(a,b,c,d);
            }
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
        <link rel="stylesheet" type="text/css" href="../styles/css/login.css" />
        <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript" src="https://unpkg.com/sticky-js@1.3.0/dist/sticky.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
        <script type="text/javascript" src="../scripts/common.js"></script> <!-- make these JS -->
        <script type="text/javascript" src="../scripts/login.js"></script>
    
        <title>Log In | DigiSkillet</title>
        <link rel="icon" type="image/x-icon" href="../styles/assets/favicon.png">
    
    </head>
    
    <body class="flex-column">
        <div class="login root">
            <div class="content_box">
                <img class="image clickable" src="../styles/assets/digiskilletlogo.png" alt="alt text" onclick="return toggleNavigation()"/>                
                <!--<a href="login.php" class="no_underline" id="toprightblink">
                    <div class="medium_title" id="toprightcontent">Log In</div>
                </a>-->
            </div>
            <div class="rect2"></div>
            <div class="box">
                <h4 class="highlight">Camacho, Del Rosario, Mortera 2024</h4>
            </div>

            
            <div class="content_box1">
                <div class="centered loginhexset">Click one of the hexagons to log in or create an account.</div>
                <div class="rect5"></div>
                <div class="medium_title1 clickable loginhexes" id="loghex_light" style="--src:url(../assets/emptylightblue.png)" onclick="return openForm('logIn', 'signUp')">Log In</div>
                <div class="medium_title1 clickable loginhexes" id="loghex_hover" style="--src:url(../assets/emptydarkblue.png)" onclick="return openForm('logIn', 'signUp')">Log In</div>
                <div class="medium_title1 clickable loginhexes" id="loghex" style="--src:url(../assets/emptyblue.png)" onclick="return openForm('logIn', 'signUp')" onmouseover="return hoverl('loghex')" onmouseout="return unhoverl('loghex')" onmousedown="return activel('loghex_hover')" onmouseup="return unactivel('loghex_hover')">Log In</div>

                <div class="medium_title11 clickable loginhexes" id="signhex_light" style="--src:url(../assets/emptylightblue.png)" onclick="return openForm('signUp', 'logIn')">Sign Up</div>
                <div class="medium_title11 clickable loginhexes" id="signhex_hover" style="--src:url(../assets/emptydarkblue.png)" onclick="return openForm('signUp', 'logIn')">Sign Up</div>
                <div class="medium_title11 clickable loginhexes" id="signhex" style="--src:url(../assets/emptyblue.png)" onclick="return openForm('signUp', 'logIn')" onmouseover="return hoverl('signhex')" onmouseout="return unhoverl('signhex')" onmousedown="return activel('signhex_hover')" onmouseup="return unactivel('signhex_hover')">Sign Up</div>
            </div>

            <!-- BACKEND TODO: Take in input from here, make PHP redirect to tutorials (don't log in yet), add cookies account-->
            <form class="form" id="signUp" autocomplete="off" onsubmit="" onreset=""> <!--for on submit, add a verifier for inputs; for on reset, add a confirmer if want to clear-->
                <fieldset form="signUp" id="signUpF">
                    <div class="formtitle">Create Account</div>

                    <label class="biglab" for="userName">Username:</label><br>
                    <input class="formtextinput" type="text" id="userNameSU" name="userNameSU"
                        onblur="return checkInput('userNameSU', 'unnoteSU', 'passWordSU', 'passWordRepeatSU', 'cpwnoteSU')"
                        onfocus="return checkInput('userNameSU', 'unnoteSU', 'passWordSU', 'passWordRepeatSU', 'cpwnoteSU')" 
                        oninput='user_val = document.getElementById("userNameSU").value'/> <!-- for onblur and onfocus, add mini verifiers for content that edit the reminder below-->
                    <div id="unnoteSU" class="formnote">Please input your username.</div><br>

                    <label class="biglab" for="passWord">Password:</label><br>
                    <input class="formtextinput" type="password" id="passWordSU" name="passWordSU"
                        onblur="return checkInput('passWordSU', 'pwnoteSU', 'passWordSU', 'passWordRepeatSU', 'cpwnoteSU')"
                        onfocus="return checkInput('passWordSU', 'pwnoteSU', 'passWordSU', 'passWordRepeatSU', 'cpwnoteSU')" 
                        oninput='password_val = document.getElementById("passWordSU").value'/> <!-- for onblur and onfocus, add mini verifiers for content that edit the reminder below-->
                    <span class="formnote showpass"><input class="formcheckbox" type="checkbox" id="showPassSU" name="showPassSU" onclick="return showPassword('passWordSU')">Show Password</span>
                    <div id="pwnoteSU" class="formnote">Please input your password.</div><br> <!--multipurpose this as formreminder-->

                    <label class="biglab"for="passWordRepeat">Confirm Password:</label><br>
                    <input class="formtextinput" type="password" id="passWordRepeatSU" name="passWordRepeatSU"
                        onblur="return passwordMatch('passWordSU', 'passWordRepeatSU', 'cpwnoteSU')"
                        onfocus="return passwordMatch('passWordSU', 'passWordRepeatSU', 'cpwnoteSU')" /> <!-- for onblur and onfocus, add mini verifiers for content that edit the reminder below-->
                    <div id="cpwnoteSU" class="formnote">Please input your password again.</div><br><br>

                    <div id="nmnoteSU" class="formnote"></div>
                    <div id="bignoteSU" class="formnote">Kindly reach out to the researchers if you do not remember your username and/or password.</div>

                    <span class="centerFormButtons">  <!--configure the goBack() onclick here but for the login/signup clicks-->
                        <input class="formButton clickable" type="button" onclick="backend_retrieveUser('sign-up', user_val, password_val)" value="Create Account"> <!--when clicking, make this check both input and passwordmatch again :]], then open the confirm thingo-->
                        <input class="formButton clickable" type="reset" value="Clear Inputs" 
                        onclick="return submitPress('signUpF', 'confirmclrSU')">
                    </span>
                </fieldset>
            </form>

            <!-- BACKEND TODO: Take in input from here, make PHP redirect to Authors(?) (don't log in yet), add cookies account-->
            <form class="form" id="logIn" autocomplete="off" onsubmit="" onreset=""> <!--for on submit, add a verifier for inputs; for on reset, add a confirmer if want to clear-->
                <fieldset form="logIn" id="logInF">
                    <div class="formtitle">Log In</div>

                    <label class="biglab" for="userName">Username:</label><br>
                    <input class="formtextinput" type="text" id="userNameLI" name="userNameLI"
                        onblur="checkInput('userNameLI','unnoteLI')"
                        onfocus="checkInput('userNameLI','unnoteLI')" 
                        oninput='user_val = document.getElementById("userNameLI").value'/> <!-- for onblur and onfocus, add mini verifiers for content that edit the reminder below-->
                    <div id="unnoteLI" class="formnote">Please input your username.</div><br>

                    <label class="biglab" for="passWord">Password:</label><br>
                    <input class="formtextinput" type="password" id="passWordLI" name="passWordLI"
                        onblur="checkInput('passWordLI','pwnoteLI')"
                        onfocus="checkInput('passWordLI','pwnoteLI')"
                        oninput='password_val = document.getElementById("passWordLI").value' /> <!-- for onblur and onfocus, add mini verifiers for content that edit the reminder below-->
                    <span class="formnote showpass"><input class="formcheckbox" type="checkbox" id="showPassLI" name="showPassLI" onclick="return showPassword('passWordLI')">Show Password</span>
                    <div id="pwnoteLI" class="formnote">Please input your password.</div><br><br>
                    
                    <div id="nmnoteLI" class="formnote"></div>
                    <div id="bignoteLI" class="formnote">Kindly reach out to the researchers if you do not remember your username and/or password.</div>

                    <span class="centerFormButtons"> <!--configure the goBack() onclick here but for the login/signup clicks-->
                        <input class="formButton clickable" type="button" value="Log In"
                        onclick="backend_retrieveUser('log-in', user_val, password_val); //return presubmitLogIn('userNameLI','passWordLI','unnoteLI','pwnoteLI','nmnoteLI')">
                        <input class="formButton clickable" type="reset" value="Clear Inputs"
                        onclick="return submitPress('logInF', 'confirmclrLI')">
                    </span>
                </fieldset>
            </form>

            <!-- BACKEND TODO: If they say Back here, remove the row with their ID on the database-->
            <form class="formconfirm" id="confirmsubSU" autocomplete="off" onsubmit="">
                <fieldset form="confirmsubSU" id="confirmsubSUF">
                    <div class="formconfirmtext">
                        <div class="formconfirmtitle">Confirm</div>
                        <div class="formconfirmmessage">Are you sure you want to sign up?</div>
                    </div>

                    <span class="centerFormButtons"> <!--configure the goBack() onclick here but for the login/signup clicks-->
                        <button class="formButton clickable" id="backbutton" onclick="return closeConfirm('signUpF', 'confirmsubSU')">Back</button> <!-- go back on onclick-->
                        <button class="formButton clickable" id="submitbutton" onclick="return submitSignUp('userNameSU','passWordSU')">Submit</button> <!-- clear on onclick-->
                        <!--<input class="formButton clickable" id="clearbutton" type="submit" value="Clear"> // either input or submit for clear. but confirm which one to use for the submit -->
                    </span>
                </fieldset>
                <!-- are you sure you want to submit??-->
            </form>

            <form class="formconfirm" id="confirmclrSU" autocomplete="off" onsubmit="">
                <fieldset form="confirmclrSU" id="confirmclrSUF">
                    <div class="formconfirmtext">
                        <div class="formconfirmtitle">Confirm</div>
                        <div class="formconfirmmessage">Are you sure you want to clear information?</div>
                    </div>

                    <span class="centerFormButtons"> <!--configure the goBack() onclick here but for the login/signup clicks-->
                        <button class="formButton clickable" id="backbutton" 
                        onclick="return closeConfirm('signUpF', 'confirmclrSU')">Back</button> <!-- go back on onclick-->
                        <button class="formButton clickable" id="clearbutton" 
                        onclick="return clearSetup('userNameSU','passWordSU','signUpF','confirmclrSU','passWordRepeatSU')">Clear</button> <!-- clear on onclick-->
                        <!--<input class="formButton clickable" id="clearbutton" type="submit" value="Clear"> // either input or submit for clear. but confirm which one to use for the submit -->
                    </span>
                </fieldset>
                <!-- are you sure you want to clear??-->
            </form>
            <form class="formconfirm" id="confirmclrLI" autocomplete="off" onsubmit="">
                <fieldset form="confirmclrLI" id="confirmclrLIF">
                    <!-- FRONTEND TODO: make a version of this that's just analogous to a JS Alert button, but for now, I'll be using it as the Alert when:
                        (a) signup username already used
                        (b) login password does not match
                     -->
                    <div class="formconfirmtext">
                        <div class="formconfirmtitle">Confirm</div>
                        <div class="formconfirmmessage">Are you sure you want to clear information?</div>
                    </div>

                    <span class="centerFormButtons"> <!--configure the goBack() onclick here but for the login/signup clicks-->
                        <button class="formButton clickable" id="backbutton" 
                        onclick="return closeConfirm('logInF', 'confirmclrLI')">Back</button> <!-- go back on onclick-->
                        <button class="formButton clickable" id="clearbutton" 
                        onclick="return clearSetup('userNameLI','passWordLI','logInF','confirmclrLI')">Clear</button> <!-- clear on onclick-->
                        <!--<input class="formButton clickable" id="clearbutton" type="submit" value="Clear"> // either input or submit for clear. but confirm which one to use for the submit -->
                    </span>
                </fieldset>
                <!-- are you sure you want to clear??-->
            </form>
            <!-- no need for confirm submit LI -->
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


            <!-- BACKEND ZONE -->


            <?php
            require_once '../connection.php';
            ?>

            <div id="test"></div>
            <script>
            function backend_retrieveUser(b_mode, b_username, b_pw) { //mode, username, password
                console.log("I'm working retrieveUser");
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    submitPress('signUpF', 'confirmclrSU');
                    document.getElementById("confirmclrSU").innerHTML = this.responseText;
                }
                xhttp.open("GET", "../backend/login_retrieveUser.php?b_mode=" + b_mode + "&b_username=" + b_username + "&b_pw=" + b_pw);
                xhttp.send();
            }
            </script> 
            

        </div>
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

            usernameDisplay(username);

        </script>
    </body>
</html>

<!-- BACKEND COMMENTS 2024/04/07: TODO
Difficulty scaling: 5/10
Requirements:
    Take data from sign-up/log-in and send to database
    If it says No in sign-up upon confirming, clear that name from the database
-->