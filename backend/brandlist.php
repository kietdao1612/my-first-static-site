
<?php
    include"header.php";
    include"leftside.php";
    include"class/brand_class.php"
?>

<?php
    $brand = new brand;
    $show_brand = $brand ->show_brand();
?>

<div class="admin-content-right">
        <div class="table-content">
        <table>
                    <tr>
                        <th>Stt</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                    if($show_brand){$i=0;
                        while($result = $show_brand->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['brand_id'] ?></td>
                        <td><?php echo $result['danhmuc_name'] ?></td>
                        <td><?php echo $result['brand_name'] ?></td>
                        <td><a href="brandedit.php?brand_id=<?php echo $result['brand_id'] ?>">Sửa</a>|<a href="branddelete.php?brand_id=<?php echo $result['brand_id'] ?>">Xóa</a></td>
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