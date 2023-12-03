<?php
## Set the timezone to your location
ini_set("date.timezone", "America/Chicago");

# Check to see if session is set if not redirect to login page
require_once('../../includes/session_timeout.php');


# Page specific variables.
$nav = "assignments";
$title_section = "Sessions";

# Create a human friendly name based on file name.
include("../../includes/title-page-name.php");

# The header section of the layout.
include("../../includes/header.php");
?>

        <main>
            <h2><?php echo $title_section; ?><span><?php echo $title_page_name; ?></span></h2>
            <h2>Restricted area</h2>
            <p><a href="02-secretpage.php">Another secret page</a></p>
<?php
include('../../includes/logout.php')
?>
        </main>
<?php

# The side-bar section of the layout use custom path to load from a different folder.
include("./session-sidebar.php");

# The footer section of the layout.
include("../../includes/footer.php");
?>
