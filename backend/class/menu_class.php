<?php

    include"../lib/database.php";

?>

<?php

    class menu {
        private $db;

        public function __construct()
        {
            $this-> db = new Database();
        }

        // public function insert_brand($danhmuc_id,$brand_name)
        // {
        //     $query = "INSERT INTO tbl_brand (danhmuc_id,brand_name) VALUES ('$danhmuc_id','$brand_name')";
        //     $result = $this ->db->insert($query);   
        //     header('Location:brandlist.php');        
        //     return $result;
        // }

         public function show_menu(){
             $query = "SELECT * FROM tbl_brand ORDER BY brand_id DESC";
             $result = $this ->db->select($query);
             return $result;
         }

        // public function show_menu(){
        //     $query = "SELECT tbl_brand.*,tbl_danhmuc.danhmuc_name
        //     FROM tbl_brand INNER JOIN tbl_danhmuc ON tbl_brand.danhmuc_id = tbl_danhmuc.danhmuc_id
        //     ORDER BY tbl_brand.brand_id DESC";
        //     $result = $this ->db->select($query);
        //     return $result;
        // }

        // public function get_brand($brand_id){
        //    $query = "SELECT * FROM tbl_brand WHERE brand_id = '$brand_id'";
        //     $result = $this ->db->select($query);
        //     return $result;
        // }

        // public function update_brand($danhmuc_id,$brand_name,$brand_id){
        //    $query = "UPDATE tbl_brand SET brand_name = '$brand_name', danhmuc_id = '$danhmuc_id' WHERE brand_id = '$brand_id'";
        //     $result = $this ->db->update($query);
        //     header('Location:brandlist.php');   
        //    return $result;
        //  }

        //  public function delete_brand($brand_id){
        //      $query = "DELETE FROM tbl_brand  WHERE brand_id = '$brand_id'";
        //      $result = $this ->db->delete($query);
        //      header('Location:brandlist.php');
        //      return $result;
        //  }
    }
?>

