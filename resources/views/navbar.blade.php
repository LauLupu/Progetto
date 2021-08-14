<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
</head>
<style>
    body {
        margin: 0px;
    }
    .navbar {
        width: 100%;
        height: 100px;
        background-color:#211334;
    }
    .navbar ol {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .navbar li {
        display: inline-block;
        font-size: 40px;
        margin-left: 20px;
    }
</style>
<body>
<nav class="navbar">
    <ol>
    <button type="button" class="btn btn-primary"><li><a href="/">Homepage</a></li></button>
    <button type="button" class="btn btn-primary"><li><a href="/About">About</a></li></button>
    <button type="button" class="btn btn-primary"><li><a href="">Login</a></li></button>
    </ol>
</nav>
</body>
</html>