<div class="starter-template">
  
    <h1>Login</h1>
</div>
<div class="row">
    <div class="col-4 offset-md-4">
        <form method="post" action="index.php?page=login">
            <div class="form-group">
                <label class="control-label" for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="j.doe@example.com" />
            </div>
            <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"  placeholder="hyper-mega-ultra-giga secret pass" />
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" id="remember" name="remember" value="yes" type="checkbox" />
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>
<hr />
<div class="row">
    <div class="col-4 offset-md-4">
        <a href="register.html">Register</a> | <a href="forgotten-password.html">Forgotten password</a>
    </div>
</div>