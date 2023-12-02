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
    
    <h2>
    <h1> PHP History </h1>
    <p>    
    Rasmus Lerdorf created PHP in 1993 and released it in 1995. 
        It was created to build simple dynamic web apps, hasten bug reporting and improve code. PHP initially meant Personal Home Page, but as it grew in usage and popularity it was changed to PHP: Hypertext Preprocessor.
</p>
        <p> PHP was designed for server-side scripting. This means that PHP is processed on the server and no PHP lives on the client's computer.
</p>
        <p> PHP is one of the most common web development tools. According to W3Tech "PHP is used by 77.8% of all the websites whose server-side programming language we know".
</p>
        <p> PHP is a server-side scripting language. It was made in the mid-'90s and is one of the most common web development tools today. It has been around for a long time and has a large community.
</p>
        <p> References:<br>
        <a href="https://w3techs.com/technologies/details/pl-php">https://w3techs.com/technologies/details/pl-php</a><br>
        <a href="https://en.wikipedia.org/wiki/PHP">https://en.wikipedia.org/wiki/PHP</a>
</p>
    </h2>
</main>
<?php
include("../includes/sidebar.php");
include("../includes/footer.php");
?>  