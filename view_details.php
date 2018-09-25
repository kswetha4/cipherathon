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
                           echo '<td style="text-align: center">'.$row['number'].'</td>';  
                           $tname=$row['team_name']; 
                           $m1name=$row['m1_name'];
                           $m1contact=$row['m1_contact'];
                           $m1email=$row['m1_email'];
                        
                            echo '<td> <a href="view.php?name=' . $tname .'">View Details</a></td>';
                            ?>
                            <!-- <td><button type="button" name="submit" value=<?php echo $tname;?> 
   class="btn btn-warning" data-toggle="modal" data-target="#view_details-<?php echo $tname;?>">	view</button></td> -->

                        <!-- //  echo '  <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="view_details.php?name='.$tname.'">View -->
                        <!-- //     Details</button></td>'; -->
                       </tr><?php         
                        }
                    }?>
                </table>
            
            </div>
        </div>
    </div>
    <!-- End OF Details Form -->

    <!-- Modal --> 
    <div class="modal fade" id="view_details-<?php echo $tname;?>">
<div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="view_details-" style="text-align: center">Team Name</h4>
                </div>
                <div class="modal-body">';
              
</div>

<!-- <div class="modal fade" id="view_details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> -->
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="text-align: center">Team Name</h4>
                </div>
                <div class="modal-body">';
              
                  
             <form>
                     <label for='Member1'>Member1</label>
                    <div class='form-group'>
                            <label for='name1'>Name</label>
                        <input type='text' class='form-control' id='1' Value='$team_name' disabled>
                     </div>
                    <div class='form-group'>
                        <label for='contact1'>Contact</label>
                         <input type='tel' class='form-control' id='contact1' value='$m1name' disabled>
                       </div>
                        <div class='form-group'>
                               <label for='email1'>Email</label>
                          <input type='email' class='form-control' id='email1' value='$m1email' disabled>
                          </div>
                   </form> 
                   
                
                </div>
                
            </div>
        </div>
    </div>

    <!-- End Of Modal -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>

