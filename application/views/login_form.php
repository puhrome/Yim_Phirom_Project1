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
        <h1>Hello, Friend</h1>

        <h2>Login</h2>


    <?php
    echo form_open('login/validate_credentials');
    echo form_input('username', 'Username');
    echo form_password('password', 'Password');
    echo form_submit('submit', 'Login');
    echo form_checkbox('checkbox', '<h1>Remember Me</h1>');

    echo anchor('login/signup', 'Create Account'); //anchor tag links to a new php page

    ?>

    <?php echo validation_errors(); ?>

    <?php echo form_open('form'); ?>

    <h1>or</h1>
    <h2>Create Account</h2>


    <input type="text" name="username" value="username" size="50" />

    <input type="text" name="password" value="password" size="50" />

    <input type="text" name="passconf" value="retype password" size="50" />

    <input type="text" name="email" value="email" size="50" />

    <?php
    echo anchor('login/signup', 'Signup'); //anchor tag links to a new php page

    ?>

    </form>

<!--<form>-->
<!--    <h5>Username</h5>-->
<!--    <input type="text" name="username" value="" size="50" />-->
<!---->
<!--    <h5>Password</h5>-->
<!--    <input type="password" name="password" value="" size="50" />-->
<!---->
<!--    <h5>Password Confirm</h5>-->
<!--    <input type="password" name="passconf" value="" size="50" />-->
<!---->
<!--    <h5>Email Address</h5>-->
<!--    <input type="text" name="email" value="" size="50" />-->
<!---->
<!--    <div><input type="submit" value="Submit" /></div>-->
<!--</form>-->

    </div>
</div>