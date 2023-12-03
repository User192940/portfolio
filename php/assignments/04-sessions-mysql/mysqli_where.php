<?php
## Set the timezone to your location
ini_set("date.timezone", "America/Chicago");


// Database Connection
require_once('../../includes/connection.php');

// Utility Functions
require_once '../../includes/utility_funcs.php';

// Connect to Database Using MySQL
$conn = dbConnect('read');

// Prepare the SQL query
$sql = 'SELECT * 
FROM php_a04_images 
WHERE image_id = 4
';

// Submit the Query and Capture the Result
$result = $conn->query($sql);

// Check For Database Errors
if (!$result) {
    $error = $conn->error;
} else {
    $numRows = $result->num_rows;
}

# Page specific variables.
$nav = "assignments";
$title_section = "MySQL";

# Create a human friendly name based on file name.
include("../../includes/title-page-name.php");

# The header section of the layout.
include("../../includes/header.php");
?>

        <main>
            <h2><?php echo $title_section; ?><span><?php echo $title_page_name; ?></span></h2>
            
            <?php
            if (isset($error)) {
                echo "<p class=\"error\">$error</p>";
            } else {
                echo "<p class=\"info\">A total of $numRows records were found.</p>";
            }
            ?>
            <code>SELECT * FROM php_a04_images WHERE image_id = 4</code>
            
            <figure class="code"><pre><code><?=$sql?></code></pre></figure>
            <table id="output-sql">
              <tr>
                <th>ID</th>
                <th>filename</th>
                <th>caption</th>
              </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
              <tr>
                <td><?php echo safe($row['image_id']); ?></td>
                <td><?php echo safe($row['filename']); ?></td>
                <td><?php echo safe($row['caption']); ?></td>
              </tr>
            <?php } ?>
            </table>
        </main>
<?php
# The side-bar section of the layout use custom path to load from a different folder.
include("./session-sidebar.php");

# The footer section of the layout.
include("../../includes/footer.php");
?>