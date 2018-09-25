<?php 
include("configdb.php");
?>
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
    <!-- Navbar -->
    <nav class="navbar navbar-default" style="background:#008B8B;">
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
                <a class="navbar-brand" href="#" style=" color:#000 !important">Dashboard</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="sponser.php" style=" color:#000 !important">Add Sponser</a>
                    </li>
                    <li>
                        <a href="register.php" style=" color:#000 !important">View Participant</a>
                    </li>
                    <li>
                        <a href="index.php" style=" color:#000 !important">Logout</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- End Of Navbar -->
    <!-- Details Form -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <center>
                    <h2>Details</h2>
                </center>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th style="text-align: center">Team Name</th>
                        <th style="text-align: center">No. Of Memebrs</th>
                        <th style="text-align: center">Details</th>
                        
                    </tr>
                    <?php 
                    $sql="SELECT * FROM rsvp ";
                    $res=mysqli_query($con,$sql);
                    if($res){
                        while($row=mysqli_fetch_assoc($res)){
                         echo '<tr>';
                           echo '<td style="text-align: center">'.$row['team_name'].'</td>';
                        //    echo '<td style="text-align: center">'.$row['number'].'</td>';  
                           $tname=$row['team_name']; 
                            $i=1;
                           $m1name=$row['m1_name'];
                           $m1contact=$row['m1_contact'];
                           $m1email=$row['m1_email'];
                           $m2name=$row['m2_name'];
                           if($m2name){
                               $i++;
                           }
                           $m2contact=$row['m2_contact'];
                           $m2email=$row['m2_email']; 
                           $m3name=$row['m3_name'];
                           if($m3name){
                               $i++;
                           }
                           $m3email=$row['m3_email'];
                           $m3contact=$row['m3_contact']; 
                           $m4name=$row['m4_name'];
                           if($m4name){
                               $i++;
                           }
                           $m4contact=$row['m4_contact'];
                           $m4email=$row['m4_email'];
                            echo '<td>'.$i.'</td>';
                            echo '<td> <a href="view.php?name=' . $tname .'">View Details</a></td>';
                            ?>
                       </tr><?php         
                        }
                    }?>
                </table>
            
            </div>
        </div>
    </div>  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>

