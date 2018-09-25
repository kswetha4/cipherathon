<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../images/icon.png" type="image/jpeg" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">



    <title>Dashboard</title>
</head>

<body>
<div class="container">
<div class="row">
<div class="col-sm-4 col-md-4 col-lg-4"></div>
<div class="col-sm-4 col-md-4 col-lg-4">
<?php 
include("configdb.php");
if(isset($_GET['name']) ){
      $team_name=$_GET['name'];
      $sql="SELECT * FROM rsvp WHERE team_name='$team_name'";
      $res=mysqli_query($con,$sql);
      if($res){
          while($row=mysqli_fetch_assoc($res)){
            $m1name=$row['m1_name'];
            $m1contact=$row['m1_contact'];
            $m1email=$row['m1_email'];
            $m2name=$row['m2_name'];
            $m2contact=$row['m2_contact'];
            $m2email=$row['m2_email']; 
            $m3name=$row['m3_name'];
            $m3email=$row['m3_email'];
            $m3contact=$row['m3_contact']; 
            $m4name=$row['m4_name'];
            $m4contact=$row['m4_contact'];
            $m4email=$row['m4_email'];?>
          <form>
            <center><label for='name1'>Team Name</label></center>
            <center><td><?Php echo $team_name;?></td></center></br>
            <label for='Member1'>Member1</label>
            <div class='form-group'>
            <label for='name1'>Name</label>
            <input type='text' class='form-control' id='1' Value='<?php echo $m1name;?>' disabled>
            </div> 
            <div class='form-group'>
            <label for='name1'>Contact</label>
                <input type='text' class='form-control' id='1' Value='<?php echo $m1contact;?>' disabled>
            </div>

            <div class='form-group'>
            <label for='name1'>Email</label>
                <input type='text' class='form-control' id='1' Value='<?php echo $m1email;?>' disabled>
            </div> 
            <hr>
            <?php 
            $i=1;
            if($m2name){
                $i++;
           echo " <label for='Member2'>Member2</label>
            <div class='form-group'>
            <label for='name1'>Name</label>
           <input type='text' class='form-control' id='1' Value='$m2name' disabled>
        

            <div class='form-group'>
            <label for='name1'>Contact</label>
                <input type='text' class='form-control' id='1' Value='$m2contact' disabled>
            </div>  

            <div class='form-group'>
            <label for='name1'>Email</label>
                <input type='text' class='form-control' id='1' Value='$m2email' disabled>
            </div>";}?>
            <hr>
            <?php 
            if($m3name){
                $i++;
           echo " <label for='Member3'>Member3</label>
            <div class='form-group'>
            <label for='name1'>Name</label>
                <input type='text' class='form-control' id='1' Value='$m3name' disabled>
            </div> 
         
            <div class='form-group'>
            <label for='name1'>Contact</label>
               <input type='text' class='form-control' id='1' Value='$m3contact' disabled>
            </div>  

            <div class='form-group'>
            <label for='name1'>Email</label>
                <input type='text' class='form-control' id='1' Value='$m3email' disabled>
            </div> ";}?> 
            <hr>
            <?php 
            if($m4name){
                $i++;
           echo " <label for='Member4'>Member4</label>
            <div class='form-group'>
            <label for='name1'>Name</label>
                <input type='text' class='form-control' id='1' Value='$m4name' disabled>
            </div>

            <div class='form-group'>
            <label for='name1'>Contact</label>
                <input type='text' class='form-control' id='1' Value='$m4contact' disabled>
            </div> 
            <div class='form-group'>
            <label for='name1'>Email</label>
                <input type='text' class='form-control' id='1' Value='$m4email' disabled>
            </div> ";
           ;}
           ?>
                   
            </form>
             <?php

         } 
      }
    //   echo $team_name;
    
}
?> 
</div>
<div class="col-sm-4 col-md-4 col-lg-4"></div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
</body>

</html>

