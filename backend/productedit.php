<?php
    include "header.php";
    include "leftside.php";
    include "class/product_class.php";
?>
<?php
     $product = new product;
     if($_SERVER['REQUEST_METHOD']=== 'POST'){
        // var_dump($_FILES);
        $insert_product = $product -> insert_product($_POST,$_FILES);
        
    }
?>
 <div class="admin-content-right">
            <div class="product-add-content">
                <form action="productadd.php" method="POST" enctype="multipart/form-data">
                    <label for="">Tên sản phẩm<span style="color: red;">*</span></label> <br>
                    <input required type="text" name="product_tieude"> <br>
                    <label for="">Chọn danh mục<span style="color: red;">*</span></label> <br>
                    <select required="required" name="danhmuc_id" id="danhmuc_id">
                        <option value="">--Chọn--</option>  
                        <?php  
                            $show_cartegory =   $product->show_cartegory();
                            if($show_cartegory){while($result = $show_cartegory ->fetch_assoc()){

                        ?>
                        <option value="<?php echo $result['danhmuc_id'] ?>"><?php echo $result['danhmuc_name'] ?></option>    
                        <?php 
                            }
                        }
                        ?>
                    </select>
                    <label for="">Chọn Loại sản phẩm<span style="color: red;">*</span></label> <br>
                    <select required="required" name="brand_id" id="brand_id">
                        <option value="">--Chọn--</option>
                        
                      
                    </select>
                    <label for="">Giá sản phẩm<span style="color: red;">*</span></label> <br>
                    <input required type="text" name="product_price"> <br>  
                    <label for="">Chi tiết<span style="color: red;">*</span></label> <br>
                    <textarea class="ckeditor"  required name="product_chitiet" cols="60" rows="5" id="editor1"></textarea><br>  
                    <label for="">Ảnh đại diện<span style="color: red;">*</span></label> <br>
                    <input required type="file" name="product_img"> <br>   
                    <label for="">Ảnh Sản phẩm<span style="color: red;">*</span></label> <br>
                    <input required type="file" multiple  name="product_imgs[]"> <br>   
                    <button class="admin-btn" name="submit" type="submit">Gửi</button>  
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
    <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                
                CKEDITOR.replace( 'editor1', {
	filebrowserBrowseUrl: 'resources/ckfinder/ckfinder.html',
	filebrowserUploadUrl: 'resources/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    } );
    </script>

    <script>
    $(document).ready(function(){
        $("#danhmuc_id").change(function(){
            // alert($(this).val())
            var x=$(this).val()
            $.get("ajax/productadd_ajax.php",{danhmuc_id:x},function(data){
                $("#brand_id").html(data);
            })
        })
    })
    </script>
    </body>
    </html>
