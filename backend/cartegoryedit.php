<?php
    include "header.php";
    include "leftside.php";
    include "class/cartegory_class.php";
?>

<?php
$cartegory = new cartegory;
    if(isset($_GET['danhmuc_id']) || $_GET['danhmuc_id']!=NULL){
        $danhmuc_id = $_GET['danhmuc_id'];
    }
    $get_cartegory = $cartegory -> get_cartegory($danhmuc_id);
    if($get_cartegory){$result = $get_cartegory ->fetch_assoc();}

?>

<?php
    
    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $danhmuc_name = $_POST['danhmuc_name'];
        $update_cartegory = $cartegory->update_cartegory($danhmuc_name,$danhmuc_id);
    }
?>

    <div class="admin-content-right">
        <div class="category-add-content">
            <h2>Sửa Danh Mục</h2>
            <form action="" method="POST">
                <label for="">Vui lòng điển danh mục <span style="color:red;">*</span></label> <br>
                <input required type="text" name="danhmuc_name"
                value =" <?php echo $result['danhmuc_name'] ?>"> <br>
                <button class="admin-btn" type="submit">Sửa</button>
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
