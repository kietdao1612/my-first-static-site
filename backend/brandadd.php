<?php
    include "header.php";
    include "leftside.php";
    include "class/brand_class.php";
?>

<?php

    $brand = new brand;
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $danhmuc_id = $_POST['danhmuc_id'];
        $brand_name = $_POST['brand_name'];
        $insert_brand = $brand->insert_brand($danhmuc_id,$brand_name);
    }
?>

    <div class="admin-content-right">
        <div class="category-add-content">
            
            <form action="" method="POST">
                <label for="">Vui lòng điển danh mục <span style="color:red;">*</span></label> <br>
                <select name="danhmuc_id" id="">
                    <option value="">Chọn Danh Mục</option>
                    <?php
                        $show_cartegory = $brand ->show_cartegory();
                        if($show_cartegory){
                            while($result = $show_cartegory -> fetch_assoc()){
                    ?>
                    <option value="<?php echo $result['danhmuc_id'] ?>"><?php echo $result['danhmuc_name'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select> <br>
                <label for="">Vui lòng điển loại sản phẩm<span style="color:red;">*</span></label> <br>
                <input required type="text" name="brand_name"> <br>
                <button type="submit" style="cursor: pointer;padding: 10px;outline: none; border: none; background-color: #3fd0d4; color: #fff;">Thêm</button>
            </form>
        </div>  
    </div>
    </section>
    </section>
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
