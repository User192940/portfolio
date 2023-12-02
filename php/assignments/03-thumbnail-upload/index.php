<?php
ini_set("date.timezone", "America/Chicago");

use php\PhpSolutions\Image\ThumbnailUpload;

// set the maximum width or height size
$maxSize = 300; // no units PX expected

// set the maximum upload size in bytes
$size = 2048000; // 2048000/1024/1000 = 2MB


if (isset($_POST['upload'])) {
    require_once('../../PhpSolutions/Image/ThumbnailUpload.php');
    try {
        // Call __construct($path, $deleteOriginal = false)
        $loader = new ThumbnailUpload('images/', false);

        // Call setThumbOptions($path, $maxSize = null, $suffix = null)
        $loader->setThumbOptions('images/', $maxSize, 'small');

        // Call public function upload($fieldname, $size = null, ?array $mime = null, $renameDuplicates = true)
        $loader->upload('image', $size);

        $messages = $loader->getMessages();
    } catch (Throwable $t) {
        $loader_exception_message = $t->getMessage();
    }
}

# Page specific variables.
$nav = "assignments";
$title_section = "Assignment 3 - Thumbnail Upload";
# Create a human friendly name based on file name.
include("../../includes/title-page-name.php");

# The header section of the layout.
include("../../includes/header.php");
?>
    <main>
        <h2> Assignment 3 - Thumbnail Upload 
        <span><?php if($title_page_name == "index") echo "Home"; ?></span>
        </h2>
		<p><a href="images" accesskey="i">The Images...</a></p>
		<?php
            if(isset($loader_exception_message)) {
                echo '<h2 class="error">&nbsp;⚙︎ Error</h2>';
                echo "<ul>";
                    echo "<li>$loader_exception_message</li>";
                echo "</ul>";
            }

            if (isset($messages) && !empty($messages)) {
              echo '<h2 class="error">&nbsp;⚙︎ Messages</h2>';
              echo '<ul>';
              foreach ($messages as $message) {
                echo "<li>$message</li>";
              }
              echo '</ul>';
            }
            ?>
        <form method="post" enctype="multipart/form-data" id="uploadImage">
			<fieldset>
				<legend>Upload Image</legend>
				<ol>
					<li>
					<label for="image">Upload image:</label>
						<input type="hidden" name="MAX_FILE_SIZE" value="2048000">
						<input type="file" name="image" id="image">
					</li>
					<li>
						<input type="submit" name="upload" id="upload" value="Upload">
					</li>
				</ol>
			</fieldset>
		</form>

    </main>
<?php
include("../01-includes/sidebar.php");
include("../../includes/footer.php");
?>  