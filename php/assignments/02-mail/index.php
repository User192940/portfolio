<?php
ini_set("date.timezone", "America/Chicago");

# Page specific variables.
$nav = "assignments";
$title_section = "02 Mail";
# Create a human friendly name based on file name.
include("../../includes/title-page-name.php");

# Add Google reCAPTCHA JavaScript to HTML HEAD
# Note: variable $js_head must be declared before including your header.php
$js_head = '<script src=https://www.google.com/recaptcha/api.js></script>';

# The header section of the layout.
include("../../includes/header.php");

require_once('../../includes/google-recaptcha-library.php');
$g_recaptcha_key_site = '6LeuDS0kAAAAAAOZV6lfQek8jxXyAN4_8ikdqNK4';
$g_recaptcha_key_secret = '6LeuDS0kAAAAAHFVJU_B8aI3YTOct_8ozBN0vdWi';

$errors = [];
$missing = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // email processing script
  $to = 'davfedchuk@gmail.com';  // use your own email address
  $subject = 'Form entry';
  // list expected fields
  $expected = ['name', 'email', 'comments', 'subscribe', 'interests', 'howhear', 'characteristics', 'terms'];
  $required = ['name', 'email', 'comments', 'subscribe', 'interests', 'howhear', 'characteristics', 'terms'];
  // set default values for variables that might not exist
  if (!isset($_POST['subscribe'])) {
      $_POST['subscribe'] = '';
  }
  if (!isset($_POST['interests'])) {
      $_POST['interests'] = array();
  }
  if (!isset($_POST['characteristics'])) {
      $_POST['characteristics'] = array();
  }
  if (!isset($_POST['terms'])) {
      $_POST['terms'] = '';
      $errors['terms'] = true;
  }
  // minimum number of required check boxes
  $minCheckboxes = 2;
  if (count($_POST['interests']) < $minCheckboxes) {
      $errors['interests'] = true;
  }
  // minimum number of required list items
  $minList = 2;
  if (count($_POST['characteristics']) < $minList) {
      $errors['characteristics'] = true;
  }
  // create additional headers
  $headers[] = 'From: Japan Journey<robert.buchholz@nwtc.edu>';
  $headers[] = 'Content-Type: text/plain; charset=utf-8';

  // Place results of g_recaptcha_request() in $g_recaptcha_response
  $g_recaptcha_response = g_recaptcha_request();
      if (!$g_recaptcha_response->success) {
      $errors['recaptcha'] = true;
  }


 

require('../../includes/processmail_05.php');

if ($mailSent) {
  header('Location: thank-you.php');
  exit;
}
if (isset($_POST['send']));
}

