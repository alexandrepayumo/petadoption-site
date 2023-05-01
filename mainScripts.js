function validateAccount(e) {
    let user = document.forms["accountForm"]["user"].value;
    let pass = document.forms["accountForm"]["pass"].value;
    let pattern = /^[a-zA-Z0-9]+$/;
    let validUser = pattern.test(user);

    let numberPattern = /[0-9]/;
    let letterPattern = /[a-zA-Z]/;
    let validPass = pattern.test(pass);
    let isNumber = numberPattern.test(numberPattern);
    let isLetter = letterPattern.test(letterPattern);
    if (validUser == false) {
        alert("Username is not valid");
    }
    if (validPass == false || pass.length < 4 || isNumber == false || isLetter == false) {
        alert("Password is not valid");
    }
}

function validateDogForm() {
    let breed = document.forms["dogForm"]["breed"].value;
    let age = document.forms["dogForm"]["age"].value;
    let gender = document.forms["dogForm"]["gender"].value;
    if (breed == "none") {
        alert("Breed must be filled out");
    }
    if (age == "none") {
        alert("Age must be filled out");
    }
    if (gender == "none") {
        alert("Gender must be filled out");
    }
}

function validateCatForm() {
    let breed = document.forms["catForm"]["breed"].value;
    let age = document.forms["catForm"]["age"].value;
    let gender = document.forms["catForm"]["gender"].value;
    if (breed == "none") {
        alert("Breed must be filled out");
    }
    if (age == "none") {
        alert("Age must be filled out");
    }
    if (gender == "none") {
        alert("Gender must be filled out");
    }
}

function validateGivePet() {
    let animal = document.forms["givePetForm"]["animal"].value;
    let breed = document.forms["givePetForm"]["breed"].value;
    let age = document.forms["givePetForm"]["age"].value;
    let gender = document.forms["givePetForm"]["gender"].value;
    let firstName = document.forms["givePetForm"]["firstName"].value;
    let lastName = document.forms["givePetForm"]["lastName"].value;
    let email = document.forms["givePetForm"]["email"].value;
    if (animal == "none") {
        alert("Animal must be filled out");
    }
    if (breed == "none") {
        alert("Breed must be filled out");
    }
    if (age == "none") {
        alert("Age must be filled out");
    }
    if (gender == "none") {
        alert("Gender must be filled out");
    }
    if (firstName == "") {
        alert("First name must be filled out");
    }
    if (lastName == "") {
        alert("Last name must be filled out");
    }
    if (email == "") {
        alert("Email must be filled out");
    }
}

function setDate() {
    const time = new Date();
    document.getElementById("headerTitle").innerHTML = "PedDopter " + time.getFullYear() + "/" + (time.getMonth() + 1) + "/" + time.getDate() + " " + time.getHours() + ":" + time.getMinutes() + ":" + time.getSeconds();
}

function disclaimer() {
    alert("PedDopter promises that your information will not be sold misused. PedDopter is also protected from any misinformation supplied by the user.");
}

setInterval(setDate, 1000);