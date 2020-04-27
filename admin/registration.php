<?php
    if(isset($_POST['registration'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        
        $image = explode('.',$_FILES['image']['name']);
        $image = end($image);
        $image_name = $username.'.'.$image;
        
        $input_error = array();
        
        if(empty($name)){
            $input_error['name'] = "The name field is required";
        }
        if(empty($email)){
            $input_error['email'] = "The email field is required";
        }
        if(empty($username)){
            $input_error['username'] = "The username field is required";
        }
        if(empty($password)){
            $input_error['password'] = "The password field is required";
        }
        if(empty($c_password)){
            $input_error['c_password'] = "The conform password field is required";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration Form</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />


</head>

<body>

    <div class="container">
        <h1>User Registration Form</h1>
        <hr />
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">
                        <label for="name" class="control-label   col-sm-1">Name</label>
                        <div class="col-sm-4">
                            <input class="form-control" id="name" type="text" name="name" placeholder="Enter Your Name." value="<?php if(isset($name)){ echo $name;} ?>" />
                        </div>
                        <label class="error"> <?php if(isset($input_error['name'])){ echo $input_error['name'];} ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label   col-sm-1">Email</label>
                        <div class="col-sm-4">
                            <input class="form-control" id="email" type="email" name="email" placeholder="Enter Your Email." value="<?php if(isset($email)){ echo $email;} ?>" />
                        </div>
                        <label class="error"> <?php if(isset($input_error['email'])){ echo $input_error['email'];} ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="username" class="control-label   col-sm-1">Username</label>
                        <div class="col-sm-4">
                            <input class="form-control" id="username" type="text" name="username" placeholder="Enter Your Username." value="<?php if(isset($username)){ echo $username;} ?>" />
                        </div>
                        <label class="error"> <?php if(isset($input_error['username'])){ echo $input_error['username'];} ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label   col-sm-1">Password</label>
                        <div class="col-sm-4">
                            <input class="form-control" id="password" type="password" name="password" placeholder="Enter Your Password." value="<?php if(isset($password)){ echo $password;} ?>" />
                        </div>
                        <label class="error"> <?php if(isset($input_error['password'])){ echo $input_error['password'];} ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="c_password" class="control-label   col-sm-1">Conform Password</label>
                        <div class="col-sm-4">
                            <input class="form-control" id="c_password" type="password" name="c_password" placeholder="Enter Your Conform Password." value="<?php if(isset($c_password)){ echo $c_password;} ?>" />
                        </div>
                        <label class="error"> <?php if(isset($input_error['c_password'])){ echo $input_error['c_password'];} ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="image" class="control-label   col-sm-1">Image</label>
                        <div class="col-sm-4">
                            <input id="image" type="file" name="image" />
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-1">
                        <input type="submit" value="Registration" name="registration" class="btn btn-primary" />
                    </div>

                </form>
            </div>
        </div>
        <br />
        <br />
        <p>If you have an account? then please <a href="login.php">Login</a></p>
        <hr />
        <footer>
            <p>Copyright &copy; 2019 - <?= date("Y") ?> All Rights Reserved</p>
        </footer>
    </div>

</body>

</html>
