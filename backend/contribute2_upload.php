<?php
// Open connection
require_once '../connection.php';

// echo 'checkpoint 1';

function convertCategory($str) {
    $abbreviationMap = array(
        "Information and Data Literacy" => "idl",
        "Digital Content Creation" => "dcc",
        "Communication and Collaboration" => "cmc",
        "Problem Solving" => "psl",
        "Safety" => "sft"
    );
    return $abbreviationMap[$str];
}

function getYoutubeEmbedUrl($url) {
    $path = parse_url($url, PHP_URL_PATH);
    $videoId = ltrim($path, '/');
    return "https://www.youtube.com/embed/$videoId";
}

// echo 'checkpoint 2';   

// Retrieve data from POST
$categoryLong = $_POST['category'];
$categoryShort = convertCategory($categoryLong);
$type_val = $_POST['type_val'];
$application = $_POST['application'];
$title_val = $_POST['title_val'];
$keywords = $_POST['keywords'];
$username = $_COOKIE['stored_username'];
$date = date("Y-m-d");
$tut_var = $_POST['content']; // Content sent from AJAX
$creator = $_POST['creator'];

// echo "Title: " . $title_val;

// print_r($categoryLong);

// echo "Category Long: " . $categoryLong . "<br>";
// echo "Category Short: " . $categoryShort . "<br>";
// echo "Type: " .  $type_val . "<br>";
// echo "Application: " . $application . "<br>";
// echo "Title: " . $title_val . "<br>";
// echo "Keywords: " . $keywords . "<br>";
// echo "Username: " . $username . "<br>";
// echo "Date: " . $date . "<br>";
// echo $tut_var;

$null = NULL;

if($type_val == "Video"){
    $tut_var = trim(strip_tags($tut_var));
    $tut_var = getYoutubeEmbedUrl($tut_var);
}

// If the form is submitted
$sql = "INSERT INTO TUTORIALS 
(ID, Title, Type, Category, CategoryLong, Keywords, Application, User, Date, Text, VideoLink, TutCat) 
VALUES 
(?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssssssssssss", $null, $title_val, $type_val, $categoryShort, $categoryLong, $keywords, $application, $username, $date, $tut_var, $tut_var, $creator);
$stmt->execute();
$stmt->close();

// Getting the tutorial from the database now
// $sql = 'SELECT * FROM TUTORIALS WHERE USER = ? AND CATEGORYLONG = ? AND KEYWORDS = ?';
// $stmt = $mysqli->prepare($sql);
// $stmt->bind_param("sss", $username, $categoryLong, $keywords);
// $stmt->execute();
// $result = $stmt->get_result();
// $tutorial_w_id = $result->fetch_all(MYSQLI_ASSOC);
// $stmt->close();

// $id = $tutorial_w_id[0]['ID'];
// echo "ID: " . $id;

// Get the current URL
// $currentUrl = $_SERVER['PHP_SELF'];
// $urlParts = explode("/", $currentUrl);
// $newUrl = $urlParts[0] . "/digital-skills-app/pages/tutorialpage.php?ID=" . $id;

// echo $newUrl;
exit;
?>