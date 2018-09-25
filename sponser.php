<?php
session_start();
$con=mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,"hackathon");
if(isset($_POST['insert'])){
    if(isset($_POST['sponser_title'])){
        $_SESSION['sponser_title']=$_POST['sponser_title'];
        $sponser_title=$_SESSION['sponser_title'];
            }
            if(isset($_POST['person_name'])){
                $_SESSION['person_name']=$_POST['person_name'];
                $person_name=$_SESSION['person_name'];
                    }
                    if(isset($_POST['sponser_number'])){
                        $_SESSION['sponser_number']=$_POST['sponser_number'];
                        $sponser_number=$_SESSION['sponser_number'];
                            }
                            if(isset($_POST['sponser_code'])){
                                $_SESSION['sponser_code']=$_POST['sponser_code'];
                                $sponser_code=$_SESSION['sponser_code'];
                                    }

                                    if(isset($_POST['sponser_email'])){
                                        $_SESSION['sponser_email']=$_POST['sponser_email'];
                                        $sponser_email=$_SESSION['sponser_email'];
                                            }
$sql="INSERT INTO sponser VALUES('$sponser_title','$sponser_code','$person_name','$sponser_number','$sponser_email')";
$res=mysqli_query($con,$sql);
if($res){

    echo "<script>alert('your details has been submited')</script>";
    echo "<script type='text/javascript'>window.location.href = 'dashboard.php'    </script>";
}
}
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="sponser.php" method="POST" class="reg">
            <!-- <div class="form-group">
                <label for="Fullname">Company Name
                </label>
                <input type="text" class="form-control" name="cname" />
            </div> -->
            <div class="form-group ">
                <label for="Sponser Title">Sponser Title</label>
                <input type="text" class="form-control" name="sponser_title" />
            </div>
            <div class="form-group ">
                <label for="Sponser Code">Sponser Code</label>
                <input type="text" class="form-control" name="sponser_code" />
            </div>
            <div class="form-group ">
                <label for="Person Name">Person Name</label>
                <input type="text" class="form-control" name="person_name" />
            </div>
            <div class="form-group ">
                <label for="Sponser Number">Sponser Number</label>
                <input type="text" class="form-control" name="sponser_number" />
            </div>
            <div class="form-group ">
                <label for="Sponser Email">Sponser Email</label>
                <input type="text" class="form-control" name="sponser_email" />
            </div>
            <button class="btn btn-success" name="insert" >ADD</button>
    </div>
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>   