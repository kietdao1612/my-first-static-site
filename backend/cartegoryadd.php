<?php
    include "header.php";
    include "leftside.php";
    include "class/cartegory_class.php";
?>

<?php

    $cartegory = new cartegory;
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $danhmuc_name = $_POST['danhmuc_name'];
        $insert_cartegory = $cartegory->insert_cartegory($danhmuc_name);
    }
?>

    <div class="admin-content-right">
        <div class="category-add-content">
            <h2>Thêm Danh Mục</h2>
            <form action="" method="POST">
                <label for="">Vui lòng điển danh mục <span style="color:red;">*</span></label> <br>
                <input required type="text" name="danhmuc_name"> <br>
                <button class="admin-btn" type="submit">Thêm</button>
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
