<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php if(isset($title_page_name)) echo "$title_page_name &bull; "; ?><?php if(isset($title_section)) echo "$title_section &bull; "; ?>PHP Spring <?php echo date("Y"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Ubuntu+Mono%7CUbuntu:400,700italic">
    <link rel="stylesheet" href="/php/css/style.css">
    <link rel="icon" href="/php/css/images/icon-favicon.png">
    <link rel="apple-touch-icon" href="/php/css/images/icon-apple.png">
	<?php if(isset($js_head)) echo $js_head; ?>
</head>

<body>
<div class="wrapper">

    <header>
        <a href="/php">
            <h1>
				<?php echo $title_section; ?>
				<span><?= $title_page_name; ?></span>
			</h1>
        </a>

    </header>

    <nav>
        <input type="checkbox" id="hamburger">
        <label class="menuicon" for="hamburger"><span></span></label>
        <ul class="menu">
            <li><a <?php if($nav == 'home') echo 'class="current"'; ?> href="/php/index.php">Home</a></li>
            <li><a <?php if($nav == 'assignments') echo 'class="current"'; ?> href="/php/assignments/index.php">Assignments</a></li>
            <li><a <?php if($nav == 'blog') echo 'class="current"'; ?> href="/php/blog">Blog</a></li>
            <li>
                <form action="http://php.net/search.php">
                    <input name="pattern" placeholder="Search php.net" autocomplete="off" accesskey="p">
                </form>
            </li>
        </ul>
    </nav>