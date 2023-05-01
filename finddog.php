<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Find Dog</title>
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
                    <li class="side" id="active"><a href="./finddog.php" class="sideLink">Find a dog</a></li>
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
                <form name="dogForm" onsubmit=validateDogForm() action="showdogs.php" method="post">
                    <p>
                        <label for="animal">Animal: </label>
                        <select name="animal" id="animal">
                            <option value="dog">Dog</option>
                        </select>
                    </p>
                    <p>
                        <label for="breed">Breed: </label>
                        <select name="breed" id="breed">
                            <option value="none">Select an option</option>
                            <option value="labrador">Labrador</option>
                            <option value="chihuahua">Chihuahua</option>
                            <option value="bulldog">Bulldog</option>
                            <option value="rottweiler">Rottweiler</option>
                            <option value="breednomatter">Doesn't matter</option>
                        </select>
                    </p>
                    <p>
                        <label for="age">Preferred age:</label>
                        <select name="age" id="age">
                            <option value="none">Select an option</option>
                            <option value="03">0-3</option>
                            <option value="47">4-7</option>
                            <option value="711">7-11</option>
                            <option value="12">12+</option>
                            <option value="agenomatter">Doesn't matter</option>
                        </select>
                    </p>
                    <p>
                        <label for="gender">Preferred gender:</label>
                        <select name="gender" id="gender">
                            <option value="none">Select an option</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="gendernomatter">Doesn't matter</option>
                        </select>
                    </p>
                    <h3>Does it need to get along with:</h3>
                    <p>
                        <label for="getsalongwdogs">Dogs</label>
                        <input type="checkbox" id="getsalongwdogs" name="getalongwdogs" value="getsalongwdogs">
                    </p>
                    <p>
                        <label for="getsalongwcats">Cats</label>
                        <input type="checkbox" id="getsalongwcats" name="getalongwcats" value="getsalongwcats">
                    </p>
                    <p>
                        <label for="getsalongwchildren">Children</label>
                        <input type="checkbox" id="getsalongwchildren" name="getalongwchildren" value="getsalongwchildren">
                    </p>
                    <input type="submit" value="Submit">
                    <input type="reset">
                </form>

            </div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>