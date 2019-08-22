<div class="starter-template">
    <h1>Edit Profile</h1>
</div>
<div class="row">
    <div class="col-4 offset-md-4">
        <form method="post" action="index.php?page=profile" enctype="multipart/form-data">
            <div class="form-group">
                <p><?php echo $_SESSION['user']['email'] ?></p>
            </div>
            <div class="form-group">
                <label class="control-label" for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="first_name" placeholder="<?php echo$user['first_name'];?>" />
            </div>
            <div class="form-group">
                <label class="control-label" for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="last_name" placeholder="<?=$_SESSION['user']['last_name']?>" />
            </div>
            
             <div class="form-group">
                <label class="control-label" for="avatar">AVATAR</label>
                <input type="file" class="form-control" id="avatar" name="avatar"/>
            </div>

            <div class="form-group">
                <label class="control-label" for="language">Language</label>
                <select class="form-control" name="language" id="language">
                    <option value="en">English (default)</option>
                    <option value="bg">Български</option>
                </select>
            </div>
            <hr />
            <p>Leave empty to keep the old password</p>
            <div class="form-group">
                <label class="control-label" for="oldPassword">Old password</label>
                <input type="password" class="form-control" id="oldPassword" name="password"  placeholder="my old password" />
            </div>
            <div class="form-group">
                <label class="control-label" for="password">New password</label>
                <input type="password" class="form-control" id="password" name="new_password"  placeholder="my new password" />
            </div>
            <div class="form-group">
                <label class="control-label" for="confirmPassword">Confirm password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirm_new_password"  placeholder="the new password again" />
            </div>
            <hr />
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>
<hr />
<div class="row">
    <div class="col-4 offset-md-4">
        <a href="index.php?page=login">Login</a> | <a href="forgotten-password.html">Forgotten password</a>
    </div>
</div>

