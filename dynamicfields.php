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


<!-- <button onclick="myFunction()">Try it</button>
<form name="form">
<input type="text" name="name"/>
<input type="text" name="name"/>
<input type="text" name="name"/>

</form>

<script>
function myFunction() {
    var btn = document.createElement("INPUT");
    var t = document.createTextNode("form");
    btn.appendChild(t);
    document.body.appendChild(btn);
}
</script> -->
<script type="text/javascript">
function fun()
{
    document.write("<div class='form-group'><lable>m1</label><input type='text' class='form-control' id='m1' name='m1' placeholder='Enter Name' required></br> <input type='text' name='email' /><button name='ADD' onclick='fun()' >ADD</button> ");
}
</script>
<body>
<div class="container">
        <div class="form-group">
			<label for="m1">Name
			<sup style="color:red">*</sup>
			</label>
			    <input type="text" class="form-control" id="m1" name="m1" placeholder="Enter Name" required>
			</div>

			<div class="form-group">
			<label for="email1">Enter Email
			<sup style="color:red">*</sup>
		    </label>
				<input type="email" class="form-control" id="email1" name="email1" placeholder="Enter EMail" required>
			</div>
									
            <div class="form-group">
			<label for="contact1">Contact Number
			<sup style="color:red">*</sup>
			</label>
				<input type="tel" class="form-control" id="contact1" name="contact1" placeholder="Enter Contact Number" required>
			</div>
            <button type="button" name="ADD" onclick="fun()">ADD2</button>

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>
