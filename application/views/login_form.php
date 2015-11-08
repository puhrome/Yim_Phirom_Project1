<?php
/**
 * Created by PhpStorm.
 * User: puhrome
 * Date: 11/4/15
 * Time: 10:50 AM
 */
?>
<div class="container input-group" id="login_form">
    <div class="container-fluid">

        <h1>Hello,</h1>

        <h2>Login</h2>

        <?php echo validation_errors(); ?>

        <?php
        echo form_open('membership/login_validation'); //controller, function
        echo '<h3> Username </h3>';
        echo form_input('username', ''); //name, value
        echo '<h3> Password </h3>';
        echo form_password('password', '', 'required|md5');
        echo form_submit('submit', 'Login'); //name, value
        echo form_close();
        ?>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" value="Create Account" id="btn">Create Account</button>
        <div class="collapse" id="collapseExample">
            <div class="well">
                <?php echo validation_errors(); ?>

                <?php echo form_open('membership/login_validation');

                echo validation_errors();
                echo '<h3> Username </h3>';
                echo form_input('username', '', 'required'); //name, value
                echo '<h3> Email </h3>';
                echo form_input('email', '', 'required');
                echo '<h3> Password </h3>';
                echo form_password('password', '', 'required|md5');
                echo form_submit('submit', 'Login'); //name, value
                echo form_close();

                ?>

            </div>
        </div>

    </div>
</div>