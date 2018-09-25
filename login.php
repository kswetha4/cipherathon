  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Admin Login</title>
    <SCRIPT type="text/javascript">
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };

    </SCRIPT>
</head>

<body>
    <div class="container center-align" style="margin-top:40px;">
        <div class="row">
            <form class="col s12 l6 offset-l3 m6 offset-m3 card grey lighten-3" action="dashboard.php" method="post">
        
                <div class="card-content">
                    <div class='row'>
                        <div class='col s12'>
                            <h4 class="indigo-text text-accent-2">Admin Login</h4>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='text' name='ed_uname' id='ed_uname' />
                            <label for='ed_uname'>User Name</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <input class='validate' type='password' name='ed_passw' id='ed_passw' />
                            <label for='ed_passw'>Password</label>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <div class='row center-align'>
                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo' >Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
</body>

</html>