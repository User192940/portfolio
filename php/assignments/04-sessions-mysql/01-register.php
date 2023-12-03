<?php
## Set the timezone to your location
ini_set("date.timezone", "America/Chicago");

session_start();

if (isset($_POST['register'])) {
  $username = trim($_POST['username']);
  $password = trim($_POST['pwd']);
  $retyped = trim($_POST['conf_pwd']);
  $userfile = 'encrypted.csv';
  require_once('../../includes/register_user_csv.php');
}

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
            <h2>Register User</h2>
            <?php
            if (isset($errors) || isset($result)) {
              echo '<ul>';
              if (!empty($errors)) {
                foreach ($errors as $item) {
                  echo "<li>$item</li>";
                }
              } else {
                echo "<li>$result</li>";
              }
              echo '</ul>';
            }
            ?>
            <form method="post" id="form1" autocomplete="off">
                <fieldset>
                    <legend>Register</legend>
                    <ol>
                        <li>
                            <label for="username">Username:</label>
                            <input type="text" name="username" id="username" autocomplete="new-password">
                        </li>
                        <li>
                            <label for="pwd">Password:</label>
                            <input type="password" name="pwd" id="pwd" autocomplete="new-password">
                        </li>
                        <li>
                            <label for="conf_pwd">Retype Password:</label>
                            <input type="password" name="conf_pwd" id="conf_pwd" autocomplete="new-password">
                        </li>
                        <li>
                            <input type="submit" name="register" id="register" value="Register">
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
