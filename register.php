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

</head>
<body>
    <div class="container">
    <?php
session_start();
$con=mysqli_connect("localhost","root","") or die("unable to connect");
mysqli_select_db($con,"hackathon");
$select="SELECT * FROM sponser";
$res=mysqli_query($con,$select);
if(mysqli_num_rows($res)>0){
    echo " <table class='table table-striped table-hover table-responsive table-bordered'>
                        <tr class='success'>
                            <th>company name</th>
                            <th>coupon</th>
                            <th>number</th>
                            <th>view details</th>
                        </tr>";
    while($row=mysqli_fetch_assoc($res)){
        echo "<tr>";
        echo "<td>".$row['title']."</td>";
        echo "<td>".$row['sponse_code']."</td>";
        $coupon=$row['sponse_code'];
        $query="SELECT * from rsvp WHERE coupon_name='$coupon'";
        $result=mysqli_query($con,$query);
        $count=mysqli_num_rows($result);
        echo "<td>".$count."</td>";
     echo '<td> <a href="sortcoupon.php?sortcoupon=' . $coupon . '">View Details</a></td>';
     echo"</tr>";
}
echo "</table>";
}

?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>