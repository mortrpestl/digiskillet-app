<!DOCTYPE html>
<html lang="en" class="notranslate" translate="no">
    <head>
        <meta name="google" content="notranslate" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
        <link rel="stylesheet" type="text/css" href="styles/css/common.css" />
        <link rel="stylesheet" type="text/css" href="styles/css/fonts.css" />
        <link rel="stylesheet" type="text/css" href="styles/css/front.css" />
        <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript" src="https://unpkg.com/sticky-js@1.3.0/dist/sticky.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
        <script type="text/javascript" src="scripts/common.js"></script>
        <script type="text/javascript" src="scripts/dashboard.js"></script>

        <title>DigiSkillet</title>
        <link rel="icon" type="image/x-icon" href="styles/assets/favicon.png">
    
    
    
    </head>
    
    <body class="flex-column">
        <div class="front2 root">
            <div class="content_box">
                <img class="image clickable" src="styles/assets/digiskilletlogo.png" alt="alt text" onclick="return toggleNavigation()"/>
                <a href="pages/login.php" class="no_underline" id="toprightblink">
                    <div class="medium_title" id="toprightcontent">Log In</div>
                </a>
            </div>
            <div class="rect2"></div>
            <div class="box">
                <h4 class="highlight">Camacho, Del Rosario, Mortera 2024</h4>
            </div>
            <div class="flex_col">
                <h1 class="hero_title">DigiSkillet</h1>
                <h1 class="title">An app for digital skills and literacy tutorials</h1>
            </div>
            <div class="content_box1">
                <a href="pages/tutorials.php" class="no_underline">
                    <div class="item" onmouseover="return hoverd('tutorialshex','tutorialsrect')" onmousedown="return actived('tutorialshex_hover','tutorialsrect')" onmouseup="return unactived('tutorialshex_hover','tutorialsrect')" onmouseout="return unhoverd('tutorialshex','tutorialsrect')">
                        <div class="rect5o" id="tutorialsrect">
                            <h1 class="title1">Tutorials</h1>
                        </div>

                        <img class="image1l" id="tutorialshex_light" src="styles/assets/tutorialshex_light.png" alt="tutorials hexagon icon" />
                        <img class="image1l" id="tutorialshex_hover" src="styles/assets/tutorialshex_hover.png" alt="tutorials hexagon icon" />
                        <img class="image1l" id="tutorialshex" src="styles/assets/tutorialshex.png" alt="tutorials hexagon icon" />
                        <div class="dashblocker"></div>
                    </div>
                </a>
                <a href="pages/about.php" class="no_underline">
                    <div class="item" onmouseover="return hoverd('abouthex','aboutrect')" onmousedown="return actived('abouthex_hover','aboutrect')" onmouseup="return unactived('abouthex_hover','aboutrect')" onmouseout="return unhoverd('abouthex','aboutrect')">
                        <div class="rect5e" id="aboutrect">
                            <h1 class="title1">About Us</h1>
                        </div>

                        <img class="image1r" id="abouthex_light" src="styles/assets/abouthex_light.png" alt="about us hexagon icon" />
                        <img class="image1r" id="abouthex_hover" src="styles/assets/abouthex_hover.png" alt="about us hexagon icon" />
                        <img class="image1r" id="abouthex" src="styles/assets/abouthex.png" alt="about us hexagon icon" />
                        <div class="dashblocker"></div>
                    </div>
                </a>
                <a href="pages/login.php" class="no_underline">
                    <div class="item" onmouseover="return hoverd('loginhex','loginrect')" onmousedown="return actived('loginhex_hover','loginrect')" onmouseup="return unactived('loginhex_hover','loginrect')" onmouseout="return unhoverd('loginhex','loginrect')">
                        <div class="rect5o" id="loginrect">
                            <h1 class="title1">Log In</h1>
                        </div>

                        <img class="image1l" id="loginhex_light" src="styles/assets/login_light.png" alt="login hexagon icon" />
                        <img class="image1l" id="loginhex_hover" src="styles/assets/login_hover.png" alt="login hexagon icon" />
                        <img class="image1l" id="loginhex" src="styles/assets/login.png" alt="login hexagon icon" />
                        <div class="dashblocker"></div>
                    </div>
                </a>
            </div>
            <div class="navigation" id="navi" style="display: none;"> <!-- ADD IMAGES BEFORE ADDING TO OTHER PAGES !! -->
                <a href="http://digiskillet.com/" class="no_underline">
                    <div class="navcell">
                        <img class="navicon" src="styles/assets/home.png" alt="home icon"/>
                        <div class="navname">Home</div>
                    </div>
                </a>
                <a href="pages/tutorials.php" class="no_underline">
                    <div class="navcell">
                        <img class="navicon" src="styles/assets/tutorials.png" alt="tutorials icon"/>
                        <div class="navname">Tutorials</div>
                    </div>
                </a>
                <a href="pages/contribute1.php" class="no_underline">
                    <div class="navcell">
                        <img class="navicon" src="styles/assets/contribute.png" alt="contribute icon"/>
                        <div class="navname">Contribute</div>
                    </div>
                </a>
                <a href="pages/authors.php" class="no_underline">
                    <div class="navcell">
                        <img class="navicon" src="styles/assets/profile.png" alt="profile icon"/>
                        <div class="navname">Profile</div> <!-- dont forget to add a "signed in?" checker for these -->
                    </div>
                </a>
                <a href="pages/about.php" class="no_underline">
                    <div class="navcell">
                        <img class="navicon" src="styles/assets/about.png" alt="about us icon"/>
                        <div class="navname">About Us</div>
                    </div>
                </a>
                <a class="no_underline clickable" onclick="return toggleNavigation()">
                    <div class="navcell">
                        <img class="navicon" src="styles/assets/back.png" alt="back icon"/>
                        <div class="navname">Close</div> <!--closes the thing-->
                    </div>
                </a>
                
            </div>
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

                    loginlink.setAttribute('href', 'pages/authors.php');

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

<!-- BACKEND COMMENTS: DONE
No need to do anything for back-end here.
-->