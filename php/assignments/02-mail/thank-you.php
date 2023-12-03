<?php
ini_set("date.timezone", "America/Chicago");

# Page specific variables.
$nav = "Error";
$title_section = "Error";
# Create a human friendly name based on file name.
include("../../includes/title-page-name.php");

# The header section of the layout.
include("../../includes/header.php");
?>
    <main>
        <h2> Thank you for your time.
        <span><?php if($title_page_name == "index") echo "Home"; ?></span>
        </h2>


    </main>
<?php
include("./sidebar.php");
include("../../includes/footer.php");
?>  