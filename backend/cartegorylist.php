
<?php
    include"header.php";
    include"leftside.php";
    include"class/cartegory_class.php"
?>

<?php
    $cartegory = new cartegory;
    $show_cartegory = $cartegory ->show_cartegory();
?>

<div class="admin-content-right">
        <div class="table-content">
                <table>
                    <tr>
                        <th>Stt</th>
                        <th>ID</th>
                        <th>Danh Mục</th>
                        <th>Tùy biến</th>
                    </tr>
                    <?php
                    if($show_cartegory){$i=0;
                        while($result = $show_cartegory->fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['danhmuc_id'] ?></td>
                        <td><?php echo $result['danhmuc_name'] ?></td>
                        <td><a href="cartegoryedit.php?danhmuc_id=<?php echo $result['danhmuc_id'] ?>">Sửa</a>|<a href="cartegorydelete.php?danhmuc_id=<?php echo $result['danhmuc_id'] ?>">Xóa</a></td>
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