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
                    <li class="side"><a href="./logingivepet.php" class="sideLink">Have a pet to give away</a></li>
                    <li class="side"><a href="./logout.php" class="sideLink">Log out</a></li>
                    <li class="side"><a href="./contact.php" class="sideLink">Contact Us</a></li>
                </ul>
            </div>
            <div class="sect" id="content">
                <h1>Find a dog</h1>
                <?php
                $file = fopen("dogInfo.txt", "r");
                while (!feof($file)) {
                    $show = true;
                    $line = fgets($file);
                    $words = explode(":", $line);

                    if (count($words) > 1) {
                        if (isset($_POST["getalongwdogs"])) {
                            $withDogs = 1;
                        }
                        else {
                            $withDogs = 0;
                        }
                        if (isset($_POST["getalongwcats"])) {
                            $withCats = 1;
                        }
                        else {
                            $withCats = 0;
                        }
                        if (isset($_POST["getalongwdogs"])) {
                            $withChildren = 1;
                        }
                        else {
                            $withChildren = 0;
                        }
    
                        if ($_POST["breed"] != $words[3] and $_POST["breed"] != "breednomatter") {
                            $show = false;
                        }
                        else if ($_POST["age"] != $words[4] and $_POST["age"] != "agenomatter") {
                            $show = false;
                        }
                        else if ($_POST["gender"] != $words[5] and $_POST["gender"] != "gendernomatter") {
                            $show = false;
                        }
                        else if ($withDogs != $words[6] and $withDogs == 1) {
                            $show = false;
                        }
                        else if ($withCats == $words[7] and $withCats == 1) {
                            $show = false;
                        }
                        else if ($withChildren != $words[8] and $withChildren == 1) {
                            $show = false;
                        }

                        if ($show == true and count($words) > 1) {
                            echo "<p>Animal: " . $words[2] . "<br>Breed: " . $words[3] . "<br>Age: " . $words[4] . "<br>Gender: " . $words[5] . "</p>";
                        }
                    }
                }
                fclose($file);
                ?>
                </div>
            </div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>