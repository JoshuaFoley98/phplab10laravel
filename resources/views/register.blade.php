<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="border: solid; color: black;">
        <h1>Registration</h1>
        <form action="/registeruser" method="post">
            @csrf
            <input type="email" name="email" id="email" placeholder = "enter email">
            <br />    
            <input type="text" name="name" id="name" placeholder = "enter name">
            <br />
            <input type="password" name="password" id="password" placeholder="enter password">
            <br />
            <button>Submit</button>
        </form>
    </div>
</body>
</html>