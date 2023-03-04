<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <style>
        .loginForm {
            height: 350px;
            width: 500px;
            border: #4d4d4d solid 1px;
            border-radius: 4px;
            box-shadow: 5px 5px 5px #4d4d4d;
            margin-top: 300px;
            margin-left: auto;
            margin-right: auto;
            padding: 20px 40px;
        }

        .loginForm h2 {
            text-align: center;
        }
        .button {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>
<body>
<div class="loginForm">
    <h2>Online exam system</h2>
    <form action="main.php" method="POST">
        <div class="form-group">
            <label for="exampleInputName">username</label>
            <input type="text" class="form-control" id="exampleInputName" name="username" placeholder="please input username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="input your password">
        </div>

        <div class="button">
            <input type="submit" class="btn btn-primary" value="login"/>
        </div>
    </form>
</div>

</body>
</html>