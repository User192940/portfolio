
<?php

# Source: php-7-solutions/ch19/register_user_mysqli.php
# Modified: New try/catch block to capture MySQL Error Number 1062

use php\PhpSolutions\Authenticate\CheckPassword;

require_once __DIR__ . '/../PhpSolutions/Authenticate/CheckPassword.php';
$usernameMinChars = 6;
$errors = [];
if (strlen($username) < $usernameMinChars) {
    $errors[] = "Username must be at least $usernameMinChars characters.";
}
if (!preg_match('/^[-_\p{L}\d]+$/ui', $username)) {
    $errors[] = 'Only alphanumeric characters, hyphens, and underscores are permitted in username.';
}
$checkPwd = new CheckPassword($password, 10);
$checkPwd->requireMixedCase();
$checkPwd->requireNumbers(2);
$checkPwd->requireSymbols();
if (!$checkPwd->check()) {
    $errors = array_merge($errors, $checkPwd->getErrors());
}
if ($password != $retyped) {
    $errors[] = "Your passwords don't match.";
}
if (!$errors) {
    // hash/encrypt password using default encryption
    $password = password_hash($password, PASSWORD_DEFAULT);
    // include the connection file
    require_once 'connection.php';
    $conn = dbConnect('write');
    // prepare SQL statement
    $sql = 'INSERT INTO php_blog_users (username, pwd) VALUES (?, ?)';
    $stmt = $conn->stmt_init();
    
    try {
        $stmt->prepare($sql);
        // bind parameters and insert the details into the database
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        if ($stmt->affected_rows == 1) {
            $success = htmlentities($username) . ' has been registered. You may now <a href="/php/blog/admin/blog-login.php">log in</a>.';
        }
    } catch(Exception $e) {
        if ($stmt->errno == 1062) {
            $errors[] = htmlentities($username) . ' is already in use. Please choose another username.';
        } else {
            $errors[] = $stmt->error;   
        } 
    }
}