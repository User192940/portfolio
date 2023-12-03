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
    <h1> PHP Frameworks </h1>
        <p> 
            Laravel is a PHP framework that boasts "expressive, elegant syntax". It is a progressive, scalable framework with a large community. It has lots of support and documentation to help anyone interested in learning. 
        </p>
        <p> 
            Yii is a framework that is fast, secure, and efficient. The template comes with MVC, static pages, a contact page, login and logout, a powerful debugger, and more. Uses APIs and code generation to hasten the process.
        </p>
        <p> 
        Phalcon is a PHP framework with "innovative architecture" that makes it the fastest PHP framework out there. Phalcon uses MVC, HMVC, dependency injection, rest, autoloaders, and routing. 
        </p>
        <p> 
            A PHP framework gives developers a structure that helps them build apps instead of worrying about code. Most PHP frameworks follow the Model View Controller model. Laravel is a large framework with lots of room for expansion. Yii is a framework that comes with a template that enables programmers to get right into their projects. Finally, Phalcon is the fastest PHP framework right now that can make apps in as short as 15 minutes. 
        </p> 
        <p> References:<br>
        <a href="https://laravel.com/docs/10.x">Laravel</a><br>
        <a href="https://www.yiiframework.com/">Yii</a><br>
        <a href="https://phalcon.io/en-us">Phalcon</a><br>
        </p> 
    </main>
<?php
include("../includes/sidebar.php");
include("../includes/footer.php");
?>  