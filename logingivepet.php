<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <script src="mainScripts.js"></script>
    </head>
    <body>
        <?php include 'header.php' ?>
        <main>
            <div class="sect" id="sidebar">
                <ul id="sideList">
                    <li class="side"><a href="./index.php" class="sideLink">Home page</a></li>
                    <li class="side"><a href="./finddog.php" class="sideLink">Find a dog</a></li>
                    <li class="side"><a href="./findcat.php" class="sideLink">Find a cat</a></li>
                    <li class="side"><a href="./dogcare.php" class="sideLink">Dog Care</a></li>
                    <li class="side"><a href="./catcare.php" class="sideLink">Cat Care</a></li>
                    <li class="side"><a href="./createaccount.php" class="sideLink">Create an account</a></li>
                    <li class="side" id="active"><a href="./logingivepet.php" class="sideLink">Have a pet to give away</a></li>
                    <li class="side"><a href="./logout.php" class="sideLink">Log out</a></li>
                    <li class="side"><a href="./contact.php" class="sideLink">Contact Us</a></li>
                </ul>
            </div>
            <div class="sect" id="content">
                <h1>Login</h1>

                <form action="givepet.php" method="post" name="accountForm">
                    <p>
                        <label>Username: </label>
                        <input type="text" name="user" value="">
                    </p>
                    <p>
                        <label>Password: </label>
                        <input type="text" name="pass" value="">
                    </p>
                    <input type="submit">
                </form>
                </div>
            </div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>