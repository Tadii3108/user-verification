<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">
                <form action="login.php" method="post">
                    <h3 class="text-center">Sign In</h3>

                    <!--<div class="alert alert-danger">
                    <li>Username required</li>
                    </div>-->

                    <div class="form-group">
                        <label for="username">Username or Email</label>
                        <input type="text" name="username" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Sign In</button>
                    </div>

                    <p class="text-center">Not yet a member? <a href="register.php">Sign Up</a></p>

                </form>
            </div>
        </div>
    </div>

</body>
</html>