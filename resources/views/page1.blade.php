<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
        <p>Hello {{$user}}. you are logged in. here is the second last turtle of the semester: </p>
        <img src ="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/A_butterfly_feeding_on_the_tears_of_a_turtle_in_Ecuador.jpg/1280px-A_butterfly_feeding_on_the_tears_of_a_turtle_in_Ecuador.jpg" alt="" width="500"/>
    <form action = "/logout" method="POST">
        @csrf
        <button>logout</button>
    </form> 

    @else
        <p>you are not logged in. please return to <a href = "/">THE HOME PAGE</a> to log in</p>
    @endauth
</body>
</html>