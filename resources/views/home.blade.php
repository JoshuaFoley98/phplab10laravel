<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="border: solid; color: black;">
        <h1>Login</h1>
        <form action="/login" method="POST">
            @csrf    
            <input type="text" name="loginname" id="loginname" placeholder = "enter name">
            <br />
            <input type="password" name="loginpassword" id="loginpassword" placeholder="enter password">
            <br />
            <button>Login</button>
        </form>
        <p>Not a member yet? Please <a href="/register"> Sign Up </a> here </p>
    </div>
</body>
</html>