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
        <link rel="stylesheet" type="text/css" href="../styles/css/tutorialpage.css" />
        <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript" src="https://unpkg.com/sticky-js@1.3.0/dist/sticky.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
        <script type="text/javascript" src="../scripts/common.js"></script>
        <script type="text/javascript" src="../scripts/tutorials.js"></script>
    
        <title>Tutorial Page | DigiSkillet</title>
        <link rel="icon" type="image/x-icon" href="../styles/assets/favicon.png">
    </head>
    
    <body class="flex-column">
        <div class="tutorialpage root">
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
            <div class="tutcolumn">
                <div class="title" id="title">Title Long Title Longer Title Longest Title Yessir</div>
                <div class="inforow">
                    <div class="inforowinfo bold" id="user"></div>
                    <div class="inforowinfo">•</div>
                    <div class="inforowinfo" id="date"></div>
                    <div class="inforowinfo">•</div>
                    <div class="inforowinfo" id="category"></div>
                </div>
                <hr>
                <center><iframe id="video_embed" src="<?php echo htmlspecialchars($videoLink); ?>" frameborder="0" allowfullscreen></iframe></center>
                <div id="textual_embed"></div>
                </div>
                
                <!--actual tutorial here-->
            </div>
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

    <?php
    require_once '../connection.php';

    $sql = 'SELECT * FROM TUTORIALS WHERE ID = ?';

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $_GET['ID']);
    $stmt->execute();
    $result = $stmt->get_result();
    $tut_to_load = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $stmt->close();
    
    $title = $tut_to_load[0]['Title'];
    $user = $tut_to_load[0]['User'];
    $date = $tut_to_load[0]['Date'];
    $category = $tut_to_load[0]['CategoryLong'];
    $type = $tut_to_load[0]['Type'];
    $text = $tut_to_load[0]['Text'];
    $videoLink = $tut_to_load[0]['VideoLink'];

    ?>

    <script>
        type = <?php echo '"' . htmlspecialchars($type) . '"'; ?>;

        document.getElementById("title").innerHTML = "<?php echo htmlspecialchars($title); ?>";
        document.getElementById("user").innerHTML = "<?php echo htmlspecialchars($user); ?>";
        document.getElementById("date").innerHTML = "<?php echo htmlspecialchars($date); ?>";
        document.getElementById("category").innerHTML = "<?php echo htmlspecialchars($category); ?>";

        if (type == "Textual") {
            var videoEmbed = document.getElementById("video_embed");
            if (videoEmbed) {
            videoEmbed.parentNode.removeChild(videoEmbed);
            }
            document.getElementById("textual_embed").innerHTML = <?php echo json_encode($text, JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS); ?>;
        } else {
            document.getElementById("video_embed").src = "<?php echo htmlspecialchars($videoLink); ?>";
        }


    </script>


</html>

<!-- BACKEND COMMENTS: 
Difficulty Scaling: 10/10
Requirements:
    Get data from back-end
    Utilize different sortings to sort by specific parameters
    Display tutorial in proper way
-->