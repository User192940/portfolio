<?php
ini_set("date.timezone", "America/Chicago");

# Page specific variables.
$nav = "assignments";
$title_section = "Research Assignments";
# Create a human friendly name based on file name.
include("../includes/title-page-name.php");

# The header section of the layout.
include("../includes/header.php");
?>
    <main>
    <h1> PHP 8 Features </h1>
        <p>
            One thing that has changed in PHP 8.0 is constructor property promotion. Now you can initialize and assign variables in one line inside classes. 
        </p>
        <p> 
            PHP has changed the way strings and numbers are compared. Now, it uses a numeric comparison. If it can't do that, it converts the number to a string and does a string comparison. 
        </p>
        <p>
            PHP 8 has added a null safe operator that enables coders to bypass boolean checks for null values. Coders can now string everything together into one line that evaluates to null if any element in the chain returns null. 
        </p>
        <p> 
            PHP version 8.0 has introduced many new features that have improved performance. Additionally, these new features allow for more succinct code. Some key features are the string-to-number comparisons, null safe operator, constructor property promotion, and more. For a list of the things that PHP 8 implemented check the link at the bottom of the page. 
        </p> 
        <p> References:<br>
        <a href="https://www.php.net/releases/8.0/en.php">php.net</a><br>
        </p> 
    </main>
<?php
include("../includes/sidebar.php");
include("../includes/footer.php");
?>  