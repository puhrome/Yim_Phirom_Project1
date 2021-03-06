
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Arabica Trade Company</title>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" <?php echo base_url('/css/style.css');?>/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Jquery Code--->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="assets/js/jquery/jquery-ui.min.js"></script>
    <script src="assets/js/jquery/jquery.js"  type="javascript"></script>
    <script src="assets/js/script.js"  type="javascript"></script>

    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("p").toggle();
            });
        });
    </script>

</head>
<body>

<div class="container" >
    <nav class="navbar navbar-inverse navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" id="logo"><img src="/assets/images/aco_logo_03.png" class="img-responsive" width="50px" height="50px"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="menu">
                    <li><a href="/index.php/main">Home</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown" id="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="img-responsive" id="img_log"><img src="assets/images/login_icon_03.png" height="30" width="30"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<div class="container input-group" id="login_form">
    <div class="container-fluid">

        <h1>Hello,</h1>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" value="Create Account" id="btn">Create Account</button>
        <div class="collapse" id="collapseExample">
            <div class="well">
                <?php echo validation_errors(); ?>

                <?php echo form_open('/index.php/main/login_validation');

                echo '<h3> Username </h3>';
                echo form_input('username', ''); //name, value
                echo '<h3> Email </h3>';
                echo form_input('email', '');
                echo '<h3> Password </h3>';
                echo form_password('password', '');
                echo form_submit('submit', 'Create'); //name, value
                echo form_close();

                ?>

            </div>
        </div>

    </div>
</div>


<footer>
    <h1>Footer Part</h1>
    <span>&copy 2015 P. Yim | All rights reserved.</span>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/js/bootstrap.min.js"></script>

</body>
</html>
