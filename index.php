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
                    <li class="side" id="active"><a href="./index.php" class="sideLink">Home page</a></li>
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
                <h1>Welcome to PedDopter!</h1>
                <p>The internet's newest and trendiest pet adoption website.</p>
                <p>You can use this website to: </p>
                <ol>
                    <li>Browse available pets</li>
                    <li>Dog/cat care</li>
                    <li>Give away pets for adoption</li>
                </ol>
                <p>Examples of pets you can adopt on PedDopter:</p>
                <div id="petPics">
                    <!-- source url: https://worldofdogz.com/labrador-puppy-training/ -->
                    <img src="./homeDogImage.jpg" alt="labrador" width="400" height="300">
                    <!-- source url: https://www.marthastewart.com/1527224/new-kitten-care-checklist -->
                    <img src="homeCatImage.jpeg" alt="kitty" width="400" height="267">
                    <p>Images taken from: </p>
                    <p><a href="https://worldofdogz.com/labrador-puppy-training/">https://worldofdogz.com/labrador-puppy-training/</a></p>
                    <p><a href="https://www.pexels.com/photo/white-and-grey-kitten-on-brown-and-black-leopard-print-textile-45201/">https://www.pexels.com/photo/white-and-grey-kitten-on-brown-and-black-leopard-print-textile-45201/</a></p>
                </div>
            </div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>