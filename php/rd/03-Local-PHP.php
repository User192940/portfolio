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
    <h1> Local PHP </h1>
    <p>One way to run PHP locally is to open the command prompt and type php -S localhost:8000. Next you go to a browser and go to localhost:8000 to see your code.
        
</p>
        <p> The second way to run PHP locally is by using the command php -S 0.0.0.0: (PORT_NUMBER)
</p>
        <p>The third way is to install WAMP. WAMP is a software stack that allows users to code on their local device without the consequences of working with their server’s code. WAMP has a control panel that makes running a live server easy.
</p>
        <p> Pros of running PHP locally:
<ul>
<li>Get live feedback for code</li>
<li>No security risks</li>
<li>Easy to setup</li>
</ul>
Cons of running PHP locally:
<ul>
<li>The environment might be different than the server which may lead to complications</li>
<li>Local PHP is single-threaded by default which will stall when a request is blocked</li>
</ul>
</p>
        <p> References:<br>
        <a href="https://www.hostinger.com/tutorials/what-is-wamp">https://www.hostinger.com/tutorials/what-is-wamp</a><br>
        <a href="https://stackoverflow.com/questions/1678010/php-server-on-local-machine/21872484#21872484">https://stackoverflow.com/questions/1678010/php-server-on-local-machine/21872484#21872484</a>
</p>    
</h2>
</main>
<?php
include("../includes/sidebar.php");
include("../includes/footer.php");
?>  