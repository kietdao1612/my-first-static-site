<?php
    // include "../class/trangchu_class.php";
?>

<?php
    // $brand = new brand;
    // $show_brand = $brand ->show_brand();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/grid.css">
    <link rel="shortcut icon" href="./asset/img/logo1.png">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/cart.css">

    <script src="./jv.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Travel</title>
</head>
<body>
    <div class="main">
         <!-- Tới start -->
        <div id="header">
            <div class="header-logo">
                <a class="header-logo-link" href="#">
                    <img class="header-logo-img" src="./asset/img/logo1.png" alt="logo">
                </a>    
            </div>
            <ul class="header-list">
                <li class="header-list-item"><a  href="index.php" class="list-item-text">Home</a>
                </li>
                <li class="header-list-item"><div class="list-item-text">Pages</div>
                    <ul class="header-list-btn">
                        <li class="header-list-item-btn"><div class="list-item-text-btn">About Us</div></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">What We Offer</div></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Our team</a></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Get In Touch</div></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Contact Us</div></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">FAQ page</div></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Coming Son</div></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Error page</div></li>
                    </ul>
                </li>
                <li class="header-list-item"><div class="list-item-text">Destinations</div>
                    <ul class="header-list-btn">
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Destination List</div></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Destination Slider</div></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Destination Item</div></li>
                    </ul>
                </li>
                <li class="header-list-item"><div class="list-item-text">Tours</div>
                    <ul class="header-list-btn">
                        <li class="header-list-item-btn"><a href="product.php" class="list-item-text-btn">Spain</a></li>
                        <li class="header-list-item-btn"><a href="#" class="list-item-text-btn">Bali</a></li>
                        <li class="header-list-item-btn"><a href="#" class="list-item-text-btn">Taiwan</a></li>
        
                    </ul>
                </li>
                <li class="header-list-item"><div class="list-item-text">Blog</div>
                    <ul class="header-list-btn">
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Blog Masonry</div></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Blog Standard</div></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Summer Holidays</div></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Post Types</div></li>
                        
                    </ul>
                </li>
                <li class="header-list-item"><div class="list-item-text">Shop</div>
                    <ul class="header-list-btn">
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Product List</div></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Product Single</div></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Shop Layouts</div></li>
                        <li class="header-list-item-btn"><div class="list-item-text-btn">Shop pages</div></li>
                    </ul>
                </li>
                <li class="header-list-item">
                    <div class="list-item-text">Element</div>                 
                </li>
            </ul>
            <ul class="header-icon">
                <li class="list-icon">
                    <div class="list-icon-link ">
                        <div class="list-icon-icon">
                            <a href="cart.php" style="color:#fff"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="list-icon-btn  header__cart--no-cart"> 
                            <img src="./asset/img/no-cart.png" alt="">                       
                            <p class="header__cart--no-cart-text">no product in the cart.</p>
                        </div>               
                    </div>
                </li>
                <li class="list-icon">
                    <div class="list-icon-link">
                        <label for="slidebar-input1" class="list-icon-icon">
                                <i class="fas fa-bars"></i>
                        </label> 
                        <input type="checkbox" hidden name="" id="slidebar-input1" class="slidebar-input1"> 
                        <label  for="slidebar-input1" class="header-overlay"></label>                    
                        <div class="slidebar">
                            <label for="slidebar-input1" class="slidebar-close">
                                <i class="fas fa-times"></i>
                            </label>
                            <div class="slidebar-img">
                                    <div class="slidebar-logo">
                                        <img src="./asset/img/logo1.png" alt="">
                                    </div>
                                    <div class="slidebar-heading">
                                        <img src="./asset/img/font.png" alt="" >
                                    </div>
                                    <div class="slidebar-map">
                                        <img src="./asset/img/map2.jpg" alt="">
                                    </div>
                            </div>
                            <div class="slidebar-text">
                                    <p class="slidebar-text-btn">Lorem ipsum dolor sit amet, consectetuer adipis cing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis theme natoque</p>
                            </div>  
                            <div class="slidebar-input">
                                <div class="slidebar-input-heading">
                                        <h2>Find Your Destination</h2>
                                </div>
                                <div class="slidebar-input-search">
                                        <input type="text" placeholder="Search..." class="search">
                                        <button><i class="fas fa-search"></i></button>
                                </div>
                                <div class="slidebar-input-heading">
                                        <h2>Follow Me</h2>
                                </div>
                                <div class="slidebar-input-icon">
                                        <i class="fab fa-twitter-square"></i>
                                        <i class="fab fa-pinterest-square"></i>
                                        <i class="fab fa-facebook-square"></i>
                                        <i class="fab fa-instagram-square"></i>
                                </div>
                            </div>                  
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div id="header-tablet">
            <div class="icon-tablet">
                <label for="tablet-menu" class="icon-tablet-item">
                    <i class="fas fa-bars"></i>
                </label>
                <input type="checkbox" hidden id="tablet-menu" name="" class="tablet-menu">
                <div class="tablet-menu-list">
                    <ul class="tablet-menu-list-btn">
                        <li class="tablet-menu-item">Home</li>
                        <li class="tablet-menu-item">
                            <div href="javascript:void(0);" class="icon" onclick="myFunction()">
                                Pages
                            </div>
                            <ul id="tablet-nav-list">
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">About Us</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">What We Offer</div> </li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Our Team</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Get In Touch</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Contact Us</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">FAQ page</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Coming Son</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Error Page</div></li>
                            </ul>
                        </li>
                        <li class="tablet-menu-item">
                            <div href="javascript:void(0);" class="icon" onclick="myFunction()">
                                Destinations
                            </div>
                            <ul id="tablet-nav-list">
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">About Us</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">What We Offer</div> </li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Our Team</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Get In Touch</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Contact Us</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">FAQ page</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Coming Son</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Error Page</div></li>
                            </ul>
                        </li>
                        <li class="tablet-menu-item">
                            <div href="javascript:void(0);" class="icon" onclick="myFunction()">
                                Tour
                            </div>
                            <ul id="tablet-nav-list">
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">About Us</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">What We Offer</div> </li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Our Team</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Get In Touch</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Contact Us</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">FAQ page</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Coming Son</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Error Page</div></li>
                            </ul>
                        </li>
                        <li class="tablet-menu-item">
                            <div href="javascript:void(0);" class="icon" onclick="myFunction()">
                                Blog
                            </div>
                            <ul id="tablet-nav-list">
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">About Us</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">What We Offer</div> </li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Our Team</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Get In Touch</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Contact Us</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">FAQ page</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Coming Son</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Error Page</div></li>
                            </ul>
                        </li>
                        <li class="tablet-menu-item">
                            <div href="javascript:void(0);" class="icon" onclick="myFunction()">
                                Shop
                            </div>
                            <ul id="tablet-nav-list">
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">About Us</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">What We Offer</div> </li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Our Team</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Get In Touch</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Contact Us</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">FAQ page</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Coming Son</div></li>
                                <li class="tab-nav-item"><div class="tablet-nav-item-text">Error Page</div></li>
                            </ul>
                        </li>
                        <li class="tablet-menu-item">Element</li>
                    </ul>
                </div>     
            </div>
            <div class="logo-tablet">
                <img class="logo-tablet-img" src="./asset/img/logo1.png" alt="">
            </div>
            <div class="icon-tablet">
                <div class="icon-tablet-item">
                    <i class="far fa-user"></i>
                </div>
            </div>
        </div>