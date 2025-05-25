<?php
 // Open connection
require_once '../connection.php';
$w_width = $_GET['w_width'];

$sql1 = 'SELECT * FROM TUTORIALS WHERE User = ?';

$stmt = $mysqli->prepare($sql1);
$stmt->bind_param("s", $_GET['b_username']);
$stmt->execute();
$result = $stmt->get_result();
$tutorials = mysqli_fetch_all($result, MYSQLI_ASSOC);
$stmt->close();

$sql2 = 'SELECT * FROM USERS WHERE User = ?';

$stmt = $mysqli->prepare($sql2);
$stmt->bind_param("s", $_GET['b_username']);
$stmt->execute();
$result = $stmt->get_result();
$current_user = mysqli_fetch_all($result, MYSQLI_ASSOC);
$stmt->close();


echo '<div class="flex_col1">';
echo '<h1 class="title">' . htmlspecialchars($current_user[0]["User"]) . '</h1>';
echo '<h5 class="highlight1">JOINED:' . htmlspecialchars($current_user[0]["DateJoined"]) . '</h5>';
echo '</div>';
echo '<div class="flex_col2">';
echo '<div class="flex_col3">';
echo '<h1 class="title">CONTRIBUTIONS</h1>';
echo '<div class="text"></div>';
echo '</div>';
echo '<div class="flex_col4">';
           
// add text to replace all of this with "no tutorials" if no tutorials
if(count($tutorials) == 0){
    print_r("No tutorials from this user yet.");
}else{
        

    if ($w_width >= 705){
        for ($x = 0; $x <= count($tutorials)-1; $x++) {
            $longtitle = $tutorials[$x]['Title'];
            $l = strlen($longtitle);
            
            $limit = floor(35/788 * $w_width);
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

            $limit = floor(35/788 * $w_width);
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
            echo '<span class="text1_span2"> &nbsp;&nbsp;&nbsp; Type: ' . htmlspecialchars($tutorials[$x]['Type']) . '</span>';
            echo '</div>';
            echo '<div class="text2">Category: ' . htmlspecialchars($tutorials[$x]['CategoryLong']) . '</div>';
            echo '<div class="text2">Posted ' . htmlspecialchars($tutorials[$x]['Date']) . ' - App: ' . htmlspecialchars($tutorials[$x]['Application']) . '</div>';
            echo '</div>';
            echo '</a>';
            }
    }

}
echo '</div>';
?>