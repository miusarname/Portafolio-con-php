<?php
session_start();
if($_POST){
    if(($_POST['user'] == 'Admin') && ($_POST['password'] == 'root')){
        $_SESSION['user']="Admin";
        header("location:index.php");
    }else{
        echo "<script> alert('Incorrect username and/or passwordincorrect username and/or password'); </script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
            <br>
            <div class="card">
                <div class="card-header">
                    Log In
                </div>
                <div class="card-body">
                <form action="login.php" method="post">

User: <input placeholder="Username" class="form-control" type="text" name="user" id=""> <br>
Password: <input placeholder="Password" class="form-control" type="password" name="password" id=""> <br>
<br>
<button class="btn btn-success" type="submit">Login to briefcase</button>

</form>
                </div>
                <div class="card-footer text-muted">
                   
                </div>
            </div>


                
            </div>
            <div class="col-md-4">

            </div>


        </div>


    </div>
</body>

</html>