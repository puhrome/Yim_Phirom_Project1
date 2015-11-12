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
    <script src="/assets/js/jquery/jquery-ui.min.js"></script>
    <script src="/assets/js/jquery/jquery.js"  type="javascript"></script>
    <script src="/assets/js/script.js"  type="javascript"></script>

    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("p").toggle();
            });
        });
    </script>

</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-collapse" id="myNav">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#" id="logo"><img src="/assets/images/aco_logo_03.png" class="img-responsive" width="50px" height="50px"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#home">About</a></li>
                    <li><a href="#myCarousel">Gallery</a></li>
                    <li><a href="/index.php/main/login">Sign In</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<div class="container-fluid input-group" id="home">

    <div class="container jumbotron img-responsive">
        <h1>Arabica Coffee Trade Company</h1>
        <h4>estd. 2015</h4>

    </div>

    <div class="paragraph container">
        <h3>About</h3>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    </div>

</div>

<div class="container-fluid">
<footer>
    <h1><img src="/assets/images/aco_logo_03.png" width="80px" height="70px">Arabica Trade Co.</h1>
    <span>&copy 2015 P. Yim | All rights reserved.</span>
</footer>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/js/bootstrap.min.js"></script>

</body>
</html>