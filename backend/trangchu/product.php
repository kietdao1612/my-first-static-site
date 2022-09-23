<?php
    include "header.php"
?>
<?php
    include "../class/product_list.php"
?>

<?php
    $pd = new product_list;
    $show_product = $pd ->show_product();
?>



<div class="content-section Minh" style="margin-top: 120px;">
                <div class="content-heading-text">
                    <h3 class="section-heading">Choose Your</h3>
                    <h2 class="section-sub-heading">Perfect Holiday</h2>
                </div>
                <div class="section-text">
                    <p class="content-heading-sub-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis sit amet, consectetuer adipiscing elit Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit ame</p>
                </div>
                <div class="content-place  grid wide">
                    <div class="content-place-list row">
                        <div class="content-place-item l-3 m-6 ">
                            <div class="place-item-link pil-1">
                                <img class="place-item-img" src="./asset/img/spain.jpg" alt="">
                                <p class="place-item-text1 pil-1"><a href="product.php" style=" color: #fff;text-decoration: none;">Spain</a></p>
                            </div>
                        </div>
                        <?php
                            if($show_product){$i=0;
                                while($result = $show_product->fetch_assoc()){$i++;
                        ?>
                        <div class="content-place-item l-3 m-6">
                            <div class="place-item-link">
                                <img class="place-item-img" src="../uploads/<?php echo $result['product_img']?>"> 
                                <div class="place-item-list">
                                    <p class="place-item-text"><a href="#" style="text-decoration: none; color: #fff;"><?php echo $result['product_tieude'] ?></a></p>
                                    <div class="place-item-icon">
                                        <div class="place-item-btn">
                                            <i class="fas fa-star-half-alt"></i>
                                            <p>5.0 Good</p>
                                        </div>
                                        <span class="place-item-price"><?php echo $result['product_price'] ?></span>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        }   
                        ?>
                    </div>
                    
                    </div>
                </div>
            </div>

<?php
    include "footer.php"
?>