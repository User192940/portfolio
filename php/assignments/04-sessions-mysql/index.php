<?php
## Set the timezone to your location
ini_set("date.timezone", "America/Chicago");

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
            
            <form id="form1" method="post" action="01-register.php">
                <fieldset>
                    <legend><?php echo $title_page_name; ?></legend>
                    <ol>
                        <li>
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name">
                        </li>
                        <li>
                            <input type="submit" name="Submit" value="Submit">
                        </li>
                    </ol>
                </fieldset>
            </form>
        </main>
        
<?php
# The side-bar section of the layout use custom path to load from a different folder.
include("./session-sidebar.php");

# The footer section of the layout.
include("../../includes/footer.php");
?>