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
        <link rel="stylesheet" type="text/css" href="../styles/css/contribute2.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript" src="https://unpkg.com/sticky-js@1.3.0/dist/sticky.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
        <script type="text/javascript" src="../scripts/common.js"></script>
        <script type="text/javascript" src="../scripts/contribute2.js"></script>
        <script src="../scripts/tinymce/tinymce.min.js"></script>
        
        <script>
            tinymce.init({
                selector: '#editor',
                license_key: 'gpl'
            });
        </script>

        <title>Contribute | DigiSkillet</title>
        <link rel="icon" type="image/x-icon" href="../styles/assets/favicon.png">

    </head>

    <body class="flex-column">
        
        <div class="contribute2 root">
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
                <h1 class="big_title">CREATE TUTORIAL</h1>
            </div>
            
            <form class="texteditor" id="texteditor" method="post" > <!-- chuuchu --> <!-- removed for now: action="submit.php" -->
                <fieldset form="texteditor" id="texteditorF">
                <div id="bignoteC2" class="formnote centered"> If your tutorial is in the form of a video, please paste its link below. Otherwise, type the contents of your tutorial below. Please do not disclose any of your personal information on this application.</div>
                    <textarea name="editor" id="editor" class="editor" rows="10" cols="80">
                    </textarea>
                    <div id="inpnoteC2" class="formnote centered"></div>
                    <span class="centerFormButtons"> <!--configure the goBack() onclick here but for the login/signup clicks-->
                        <button class="formButton clickable" id="" 
                        onclick="update(); return presubmitContributeTwo('inpnoteC2','confirmsubC2')">Post</button> <!--remember to add smth here!-->
                    </span>
                </fieldset>
                
            </form>
            <form class="formconfirm" id="confirmsubC2" autocomplete="off" onsubmit="event.preventDefault()">
                <fieldset form="confirmsubC2" id="confirmsubC2F">
                    <div class="formconfirmtext">
                        <div class="formconfirmtitle">Confirm</div>
                        <div class="formconfirmmessage">Post tutorial?</div>
                    </div>

                    <span class="centerFormButtons"> <!--configure the goBack() onclick here but for the login/signup clicks-->
                        <button class="formButton clickable" id="backbutton" 
                        onclick="return closeConfirmC2('confirmsubC2')">Back</button> <!-- go back on onclick-->

                        <a href="tutorials.php" class="to_tutorials no_underline" id="submitbutton">
                            <div class="formButton clickable" id="submitbuttontext">Post</div>
                        </a> <!-- @/BACKEND -->
                        <!--<input class="formButton" id="clearbutton" type="submit" value="Clear"> // either input or submit for clear. but confirm which one to use for the submit -->
                    </span>
                </fieldset>
                <!-- are you sure you want to submit??-->
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
        $category = $_GET["category"];
        $type = $_GET["type"];
        $application = $_GET["application"];
        $title = $_GET["title"];
        $keywords = $_GET["keywords"];
        $creator = $_GET["creator"];
        ?>

        <script>
        var category = "<?php echo htmlspecialchars($category); ?>";
        var type_val = "<?php echo htmlspecialchars($type); ?>";
        var application = "<?php echo htmlspecialchars($application); ?>";
        var title_val = "<?php echo htmlspecialchars($title); ?>";
        var keywords = "<?php echo htmlspecialchars($keywords); ?>";
        var creator = "<?php echo htmlspecialchars($creator); ?>";

        var content = "";

        function update() {
            console.log("updated");
            var content = tinymce.activeEditor.getContent();
            content = content.replace(/\n/g, "<br>").replace(/\r/g, "<br>");
        }

        $(document).ready(function() {
            $('#submitbuttontext').click(function(e) {
                e.preventDefault(); 

                var content = tinymce.activeEditor.getContent();
                content = content.replace(/\n/g, "<br>").replace(/\r/g, "<br>");
               
                $.ajax({
                    url: '../backend/contribute2_upload.php',
                    type: 'POST', 
                    data: {
                        category: category,
                        type_val: type_val,
                        application: application,
                        title_val: title_val,
                        keywords: keywords,
                        content: content, 
                        creator: creator
                    },
                    success: function(response) {
                        console.log(response);
                        $('.flex_col').html(response); 
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });

                location.replace("tutorials.php"); // TEST THIS
            });
        });
        </script>
 
        
        <script type="text/javascript">
            // CKEDITOR.replace('editor');
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