<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Cat Care</title>
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
                    <li class="side" id="active"><a href="./catcare.php" class="sideLink">Cat Care</a></li>
                    <li class="side"><a href="./createaccount.php" class="sideLink">Create an account</a></li>
                    <li class="side"><a href="./logingivepet.php" class="sideLink">Have a pet to give away</a></li>
                    <li class="side"><a href="./logout.php" class="sideLink">Log out</a></li>
                    <li class="side"><a href="./contact.php" class="sideLink">Contact Us</a></li>
                </ul>
            </div>
            <div class="sect" id="content">
                <h1>Cat care</h1>
                <p>The following resources can provide information on how to better take care of your cat:</p>
                <ul>
                    <li><a href="https://www.aspca.org/pet-care/cat-care/general-cat-care">ASPCA</a></li>
                    <li><a href="https://www.petsafe.net/learn/cats-101-basic-health-care-tips-to-keep-your-cat-healthy">PetSafe</a></li>
                    <li><a href="https://pethelpful.com/cats/cat-care-101">PetHelpful</a></li>
                    <li><a href="https://unionlakepetservices.com/blog/cat-care-for-beginners-7-steps-to-a-great-start">Union Lake</a></li>
                    <li><a href="https://www.dailypaws.com/cats-kittens/health-care/ways-to-keep-your-cat-healthy">Daily Paws</a></li>
                    <li><a href="https://www.fourpaws.com/pets-101/cat-corner/cat-care-101">Four Paws</a></li>
                </ul>
                <p>The most important part of being a pet parent is being loving and affectionate towards your cat!</p>
                <p>There's nothing worse than being neglectful to your pet.</p>
            </div>
        </main>
        <?php include 'footer.php' ?>
    </body>
</html>