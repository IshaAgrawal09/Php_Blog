<nav class="navigation">

    <div class="headerLogo"><a href="index.php">
            <h1 id='logo'>Travelicious.</h1>
        </a></div>
    <hr />
    <div class="nav-left">
        <a href="/">Home</a>
        <?php if (!isset($_SESSION['name'])) { ?>
            <a href="login.php">Add Post</a><?php } else { ?><a href="write.php">Add Post</a><?php } ?>

        <a href="yourpost.php">Your Post</a>
        <?php if (!isset($_SESSION['name'])) { ?> <a href="register.php">Register</a><?php } ?>

        <?php if (!isset($_SESSION['name'])) { ?> <a href="login.php">Login</a><?php } ?>

        <?php if (isset($_SESSION['name'])) { ?> <?php echo $_SESSION['name']; ?><?php } ?>

            <?php if (isset($_SESSION['name'])) { ?><a href="logout.php"> Logout</a> <?php } ?>

    </div>
    <div class="headerImage">
        <img src="image/header.jpg" />
    </div>



</nav>