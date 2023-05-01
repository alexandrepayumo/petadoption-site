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
                    <li class="side" id="active"><a href="./createaccount.php" class="sideLink">Create an account</a></li>
                    <li class="side"><a href="./logingivepet.php" class="sideLink">Have a pet to give away</a></li>
                    <li class="side"><a href="./logout.php" class="sideLink">Log out</a></li>
                    <li class="side"><a href="./contact.php" class="sideLink">Contact Us</a></li>
                </ul>
            </div>
            <div class="sect" id="content">
                <h1>Create an account</h1>
                <?php
                $loginInfo = fopen("loginInfo.txt", "a+");
                $found = false;
                while (!feof($loginInfo)) {
                    $newLine = fgets($loginInfo);
                    $words = explode(":",$newLine);
                    if ($words[0] == $_POST["user"]) {
                        $found = true;
                        break;
                    }
                }
                if ($found == true) {
                    echo "This username already exists. Try again";
                }
                else {
                    fwrite($loginInfo, "\n" . $_POST["user"] . ":" . $_POST["pass"]);
                    echo "Account succesfully created";
                }
                fclose($loginInfo);
                ?>
                </div>
            </div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>