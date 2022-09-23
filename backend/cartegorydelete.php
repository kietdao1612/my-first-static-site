<?php
    include"class/cartegory_class.php";
    $cartegory = new cartegory;
    if(!isset($_GET['danhmuc_id']) || $_GET['danhmuc_id']==NULL) {
        echo "<script>window.location = 'cartegorylist.php'</script>";
    }else{
        $danhmuc_id = $_GET['danhmuc_id'];
    }
    $delete_cartegory = $cartegory -> delete_cartegory($danhmuc_id);
    
?>
