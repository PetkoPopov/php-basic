<div class="starter-template">
    <h1>View My Profile</h1>
</div>
<div class="row">
    <div class="col-4 offset-md-4">
        <div>
            <dl>
                <dt>names</dt>
                <dd><?= $user['first_name'].' '.$user['last_name'];?></dd>
                <dt>Email</dt>
                <dd><?= $user['email'];?></dd>
                <dt>Language</dt>
                <dd>English</dd>
                <dt>REGISTRED</dt>
            <dd><?php echo $user['created_on'];?></dd>
            <dt>last modified</dt>
            <dd><?php echo $user['modified_on'];
            
            ?></dd>
            </dl>
        </div>
        <hr />
        <div>
            <a href="views/profile.php" class="btn btn-primary">Edit profile</a>
        </div>
    </div>
</div>
