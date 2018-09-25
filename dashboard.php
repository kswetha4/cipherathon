<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <title>Admin Dashboard</title>
    <!-- strat of javascript -->
    <script type="text/javascript">

        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
        //  history.pushState(null, null, "/");     
    </script>
</head>
<body>
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
<div class="fluid_container">
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h4>
                    <a class="navbar-brand" href="#">Admin Dashboard</a>
                </h4>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <h5>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="sponser.php">ADD Sponser</a>
                        </li>
                        <li>
                            <a href="register.php">View Participent</a>
                        </li>
                        <li>
                            <a href="partners_img.php">Add Partner Image</a>
                        </li>
                        <li>
                            <a href="judge.php">Add Judge/Mentor Image</a>
                        </li>
                        
                        
                        <li>
                            <a href="index.php">LOGOT</a>
                        </li>
                    </ul>
                </h5>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!--End of Navbar-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- PHP -->
                <!-- CODE FOR SELECTING DATA  -->
                <?php
                session_start();
                if(isset($_POST['ed_uname'])){
                    $ed_uname=$_POST['ed_uname'];
                    $_SESSION['ed_uname']=$ed_uname;
            }
            if(isset($_POST['ed_passw'])){
                     $ed_passw=$_POST['ed_passw'];
                     $_SESSION['ed_passw']=$ed_passw;
            }
               if(isset($_POST['btn_login'])){
                    $_SESSION['logged']=true;                                 
                     if($ed_uname=="admin" && $ed_passw=="admin"){
                        //  echo $_SESSION['logged'];
                if (isset($_SESSION['logged']) && $_SESSION['logged'] == true){

            $con=mysqli_connect("localhost","root","") or die("unable to connect");
            mysqli_select_db($con,'hackathon');

            $sql="SELECT * FROM rsvp";
            $res=mysqli_query($con,$sql);
            if($res){
   echo ' <h3 style="padding-top: 30px; text-align: center; text-decoration: underline; font-weight: bolder; color: #2e7af4">Admin Dashboard</h3>';
             
               echo " <table class='table table-striped table-hover table-responsive table-bordered'>
                        <tr class='success'>
                            <th>Team Name</th>
                            <th>Describes</th>
                            <th>Member 1 - Name</th>
                            <th>Member 1 - Email</th>
                            <th>Member 1 - Contact</th>
                            <th>Member 2 - Name</th>
                            <th>Member 2 - Email</th>
                            <th>Member 2 - Contact</th>
                            <th>Member 3 - Name</th>
                            <th>Member 3 - Email</th>
                            <th>Member 3 - Contact</th>
                            <th>Member 4 - Name</th>
                            <th>Member 4 - Email</th>
                            <th>Member 4 - Contact</th>
                            <th>Coupon Code</th>                           
                        </tr>";
            }
                while($row=mysqli_fetch_assoc($res)){

                        echo " <tr class='info'>";
                        echo  "<td>".$row['team_name']."</td>";
                        echo  "<td>".$row['describes']."</td>";
                        echo  "<td>".$row['m1_name']."</td>";
                        echo  "<td>".$row['m1_email']."</td>";
                        echo  "<td>".$row['m1_contact']."</td>";
                        echo  "<td>".$row['m2_name']."</td>";
                        echo  "<td>".$row['m2_email']."</td>";
                        echo  "<td>".$row['m2_contact']."</td>";
                        echo  "<td>".$row['m3_name']."</td>";
                        echo  "<td>".$row['m3_email']."</td>";
                        echo  "<td>".$row['m3_contact']."</td>";
                        echo  "<td>".$row['m4_name']."</td>";
                        echo  "<td>".$row['m4_email']."</td>";
                        echo  "<td>".$row['m4_contact']."</td>";  
                        echo  "<td>".$row['coupon_name']."</td>";                           
                        echo "</tr>";
                }
                echo "</table>";
            }
        }
        else {
            echo '<script type="text/javascript">alert("wrong password")</script>';
             echo "<script type='text/javascript'>window.location.href = 'login.php'</script>";
        }
    }
    else{
        header("location:login.php");
    }
      if(isset($_POST['logout'])){
                header("location:login.php");
                }          
    ?>
            </div>
        </div>
        <div class="row">
       <div class="col-sm-5 col-md-5 col-lg-5"></div>
       <div class="col-sm-4 col-md-4 col-lg-4">
       <form action="dashboard.php" method="POST">
            <button class="btn btn-primary" name="logout" >LogOut</button>
        </form>
       </div>
       <div class="col-sm-3 col-md-3 col-lg-3"></div>
       </div>
    </div>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>