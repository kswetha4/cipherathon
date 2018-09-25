<?php
session_start();
$con=mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,"hackathon");
if(isset($_POST['fname'])){
    $_SESSION['fname']=$_POST['fname'];
    $fname=$_SESSION['fname'];
}

if(isset($_POST['phnumber'])){
    $_SESSION['phnumber']=$_POST['phnumber'];
$phnumber=$_POST['phnumber'];
}
if(isset($_POST['password'])){
    $_SESSION['password']=$_POST['password'];
    $password=$_POST['password'];
}
if(isset($_POST['email'])){
    $_SESSION['email']=$_POST['email'];
    $email=$_POST['email'];
}
if(isset($_POST['cpassword'])){
    $_SESSION['cpassword']=$_POST['cpassword'];
    $cpassword=$_POST['cpassword'];
}
 if(isset($_POST['applycode'])){
                    // echo "applycode";
                    $_SESSION['code']=$_POST['code'];
                    $code=$_SESSION['code'];
                        $sql="SELECT sponse_code FROM sponser WHERE sponse_code='$code'";
                        $res=mysqli_query($con,$sql);
                        if(mysqli_num_rows($res)>0){
                        $tName=$_SESSION['tName'];
                        $team=$_SESSION['team'];
                        $m1=$_SESSION['m1'];
                        $email1= $_SESSION['email1'];
                        $contact1=$_SESSION['contact1'];
                         $m2=$_SESSION['m2'];
                        $email2= $_SESSION['email2'];
                        $contact2=$_SESSION['contact2'];
                        $m3=$_SESSION['m3'];
                        $email3= $_SESSION['email3'];
                        $contact3= $_SESSION['contact3'];
                        $m4=$_SESSION['m4'];
                        $email4=$_SESSION['email4'];
                        $contact4= $_SESSION['contact4'];
                        $code=$_SESSION['code'];
            $sql="INSERT INTO rsvp VALUES('$tName','$team','$m1','$email1','$contact1','$m2','$email2','$contact2','$m3','$email3','$contact3','$m4','$email4','$contact4','$code')";
			$res=mysqli_query($con,$sql);			
				if($res){
					echo "<script>alert('your details has been submited')</script>";
					echo "<script type='text/javascript'>window.location.href='index.php'</script>";
					}
        }
        else {
            echo "<script>alert('Invalid coupon code')</script>";
            echo "<script type='text/javascript'>window.location.href='index.php'</script>";

        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Document</title>
</head>
<body>
 
<div class="container">
<div class="row">
<div class="col-sm-4 col-md-4 col-lg-4">
</div>
<div class="col-sm-4 col-md-4 col-lg-4">
<form action="coupon.php" method="POST" class="coupon">
<div class="form-group">
<label>Enter Code</label>
<input class="form-control" type="text" name="code" />
</div>
<button class="btn btn-success" name="applycode">Submit</button>
</form>
</div>
<div class="col-sm-4 col-md-4 col-lg-4">
</div>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>