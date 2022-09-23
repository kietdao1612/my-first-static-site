<?php
include "../lib/database.php";
?>

<?php
class cartegory
{
 
   private $db;
 
   public function __construct()
   {
       $this ->db = new Database();
   }
 
    public function show_cartegory(){
       $query = "SELECT * FROM tbl_danhmuc ORDER BY danhmuc_id DESC";
       $result = $this -> db ->select($query);
       return $result;
    }
    
}


class brand {
    private $db;

    public function __construct()
    {
        $this-> db = new Database();
    }


    public function show_brand(){
        $query = "SELECT tbl_brand.*,tbl_danhmuc.danhmuc_name
        FROM tbl_brand INNER JOIN tbl_danhmuc ON tbl_brand.danhmuc_id = tbl_danhmuc.danhmuc_id
        ORDER BY tbl_brand.brand_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
    
}
 
?>