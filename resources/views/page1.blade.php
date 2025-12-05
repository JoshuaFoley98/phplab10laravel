<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
        <p>THERE WILL BE STUFF HERE SOON. YOU ARE LOGGED IN.</p>
    <form action = "/logout" method="POST">
        <button>logout</button>
    </form> 

    @else
        <p>you are not logged in. please return to <a href = "/">THE HOME PAGE</a> to log in</p>
    @endauth
</body>
</html>