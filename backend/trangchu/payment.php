<?php
    include "header.php";
?>
<section class="payment">
    <div class="container">
        <div class="payment-top-wrap">
            <div class="payment-top">
                <div class="payment-top-delivery payment-top-item">
                   <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="payment-top-adress payment-top-item">
                   <i class="fas fa-map-marker-alt "></i>
                </div>
                <div class="payment-top-payment payment-top-item">
                   <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
         </div>
    </div>
    <div class="container">
        <div class="payment-content row">
            <div class="payment-content-left">
                <div class="payment-content-left-method-delivery">
                    <p style="font-weight: bold;">Phương thức giao hàng</p>
                    <div class="payment-content-left-method-delivery-item">
                        <input checked type="radio">
                        <label for="">Giao hàng chuyển phát nhanh</label>
                    </div>
                </div>
                <div class="payment-content-left-method-payment">
                    <p style="font-weight: bold;">Phương thức thanh toán</p>
                    <p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">Thanh toán bằng thẻ tín dụng(OnePay)</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img">
                        <img src="image/visa.png" alt="">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input checked name="method-payment" type="radio">
                        <label for=""> Thanh toán bằng thẻ ATM(OnePay)</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img">
                        <img src="image/vcb.png" alt="">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">  Thanh toán Momo</label>
                    </div>
                    <div class="payment-content-left-method-payment-item-img">
                        <img src="image/momo.png" alt="">
                    </div>
                    <div class="payment-content-left-method-payment-item">
                        <input name="method-payment" type="radio">
                        <label for="">  Thu tiền tận nơi</label>
                    </div>
                </div>

            </div>
        </div>
        <div class="payment-content-right-payment">
            <button>TIẾP TỤC THANH TOÁN</button>
        </div>
    </div>
</section>

<?php
    include "footer.php";
?>