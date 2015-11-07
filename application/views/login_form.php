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

        <h1>Hello</h1>

        <h2>Login</h2>

<!--        --><?php
//        echo form_open('login/validate_credentials');
//        echo form_input('username', 'Username');
//        echo form_password('password', 'Password');
//        ?>


    <div class="checkbox container-fluid">
        <input type="checkbox" value="remember-me"> Remember me
    </div>

<!--        --><?php
//        echo form_submit('submit', 'Login');
//        ?>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" value="Create Account" id="btn">Create Account</button>
        <div class="collapse" id="collapseExample">
            <div class="well">
                <?php echo validation_errors(); ?>

                <?php echo form_open('form'); ?>

                <input type="text" name="username" value="username" size="50" />

                <input type="text" name="password" value="password" size="50" />

                <input type="text" name="passconf" value="retype password" size="50" />

                <input type="text" name="email" value="email" size="50" />

                <input type="button" name="Sign Up" value="sign up" size="50" />

            </div>
        </div>

    </div>
</div>