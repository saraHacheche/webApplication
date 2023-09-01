<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark" style = "margin-top:15px; margin-bottom:30px">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="page/list.php">Home V3.1</a>
                </li>
            </ul>
            <div style="margin-left:100px">
                <ul class="navbar-nav ">        
                    <li class="nav-item">
                    <a class="nav-link" href="">Instal application</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="page/form.php" >New installation</a>
                    </li>
                    <!--<li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                    </li>-->
                </ul>
            </div>    
        </nav>
<section>
        <div class="row">
            <div class="col-2">    </div>
            <div class="col-8">
                <div class="row-margin">
                    <h2>Information </h2>
                    <p>
                        Here you will have to perfom all the tests that are need to test the application. 
                        The project documentation will be your guideline regarding the tests that you will
                        have to perform for this web application. You will have to focus on manual testing 
                        and use the different technique learn for black box testing in order to perform your
                        tests. Use the system testing as your test level that means functional and non-functional
                        tests are require( all the system must be test tested , all links and all forms ). 
                        This application have to be tested from the server and a client machine. 
                    </p>
                </div>
            
                <hr>
                <h2> Functionality</h2>
                <ul>
                    <li><a href="page/List.php">Instal application</a> : Will allow you to display all the installation enter in the system</li>
                    <li><a href="page/form.php" >New installatione</a> : Use this page to add information about any new installation that you need to do</li>
                </ul>
            </div>
            <div class="col-2">    </div>
        </div>

    </div>
    
    
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<?php

require_once("footer.php");
load_footer();
?>