?>
<main>
<h2><?php echo $title_section; ?><span><?php echo $title_page_name; ?></span></h2>
            <?php if ($_POST && $suspect) { ?>
              <p class="error">Sorry, your mail could not be sent. Please try later.</p>
            <?php } elseif ($missing || $errors) { ?>
              <p class="error">Please complete the missing item(s) indicated.</p>
            <?php } ?>
            <form id="feedback" method="post">
                <fieldset>
                    <legend><?php echo $title_page_name; ?></legend>
                    <ol>
                        <li<?php if ($missing && in_array('name', $missing)) echo ' class="error"'; ?>>
                            <?php if ($missing && in_array('name', $missing)) { ?>
                                
                            <strong>Please enter your name</strong>
                            <?php } ?>
            
                            <label for="name">Name:</label>
                            <input name="name" id="name" type="text" class="formbox"<?php 
                            if (isset($name)) { 
                                echo ' value="' . htmlentities($name) . '"';
                            } ?>>
                        </li>
                        <li<?php if ( ($missing && in_array('email', $missing)) || (isset($errors['email'])) ) echo ' class="error"'; ?>>
                            <?php if ($missing && in_array('email', $missing)) { ?>
                                
                            <strong>Please enter your email</strong>
                            <?php } elseif (isset($errors['email'])) { ?>
                
                            <strong>Invalid email address</strong>
                            <?php } ?>
            
                            <label for="email">Email:</label>
                            <input name="email" id="email" type="text" class="formbox"<?php
                            if (isset($email)) { 
                                echo ' value="' . htmlentities($email) . '"';
                            } ?>>
                        </li>
                        <li<?php if ($missing && in_array('comments', $missing)) echo ' class="error"'; ?>>
                            <?php if ($missing && in_array('comments', $missing)) { ?>
                                
                            <strong>Please enter your comments</strong>
                            <?php } ?>
            
                            <label for="comments">Comments:</label>
                            <textarea name="comments" id="comments" cols="60" rows="8"><?php
                            if (isset($comments)) {
                                echo htmlentities($comments);
                            } ?></textarea>
                        </li>
                        <li<?php if ($missing && in_array('subscribe', $missing)) echo ' class="error"'; ?>>
                            
                            <?php if ($missing && in_array('subscribe', $missing)) { ?>
                                
                            <strong>Please make a selection</strong>
                            <?php } ?>
                
                            <label>Is PHP your first programming language?</label>
                            <label for="subscribe-yes">
                                <input name="subscribe" type="radio" value="Yes" id="subscribe-yes"<?php
                                if ($_POST && $_POST['subscribe'] == 'Yes') { 
                                    echo ' checked';
                                } ?>>
                                Yes
                            </label>
                            
                            <label for="subscribe-no">
                                <input name="subscribe" type="radio" value="No" id="subscribe-no"<?php
                                if ($_POST && $_POST['subscribe'] == 'No') {
                                    echo ' checked';
                                } ?>>
                                No
                            </label>
                        </li>
                        <li<?php if (isset($errors['interests'])) echo ' class="error"'; ?>>
                            
                            <?php if (isset($errors['interests'])) { ?>
                                
                            <strong>Please select at least <?php echo $minCheckboxes; ?></strong>
                            <?php } ?>
                
                            <label>Hobbies</label>
                            <label for="shows">
                                <input type="checkbox" name="interests[]" value="Shows/Movies" id="shows"<?php
                                if ($_POST && in_array('Shows/Movies', $_POST['interests'])) {
                                    echo ' checked';
                                } ?>>
                                Shows/Movies
                            </label>
                    
                            <label for="art">
                                <input type="checkbox" name="interests[]" value="Arts & crafts" id="art"<?php
                                if ($_POST && in_array('Arts & crafts', $_POST['interests'])) {
                                    echo ' checked';
                                } ?>>
                                Arts &amp; crafts
                            </label>
                            
                            <label for="exercise">
                                <input type="checkbox" name="interests[]" value="exercise" id="exercise"<?php
                                if ($_POST && in_array('exercise', $_POST['interests'])) {
                                    echo ' checked';
                                } ?>>
                                Exercise
                            </label>
                            
                            <label for="lang_lit">
                                <input type="checkbox" name="interests[]" value="Language/literature" id="lang_lit"<?php
                                if ($_POST && in_array('Language/literature', $_POST['interests'])) {
                                    echo ' checked';
                                } ?>>
                                Language/literature
                            </label>
                            
                            <label for="scitech">
                                <input type="checkbox" name="interests[]" value="Science & technology" id="scitech"<?php
                                if ($_POST && in_array('Science & technology', $_POST['interests'])) {
                                    echo ' checked';
                                } ?>>
                                Science &amp; technology
                            </label>
                            
                            <label for="travel">
                                <input type="checkbox" name="interests[]" value="Travel" id="travel"<?php
                                if ($_POST && in_array('Travel', $_POST['interests'])) {
                                    echo ' checked';
                                } ?>>
                                Travel
                            </label>
                            <label for="other">
                                <input type="checkbox" name="interests[]" value="other" id="other"<?php
                                if ($_POST && in_array('other', $_POST['interests'])) {
                                    echo ' checked';
                                } ?>>
                                Other
                            </label>
                        </li>
                        
                        <li<?php if ($missing && in_array('howhear', $missing)) echo ' class="error"'; ?>>
                            
                            <?php if ($missing && in_array('howhear', $missing)) { ?>
                                
                            <strong>Please make a selection</strong>
                            <?php } ?>
            
                            <label for="howhear">How did you hear of PHP?</label>
                            <select name="howhear" id="howhear">
                                <option value=""<?php
                                if (!$_POST || $_POST['howhear'] == '') {
                                    echo ' selected';
                                } ?>>Select one</option>
                                <option value="school"<?php
                                if ($_POST && $_POST['howhear'] == 'school') {
                                    echo ' selected';
                                } ?>>School</option>
                                <option value="recommended by friend"<?php
                                if ($_POST && $_POST['howhear'] == 'recommended by friend') {
                                    echo ' selected';
                                } ?>>Recommended by a friend</option>
                                <option value="search engine"<?php
                                if ($_POST && $_POST['howhear'] == 'search engine') {
                                    echo ' selected';
                                } ?>>Search engine</option>
                                <option value="other"<?php
                                if ($_POST && $_POST['howhear'] == 'other') {
                                    echo ' selected';
                                } ?>>Other</option>
                            </select>
                        </li>
                        
                        <li<?php if (isset($errors['characteristics'])) echo ' class="error"'; ?>>
                            <?php if (isset($errors['characteristics'])) { ?>
                                
                            <strong>Please select at least <?php echo $minList; ?></strong>
                            <?php } ?>
            
                            <label for="characteristics">How would you describe yourself?</label>
                            <select name="characteristics[]" size="6" multiple="multiple" id="characteristics">
                                <option value="Dynamic"<?php
                                if ($_POST && in_array('Dynamic', $_POST['characteristics'])) {
                                    echo ' selected';
                                } ?>>Dynamic</option>
                                <option value="Honest"<?php
                                if ($_POST && in_array('Honest', $_POST['characteristics'])) {
                                    echo ' selected';
                                } ?>>Honest</option>
                                <option value="Pacifist"<?php
                                if ($_POST && in_array('Pacifist', $_POST['characteristics'])) {
                                    echo ' selected';
                                } ?>>Pacifist</option>
                                <option value="Devious"<?php
                                if ($_POST && in_array('Devious', $_POST['characteristics'])) {
                                    echo ' selected';
                                } ?>>Devious</option>
                                <option value="dedicated"<?php
                                if ($_POST && in_array('dedicated', $_POST['characteristics'])) {
                                    echo ' selected';
                                } ?>>Dedicated</option>
                                <option value="experienced"<?php
                                if ($_POST && in_array('experienced', $_POST['characteristics'])) {
                                    echo ' selected';
                                } ?>>Experienced</option>
                            </select>
                        </li>
                        <li<?php if (isset($errors['terms'])) echo ' class="error"'; ?>>
                            <?php if (isset($errors['terms'])) { ?>
                            <strong>Please select the check box</strong>
                            <?php } ?>
                            
                            <label for="terms">
                                <input type="checkbox" name="terms" value="accepted" id="terms"<?php
                                    if ($_POST && !isset($errors['terms'])) {
                                        echo ' checked';
                                    } ?>>
                                    I accept the terms of using this website
                            </label>
                        </li>
                        <li<?php if (isset($errors['recaptcha'])) echo ' class="error"'; ?>>
                            <?php if (isset($errors['recaptcha'])) { ?>
                                
                            <strong>Incorect Response</strong>
                            <?php }
                            echo "<label>Answer Challenge Question</label>";
                            echo g_recaptcha_get_form_control(); ?>
                
                        </li>
                        <li>
                            <input name="send" id="send" type="submit" value="Send message">
                        </li>    
                    </ol>
                </fieldset>
            </form>
    </main>
<?php
include("./sidebar.php");
include("../../includes/footer.php");
?>  