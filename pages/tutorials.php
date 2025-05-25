<!DOCTYPE html>
<html lang="en" class="notranslate" translate="no">

    <script>
        var scwidth = window.innerWidth;
        var category = ["idl", "cmc", "dcc", "sft", "psl"];
        var sort_categ_val = "TEXT";
        var sort_order_val = "ASC";
        var search_categ_val = "TITLE";
        var search_value_val = "";
        var password_val = "";

        function setCookie(cookieName, cookieValue, expirationDays) {
            var d = new Date();
            d.setTime(d.getTime() + (expirationDays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            let name = cname + "=";
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

        tut_pw = getCookie("tut_pw");

        /*function setAuthor(creator){
            if(creator == "co"){
                var yav = document.getElementById("youareviewing");
                yav.style.setProperty("display", "block");
                yav.innerHTML = "You are viewing CROWDSOURCED tutorials.";
            }
            else if(creator == "dm"){
                var yav = document.getElementById("youareviewing");
                yav.style.setProperty("display", "block");
                yav.innerHTML = "You are viewing DEVELOPER-MADE tutorials.";

                var stud = document.getElementById("studyplanDM");
                stud.style.setProperty("display", "block");
                // study plan and dev made innerhtml
            }

            
        }

        

        function passwordTutSubmit(type_tut){
            if(password_val == "crowddigiskillet#" && type_tut == "CO"){
                setCookie("tut_pw", "co", 30);
                var miniform = document.getElementById("choosetutorial");
                miniform.style.setProperty("display", "none");

                var miniform2 = document.getElementById("confirmcrowdsourced");
                miniform2.style.setProperty("display", "none");

                var yav = document.getElementById("youareviewing");
                yav.style.setProperty("display", "block");
                yav.innerHTML = "You are viewing CROWDSOURCED tutorials.";
                backend_hexclick(category[0], category[1], category[2], category[3], category[4], scwidth);

                setAuthor("co");
                return false;
               
            }else if(password_val == "digiskilletdev#" && type_tut == "DM"){
                setCookie("tut_pw", "dm", 30);
                var miniform = document.getElementById("choosetutorial");
                miniform.style.setProperty("display", "none");

                var miniform3 = document.getElementById("confirmdevmade");
                miniform3.style.setProperty("display", "none");
                
                backend_hexclick(category[0], category[1], category[2], category[3], category[4], scwidth);

                setAuthor("dm");
                return false;

            }else if(type_tut == "CO"){
                var inp =  document.getElementById("passWordCO");

                var rem = document.getElementById("pwnoteCO");

                inp.style.setProperty("border", "2.5px solid #c82f2b");
                rem.innerHTML = "Incorrect password."; 
                rem.style.setProperty("color", "#c82f2b");

                return false;
                
            }else if(type_tut == "DM"){
                var inp =  document.getElementById("passWordDM");

                var rem = document.getElementById("pwnoteDM");

                inp.style.setProperty("border", "2.5px solid #c82f2b");
                rem.innerHTML = "Incorrect password.";
                rem.style.setProperty("color", "#c82f2b");

                return false;
                
            }
            
        }

        setAuthor(tut_pw); // TEST THIs

        setCookie("cochecks", "000000000000000", 30);
        setCookie("dmchecks", "000000000000000", 30);

        function saveChecks(name){
            var valuelist = document.getElementsByName(name).value;
            var savedString = "";

            for(var i = 0, v = valuelist[i]; i < v.length; ++i){

                if(v=="True"){
                    savedString += "1";
                } else {
                    savedString += "0";
                }

                setCookie("dmchecks", savedString, 30);
            }
        }

        function placeChecks(savedString){
            for(var i = 0, v = savedString[i]; i < v.length; ++i){
                var ic = i + 1;
                var id = "tut" + ic;
                var element = document.getElementById(id);

                if(v == "1"){
                    element.checked = true; // TEST
                    console.log("works!");
                } else {
                    element.checked = false;
                }
            }
        }

        var coSavedStr = getCookie("cochecks");
        var dmSavedStr = getCookie("dmchecks");

        placeChecks(coSavedStr);
        placeChecks(dmSavedStr);*/
    </script>

    <head>
        <meta name="google" content="notranslate" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
        <link rel="stylesheet" type="text/css" href="../styles/css/common.css" />
        <link rel="stylesheet" type="text/css" href="../styles/css/fonts.css" />
        <link rel="stylesheet" type="text/css" href="../styles/css/tutorials.css" />
        <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script type="text/javascript" src="https://unpkg.com/sticky-js@1.3.0/dist/sticky.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/headroom.js@0.12.0/dist/headroom.min.js"></script>
        <script type="text/javascript" src="../scripts/common.js"></script>
        <script type="text/javascript" src="../scripts/tutorials.js"></script>
        <link rel="stylesheet" type="text/css" href="../backend/tutorials_getfromhex.php" />
    
        <title>Tutorials | DigiSkillet</title>
        <link rel="icon" type="image/x-icon" href="../styles/assets/favicon.png">

    </head>
    
    <body class="flex-column">
        <div class="tutorials root">
            <div class="content_box">
                <img class="image clickable" src="../styles/assets/digiskilletlogo.png" alt="alt text" onclick="return toggleNavigation()"/> <!-- fix later -->                
                <a href="login.php" class="no_underline" id="toprightblink">
                    <div class="medium_title" id="toprightcontent">Log In</div>
                </a>
            </div>
            <div class="rect2"></div>
            <div class="box">
                <h4 class="highlight">Camacho, Del Rosario, Mortera 2024</h4>
            </div>
            <!--<div class="revealhex" onclick="return toggleRevealHexagons()">
                <div>i</div>
            </div>-->
            <div class="flex_col">
                <h1 class="big_title">TUTORIALS</h1>

                <div class="highlight1">
                <form class="search" action="tutorials_search()" onkeydown="return event.key != 'Enter';">
                        <label for="search" id="searchimg">
                            <img class="image" src="../styles/assets/search.png" alt="alt text" />
                        </label>
                        <input type="text" id="search" name="search" oninput='search_value_val = document.getElementById("search").value; backend_search(category[0], category[1], category[2], category[3], category[4], search_categ_val, search_value_val)'>
                        
                        <br><br>
                        <label for="search_categ">Search by:</label>
                        <select name="search_categ" id="search_categ" onchange='search_categ_val = document.getElementById("search_categ").value; backend_search(category[0], category[1], category[2], category[3], category[4], search_categ_val, search_value_val)'>
                            <option value="title">Title</option>
                            <option value="keywords">Keywords</option>
                            <option value="application">Application</option>
                            <option value="user">User</option>
                            <option value="date">Date</option>
                        </select>
                </form>
                </div>

                <div class="centered choosewhich" id="youareviewing" style="display: none;"></div>

                <form class="form" id="choosetutorial" autocomplete="off" onsubmit="" onreset=""> 
                    <fieldset form="choosetutorial" id="choosetutorialF">
                        <div class="centered choosewhich">Choose which type of tutorial you'd like to learn with.</div>
                        <span class="centerFormButtons" style="margin-top: 0px;"> 
                            <input class="formButton" type="submit" value="Crowdsourced"
                            onclick="return submitPress('choosetutorialF', 'confirmcrowdsourced')">
                            <input class="formButton" type="submit" value="Developer-Made"
                            onclick="return submitPress('choosetutorialF', 'confirmdevmade')">
                        </span>
                    </fieldset>
                </form>
                <form class="formconfirm" id="confirmcrowdsourced" autocomplete="off" onsubmit="">
                    <fieldset form="confirmcrowdsourced" id="confirmcrowdsourcedF">
                        <div class="formconfirmtext">
                            <div class="formconfirmtitle">Crowdsourced</div>
                            <div class="formconfirmmessage">Please enter the password for crowdsourced tutorials.</div>

                            <label class="biglab" for="passWord">Password:</label><br>
                            <input class="formtextinput" type="password" id="passWordCO" name="passWordCO"
                                onblur="return checkInput('passWordCO', 'pwnoteCO')"
                                onfocus="return checkInput('passWordCO', 'pwnoteCO')" 
                                oninput='password_val = document.getElementById("passWordCO").value'/> <!-- for onblur and onfocus, add mini verifiers for content that edit the reminder below-->
                            <span class="formnote showpass"><input class="formcheckbox" type="checkbox" id="showPassCO" name="showPassCO" onclick="return showPassword('passWordCO')">Show Password</span>
                            <div id="pwnoteCO" class="formnote">Please input the password.</div><br>
                        </div>

                        <span class="centerFormButtons">
                            <button class="formButton clickable" id="backbutton" 
                            onclick="return closeConfirm('choosetutorialF', 'confirmcrowdsourced')">Back</button> <!-- go back on onclick-->
                            <button class="formButton clickable" id="" 
                            onclick="return passwordTutSubmit('CO')">Submit</button> <!-- @/BACKEND -->
                        </span>
                    </fieldset>
                </form>
                <form class="formconfirm" id="confirmdevmade" autocomplete="off" onsubmit="">
                    <fieldset form="confirmdevmade" id="confirmdevmadeF">
                        <div class="formconfirmtext">
                            <div class="formconfirmtitle">Developer-Made</div>
                            <div class="formconfirmmessage">Please enter the password for developer-made tutorials.</div>

                            <label class="biglab" for="passWord">Password:</label><br>
                            <input class="formtextinput" type="password" id="passWordDM" name="passWordDM"
                                onblur="return checkInput('passWordDM', 'pwnoteDM')"
                                onfocus="return checkInput('passWordDM', 'pwnoteDM')" 
                                oninput='password_val = document.getElementById("passWordDM").value'/> <!-- for onblur and onfocus, add mini verifiers for content that edit the reminder below-->
                            <span class="formnote showpass"><input class="formcheckbox" type="checkbox" id="showPassDM" name="showPassDM" onclick="return showPassword('passWordDM')">Show Password</span>
                            <div id="pwnoteDM" class="formnote">Please input the password.</div>
                        </div>

                        <span class="centerFormButtons">
                            <button class="formButton clickable" id="backbutton" 
                            onclick="return closeConfirm('choosetutorialF', 'confirmdevmade')">Back</button> <!-- go back on onclick-->
                            <button class="formButton clickable" id="" 
                            onclick="return passwordTutSubmit('DM')">Submit</button> <!-- @/BACKEND -->
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
                <!--
                <div class="hexagons">
                    <div>
                        <div onmouseover="return hovert('idl')" onmouseout="return unhovert('idl')" onmousedown="return activet('idl_hover')" onmouseup="return unactivet('idl_hover')" onclick="category[0] = 'idl'; backend_hexclick(category[0], category[1], category[2], category[3], category[4]); return hexclick('idl','idlblocker');">

                            <img class="tuthex" id="idl_light" src="../styles/assets/infodatalit_light.png" alt="information and data literacy hexagon" />
                            <img class="tuthex" id="idl_hover" src="../styles/assets/infodatalit_hover.png" alt="information and data literacy hexagon" />
                            <img class="tuthex" id="idl" src="../styles/assets/infodatalit.png" alt="information and data literacy hexagon" />
                        </div>
                        <div class="hexblocker" id="idlblocker" onmouseout="return hovert('idl')" onmouseover="return unhovert('idl')" onmousedown="return activet('idl_hover')" onmouseup="return unactivet('idl_hover')" onclick="category[0] = null; backend_hexclick(category[0], category[1], category[2], category[3], category[4]);return hexreclick('idl','idlblocker')"></div> 
                        <div class="hexdescriptor">Information and Data Literacy</div> 
                    </div>
                    
                    <div>
                        <div onmouseover="return hovert('cmc')" onmouseout="return unhovert('cmc')" onmousedown="return activet('cmc_hover')" onmouseup="return unactivet('cmc_hover')" onclick="category[1] = 'cmc'; backend_hexclick(category[0], category[1], category[2], category[3], category[4]); return hexclick('cmc','cmcblocker')">
                            <img class="tuthex" id="cmc_light" src="../styles/assets/commcollab_light.png" alt="communication and collaboration hexagon" />
                            <img class="tuthex" id="cmc_hover" src="../styles/assets/commcollab_hover.png" alt="communication and collaboration hexagon" />
                            <img class="tuthex" id="cmc" src="../styles/assets/commcollab.png" alt="communication and collaboration hexagon" />
                        </div>
                        <div class="hexblocker" id="cmcblocker" onmouseout="return hovert('cmc')" onmouseover="return unhovert('cmc')" onmousedown="return activet('cmc_hover')" onmouseup="return unactivet('cmc_hover')" onclick="category[1]='null'; backend_hexclick(category[0], category[1], category[2], category[3], category[4]);return hexreclick('cmc','cmcblocker')"></div> 
                        <div class="hexdescriptor">Communication and Collaboration</div> 
                    </div>
                    <div>
                        <div onmouseover="return hovert('dcc')" onmouseout="return unhovert('dcc')" onmousedown="return activet('dcc_hover')" onmouseup="return unactivet('dcc_hover')" onclick="category[2] = 'dcc'; backend_hexclick(category[0], category[1], category[2], category[3], category[4]); return hexclick('dcc','dccblocker')">
                            <img class="tuthex" id="dcc_light" src="../styles/assets/contentcreate_light.png" alt="digital content creation hexagon" />
                            <img class="tuthex" id="dcc_hover" src="../styles/assets/contentcreate_hover.png" alt="digital content creation hexagon" />
                            <img class="tuthex" id="dcc" src="../styles/assets/contentcreate.png" alt="digital content creation hexagon" />
                        </div>
                        <div class="hexblocker" id="dccblocker" onmouseout="return hovert('dcc')" onmouseover="return unhovert('dcc')" onmousedown="return activet('dcc_hover')" onmouseup="return unactivet('dcc_hover')" onclick="category[2]='null'; backend_hexclick(category[0], category[1], category[2], category[3], category[4]); return hexreclick('dcc','dccblocker')"></div>
                        <div class="hexdescriptor">Digital Content Creation</div>
                    </div>
                    <div>
                        <div onmouseover="return hovert('sft')" onmouseout="return unhovert('sft')" onmousedown="return activet('sft_hover')" onmouseup="return unactivet('sft_hover')" onclick="category[3] = 'sft'; backend_hexclick(category[0], category[1], category[2], category[3], category[4]); return hexclick('sft','sftblocker')">
                            <img class="tuthex" id="sft_light" src="../styles/assets/safety_light.png" alt="safety hexagon" />
                            <img class="tuthex" id="sft_hover" src="../styles/assets/safety_hover.png" alt="safety hexagon" />
                            <img class="tuthex" id="sft" src="../styles/assets/safety.png" alt="safety hexagon" />
                        </div>
                        <div class="hexblocker" id="sftblocker" onmouseout="return hovert('sft')" onmouseover="return unhovert('sft')" onmousedown="return activet('sft_hover')" onmouseup="return unactivet('sft_hover')" onclick="category[3]='null'; backend_hexclick(category[0], category[1], category[2], category[3], category[4]);return hexreclick('sft','sftblocker')"></div>
                        <div class="hexdescriptor">Safety</div>
                    </div>
                    <div>
                        <div onmouseover="return hovert('psl')" onmouseout="return unhovert('psl')" onmousedown="return activet('psl_hover')" onmouseup="return unactivet('psl_hover')" onclick="category[4] = 'psd'; backend_hexclick(category[0], category[1], category[2], category[3], category[4]); return hexclick('psl','pslblocker')">
                            <img class="tuthex" id="psl_light" src="../styles/assets/problemsolve_light.png" alt="problem solving hexagon" />
                            <img class="tuthex" id="psl_hover" src="../styles/assets/problemsolve_hover.png" alt="problem solving hexagon" />
                            <img class="tuthex" id="psl" src="../styles/assets/problemsolve.png" alt="problem solving hexagon" />
                        </div>
                        <div class="hexblocker" id="pslblocker" onmouseout="return hovert('psl')" onmouseover="return unhovert('psl')" onmousedown="return activet('psl_hover')" onmouseup="return unactivet('psl_hover')" onclick="category[4]='null'; backend_hexclick(category[0], category[1], category[2], category[3], category[4]);return hexreclick('psl','pslblocker')"></div>
                        <div class="hexdescriptor">Problem Solving</div>
                    </div>
                </div>
-->
                <!--<div id="studyplanDM">
                    <h1 class="big_title centered">STUDY PLAN</h1>
                    <div class="centered choosewhich">Maaaring gamitin ang study plan sa ibaba bilang gabay sa pagkatuto ng mga tutorial.</div>
                    <table>
                        <tr>
                            <th class="tableheader">Date</th>
                            <th class="tableheader">Lessons</th>
                        </tr>
                        <tr>
                            <td><div class="centered">May 14</div></td>
                            <td class="tdlist">
                                <ol>
                                    <li><input class="formcheckbox" type="checkbox" id="tut1" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=3">DigiSkillet Tutorials #1: Paano mag-search gamit ng Browser? / Basics of Browsers</a></li><br>
                                    <li><input class="formcheckbox" type="checkbox" id="tut2" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=4">DigiSkillet Tutorials #2: Paano mag-download ng Files? / Basics of Downloading Files</a></li><br>
                                    <li><input class="formcheckbox" type="checkbox" id="tut3" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=5">DigiSkillet Tutorials #3: Paano mag-copy, cut, and paste ng text? / Copying, Cutting, Pasting</a></li>
                                </ol> 
                            </td>
                        </tr>
                        <tr>
                            <td>May 15</td>
                            <td class="tdlist">
                                <ol>
                                    <li><input class="formcheckbox" type="checkbox" id="tut4" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=6">DigiSkillet Tutorials #4: Ano ang folders at paano gamitin ito? / Basics of Offline Folders</a></li><br>
                                    <li><input class="formcheckbox" type="checkbox" id="tut5" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=7">DigiSkillet Tutorials #5: Ano ang GDrive at paano gamitin ito? / Basics of Online Folders (GDrive)</a></li><br>
                                    <li><input class="formcheckbox" type="checkbox" id="tut6" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=8">DigiSkillet Tutorials #6: Paano mag-send and receive ng e-mail gamit ang GMail?</a></li>
                                </ol> 
                            </td>
                        </tr>
                        <tr>
                            <td>May 16</td>
                            <td class="tdlist">
                                <ol>
                                    <li><input class="formcheckbox" type="checkbox" id="tut7" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=181">DigiSkillet Tutorials #7: Paano gamitin ang Facebook sa pag-message? / Basics of Facebook</a></li><br>
                                    <li><input class="formcheckbox" type="checkbox" id="tut8" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=182">DigiSkillet Tutorials #8: Ano ang netiquette at ang rules ng Internet? / Basics of Netiquette</a></li><br>
                                    <li><input class="formcheckbox" type="checkbox" id="tut9" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=183">DigiSkillet Tutorials #9: Paano gamitin ang Google Docs sa paggawa ng document? / Google Docs</a></li>
                                </ol> 
                            </td>
                        </tr>
                        <tr>
                            <td>May 17</td>
                            <td class="tdlist">
                                <ol>
                                    <li><input class="formcheckbox" type="checkbox" id="tut10" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=184">DigiSkillet Tutorials #10: Paano gamitin ang Google Slides sa paggawa ng document? / Google Slides</a></li><br>
                                    <li><input class="formcheckbox" type="checkbox" id="tut11" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=185">DigiSkillet Tutorials #11: Paano gamitin ang Google Sheets sa pagbuo ng spreadsheet? / Google Sheets</a></li><br>
                                    <li><input class="formcheckbox" type="checkbox" id="tut12" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=186">DigiSkillet Tutorials #12: Paano mag-print ng bagay? / Basics of Printing</a></li>
                                </ol> 
                            </td>
                        </tr>
                        <tr>
                            <td>May 20</td>
                            <td class="tdlist">
                                <ol>
                                    <li><input class="formcheckbox" type="checkbox" id="tut13" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=187">DigiSkillet Tutorials #13: Paano magdetect ng fake news online? / Detecting Fake News</a></li><br>
                                    <li><input class="formcheckbox" type="checkbox" id="tut14" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=189">DigiSkillet Tutorials #14: Paano umiwas sa scams at phishing attacks? / Scams and Phishing Attacks</a></li><br>
                                    <li><input class="formcheckbox" type="checkbox" id="tut15" name="dmcheckbox" value="True" onclick="saveChecks('dmcheckbox')"><a href="https://digiskillet.com/pages/tutorialpage.php?ID=190">DigiSkillet Tutorials #15 : Paano magsolve ng digital problems gamit ang Internet bilang gabay?</a></li>
                                </ol> 
                            </td>
                        </tr>
                    </table>
                </div>-->
                <div id="studyplanDM" style="display: none;">
                    <h1 class="big_title centered">STUDY PLAN</h1>
                    <div class="centered choosewhich">Maaaring gamitin ang study plan sa ibaba bilang gabay sa pagkatuto ng mga tutorial.</div>
                    <table>
                        <tr>
                            <th class="tableheader">Date</th>
                            <th class="tableheader">Lessons</th>
                        </tr>
                        <tr>
                            <td><div class="centered">May 14</div></td>
                            <td class="tdlist">
                                <ol>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=3">DigiSkillet Tutorials #1: Paano mag-search gamit ng Browser? / Basics of Browsers</a></li><br>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=4">DigiSkillet Tutorials #2: Paano mag-download ng Files? / Basics of Downloading Files</a></li><br>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=5">DigiSkillet Tutorials #3: Paano mag-copy, cut, and paste ng text? / Copying, Cutting, Pasting</a></li>
                                </ol> 
                            </td>
                        </tr>
                        <tr>
                            <td><div class="centered">May 15</div></td>
                            <td class="tdlist">
                                <ol>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=6">DigiSkillet Tutorials #4: Ano ang folders at paano gamitin ito? / Basics of Offline Folders</a></li><br>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=7">DigiSkillet Tutorials #5: Ano ang GDrive at paano gamitin ito? / Basics of Online Folders (GDrive)</a></li><br>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=8">DigiSkillet Tutorials #6: Paano mag-send and receive ng e-mail gamit ang GMail?</a></li>
                                </ol> 
                            </td>
                        </tr>
                        <tr>
                            <td><div class="centered">May 16</div></td>
                            <td class="tdlist">
                                <ol>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=181">DigiSkillet Tutorials #7: Paano gamitin ang Facebook sa pag-message? / Basics of Facebook</a></li><br>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=182">DigiSkillet Tutorials #8: Ano ang netiquette at ang rules ng Internet? / Basics of Netiquette</a></li><br>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=183">DigiSkillet Tutorials #9: Paano gamitin ang Google Docs sa paggawa ng document? / Google Docs</a></li>
                                </ol> 
                            </td>
                        </tr>
                        <tr>
                            <td><div class="centered">May 17</div></td>
                            <td class="tdlist">
                                <ol>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=184">DigiSkillet Tutorials #10: Paano gamitin ang Google Slides sa paggawa ng document? / Google Slides</a></li><br>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=185">DigiSkillet Tutorials #11: Paano gamitin ang Google Sheets sa pagbuo ng spreadsheet? / Google Sheets</a></li><br>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=186">DigiSkillet Tutorials #12: Paano mag-print ng bagay? / Basics of Printing</a></li>
                                </ol> 
                            </td>
                        </tr>
                        <tr>
                            <td><div class="centered">May 20</div></td>
                            <td class="tdlist">
                                <ol>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=187">DigiSkillet Tutorials #13: Paano magdetect ng fake news online? / Detecting Fake News</a></li><br>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=189">DigiSkillet Tutorials #14: Paano umiwas sa scams at phishing attacks? / Scams and Phishing Attacks</a></li><br>
                                    <li><a href="https://digiskillet.com/pages/tutorialpage.php?ID=190">DigiSkillet Tutorials #15: Paano magsolve ng digital problems gamit ang Internet bilang gabay?</a></li>
                                </ol> 
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="flex_col1">
                    <div class="text">
                        <label for="sorting_categ">Sort by: </label>
                        <select onchange='sort_categ_val = document.getElementById("sorting_categ").value; backend_sort(category[0], category[1], category[2], category[3], category[4], sort_categ_val, sort_order_val)' name="sorting_categ" id="sorting_categ" >
                            <option value="NAME">-</option>
                            <option value="NAME">Title</option>
                            <option value="APPLICATION">Application</option>
                            <option value="USER">User</option>
                            <option value="DATE">Date</option>
                        </select>

                        <br><label id="orderlabel" for="sorting_order">Order:</label>
                        <select onchange='sort_order_val = document.getElementById("sorting_order").value; backend_sort(category[0], category[1], category[2], category[3], category[4], sort_categ_val, sort_order_val)' name="sorting_order" id="sorting_order">
                            <option value="ASC">Ascending</option>
                            <option value="DESC">Descending</option>
                        </select>
                    </div>

                    <div class="flex_col4">
                        <!-- BACKEND TODO: Turn this into a template PHP code that takes information from the tutorials database-->

                        
                        <?php
                        require_once '../connection.php';
                        ?>

                        <!-- get based on Hex -->
                        <script>
                        function backend_hexclick(a, b, c, d, e, w) {
                            console.log("I'm working hexclick");
                            const xhttp = new XMLHttpRequest();
                            xhttp.onload = function() {
                                document.querySelector(".flex_col4").innerHTML = "";
                                document.querySelector(".flex_col4").innerHTML = this.responseText; //use querySelector to target by class
                            }
                            xhttp.open("GET", "../backend/tutorials_getfromhex.php?a=" + a + "&b=" + b + "&c=" + c + "&d=" + d + "&e=" + e + "&w=" + w);
                            xhttp.send();
                        }

                        // backend_hexclick(category[0], category[1], category[2], category[3], category[4], scwidth);
                        </script> 
                        
                        <!-- sorting -->
                        <script>
                        function backend_sort(a, b, c, d, e, categ, order) {
                            console.log("I'm working sort");
                            const xhttp = new XMLHttpRequest();
                            xhttp.onload = function() {
                                document.querySelector(".flex_col4").innerHTML = "";
                                document.querySelector(".flex_col4").innerHTML = this.responseText; //ose querySelector to target by class
                            }
                            xhttp.open("GET", "../backend/tutorials_sort.php?a=" + a + "&b=" + b + "&c=" + c + "&d=" + d + "&e=" + e + "&categ=" + categ + "&order=" + order);
                            xhttp.send();
                        }
                        </script> 

                        <!-- searching -->
                        <script>
                        function backend_search(a, b, c, d, e, categ, value) {
                            console.log("I'm working search");
                            const xhttp = new XMLHttpRequest();
                            xhttp.onload = function() {
                                document.querySelector(".flex_col4").innerHTML = "";
                                document.querySelector(".flex_col4").innerHTML = this.responseText; //use querySelector to target by class
                            }
                            xhttp.open("GET", "../backend/tutorials_search.php?a=" + a + "&b=" + b + "&c=" + c + "&d=" + d + "&e=" + e + "&categ=" + categ + "&value=" + value);
                            xhttp.send();
                        }

                        if(tut_pw == "co" || tut_pw == "dm"){
                            backend_hexclick(category[0], category[1], category[2], category[3], category[4], scwidth);  
                            console.log("why dont you toss");
                            var miniform = document.getElementById("choosetutorial");
                            miniform.style.setProperty("display", "none");
                        }
                        </script> 
                        
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            AOS.init();
            new Sticky('.sticky-effect');
            
            // function prevPage(){
            //     <?php
            //         if($page - 1 >= 0){
            //             $page = $page - 1;
            //         }
            //     ?>
            // }
            
            // function nextPage(){
            //     <?php
            //         $pagemax = ceil(sizeof($tutorials) / 5);

            //         if($page + 1 <= $pagemax - 1){
            //             $page = $page + 1;
            //         }
            //     ?>
            // }

            // function setPage(page){
            //     $newpage = page; // does this work,,,
            //     <?php
            //         $pagemax = ceil(sizeof($tutorials) / 5);

            //         if($newpage >= 0 and $newpage <= $pagemax - 1){
            //             $page = $newpage;
            //         }
            //     ?>
            // }
        </script>
        <script>
            function setCookie(cookieName, cookieValue, expirationDays) {
                var d = new Date();
                d.setTime(d.getTime() + (expirationDays * 24 * 60 * 60 * 1000));
                var expires = "expires=" + d.toUTCString();
                document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
            }

            function getCookie(cname) {
                let name = cname + "=";
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

            tut_pw = getCookie("tut_pw");

            function setAuthor(creator){
                if(creator == "co"){
                    var yav = document.getElementById("youareviewing");
                    yav.style.setProperty("display", "block");
                    yav.innerHTML = "You are viewing CROWDSOURCED tutorials.";
                }
                else if(creator == "dm"){
                    var yav = document.getElementById("youareviewing");
                    yav.style.setProperty("display", "block");
                    yav.innerHTML = "You are viewing DEVELOPER-MADE tutorials.";

                    var stud = document.getElementById("studyplanDM");
                    stud.style.setProperty("display", "block");
                    // study plan and dev made innerhtml
                }

                
            }

            

            function passwordTutSubmit(type_tut){
                if(password_val == "crowddigiskillet#" && type_tut == "CO"){
                    setCookie("tut_pw", "co", 30);
                    var miniform = document.getElementById("choosetutorial");
                    miniform.style.setProperty("display", "none");

                    var miniform2 = document.getElementById("confirmcrowdsourced");
                    miniform2.style.setProperty("display", "none");

                    var yav = document.getElementById("youareviewing");
                    yav.style.setProperty("display", "block");
                    yav.innerHTML = "You are viewing CROWDSOURCED tutorials.";
                    backend_hexclick(category[0], category[1], category[2], category[3], category[4], scwidth);

                    setAuthor("co");
                    return false;
                
                }else if(password_val == "digiskilletdev#" && type_tut == "DM"){
                    setCookie("tut_pw", "dm", 30);
                    var miniform = document.getElementById("choosetutorial");
                    miniform.style.setProperty("display", "none");

                    var miniform3 = document.getElementById("confirmdevmade");
                    miniform3.style.setProperty("display", "none");
                    
                    backend_hexclick(category[0], category[1], category[2], category[3], category[4], scwidth);

                    setAuthor("dm");
                    return false;

                }else if(type_tut == "CO"){
                    var inp =  document.getElementById("passWordCO");

                    var rem = document.getElementById("pwnoteCO");

                    inp.style.setProperty("border", "2.5px solid #c82f2b"); /* makes border red */
                    rem.innerHTML = "Incorrect password."; /* adds a reminder */
                    rem.style.setProperty("color", "#c82f2b");

                    return false;
                    
                }else if(type_tut == "DM"){
                    var inp =  document.getElementById("passWordDM");

                    var rem = document.getElementById("pwnoteDM");

                    inp.style.setProperty("border", "2.5px solid #c82f2b"); /* makes border red */
                    rem.innerHTML = "Incorrect password."; /* adds a reminder */
                    rem.style.setProperty("color", "#c82f2b");

                    return false;
                    
                }
                
            }

            setAuthor(tut_pw); // TEST THIS

            setCookie("cochecks", "000000000000000", 30);
            setCookie("dmchecks", "000000000000000", 30);

            function saveChecks(name){
                var valuelist = document.getElementsByName(name).value;
                var savedString = "";

                for(var i = 0, v = valuelist[i]; i < v.length; ++i){

                    if(v=="True"){
                        savedString += "1";
                    } else {
                        savedString += "0";
                    }

                    setCookie("dmchecks", savedString, 30);
                }
            }

            function placeChecks(savedString){
                for(var i = 0, v = savedString[i]; i < v.length; ++i){
                    var ic = i + 1;
                    var id = "tut" + ic;
                    var element = document.getElementById(id);

                    if(v == "1"){
                        element.checked = true; // TEST
                        console.log("works!");
                    } else {
                        element.checked = false;
                    }
                }
            }

            var coSavedStr = getCookie("cochecks");
            var dmSavedStr = getCookie("dmchecks");

            placeChecks(coSavedStr);
            placeChecks(dmSavedStr);
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

<!-- BACKEND COMMENTS: 
Difficulty Scaling: 10/10
Requirements:
    Get data from back-end
    Utilize different sortings to sort by specific parameters
    Display tutorial in proper way
-->