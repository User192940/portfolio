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
    <h1> PHP.NET </h1>
    <p>
    “Downloads” shows the current version of PHP along with previous versions of PHP. The release notes detail what version of PHP is available and what changes were made to that version of PHP. 
</p>
    
        <p> “Documentation” details everything that you need to know about the current version of PHP. It has information about downloading and installing PHP, getting started, language syntax, security, features, FAQs, and much more. 
</p>
        <p>The get involved page informs users of PHP that they can contribute to PHP by running tests, finding failed tests, filing, and resolving bugs, and maintaining or translating documentation files. Additionally, users can maintain and develop the source code if their skills line up with what is needed. 
</p>
        <p> This document covered information on the downloads/release notes, documentation, and get involved pages on PHP.NET. The downloads/release notes page shows downloads for PHP and notes about what was changed. The documentation page shows all the information anyone could ever need about PHP. Finally, the get involved page informs users of options for maintaining PHP. 
</p>
        <p> References:<br>
        <a href="php.net">php.net</a><br>
</p>
</h2>
</main>
<?php
include("../includes/sidebar.php");
include("../includes/footer.php");
?>  