<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRM</title>
    <?php include 'assets/assets_css.php';?>
</head>
<body>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <center><strong>LOGIN</strong><br></center>
                    <form action="function/account.php?act=login" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="" placeholder="Username" name="user">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="" placeholder="Password" name="pass">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php include 'assets/assets_js.php';?>

</body>
</html>
