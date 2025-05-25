<?php
// Open connection
require_once '../connection.php';

$b_mode = $_GET['b_mode'];
$b_username = $_GET['b_username'];
$b_pw = $_GET['b_pw'];

// Prepare SQL statement to check if the username exists
$sql = 'SELECT * FROM USERS WHERE User = ?';

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $b_username);
$stmt->execute();
$result = $stmt->get_result();
$existing_user = $result->fetch_assoc();
$stmt->close();

if($b_mode == "sign-up") {

    // Check if username already exists
    if($existing_user) {

        echo '<fieldset form="confirmclrSU" id="confirmclrSUF">';
        echo '<div class="formconfirmtext">';
        echo '<div class="formconfirmtitle">Oops!</div>';
        echo '<div class="formconfirmmessage">Username already exists. Try a different username.</div>';
        echo '</div>';

        echo '<span class="centerFormButtons"> <!--configure the goBack() onclick here but for the login/signup clicks-->';
        echo '<button class="formButton" id="backbutton"';
        echo 'onclick="return closeConfirm(\'signUpF\', \'confirmclrSU\')">Back</button>';
        echo '<button type = "submit" class="formButton" id="tutorialsbutton"';
        echo '<button type = "submit" class="formButton" id="tutorialsbutton"';
        echo 'formaction = \'../pages/tutorials.php\'>Tutorials</button>';
        echo '</span>';
        echo '</fieldset>';
    }
    else{
    // Insert new user
    $sql = "INSERT INTO USERS (User, DateJoined, Description, Password) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    // Default values
    $dateJoined = date("Y-m-d");
    $description = "No description entered.";

    // Security measure
    $hashed_pw = password_hash($b_pw, PASSWORD_DEFAULT);

    $stmt->bind_param("ssss", $b_username, $dateJoined, $description, $hashed_pw);
    if ($stmt->execute()) {
        // Set cookie for stored_username
        setcookie("stored_username", $b_username, time() + (86400 * 30), "/");
        
        echo '<fieldset form="confirmclrSU" id="confirmclrSUF">';
        echo '<div class="formconfirmtext">';
        echo '<div class="formconfirmtitle">Success!</div>';
        echo '<div class="formconfirmmessage">User <b><i>' . $b_username . '</i></b> registered successfully!</div>';
        echo '</div>';

        echo '<span class="centerFormButtons"> <!--configure the goBack() onclick here but for the login/signup clicks-->';
        echo '<button type = "submit" class="formButton" id="tutorialsbutton"';
        echo 'formaction = \'../pages/tutorials.php\'>Tutorials</button>';
        echo '<button type = "submit" class="formButton" id="profilebutton"';
        echo 'formaction = \'../pages/authors.php\'>Profile</button>';
        echo '</span>';
        echo '</fieldset>';
        
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $stmt->close();
    }
} 

if ($b_mode == "log-in") {
    
    // Check if user exists and password matches
    if(!$existing_user || !password_verify($b_pw, $existing_user['Password'])) {

        echo '<fieldset form="confirmclrSU" id="confirmclrSUF">';
        echo '<div class="formconfirmtext">';
        echo '<div class="formconfirmtitle">Oops!</div>';
        echo '<div class="formconfirmmessage">Invalid username or password. Try again.</div>';
        echo '</div>';

        echo '<span class="centerFormButtons"> <!--configure the goBack() onclick here but for the login/signup clicks-->';
        echo '<button class="formButton" id="backbutton"';
        echo 'onclick="return closeConfirm(\'signUpF\', \'confirmclrSU\')">Back</button>';
        // echo '<button class="formButton" id="clearbutton"';
        // echo 'onclick="return clearInputsLogPage(\'userNameSU\',\'passWordSU\',\'signUpF\',\'confirmclrSU\',\'passWordRepeatSU\')">Clear</button>';
        echo '</span>';
        echo '</fieldset>';
    }

    else{
        echo '<fieldset form="confirmclrSU" id="confirmclrSUF">';
        echo '<div class="formconfirmtext">';
        echo '<div class="formconfirmtitle">Success!</div>';
        echo '<div class="formconfirmmessage">Logged in <b><i>' . $b_username . ' </i></b> sucessfully.</div>';
        echo '</div>';
        echo '';
        echo '<span class="centerFormButtons"> <!--configure the goBack() onclick here but for the login/signup clicks-->';
        echo '<button type = "submit" class="formButton" id="tutorialsbutton"';
        echo 'formaction = \'../pages/tutorials.php\'>Tutorials</button>';
        echo '<button type = "submit" class="formButton" id="profilebutton"';
        echo 'formaction = \'../pages/authors.php\'>Profile</button>';
        echo '</span>';
        echo '</fieldset>';

        setcookie("stored_username", $b_username, time() + (86400 * 30), "/");
    }
    }

// Close database connection
$mysqli->close();
?>