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
                <a class="navbar-brand" href="#" id="logo"><img src="assets/images/aco_logo_03.png" class="img-responsive" width="50px" height="50px"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="menu">
                    <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Explore</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown" id="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="img-responsive" id="img_log"><img src="assets/images/login_icon_03.png" height="30" width="30"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/index.php/main/login">Sign In</a></li>
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

        <h2>Login</h2>

        <?php echo validation_errors(); ?>

        <?php
        echo form_open('/index.php/main/login_validation'); //controller, function
        echo '<h3> Username </h3>';
        echo form_input('username', '', 'Enter Username'); //name, value
        echo '<h3> Password </h3>';
        echo form_password('password', '', 'required|md5');
        echo form_submit('submit', 'Login'); //name, value
        echo form_close();
        ?>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" value="Create Account" id="btn">Create Account</button>
        <div class="collapse" id="collapseExample">
            <div class="well">
                <?php echo validation_errors(); ?>

                <?php echo form_open('/index.php/main/login_validation');

                echo validation_errors();
                echo '<h3> Username </h3>';
                echo form_input('username', '', 'required'); //name, value
                echo '<h3> Email </h3>';
                echo form_input('email', '', 'required');
                echo '<h3> Password </h3>';
                echo form_password('password', '', 'required|md5');
                echo form_submit('submit', 'Create'); //name, value
                echo form_close();

                ?>

            </div>
        </div>

    </div>
</div>