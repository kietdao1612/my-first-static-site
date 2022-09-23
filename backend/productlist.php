
<?php
    include "header.php";
    include "leftside.php";
    include "class/product_class.php";
?>

<?php
    $pd = new product;
    $show_product = $pd ->show_product();
?>

<div class="admin-content-right">
        <div class="table-content">
        <table>
                    <tr>
                        <th>Stt</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th>Sản Phẩm</th>
                        <th>Ảnh đại diện</th>
                        <th>Giá</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                    if($show_product){$i=0;
                        while($result = $show_product->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['product_id'] ?></td>
                        <td><?php echo $result['danhmuc_name'] ?></td>
                        <td><?php echo $result['brand_name'] ?></td>
                        <td><?php echo $result['product_tieude'] ?></td>
                        <td><img src="uploads/<?php echo $result['product_img']?>" style="width:100px"></td>
                        <td><?php echo $result['product_price'] ?></td>
                        <td><a href="productedit.php?product_id=<?php echo $result['product_id'] ?>">Sửa</a>|<a href="productdelete.php?product_id=<?php echo $result['product_id'] ?>">Xóa</a></td>
                    </tr>
                    <?php    
                    }
                }
                    ?>
                </table>
        </div>       
    </div>
</section>
<section>
</section>
<script>
    const meNuleft = document.querySelectorAll(".admin-content-left > ul > li")
    meNuleft.forEach(function(menuitem,index){
    menuitem.addEventListener("click",function(){
    menuitem.classList.toggle("active")    
    })
})
     
</script>
</body>
</html>                       