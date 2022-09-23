<?php
   include "header.php";
?>
 <!-- -------------------------cart---------------- -->
 <section class="cart">
     <div class="container">
         <div class="cart-top-wrap">
            <div class="cart-top">
                <div class="cart-top-cart cart-top-item">
                   <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="cart-top-adress cart-top-item">
                   <i class="fas fa-map-marker-alt "></i>
                </div>
                <div class="cart-top-payment cart-top-item">
                   <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
         </div>
     </div>
     <div class="container">
         <div class="cart-content row">
             <div class="cart-content-left">
                <table>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>SL</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                    <tr>
                        <td><img src="asset/img/spain.jpg" alt="" ></td>
                        <td><p>spain</p></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td><p>1500 <sup>$</sup></p></td>
                        <td><span>X</span></td>
                    </tr>
                    <tr>
                        <td><img src="asset/img/vietnam.jpg" alt=""></td>
                        <td><p>Viet Nam</p></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td><p>1000 <sup>$</sup></p></td>
                        <td><span>X</span></td>
                    </tr>
                </table>
             </div>
             <div class="cart-content-right">
                 <table>
                     <tr>
                         <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                     </tr>
                     <tr>
                         <td>TỔNG SẢN PHẨM</td>
                         <td>2</td>
                     </tr>
                     <tr>
                         <td>TỔNG TIỀN HÀNG</td>
                         <td><p>2500 <sup>$</sup></p></td>
                     </tr>
                     <tr>
                         <td>TẠM TÍNH</td>
                         <td><p style="color: black; font-weight: bold;">2500 <sup>$</sup></p></td>
                     </tr>
                 </table>
                 <div class="cart-content-right-button">
                     <button>TIẾP TỤC MUA SẮM</button>
                     <button>THANH TOÁN</button>
                 </div>
                 <div class="cart-content-right-dangnhap">
                     <p>TÀI KHOẢN TRAVEL</p> <br>
                     <p>Hãy <a href="">Đăng nhập</a>tài khoản của bạn để tích điểm thành viên</p>
                    
                 </div>
            </div>
         </div>
     </div>
 </section>
 
<?php
    include "footer.php";
?>