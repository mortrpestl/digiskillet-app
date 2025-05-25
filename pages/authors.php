<!DOCTYPE html>
<html lang="en" class="notranslate" translate="no">
    <head>
        <meta name="google" content="notranslate" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
        <link rel="stylesheet" type="text/css" href="../styles/css/common.css" />
        <link rel="stylesheet" type="text/css" href="../styles/css/fonts.css" />
        <link rel="stylesheet" type="text/css" href="../styles/css/author.css" />
        <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript" src="https://unpkg.com/sticky-js@1.3.0/dist/sticky.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
        <script type="text/javascript" src="../scripts/common.js"></script>
        <script type="text/javascript" src="../scripts/authors.js"></script>
    
        <title>Author Page | DigiSkillet</title>
        <link rel="icon" type="image/x-icon" href="../styles/assets/favicon.png">
    
    </head>
    
    <body class="flex-column">
        <div class="author root">
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
            <div class="flex_col">
                <!-- <div class="flex_col1">
                    <h1 class="title">SampleAuthor12</h1>
                    <h5 class="highlight1">JOINED: &lt;date&gt;</h5>
                </div>
                <div class="flex_col2">
                    <div class="flex_col3">
                        <h1 class="title">CONTRIBUTIONS</h1>
                        <div class="text">Sort by:</div>
                    </div>
                    <div class="flex_col4">
                    </div> 
                </div> -->
            </div>
            <form class="form" id="signout" autocomplete="off" onsubmit="" onreset=""> 
                <fieldset form="signout" id="signoutF">
                    <span class="centerFormButtons" style="margin-top: 0px;"> 
                        <input class="formButton" type="submit" value="Sign Out"
                        onclick="return submitPress('signoutF', 'confirmsignout')">
                    </span>
                </fieldset>
            </form>
            <form class="formconfirm" id="confirmsignout" autocomplete="off" onsubmit="">
                <fieldset form="confirmsignout" id="confirmsignoutF">
                    <div class="formconfirmtext">
                        <div class="formconfirmtitle">Confirm</div>
                        <div class="formconfirmmessage">Are you sure you want to sign out?</div>
                    </div>

                    <span class="centerFormButtons">
                        <button class="formButton clickable" id="backbutton" 
                        onclick="return closeConfirm('signoutF', 'confirmsignout')">Back</button> <!-- go back on onclick-->
                        <button class="formButton clickable" id="clearbutton" 
                        onclick="signOut()">Sign Out</button> <!-- @/BACKEND -->
                    </span>
                </fieldset>
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

        <?php
        require_once '../connection.php';
        ?>

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

            console.log("test3");
            var username = getCookie("stored_username");
            console.log("test2");

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
                console.log("hello!");
                if(b_username == ""){
                    location.replace("login.php");
                }
            }

            usernameDisplay(username);
            sendToLogin(username);

            function authors_loadContent(b_username) {
                var w_width = window.innerWidth;
                console.log(w_width);

                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.querySelector(".flex_col").innerHTML = this.responseText; 
                };

                var encoded_username = encodeURIComponent(b_username);

                console.log("GET", "../backend/authors_loadContent.php?b_username=" + b_username + "&w_width=" + w_width);

                xhttp.open("GET", "../backend/authors_loadContent.php?b_username=" + encoded_username + "&w_width=" + w_width);
                xhttp.send();
            }

            authors_loadContent(username);

            function signOut(){
                console.log("gyatt");
                document.cookie = "stored_username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                location.replace("tutorials.php");
            }

            

        </script>

       

        <script type="text/javascript">
            AOS.init();
            new Sticky('.sticky-effect');
        </script>
    </body>    
</html>

<!-- BACKEND COMMENTS: DONE
No need to do anything for back-end here.
-->

<!-- CONTENT TODO:
Add the actual content
-->