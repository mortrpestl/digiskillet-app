<?php
// Open connection
require_once '../connection.php';

$tut_cat = $_COOKIE['tut_pw'];

$sql = 'SELECT * FROM TUTORIALS WHERE CATEGORY IN (?, ?, ?, ?, ?) AND TutCat = ? AND ' . $_GET['categ'] . ' LIKE ?';
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sssssss", $_GET['a'], $_GET['b'], $_GET['c'], $_GET['d'], $_GET['e'], $tut_cat, $value);
$value = '%' . $_GET['value'] . '%';
$stmt->execute();
$result = $stmt->get_result();
$tutorials = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();


$w = $_GET['w'];

if ($w >= 705){
    for ($x = 0; $x <= count($tutorials)-1; $x++) {
        $longtitle = $tutorials[$x]['Title'];
        $l = strlen($longtitle);
        
        $limit = floor(35/788 * $w);
        if ($l > $limit){
            $shorttitle = substr($longtitle,0,$limit-1) . "...";
        } else {
            $shorttitle = $longtitle;
        }

    echo '<a href="tutorialpage.php?ID=' . urlencode($tutorials[$x]['ID']) . '" class="no_underline tutorial_box">';
    echo '<div class="flex_col5 clickable">';
    echo '<h2 class="medium_title1">' . htmlspecialchars($shorttitle) . '</h2>';
    echo '<div class="text1_box">';
    echo '<span class="text1">';
    echo '<span class="text1_span0">by </span>';
    echo '<span class="text1_span1">' . htmlspecialchars($tutorials[$x]['User']) . '</span>';
    echo '<span class="text1_span2"> &nbsp;&nbsp;&nbsp; Type: ' . htmlspecialchars($tutorials[$x]['Type']);
    echo ' &nbsp;&nbsp;&nbsp; Category: ' . htmlspecialchars($tutorials[$x]['CategoryLong']) . '</span>';
    echo '</div>';
    echo '<div class="text2">Posted ' . htmlspecialchars($tutorials[$x]['Date']) . ' - App: ' . htmlspecialchars($tutorials[$x]['Application']) . '</div>';
    echo '</div>';
    echo '</a>';
    }
} else {
    for ($x = 0; $x <= count($tutorials)-1; $x++) {
        $longtitle = $tutorials[$x]['Title'];
        $l = strlen($longtitle);

        $limit = floor(35/788 * $w);
        if ($l > $limit){
            $shorttitle = substr($longtitle,0,$limit-1) + "...";
        } else {
            $shorttitle = $longtitle;
        }
        echo '<a href="tutorialpage.php?ID=' . urlencode($tutorials[$x]['ID']) . '" class="no_underline tutorial_box">';
        echo '<div class="flex_col5 clickable">';
        echo '<h2 class="medium_title1">' . htmlspecialchars($shorttitle) . '</h2>';
        echo '<div class="text1_box">';
        echo '<span class="text1">';
        echo '<span class="text1_span0">by </span>';
        echo '<span class="text1_span1">' . htmlspecialchars($tutorials[$x]['User']) . '</span>';
        echo '<span class="text1_span2"> &nbsp;&nbsp;&nbsp; Type: ' . htmlspecialchars($tutorials[$x]['Type']) . '</span>';
        echo '</div>';
        echo '<div class="text2">Category: ' . htmlspecialchars($tutorials[$x]['CategoryLong']) . '</div>';
        echo '<div class="text2">Posted ' . htmlspecialchars($tutorials[$x]['Date']) . ' - App: ' . htmlspecialchars($tutorials[$x]['Application']) . '</div>';
        echo '</div>';
        echo '</a>';
        }
}
?>