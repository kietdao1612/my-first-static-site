<?php
     include "lib/session.php";
     Session::checkSession();
?>
<section class="admin-content row space-between">
        <div class="admin-content-left">
        <div class="header-top-left">
            <a href="index.php"><p>Travel</p></a>
        </div>
            <ul>
                <li><a  href="#"> <img style="width:20px" src="icon/hi.png" alt="">Chào:  <span style="color:blueviolet; font-size:22px"></span><span style="color: red; font-size:20px">Admin</span></a>
                <li><a href="#"><img style="width:20px" src="icon/options.png" alt="">Danh Mục</a>
                    <ul>
                        <li><a href="cartegorylist.php">Danh sách</a></li>
                        <li><a href="cartegoryadd.php">Thêm</a></li>
                    </ul>
                </li>
                <li><a href="#"><img style="width:20px" src="icon/menu.png" alt="">Loại Sản Phẩm</a>
                    <ul>
                        <li><a href="brandlist.php">Danh sách</a></li>
                        <li><a href="brandadd.php">Thêm</a></li>
                    </ul>
                </li>
                <li><a href="#"><img style="width:20px" src="icon/article.png" alt="">Sản phẩm</a>
                    <ul>
                        <li><a href="productlist.php">Danh sách</a></li>
                        <li><a href="productadd.php">Thêm</a></li>
                    </ul>
                </li>
                <li><a href="#"><img style="width:20px" src="icon/picture.png" alt="">Ảnh Sản phẩm</a>
                    <ul>
                        <li><a href="Imglist.php">Danh sách</a></li>
                        <li><a href="anhsanphamadds.php">Thêm</a></li>
                    </ul>
                </li>
                <?php
                     if(isset($_GET['action']) && $_GET['action']=='logout'){
                         Session::destroy();
                     }
                ?>
                <li><a href="?action=logout">Đăng Xuất</a></li>
            </ul>
        </div>