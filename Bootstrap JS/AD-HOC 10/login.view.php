<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>

<?php
session_start();
if(isset($_SESSION["logged"])){
    header('Location: index.php');
}
?>
<br/>
<div class="container">
    <div class="row justify-content-center">
        <form method="post" action="html/login.php" class="col-md-4 col-10 border rounded p-4">
            <div class="form-group">
                <label id="userLabel" for="usernameInput">Username</label>
                <input type="text" name="user" id="user" class="form-control" required="required" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label id="pwLabel" for="passwordInput">Password</label>
                <input type="password" name="pass" id="pass" class="form-control"  placeholder="Password">
            </div>
            <input type="submit" class="btn btn-primary" value="Submit" id="submit">
        </form>
    </div>
</div>

<script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.1.3/dist/bootstrap-validate.js"></script>
<script>
    bootstrapValidate('#user','min:4:Too short.|required:It is a required input!');
    bootstrapValidate('#pass','min:8:Too short.|' +
        '                      required:It is a required input!|' +
        '                      regex:^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\\$%\\^&\\*]):Invalid password!');
</script>

<script src="js/languageSetter.js.php"></script>
<script src="js/login.js"></script>
<?php require('partials/footer.php'); ?>

