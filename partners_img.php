<?php  
 $con = mysqli_connect("localhost", "root", "", "hackathon");  
 if(isset($_POST["insert"]))  
 {  
     $_SESSION['img_num']=$_POST['img_num'];
     $img_num=$_SESSION['img_num'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
 
      $query = "INSERT INTO partners_image VALUES ('$img_num','$file')";  
      if(mysqli_query($con, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
		   echo "<script type='text/javascript'>window.location.href = 'partners_img.php'</script>";

      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <form method="post" enctype="multipart/form-data"> 
                <div class="form-group">
                    <label>Image Position Number</label> 
                <input type="text" name="img_num" class="form-control"/>
</div>
                <div class="form-group">
                    <label>Insert Image</label> 
                     <input type="file" name="image" id="image" class="form-contorl" />  
                </div>
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
           </div>  
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>


