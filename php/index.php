<?php
ini_set("date.timezone", "America/Chicago");

# Page specific variables.
$nav = "home";
$title_section = "David";
# Create a human friendly name based on file name.
include("./includes/title-page-name.php");

# The header section of the layout.
include("./includes/header.php");
?>
    <main>
        <h2><?php echo $title_section; ?>
            <span><?php if($title_page_name == "index") echo "Home"; ?></span>
        </h2>
        <?php
        chdir('./assignments');
$assignments_directory_name = basename(getcwd());
$assignments_directory_items = scandir("{$_SERVER['DOCUMENT_ROOT']}/php/{$assignments_directory_name}");
?>
<h2><?php echo ucwords($assignments_directory_name); ?></h2>

    <ul>
<?php

foreach($assignments_directory_items as $item) {
    if ($item == "." || $item == ".." || $item == "index.php") continue;
    echo "\t<li><a href=\"/php/{$assignments_directory_name}/{$item}\">{$item}</a></li>\n";
}
?>
    </ul>

<?php
chdir('../rd');
$rd_directory_name = basename(getcwd());
$rd_directory_items = scandir("{$_SERVER['DOCUMENT_ROOT']}/php/{$rd_directory_name}");
?>
<h2><?php echo ucwords(str_replace("-", " ", $rd_directory_name)); ?></h2>

    <ul>
<?php

foreach($rd_directory_items as $item) {
    if ($item == "." || $item == ".." || $item == "index.php") continue;
    echo "\t<li><a href=\"/php/{$rd_directory_name}/{$item}\">{$item}</a></li>\n";
}
chdir('../');
?>
    </ul>
    </main>
<?php
include("./includes/sidebar.php");
include("./includes/footer.php");
?>  