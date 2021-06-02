<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: Loginpage.php");
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Food Order</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        
        <link rel="stylesheet" href="Style2.css">
    </head>
    <body>
        
        <div class = "food-wrapper center">
            <h1>Foodshala</h1>
            <div class = "foods">
                <!-- single food -->
                <div class = "food">
                    <div class = "food-img">
                        <img src = "logo 5.jpeg" alt = "food image">
                        <span>
                            <i class = "far fa-heart"></i>
                        </span>
                        <h3 class = "food-rate">Rs 250</h3>
                    </div>

                    <div class = "food-content">
                        <h2>Chocolate Burger</h2>
                        <p>Lorem  unde aliquam cupiditate.</p>
                        <div class = "food-info">
                            <div>
                                <i class = "fas fa-fire"></i>
                                <p>150-250 Kcal</p>
                            </div>
                            <span>Chinese</span>
                        </div>

                        <div class = "food-price-calc">
                            <h2 class = "food-total"></h2>
                            <div class = "food-quantity">
                                <div class = "order-dec center">
                                    <i class = "fas fa-minus"></i>
                                </div>
                                <div class = "order-val center">0</div>
                                <div class = "order-inc center">
                                    <i class = "fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "food">
                    <div class = "food-img">
                        <img src = "chilly-potato11.jpg" alt = "food image">
                        <span>
                            <i class = "far fa-heart"></i>
                        </span>
                        <h3 class = "food-rate">Rs 300</h3>
                    </div>

                    <div class = "food-content">
                        <h2>Honey Chilly Potato</h2>
                        <p>unde aliquam cupiditate.</p>
                        <div class = "food-info">
                            <div>
                                <i class = "fas fa-fire"></i>
                                <p>150-200kcal</p>
                            </div>
                            <span>Fast Food</span>
                        </div>

                        <div class = "food-price-calc">
                            <h2 class = "food-total"></h2>
                            <div class = "food-quantity">
                                <div class = "order-dec center">
                                    <i class = "fas fa-minus"></i>
                                </div>
                                <div class = "order-val center">0</div>
                                <div class = "order-inc center">
                                    <i class = "fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                
               
               
                <div class = "food">
                    <div class = "food-img">
                        <img src = "ml3.jpg" alt = "food image">
                        <span>
                            <i class = "far fa-heart"></i>
                        </span>
                        <h3 class = "food-rate">Rs 600</h3>
                    </div>

                    <div class = "food-content">
                        <h2>Paneer Butter Masala</h2>
                        <p>unde aliquam cupiditate.</p>
                        <div class = "food-info">
                            <div>
                                <i class = "fas fa-fire"></i>
                                <p>600-800 Kcal</p>
                            </div>
                            <span>Main Course</span>
                        </div>

                        <div class = "food-price-calc">
                            <h2 class = "food-total"></h2>
                            <div class = "food-quantity">
                                <div class = "order-dec center">
                                    <i class = "fas fa-minus"></i>
                                </div>
                                <div class = "order-val center">0</div>
                                <div class = "order-inc center">
                                    <i class = "fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class = "food">
                    <div class = "food-img">
                        <img src = "pav-bhaji.png" alt = "food image">
                        <span>
                            <i class = "far fa-heart"></i>
                        </span>
                        <h3 class = "food-rate">Rs 250</h3>
                    </div>

                    <div class = "food-content">
                        <h2>Pav bhaji</h2>
                        <p>unde aliquam cupiditate.</p>
                        <div class = "food-info">
                            <div>
                                <i class = "fas fa-fire"></i>
                                <p>200-300kcal</p>
                            </div>
                            <span>Fast Food</span>
                        </div>

                        <div class = "food-price-calc">
                            <h2 class = "food-total"></h2>
                            <div class = "food-quantity">
                                <div class = "order-dec center">
                                    <i class = "fas fa-minus"></i>
                                </div>
                                <div class = "order-val center">0</div>
                                <div class = "order-inc center">
                                    <i class = "fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class = "food">
                    <div class = "food-img">
                        <img src = "download.jpg" alt = "food image">
                        <span>
                            <i class = "far fa-heart"></i>
                        </span>
                        <h3 class = "food-rate">Rs 50</h3>
                    </div>

                    <div class = "food-content">
                        <h2>Veg Patty</h2>
                        <p>unde aliquam cupiditate.</p>
                        <div class = "food-info">
                            <div>
                                <i class = "fas fa-fire"></i>
                                <p>40-50kcal</p>
                            </div>
                            <span>Fast Food</span>
                        </div>

                        <div class = "food-price-calc">
                            <h2 class = "food-total"></h2>
                            <div class = "food-quantity">
                                <div class = "order-dec center">
                                    <i class = "fas fa-minus"></i>
                                </div>
                                <div class = "order-val center">0</div>
                                <div class = "order-inc center">
                                    <i class = "fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
                <div class = "food">
                    <div class = "food-img">
                        <img src = "manchurian.jpg" alt="food image">
                        <span>
                            <i class = "far fa-heart"></i>
                        </span>
                        <h3 class = "food-rate">Rs 350</h3>
                    </div>

                    <div class = "food-content">
                        <h2>Manchurian</h2>
                        <p> consectetur adipisicing elit.</p>
                        <div class = "food-info">
                            <div>
                                <i class = "fas fa-fire"></i>
                                <p>300 - 400 Kcal</p>
                            </div>
                            <span>Fast food</span>
                        </div>

                        <div class = "food-price-calc">
                            <h2 class = "food-total"></h2>
                            <div class = "food-quantity">
                                <div class = "order-dec center">
                                    <i class = "fas fa-minus"></i>
                                </div>
                                <div class = "order-val center">0</div>
                                <div class = "order-inc center">
                                    <i class = "fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        
        
        <script src="Script.js"></script>
    </body>
</html>