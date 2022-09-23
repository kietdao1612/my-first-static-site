<?php
    include "../lib/database.php";
?>
 
<?php
class product_list
{
 
   private $db;
 
   public function __construct()
   {
       $this ->db = new Database();
   }
    public function show_product(){
        $query = "SELECT tbl_product.*,tbl_danhmuc.danhmuc_name,tbl_brand.brand_name
        FROM tbl_product INNER JOIN tbl_danhmuc ON tbl_product.danhmuc_id = tbl_danhmuc.danhmuc_id 
        INNER JOIN tbl_brand ON tbl_product.brand_id = tbl_brand.brand_id 
        ORDER BY tbl_product.product_id DESC";
        $result = $this ->db->select($query);
        return $result;

    }
}
 
?>




