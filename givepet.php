<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Give Pet</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <script src="mainScripts.js"></script>
    </head>
    <body id="givepet">
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
                <?php
                    $loginInfo = fopen("loginInfo.txt", "a+");
                    $match = false;
                    while (!feof($loginInfo)) {
                        $newLine = fgets($loginInfo);
                        if ($newLine == $_POST["user"] . ":" . $_POST["pass"]) {
                            $match = true;
                        }
                    }
                    if ($match == true) {
                        $_SESSION["user"] = $_POST["user"];
                     echo '                <h1>Give Away a Pet</h1>
                     <form name="givePetForm" onsubmit=validateGivePet() action="addPet.php" method="post">
                         <p>
                             <label for="animal">Cat or dog: </label>
                             <select name="animal" id="animal">
                                 <option value="none">Select an option</option>
                                 <option value="cat">Cat</option>
                                 <option value="dog">Dog</option>
                             </select>
                         </p>
                         <p>
                             <label for="breed">Breed: </label>
                             <select name="breed" id="breed">
                                 <option value="none">Select an option</option>
                                 <option value="siamese">Siamese</option>
                                 <option value="britishshorthair">British shorthair</option>
                                 <option value="persian">Persian</option>
                                 <option value="sphynx">Sphynx</option>
                                 <option value="labrador">Labrador</option>
                                 <option value="chihuahua">Chihuahua</option>
                                 <option value="bulldog">Bulldog</option>
                                 <option value="rottweiler">Rottweiler</option>
                             </select>
                         </p>
                         <p>
                             <label for="age">Age:</label>
                             <select name="age" id="age">
                                 <option value="none">Select an option</option>
                                 <option value="03">0-3</option>
                                 <option value="47">4-7</option>
                                 <option value="711">7-11</option>
                                 <option value="12">12+</option>
                             </select>
                         </p>
                         <p>
                             <label for="gender">Gender:</label>
                             <select name="gender" id="gender">
                                 <option value="none">Select an option</option>
                                 <option value="male">Male</option>
                                 <option value="female">Female</option>
                             </select>
                         </p>
                         <h3>Does it need to get along with:</h3>
                         <p>
                             <label for="getsalongwdogs">Dogs</label>
                             <input type="checkbox" id="getsalongwdogs" name="getalongwdogs">
                         </p>
                         <p>
                             <label for="getsalongwcats">Cats</label>
                             <input type="checkbox" id="getsalongwcats" name="getalongwcats">
                         </p>
                         <p>
                             <label for="getsalongwchildren">Small children</label>
                             <input type="checkbox" id="getsalongwchildren" name="getalongwchildren">
                         </p>
                         <textarea rows="5" cols="50">Brag about your pet here!</textarea>
                         <p>
                             <label for="firstName">Your first name: </label>
                             <input type="text" value="" name="firstName" id="firstName">
                         </p>
                         <p>
                             <label for="lastName">Your last name: </label>
                             <input type="text" value="" name="lastName" id="lastName">
                         </p>
                         <p>
                             <label for="email">Your email: </label>
                             <input type="email" value="" name="email" id="email">
                         </p>
                         <input type="submit" value="Submit">
                         <input type="reset">
                     </form>';   
                    }
                    else {
                        echo "Login failed. Please try again";
                        session_destroy();
                    }
                ?>
            </div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>