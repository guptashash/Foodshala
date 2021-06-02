<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodshala</title>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Style.css" class="styles">



</head>

<body>
    <header class="header">
        <nav class="navbar">
            <ul class="navigation">
                <li class="item" onclick="location.href='Homepage.php';">Home</li>
                <li class="item"><a href="#ab" >About</a></li>
                <li class="item" onclick="location.href='menucard.html'; ">Menu</li>
                <li class="item"><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>


        <div class="right">

            <button class="bt1" onclick="location.href='Loginpage.php';"> Login</button>
            <button class="bt" onclick="location.href='Basepage.php';">Registration</a></button>

        </div>
    </header>
    <section>
        <h1> Welcome to Foodshala</h1>
        <p>What you want to eat veg ,non-veg,Indian,Italian etc ? <br> All types of food are available here</p>
        <br>

        <button class="btn" onclick="location.href='menucard.php'; ">Order Now</button>
    </section>







    <section id="#ab">
        <div class="box">



            <img src="plate-fork-and-knife_1521905.jpg" id="ui">
            <h2 class="h-primary center">About us</h2>
            <br>




            <p id="ref">Foodshala is an Indian multinational restaurant aggregator and food delivery company since
                2008.<br>
                Foodshala provides information, menus and user-reviews of restaurants as well as food delivery
                options <br>
                from partner restaurants.<br>
                As of 2019, the service is available in 24 countries and in more than 10,000 cities.</p>



        </div>

    </section>



    <section id="contact">

        <div class="lrp">

            <h2>Contact us</h2>
            <br>

            <span class="glyphicon glyphicon-earphone"></span> +91-7043569865
            <br>
            <br>


            <span class="glyphicon glyphicon-envelope"></span> foodshala.gmail.com
        </div>
    </section>



    <footer>

        Copyright <span class="glyphicon glyphicon-copyright-mark"></span> Shash Foods Pvt. Ltd &nbsp All rights
        reserved
    </footer>


    <script src="Script.js"></script>

</body>

</html>