<?php
    include "lib/database.php";
?>
 
<?php
class product
{
 
   private $db;
 
   public function __construct()
   {
       $this ->db = new Database();
   }

    public function show_brand_ajax($danhmuc_id){
        $query = "SELECT * FROM tbl_brand WHERE danhmuc_id = $danhmuc_id ORDER BY brand_id DESC";
        $result = $this -> db ->select($query);
        return $result;
    }
 
    public function insert_product($_post,$_files){
        $product_tieude = $_post['product_tieude'];
        $danhmuc_id = $_post['danhmuc_id'];
        $brand_id = $_post['brand_id'];
        $product_price = $_post['product_price'];
        $product_chitiet = $_post['product_chitiet'];
        $file_name = $_FILES['product_img']['name'];
        $file_temp = $_FILES['product_img']['tmp_name'];
        $div = explode('.',$file_name);
        $file_ext = strtolower(end($div));
        $product_img = substr(md5(time()),0,10).'.'.$file_ext;
        $upload_image = "uploads/".$product_img;
        move_uploaded_file($file_temp,$upload_image);
        $file_names = $_FILES['product_imgs']['name'];
        $file_temps = $_FILES['product_imgs']['tmp_name'];
        $query = "INSERT INTO tbl_product
        (product_tieude,danhmuc_id,brand_id,product_price,product_chitiet,product_img) 
        VALUES (' $product_tieude','$danhmuc_id','$brand_id','$product_price','$product_chitiet','$product_img')";
        $result = $this ->db ->insert($query);
        if($result){
            $query = "SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 0,1";
            $result = $this -> db ->select($query)->fetch_assoc();
            $product_id =$result['product_id'];
                foreach ($file_names as $key => $element){
                    move_uploaded_file($file_temps[$key],"uploads/".$element);
                    $query ="INSERT INTO tbl_sanpham_anh (sanpham_id,sanpham_anh) VALUES (' $product_id','$element')";
                    $result = $this ->db ->insert($query);
                   
                }
        }
        header('Location:productlist.php');
        return $result;   
    }

    public function show_product(){
        $query = "SELECT tbl_product.*,tbl_danhmuc.danhmuc_name,tbl_brand.brand_name
        FROM tbl_product INNER JOIN tbl_danhmuc ON tbl_product.danhmuc_id = tbl_danhmuc.danhmuc_id 
        INNER JOIN tbl_brand ON tbl_product.brand_id = tbl_brand.brand_id 
        ORDER BY tbl_product.product_id DESC";
        $result = $this ->db->select($query);
        return $result;

    }

    public function show_cartegory(){
        $query = "SELECT * FROM tbl_danhmuc ORDER BY danhmuc_id DESC";
        $result = $this -> db ->select($query);
        return $result;
        }
    public function get_product($product_id){
         $product_id= mysqli_real_escape_string($this->db->link,$product_id);
         $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
         $result = $this ->db->select($query);
         return $result;
    }

    //  public function update_update($danhmuc_name,$danhmuc_id) {
    //      $query = "UPDATE tbl_product SET product_name = '$product_name' WHERE product_id = '$product_id'";
    //      $result = $this ->db ->update($query);
    //      header('Location:updatelist.php');
    //      return $result;          
    //  }

        public function delete_product($product_id){
        $query = "DELETE  FROM tbl_product WHERE product_id = '$product_id'";
        $result = $this -> db ->delete($query);
        header('Location:productlist.php');
         return $result;
    }
 
}
 
?>




