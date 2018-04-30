<?php
require_once 'tools/common.php';
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="animate.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <style>

        /* Style inputs with type="text", select elements and textareas */
        input[type=text], select, textarea {
            width: 100%; /* Full width */
            padding: 12px; /* Some padding */
            border: 1px solid #ccc; /* Gray border */
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            margin-top: 6px; /* Add a top margin */
            margin-bottom: 16px; /* Bottom margin */
            resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
        }

        /* Style the submit button with a specific background color etc */
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* When moving the mouse over the submit button, add a darker green color */
        input[type=submit]:hover {
            background-color: #45a049;
        }

        /* Add a background color and some padding around the form */
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

    </style>

</head>
<body >
<?php require 'partials/header.php'; ?>
<div class="container-fluid" style="margin-bottom: 30px">

    <div class="animated rollIn">
        <h1 style="margin-left: 10%;color:white;">Contactez-Nous:</h1>
        <div class="container">
            <form action="">

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name...">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name...">

                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="Algerie">Algerie</option>
                    <option value="Chine">Chine</option>
                    <option value="France">France</option>
                    <option value="France">Allemagne</option>
                    <option value="France">Espagne</option>
                    <option value="France">Suisse</option>
                    <option value="France">Belgique</option>
                    <option value="France">Angleterre</option>
                    <option value="France">USA</option>
                </select>

                <label for="subject">Description your problems </label>
                <textarea id="subject" name="subject" placeholder="Write..." style="height:200px"></textarea>

                <input style="background-color: #3F8EBF;height: 50px;color: white" type="submit" value="Submit">
                <button style="margin-left: 2%;height: 48px;color: white" type="button" class="btn btn-danger"><a style="color: white" href="index.php"> Return </a> </button>


            </form>
        </div>

    </div>

</div>

<?php require 'partials/footer.php'; ?>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
