<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Browse Pets</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <script src="mainScripts.js"></script>
    </head>
    <body id="browseBody">
    <?php include 'header.php' ?>

        <main>
            <div class="sect" id="sidebar">
                <ul id="sideList">
                    <li class="side"><a href="./index.php" class="sideLink">Home page</a></li>
                    <li class="side" id="active"><a href="./browse.php" class="sideLink">Browse Available Pets</a></li>
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
                <div class="petToBrowse">
                    <div class="browseLeft">
                        <!--https://www.britannica.com/animal/Labrador-retriever-->
                        <img src="browsePet1.webp" alt="browse pet 1" width="100">
                        <p>Image taken from https://www.britannica.com/animal/Labrador-retriever</p>
                    </div>
                    <div class="browseRight">
                        <p>Animal: Dog</p>
                        <p>Breed: Labrador</p>
                        <p>Age: 8</p>
                        <p>Gender: Female</p>
                        <button>Interested</button>
                    </div>
                </div>
                <div class="petToBrowse">
                    <div class="browseLeft">
                        <!--https://www.dailypaws.com/cats-kittens/cat-breeds/siamese-->
                        <img src="browsePet2.jpg" alt="browse pet 1" width="100">
                        <p>Image taken from https://www.dailypaws.com/cats-kittens/cat-breeds/siamese</p>
                    </div>
                    <div class="browseRight">
                        <p>Animal: Cat</p>
                        <p>Breed: Siamese</p>
                        <p>Age: 1</p>
                        <p>Gender: Female</p>
                        <button>Interested</button>
                    </div>
                </div>
                <div class="petToBrowse">
                    <div class="browseLeft">
                        <!--https://www.britannica.com/animal/Rottweiler-->
                        <img src="browsePet3.webp" alt="browse pet 3" width="100">
                        <p>Image taken from https://www.britannica.com/animal/Rottweiler</p>
                    </div>
                    <div class="browseRight">
                        <p>Animal: Dog</p>
                        <p>Breed: Rottweiler</p>
                        <p>Age: 4</p>
                        <p>Gender: Male</p>
                        <button>Interested</button>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>