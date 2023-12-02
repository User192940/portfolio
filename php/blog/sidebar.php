<aside>
    <h2><?php echo $title_section; ?></h2>
        <nav>
            <ul>
            <li><a href="/php/blog/index.php">Home</a></li>
            <li><a href="admin/register/register.php">Register</a></li>
            <li><a href="admin/blog-list.php">Blog - Admin</a></li>
</ul>
            </nav>
            <h2>About Us</h2>
            <nav>
                <ul>
            <li><a href="/php/blog/pages.php">About Us</a></li>
            </ul>
        </nav>
    <h2>Pages</h2>
        <nav>
            <?php

// Establish a connection to the database
$conn = dbConnect('read');

// Check if the connection was successful
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Query the database to retrieve the data
$query = "SELECT * FROM php_blog_pages";
$result = mysqli_query($conn, $query);

// Check if there are any rows in the result
if (mysqli_num_rows($result) > 0) {
    // Start the unordered list for the sidebar links
    echo '<ul>';

    // Loop through each row and create a link for each one
    while ($row = mysqli_fetch_assoc($result)) {
        $text = $row['title'];
        $page_id = $row['page_id'];
        // Output the link
        echo '<li><a href="pages.php?page_id=' . $page_id . '">' . $text . '</a></li>';
    }

    // End the unordered list for the sidebar links
    echo '</ul>';
} else {
    echo 'No links found.';
}

// Close the database connection
mysqli_close($conn);

?>
        </nav>
    </aside>