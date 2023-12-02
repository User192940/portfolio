<?php
## Set the timezone to your location
ini_set("date.timezone", "America/Chicago");

require_once '../includes/connection.php';

// Updated New Functions: convertToParas() and getFirst() php-7-solutions/Ch16/utility_funcs.php
require_once '../includes/utility_funcs.php';
// create database connection

$conn = dbConnect('read');

if (isset($_GET['page_id']) && is_numeric($_GET['page_id'])) {
    $page_id = (int) $_GET['page_id'];
} else {
    $page_id = 3;
}

$sql1 = "SELECT
            article_id,
            image_id,
            title, 
            article, 
            DATE_FORMAT(created, '%M %D, %Y') AS created_date, 
            filename, 
            caption
        FROM php_blog_blog
        LEFT JOIN php_blog_images USING (image_id)
        ORDER BY RAND() LIMIT 1"; //sorting by created 20xx-xx-xx not the alias

$result1 = $conn->query($sql1);


$sql = "SELECT
            title, 
            slug, 
            DATE_FORMAT(updated, '%W, %M %D, %Y') AS updated
        FROM php_blog_pages 
        LEFT JOIN php_blog_images USING (image_id)
        WHERE php_blog_pages.page_id = $page_id";

$result = $conn->query($sql);
$row = $result->fetch_assoc();




if (!$result) {
    $error = $conn->error;
}


# Page specific variables.
$nav = "blog";
$title_section = "Blog";

# Create a human friendly name based on file name.
include("../includes/title-page-name.php");

# The header section of the layout.
include("../includes/header.php");
?>

        <main>        
        <h2><?php echo $title_section; ?><span><?php echo $title_page_name; ?></span></h2>
            <h2><?php 
            if ($row) {
                echo safe($row['title']);
            } else {
                echo 'No record found';
            }
            ?></h2>
            <?php if ($row) { echo ($row['slug']); } ?>
            

            <?php
if (isset($error)) {
    echo "<p>$error</p>";
} else {
    while ($row1 = $result1->fetch_assoc()) {
        echo "<h2 class=\"clear\"><span>" . safe($row1['title']) . " {$row1['created_date']}</span></h2>";

        if (!empty($row1['filename'])) {
            echo "<img src=\"/php/blog/images/thumbs/" . safe($row1['filename']) . "\" alt=\"" . safe($row1['caption']) . "\">";
        }

        if ($row1) {
            $extract = getFirst($row1['article']);
            echo "<p>" . safe($extract[0]);
            if ($extract[1]) {
                echo "<a href=\"details.php?article_id=" . $row1['article_id'] . "\">Read More&hellip;</a>";
            }
            echo "</p>";
        }
    }
}
?>
        </main>
<?php
# The side-bar section of the layout use custom path to load from a different folder.
include("sidebar.php");

# The footer section of the layout.
include("../includes/footer.php");
?>
