<?php
require_once('../database_credential.php');

	$sql = "Select * from installation WHERE (id = :id)";

	$insert_array = array('id'=> $_GET['id']);
	
	$stmt = $mysql->prepare($sql);
	
	$stmt->execute($insert_array);
	
	$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update installation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style1.css">
    <script>
        function validateForm() {
            var bool = true;
            var x = document.forms["Form"]["date"].value;
            var y = document.forms["Form"]["description"].value;
            
            var x = new Date(x);
            var date = new Date(); 
            if (x < date ) {
                document.getElementById("errordate").hidden=false;
                bool = false;
                
            }
            if (y.length > 250 ) {
                document.getElementById("errordes").hidden=false;
                bool = false;
                
            }
            
            if (!bool) {
                return false;
            }
            
        }
    </script>
   
</head>
<body>
    
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark" style = "margin-top:15px; margin-bottom:30px">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="../">Home V3.1</a>
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
        <div class="row">
            <div class="col-2">    </div>
            <div class="col-8">
<h3>Application</h3>

  <form name="Form" action="../processpage/modify.php" onsubmit="return validateForm()" method="post">


    <div class="form-group">
        <label for="name">Software Name<b style="color:red">*</b> </label>
        <input class="form-control"  type="text" name="name" id="name" value="<?php echo htmlspecialchars($result[0]['name'], ENT_QUOTES);?>" required>
    </div>
    <div class="alert alert-danger" role="alert" id="errordes" hidden>
        <span>No more than 250 characters in the field description</span>
    </div>
    <div class="form-group">
        <label for="description">Task</label>
        <textarea class="form-control" name="description" id="description" cols="5" rows="5" onkeydown="fr()" ><?php echo htmlspecialchars($result[0]['description'], ENT_QUOTES);?></textarea>
        <span id='desc'></span>
    </div>
    <br>
    <h3>Installation</h3>
    <div class="alert alert-danger" role="alert" id="errordate" hidden>
        <span>The date can not be a past date</span>
    </div>
    <div class="form-group">
    <label for="date"> Date install<b style="color:red">*</b>  </label>
    <input class="form-control" type="date" name="date" id="date" value="<?php echo htmlspecialchars($result[0]['date'], ENT_QUOTES);?>" required>
    
    </div>
    <div class="form-group">
    <label for="enviroment"> Operating system <b style="color:red">*</b>  </label>
    <select class="form-control" name="enviroment" id="enviroment" required>
        <option value=""> Choose an enviroment  </option>
        <option value="Windows"> Windows </option>
        <option value="Unix"> Unix </option>
        <option value="Linux"> Linux </option>
        <option value="Windows Server">Windows Server</option>
        <option value="Linux Server"> Linux Server</option>
    </select>

    </div>
    <hr>
    <h3>Flow</h3>
    <div class="custom-control custom-radio form-group">
  <input type="radio" id="customRadio1" name="flow" class="custom-control-input" value="Start"  <?php if (htmlspecialchars($result[0]['flow'], ENT_QUOTES)=="Start") echo "checked";?>>
  <label class="custom-control-label" for="customRadio1">Started</label>
</div>
<div class="custom-control custom-radio form-group">
  <input type="radio" id="customRadio2" name="flow" class="custom-control-input" value="In Progress"  <?php if (htmlspecialchars($result[0]['flow'], ENT_QUOTES)=="In Progress") echo "checked";?>>
  <label class="custom-control-label" for="customRadio2">Progression</label>
</div>
<div class="custom-control custom-radio form-group">
  <input type="radio" id="customRadio1" name="flow" class="custom-control-input" value="Finish" <?php if (htmlspecialchars($result[0]['flow'], ENT_QUOTES)=="Finish") echo "checked";?>>
  <label class="custom-control-label" for="customRadio3">Finished</label>
</div>
    <div hidden> <input type="hidden" name="id" id='id' value='<?php echo htmlspecialchars($result[0]['id'], ENT_QUOTES);?>'></div>
    <div class="form-group"><input type="submit" class="btn btn-primary" value="Submit"></div>

    </form>

    </div>
    </div>
                <div class="col-4">    </div>
            </div>
            </div>
        </div>
        </main>
          
        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script>
        document.getElementById('enviroment').value ="<?php echo htmlspecialchars($result[0]['enviroment'], ENT_QUOTES);	?>"
    function fr() {    
        var description = document.getElementById("description").value;
        calcul = description.length;
         
            document.getElementById("desc").innerHTML= "You have use "+ calcul + "/250 characters ";
      
    }
    </script>
<?php

require_once("../footer.php");
load_footer();
?>