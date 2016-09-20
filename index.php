<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="p1.css">
    <title>Intro Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>


</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-4">
                <h1>PW Generator</h1>
                <!---To Do: Form: number of words, include number, number of numbers, special char, submit----->
            </div>
        </div>
            <div class="row">
            <div class="col-sm-4">
            <!---To Do: Display password, copy--->

            <?php
            require "password.php";
        //    echo $password;
            ?>

            </div>
        </div>


    </div>



</body>

</html>
