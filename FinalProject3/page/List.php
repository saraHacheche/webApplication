<?php
require_once('../database_credential.php');
require_once('../footer.php');

$stmt = $mysql->query("Select * from installation ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of installation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>
    
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark" style = "margin-top:15px; margin-bottom:30px">
            <ul class="navbar-nav">
                <li class="nav-item active">
                Home V3.1
                </li>
            </ul>
            <div style="margin-left:100px">
                <ul class="navbar-nav ">        
                    <li class="nav-item">
                    <a class="nav-link" href="List.php">List of installation</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="form.php" >Enter new installation</a>
                    </li>
                    <!--<li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                    </li>-->
                </ul>
            </div>    
        </nav>
        <main role="main">
<div class="container-fluid" style="margin-buttom:30px">
        <div class="row row-margin">
            <div class="col-2">    </div>
            <div class="col-8 ">
<div style="    margin-left: 5%;   margin-right: 5%;">
<table class="table table-striped table-bordered table-hover"  style="width:100%" >
        <thead>
            <tr>
                <th>Software Name </th> <th>Task </th> <th>Installation Date</th> <th>Display</th></tr>
        </thead>
        
   
    <?php 
			foreach ($stmt as $numb ) {
                echo " <tr> <td>".htmlspecialchars($numb["name"])."</td>
                <td style='width:50%; text-align:justify;'> ".htmlspecialchars($numb["description"], ENT_QUOTES)."</td>
                <td> ".htmlspecialchars($numb["date"], ENT_QUOTES)."</td>
                <td> <a href='update.php?id=".htmlspecialchars($numb["id"], ENT_QUOTES)."'>
                <button>Update</button></a></td> 
                </tr>";
			}						
	?>
    
    
    </table>
        </div>
        </div>
            <div class="col-2">    </div>
        </div>
        </div>
    </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<?php

require_once("../footer.php");
load_footer();
?>