<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="dab.css" rel="stylesheet" type="text/css">
        <title>dioe</title>
        <script src="dab.js"></script>
    </head>
    <body>
        <section class="jumbotron dab2">
        <h1 id="navheading"><a href="dab.html>RoboticCleaning</a></h1> 
        <div class="login">
            <div class="form mainColor">
                <button class="tablink" onClick="openPage('Sign', this)" id="default">Sign in</button>
                <button class="tablink" onClick="openPage('Regis', this)">Register</button>
                <form class="tabcontent" id="Regis">
                    <input type="text" placeholder="username">
                    <input type="text" placeholder="password">
                    <input type="text" placeholder="email">
                    <button class="dabio">Create</button>
                </form>
                <form class="tabcontent" id="Sign">
                    <input type="text" placeholder="username">
                    <input type="password" placeholder="password">
                    <button class="dabio">Login</button>
                </form>
            </div>
        </div>
        </section>
        <script>
            document.getElementById("default").style.backgroundColor = "rgb(0, 50, 200)";
        </script>
    </body>
</html>