<?php
    include "header.php";
?>
<section class="delivery">
     <div class="container">
        <div class="delivery-top-wrap">
            <div class="delivery-top">
                <div class="delivery-top-delivery delivery-top-item">
                   <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="delivery-top-adress delivery-top-item">
                   <i class="fas fa-map-marker-alt "></i>
                </div>
                <div class="delivery-top-payment delivery-top-item">
                   <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
         </div>
     </div>
     <div class="container">
         <div class="delivery-content row">
             <div class="delivery-content-left">
                <p>Vui lòng chọn địa chỉ giao hàng</p>
                <div class="delivery-content-left-dangnhap row">
                    <i class="fas fa-sign-in-alt"></i>
                    <p>Đăng nhập (Nếu bạn đã có tài khoản của IVY)</p>
                </div>
                <div class="delivery-content-left-khachle row">
                    <input checked name="loaikhach" type="radio" >
                    <p> <span style="font-weight: bold;">Khách lẻ</span> (Nếu bạn không muốn lưu lại thông tin)</p>
                </div>
                <div class="delivery-content-left-dangky row">
                    <input  name="loaikhach" type="radio" >
                    <p> <span style="font-weight: bold;">Đăng ký</span> (Tạo mới tài khoản với thông tin bên dưới)</p>
                </div>
                <div class="delivery-content-left-input-top row">
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Họ tên <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Điện thoại <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Tỉnh/Tp <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Quận/Huyện <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                </div>
                <div class="delivery-content-left-input-bottom">
                    <label for="">Địa chỉ <span style="color: red;">*</span></label>
                    <input type="text">
                </div>
              <div class="delivery-content-left-button row">
                <a href=""><span>«</span><p>Quay lại giỏ hàng</p></a>
                <button><p style="font-weight: bold;">THANH TOÁN VÀ GIAO HÀNG</p></button>
              </div>
             </div>
             <div class="delivery-content-right">
                <table>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    <tr>
                        <td>Spain</td>
                        
                        <td>1</td>
                        <td><p>1500 <sup>$</sup></p></td>
                    </tr>
                    <tr>
                       <td>Viet Nam</td>
                    
                       <td>1</td>
                       <td><p>1000 <sup>$</sup></p></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;" colspan="2">Tổng</td>
                        <td style="font-weight: bold;"><p>2500 <sup>$</sup></p></td>
                    </tr>
                   <tr>
                       <td style="font-weight: bold;" colspan="2">Tổng tiền hàng</td>
                       <td style="font-weight: bold;"><p>2500 <sup>đ</sup></p></td>
                   </tr>
                </table>
           </div>
         </div>
       
     </div>
 </section>

 <?php
    include "footer.php";
?>