<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Management System</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

    <div class="container">
        <br />
        <a class="btn btn-primary pull-right" href="admin/login.php">Login</a>

        <br />
        <br />

        <h1 class="text-center">Welcome to Student Management System</h1>
        <br />

        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="" method="POST">
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2" class="text-center"><label>Student Information</label></td>
                        </tr>
                        <tr>
                            <td><label for="choose">Choose Class</label></td>
                            <td>
                                <select class="form-control" id="choose" name="choose">
                                    <option value="">Select</option>
                                    <option value="1">1st</option>
                                    <option value="2">2nd</option>
                                    <option value="3">3rd</option>
                                    <option value="4">4th</option>
                                    <option value="5">5th</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="roll">Roll</label></td>
                            <td><input class="form-control" type="text" name="roll" pattern="[0-9]{6}" placeholder="6 digit Roll Number" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><input class="btn btn-default" type="submit" value="Show Info" name="show_info" /></td>
                        </tr>

                    </table>

                </form>

            </div>

        </div>


    </div>
    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>
