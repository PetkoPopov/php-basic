</div><div class="starter-template">
    <h1>Register</h1>
</div>
<?php if(!empty($errorMessage)):?>
<div class="alert alert-danger">
<p><?php echo $errorMessage; ?></p>
</div>
<?php endif; ?>



<div class="row">
    <div class="col-4 offset-md-4">
        <form method='POST' action='index.php?page=register'>
            <div class="form-group">
                <label class="control-label" for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="j.doe@example.com" />
            </div>
            <div class="form-group">
                <label class="control-label" for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="first_name" placeholder="John" />
            </div>
            <div class="form-group">
                <label class="control-label" for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Doe" />
            </div>
            <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"  placeholder="hyper-mega-ultra-giga secret pass" />
            </div>
            <div class="form-group">
                <label class="control-label" for="confirmPassword">Confirm password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirm_password"  placeholder="same password again" />
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" id="terms" name="terms" value="yes" type="checkbox" />
                    <label class="form-check-label" for="terms">I accept the Terms and Conditions</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>
<hr />
<div class="row">
    <div class="col-4 offset-md-4">
        <a href="index.php?page=login">Login</a> | <a href="index.php?page=forgotten-password.html">Forgotten password</a>
    </div>
